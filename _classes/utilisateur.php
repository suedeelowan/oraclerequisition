<?php

class utilisateur
{
    public $ID;
    public $IDUSER;
    public $CIVILITE_USER;
    public $NOM_USER;
    public $PRENOM_USER;
    public $LOGIN_USER;
    public $PASSWORD_USER;
    public $ETAT_USER;
    public $PHOTO_USER;
    public $CNX_PAWD_USER;
    public $DATEAJOUT_USER;
    public $ADMIN_USER;

    function __construct($ID) {

            global $DB;

            $ID = str_secur($ID);

            $REQSELUSERS = $DB->FETCH('SELECT * FROM utilisateur WHERE ID = ?', [$ID], FALSE);
            $datareqSelUsers = $REQSELUSERS;

                $this->ID = $ID;
                $this->IDUSER= $ID['IDUSER'];
                $this->CIVILITE_USER= $datareqSelUsers['CIVILITE_USER'];
                $this->NOM_USER= $datareqSelUsers['NOM_USER'];
                $this->PRENOM_USER= $datareqSelUsers['PRENOM_USER'];
                $this->LOGIN_USER= $datareqSelUsers['LOGIN_USER'];
                $this->PASSWORD_USER= $datareqSelUsers['PASSWORD_USER'];
                $this->ETAT_USER= $datareqSelUsers['ETAT_USER'];
                $this->PHOTO_USER= $datareqSelUsers['PHOTO_USER'];
                $this->CNX_PAWD_USER= $datareqSelUsers['CNX_PAWD_USER'];
                $this->DATEAJOUT_USER= $datareqSelUsers['DATEAJOUT_USER'];
                $this->ADMIN_USER= $datareqSelUsers['ADMIN_USER'];


    }



    // Methode de connexion
    static function login($usersname,$password){

        global $db;
        $usersname = str_secur($usersname);
        $password  = str_secur($password);

        if(isset($usersname) && isset($password))
        {
            if(!empty($password) && !empty($password))
            {

                $password = sha1($password);
                $curentUser = $db->fetch('SELECT * FROM utilisateur WHERE  LOGIN_USER= ? AND PASSWORD_USER = ?', 
                    [$usersname, $password], false);

                    return $curentUser;
            }
        }

    }
    // fin Methode de connexion

    //Liste de tous les users
    static function getAllutilisateur() {

        global $db;

        $requtilisateur = $db->fetch('SELECT * FROM utilisateur', [], true);
        return $requtilisateur;

    }
    //fin de tous les users

    //Insertion de users
    static function insert_art($iduser, $civilite, $nom, $prenom, $login, $password, $etat, $dateuser) {

        global $db;

        $requtilisateur = $db->fetch('insert into utilisateur (iduser,civilite_user,nom_user,prenom_user,login_user,password_user,etat_user,dateajout_user) values ( ?, ?, ?, ?, ?, ?, ?, ?)', [$iduser, $civilite, $nom, $prenom, $login, $password, $etat, $dateuser], true);
        return $requtilisateur;

    }
    //Modifier passwd
    static function update_pwd_art($pawd_actu) {

        global $db;

        $requtilisateur = $db->fetch('update utilisateur set password_user=?', [$pawd_actu], true);
        return $requtilisateur;
        redirect('login');
    }
    


    //liste des articles a valider soumis par agent
    static function getverifagent($agent) {
  
        global $db;
        
        $reqLvalU = $db->fetch('select * from utilisateur where iduser=?  ', [$agent], true);
          //debug_zval_dump ($reqLvalU);
        return $reqLvalU;

     } 

     
    //Supprimer un utilisateur de la bd
    static function deleteOneutilisateur($id)
    {
        global $db;

        $id = str_secur($id);

        $requtilisateur = $db->fetch('
            DELETE 
            FROM users  
            WHERE id = ?
        ',
            [$id], false);
        $data = $requtilisateur;
        return $data;
    }


    //Mettre a jour un utilisateur
    static function updateutilisateur($id, $usersname, $password, $email)
    {
        global $db;

        $id = str_secur($id);
        $usersname = str_secur($usersname);
        $password = str_secur($password);
        $email = str_secur($email);

        $curentUser = new utilisateur($id);

        if (($curentUser->username != null) && ($curentUser->password != null) )
        {
            $password = sha1($password);
            $reqProduct = $db->fetch('
            UPDATE  utilisateur u
            SET login = ?, password = ? , email = ?  
            WHERE u.id = ?
        ',[$usersname, $password, $id], false);

            $data = $reqProduct;
            echo 'mis a jour ok';
            return $data;

        }else
        {
            echo 'utilisateur inexsistant';
        }

    }

}