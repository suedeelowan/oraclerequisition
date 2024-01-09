<?php

class infractiontc
{
    public $ID;
    public $id_inftc;
    public $infraction_id;
    public $tc_id;
    public $date_inftc;
    public $admin;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM infraction WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->id_inftc= $id['id_inftc'];
                $this->infraction_id= $datareqSelPays['infraction_id'];
                $this->tc_id= $datareqSelPays['tc_id'];
                $this->date_inftc= $datareqSelPays['date_inftc'];
                $this->admin= $datareqSelPays['admin'];


    }

//ajouter les infractions
static function insert_infraction($idinf,$tc_id,$date_inf,$admin) {

    global $db;

    $requtilisateur = $db->fetch('insert into infractiontc (infraction_id,tc_id,date_inftc,admin) values ( ?, ?, ?, ?)', [$idinf,$tc_id,$date_inf,$admin], true);
    return $requtilisateur;

}

// Supprimer les infractions
static function delete_inf($idtc) {

    global $db;

    $requtilisateur = $db->fetch('DELETE FROM infractiontc  WHERE  tc_id= ? ', [$idtc], true);
    return $requtilisateur;

}


//Liste de tous les users
static function getverifprofil($iduser) {
  
    global $db;

    $requtilisateur = $db->fetch('select * from  droit where id_user=?', [$iduser], true);
    return $requtilisateur;
 //debug_zval_dump($requtilisateur);

}


//Liste de tous les users
static function getAllinf() {

    global $db;

    $requtilisateur = $db->fetch('SELECT * FROM  infraction WHERE id_inf<>?', [''], true);
    return $requtilisateur;

}




}