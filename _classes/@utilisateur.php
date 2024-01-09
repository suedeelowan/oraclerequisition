<?php

class utilisateur
{
    public $ID;
    public $iduser;
    public $civilite_user;
    public $nom_user;
    public $prenom_user;
    public $login_user;
    public $password_user;
    public $etat_user;
    public $photo_user;
    public $cnx_pawd_user;
    public $dateajout_user;
    public $admin_user;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelUsers = $db->fetch('SELECT * FROM utilisateur WHERE ID = ?', [$id], false);
            $datareqSelUsers = $reqSelUsers;

                $this->ID = $id;
                $this->iduser= $id['IDUSER'];
                $this->civilite_user= $datareqSelUsers['civilite_user'];
                $this->nom_user= $datareqSelUsers['nom_user'];
                $this->prenom_user= $datareqSelUsers['prenom_user'];
                $this->login_user= $datareqSelUsers['login_user'];
                $this->password_user= $datareqSelUsers['password_user'];
                $this->etat_user= $datareqSelUsers['etat_user'];
                $this->photo_user= $datareqSelUsers['photo_user'];
                $this->cnx_pawd_user= $datareqSelUsers['cnx_pawd_user'];
                $this->dateajout_user= $datareqSelUsers['dateajout_user'];
                $this->admin_user= $datareqSelUsers['admin_user'];


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
                $curentUser = $db->fetch('SELECT * FROM utilisateur WHERE  login_user= ? AND password_user = ?', 
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