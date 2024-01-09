<?php

class historique_cotation 
{
    public $ID;
    public $ID_COT ;
    public $NUM_TT_COT;
    public $COTATION_AUTO;
    public $COTATION_CS;
    public $DATE_COT;
    public $COMMENTAIRE_COT;
  
    
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM dossier_requisition WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_COT= $id['ID_COT'];
                $this->NUM_TT_COT= $datareqSelPays['NUM_TT_COT'];
                $this->COTATION_AUTO= $datareqSelPays['COTATION_AUTO'];
                $this->COTATION_CS= $datareqSelPays['COTATION_CS'];
                $this->DATE_COT= $datareqSelPays['DATE_COT'];
                $this->COMMENTAIRE_COT= $datareqSelPays['COMMENTAIRE_COT'];
               
               


    }



  static function ajouthisto($tc,$cota_auto,$cota_cs,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('INSERT INTO  historique_cotation (NUM_TT_COT,COTATION_AUTO,COTATION_CS,DATE_COT,COMMENTAIRE_COT ) VALUES(?,?,?,?,?)' , [$tc,$cota_auto,$cota_cs,date('Y-m-d',time()),$commentaire], true);
          return $req_add_inspect;
     }

     static function traiterinspect($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET COTATION_AUTO=?,COMMENTAIRE=? WHERE NUM_TT_COUR=?' , [$statut,$commentaire,$tc], true);
          return $req_add_inspect;
     }

     

    static function Reeval_transmis_dossier($Tc) {

        global $db;
        $ok=0;

        $reqDetc= $db->fetch('SELECT count(NUM_TT_COUR) nbre FROM transmission WHERE NUM_TT_COUR = ? AND COTATION_CS=?', [$Tc,4], true);
        return $reqDetc;

    }

 


}