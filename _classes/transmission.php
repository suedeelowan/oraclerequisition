<?php

class transmission
{
    public $ID;
    public $ID_TC_TR;
    public $NUM_TC;
    public $INSPECTION;
    public $REEVALUATION;
    public $AUDIT;
    public $TRANSMISION;
    public $COMMENTAIRE;
    public $ETAT_TC;
    public $DATE_TRANSMIS;
    
    

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM transmission WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_TC_TR= $id['ID_TC_TR'];
                $this->NUM_TC= $datareqSelPays['NUM_TC'];
                $this->INSPECTION= $datareqSelPays['INSPECTION'];
                $this->REEVALUATION= $datareqSelPays['REEVALUATION'];
                $this->AUDIT= $datareqSelPays['AUDIT'];
                $this->TRANSMISION= $datareqSelPays['TRANSMISION'];
                $this->COMMENTAIRE= $datareqSelPays['COMMENTAIRE'];
                $this->ETAT_TC= $datareqSelPays['ETAT_TC'];
                $this->DATE_TRANSMIS= $datareqSelPays['DATE_TRANSMIS'];
               


    }



  static function transmettreinspect($tc,$statut,$commentaire)
     {
  
          global $db;
          
  
          $req_add_inspect= $db->fetch('INSERT INTO  transmission (NUM_TC,INSPECTION,COMMENTAIRE ) VALUES(?,?,?)' , [$tc,$statut,$commentaire], true);
          return $req_add_inspect;
     }

     static function traiterinspect($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET INSPECTION=?,COMMENTAIRE=? WHERE NUM_TC=?' , [$statut,$commentaire,$tc], true);
          return $req_add_inspect;
     }
     static function traiterinspectretourSD($tc,$statut,$commentaire,$etat)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET INSPECTION=?,COMMENTAIRE=?, ETAT_TC=? WHERE NUM_TC=?' , [$statut,$commentaire,$etat,$tc], true);
          return $req_add_inspect;
     }

     static function retourreeval_AG($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET INSPECTION=?, REEVALUATION=?, COMMENTAIRE=? WHERE NUM_TC=?' , [$statut,0,$commentaire,$tc], true);
          return $req_add_inspect;
     }

     static function traiterreeval_AG($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET REEVALUATION=?, COMMENTAIRE=?, AUDIT=? WHERE NUM_TC=?' , [$statut,$commentaire,1,$tc], true);
          return $req_add_inspect;

          
     }

     static function traiteraudit_AG($tc,$statut,$commentaire)
     {
  
          global $db;
          $req_add_inspect= $db->fetch('UPDATE transmission SET REEVALUATION=?,AUDIT=?, COMMENTAIRE=? WHERE NUM_TC=?' , [3,$statut,$commentaire,$tc], true);
          return $req_add_inspect;
     }

     static function traiterreeval_Audit($tc,$statut,$commentaire)
     {
  
          // global $db;
          // $req_add_inspect= $db->fetch('UPDATE transmission SET AUDIT=? TRANSMISION=?, COMMENTAIRE=? WHERE NUM_TC=?' , [$statut,1,$commentaire,$tc], true);
          // return $req_add_inspect;

          global $db1;
          $attribut=" UPDATE transmission SET AUDIT= '".$statut."' , TRANSMISION= '1', COMMENTAIRE= '".$commentaire."' WHERE NUM_TC= '".$tc."' ";
        ;
         $querysql =  $attribut ;
        // echo $querysql;
        // exit();
         // Prepare and execute query
         $query = $db1->prepare($querysql);
         $query->execute();
     }

     


      static function ficheUniTc($Tc) {

        global $db;
        $ok=1;
  
         $reqDetc= $db->fetch('SELECT * FROM article WHERE ID_TC_TR = ? AND STATUT=?', [$Tc,$ok], true);
      return $reqDetc;
  
    }

    static function ficheUniTcNON($Tc) {

        global $db;
        $ok=0;
  
         $reqDetc= $db->fetch('SELECT * FROM article WHERE ID_TC_TR = ? AND STATUT=?', [$Tc,$ok], true);
      return $reqDetc;
  
    }

    static function retour($Tc) {

      global $db;
      $ok=0;

       $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND INSPECTION=?', [$Tc,2], true);
    return $reqDetc;

  }

  static function insp_retour($Tc) {

    global $db;
    $ok=0;

     $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND ( INSPECTION=? OR INSPECTION=? )', [$Tc,10,20], true);
  return $reqDetc;

}

static function commentaire_retour($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT * FROM transmission WHERE NUM_TC = ? ', [$Tc], true);
return $reqDetc;

}

static function doc_retour_agt($agt) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT * FROM transmission WHERE NUM_TC = ? ', [$Tc], true);
return $reqDetc;

}

static function doc_retour() {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT COUNT(*) INSPECTION FROM transmission WHERE INSPECTION = ? OR INSPECTION = ?  ', [10,20], true);
return $reqDetc;

}

static function doc_retour_staut($tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT COUNT(*) INSPECTION FROM transmission WHERE ( INSPECTION = ? OR INSPECTION = ? ) AND  NUM_TC=? ', [10,20,$tc], true);
return $reqDetc;

}

  static function transmis($Tc) {

    global $db;
   

     $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? ', [$Tc], true);
  return $reqDetc;

}
  static function soumis($Tc) {

    global $db;
    $ok=0;

     $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND INSPECTION=?', [$Tc,1], true);
  return $reqDetc;

}

static function Reeval_AG_dossier($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND REEVALUATION=?', [$Tc,1], true);
return $reqDetc;

}
static function Reeval_Audit_dossier($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND REEVALUATION=? AND AUDIT=? ', [$Tc,2,1], true);
return $reqDetc;

}

static function Reeval_Audit_transmis_dossier($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND TRANSMISION=? AND AUDIT=? ', [$Tc,1,2], true);
return $reqDetc;

}

static function Reeval_retour_Audit_dossier($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND REEVALUATION=?', [$Tc,3], true);
return $reqDetc;

}

static function Reeval_transmis_dossier($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT count(NUM_TC) nbre FROM transmission WHERE NUM_TC = ? AND REEVALUATION=?', [$Tc,4], true);
return $reqDetc;

}

  static function commentaire($Tc) {

    global $db;
    $ok=0;

     $reqDetc= $db->fetch('SELECT COMMENTAIRE  FROM transmission WHERE NUM_TC = ? AND INSPECTION=?', [$Tc,2], true);
  return $reqDetc;

}

static function commentaireReeval($Tc) {

  global $db;
  $ok=0;

   $reqDetc= $db->fetch('SELECT COMMENTAIRE  FROM transmission WHERE NUM_TC = ? AND REEVALUATION=?', [$Tc,3], true);
return $reqDetc;

}
  


}