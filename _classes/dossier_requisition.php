<?php

class dossier_requisition 
{
    public $ID;
    public $ID_COUR ;
    public $NUM_TT_COUR;
    public $FICHIER_COUR;
    public $TYPE_FICHIER;
    public $DATE_COUR;
  
    
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM dossier_requisition WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_COUR= $id['ID_COUR'];
                $this->NUM_TT_COUR= $datareqSelPays['NUM_TT_COUR'];
                $this->FICHIER_COUR= $datareqSelPays['FICHIER_COUR'];
                $this->TYPE_FICHIER= $datareqSelPays['TYPE_FICHIER'];
                $this->DATE_COUR= $datareqSelPays['DATE_COUR'];
               
               


    }



  static function enreg_doc($num_tc,$fichier,$typefichier)
     {
  
          global $db;
          
  
          $req_add_inspect= $db->fetch('INSERT INTO  dossier_requisition (NUM_TT_COUR,FICHIER_COUR,TYPE_FICHIER,DATE_COUR ) VALUES(?,?,?,?)' , [$num_tc,$fichier,$typefichier,date('Y-m-d',time())], true);
          return $req_add_inspect;
     }

     static function traiterinspect($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET FICHIER_COUR=?,COMMENTAIRE=? WHERE NUM_TT_COUR=?' , [$statut,$commentaire,$tc], true);
          return $req_add_inspect;
     }

     

    static function courrierunique($num_tc){

        global $db;
        

        $reqDetc= $db->fetch('SELECT FICHIER_COUR FROM dossier_requisition WHERE NUM_TT_COUR = ? AND TYPE_FICHIER=? ORDER BY ID_COUR DESC LIMIT ?', [$num_tc,"COURRIER DE CONTESTATION",1], true);
        return $reqDetc;

    }

 


}