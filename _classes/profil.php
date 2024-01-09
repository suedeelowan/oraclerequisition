<?php

class profil
{
    public $ID;
    public $id_profil;
    public $id_appli;
    public $code_profil;
    public $libelle_profil;
    public $etat_profil;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelProfil = $db->fetch('SELECT * FROM profil WHERE ID = ?', [$id], false);
            $datareqSelProfil = $reqSelProfil;

                $this->ID = $id;
                $this->id_profil= $id['id_profil'];
                $this->id_appli= $datareqSelProfil['id_appli'];
                $this->code_profil= $datareqSelProfil['code_profil'];
                $this->libelle_profil= $datareqSelProfil['libelle_profil'];
                $this->etat_profil= $datareqSelProfil['etat_profil'];


    }



}