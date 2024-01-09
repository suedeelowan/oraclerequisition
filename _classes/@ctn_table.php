<?php

class CTN_TABLE
{
    public $ID;
    public $NUM_TT;
    public $DATE_TT;
    public $NUM_CTN;
    public $NUM_PLOMB;
    public $TYPE_CTN;
   

    function __construct($ID) {

            global $DB;

            $ID = str_secur($ID);

            $REQSELUSERS = $DB->FETCH('SELECT * FROM CTN_TABLE WHERE ID = ?', [$ID], FALSE);
            $datareqSelUsers = $REQSELUSERS;

                $this->ID = $ID;
                $this->NUM_TT= $ID['NUM_TT'];
                $this->DATE_TT= $datareqSelUsers['DATE_TT'];
                $this->NUM_CTN= $datareqSelUsers['NUM_CTN'];
                $this->NUM_PLOMB= $datareqSelUsers['NUM_PLOMB'];
                $this->TYPE_CTN= $datareqSelUsers['TYPE_CTN'];
                // $this->PASSWORD_USER= $datareqSelUsers['PASSWORD_USER'];
                // $this->ETAT_USER= $datareqSelUsers['ETAT_USER'];
                // $this->PHOTO_USER= $datareqSelUsers['PHOTO_USER'];
                // $this->CNX_PAWD_USER= $datareqSelUsers['CNX_PAWD_USER'];
                // $this->DATEAJOUT_USER= $datareqSelUsers['DATEAJOUT_USER'];
                // $this->ADMIN_USER= $datareqSelUsers['ADMIN_USER'];


    }



    // Methode de connexion
    static function pdf_conteneur($tc){

        global $conn;
       

                 $laconnect = oci_connect( 'BDREQUISITION', 'DARRV2023' ,  'localhost/xe');
                // Préparation et exécution de la requête
                $sql = "SELECT *  FROM BDREQUISITION.CTN_TABLE WHERE  NUM_TT='$tc' ";
               //echo $sql; exit();
                $curentUser = oci_parse($laconnect, $sql);
                oci_execute($curentUser);
                $curentUser = oci_fetch_assoc($curentUser);
             //  echo  '@'.$curentUser['NUM_CTN'].'@'; exit();
//                 oci_free_statement($curentUser);
// oci_close($laconnect);
            
                    return $curentUser;
                    // oci_free_statement($stid);
                    // oci_close($conn);

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