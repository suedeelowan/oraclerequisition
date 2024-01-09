<?php

class infraction
{
    public $ID;
    public $id_inf;
    public $libelle_inf;
    public $etat_inf;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM infraction WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->id_inf= $id['id_inf'];
                $this->libelle_inf= $datareqSelPays['libelle_inf'];
                $this->etat_inf= $datareqSelPays['etat_inf'];


    }

//Liste de tous les users
static function insert_art($iduser,$profil) {

    global $db;

    $requtilisateur = $db->fetch('insert into infraction (id_droit,id_profil,id_user) values ( ?, ?, ?)', ['', $profil, $iduser], true);
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