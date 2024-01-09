<?php

class droit
{
    public $ID;
    public $id_droit;
    public $id_profil;
    public $id_user;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM droit WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->id_droit= $id['id_droit'];
                $this->id_profil= $datareqSelPays['id_profil'];
                $this->id_user= $datareqSelPays['id_user'];


    }

//Liste de tous les users
static function insert_art($iduser,$profil) {

    global $db;

    $requtilisateur = $db->fetch('insert into droit (id_droit,id_profil,id_user) values ( ?, ?, ?)', ['', $profil, $iduser], true);
    return $requtilisateur;

}

//Liste de tous les users
static function getverifprofil($iduser) {
  
    global $db;

    $requtilisateur = $db->fetch('select * from  droit where id_user=?', [$iduser], true);
    return $requtilisateur;
 //debug_zval_dump($requtilisateur);

}

}