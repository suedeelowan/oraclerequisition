<?php

class ctn_table
{
    public $ID;
    public $NUM_TT;
    public $DATE_TT;
    public $NUM_CTN;
    public $NUM_PLOMB;
    public $TYPE_CTN;
   

    function __construct($ID) {

            global $db;

            $ID = str_secur($ID);

            $REQSELUSERS = $db->FETCH('SELECT * FROM ctn_table WHERE ID = ?', [$ID], FALSE);
            $datareqSelUsers = $REQSELUSERS;

                $this->ID = $ID;
                $this->NUM_TT= $ID['NUM_TT'];
                $this->DATE_TT= $datareqSelUsers['DATE_TT'];
                $this->NUM_CTN= $datareqSelUsers['NUM_CTN'];
                $this->NUM_PLOMB= $datareqSelUsers['NUM_PLOMB'];
                $this->TYPE_CTN= $datareqSelUsers['TYPE_CTN'];
                
    }



    // Methode de connexion
    static function pdf_conteneur123(){

        global $conn;
       

                 $laconnect = oci_connect('BDREQUISITION', 'DARRV2023' ,  'localhost/xe');
                // $host="localhost/xe"; $port="1521"; $dbName="BDREQUISITION";  $user="BDREQUISITION"; $pass="DARRV2023";
                //  $laconnect = "oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port))(CONNECT_DATA=(SID=$dbName)))";
    // $pdo = new PDO($laconnect, $user, $pass);
                // Préparation et exécution de la requête
                $sql = "SELECT *  FROM BDREQUISITION.CTN_TABLE WHERE NUM_TT='1157068' ";
               //echo $sql; exit();
                $curentUser = oci_parse($laconnect, $sql);
                oci_execute($curentUser);
                // oci_free_statement($curentUser);
                oci_close($laconnect);
            //   $curentUser = oci_fetch_assoc($curentUser);
              $curentUser = oci_fetch_assoc($curentUser);
              
             //  echo  '@'.$curentUser['NUM_CTN'].'@'; exit();
//                 oci_free_statement($curentUser);
// oci_close($laconnect);
            
                    return $curentUser;
                    // oci_free_statement($stid);
                    // oci_close($conn);

    }

     //liste des articles a valider soumis par agent
     static function pdf_conteneur($tc) {
  
        global $db;
        
        $reqLvalU = $db->fetch('SELECT * FROM ctn_table WHERE NUM_TT=?  ', [$tc], true);
          //debug_zval_dump ($reqLvalU);
        return $reqLvalU;

     } 

    // fin Methode de connexion

    //Liste de tous les users
    static function getAllutilisateur() {

        global $db;

        $requtilisateur = $db->fetch('SELECT * FROM ctn_table ', [], true);
        return $requtilisateur;

    }

    static function getcont() {

        global $db;

        $requtilisateur = $db->fetch('SELECT * FROM ctn_table LIMIT 20 ', [], true);
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