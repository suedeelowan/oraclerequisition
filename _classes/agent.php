<?php

class agent
{
    public $ID;
    public $ID_AG;
    public $NOM_AG;
    public $MATRICULE_AG;
    public $SERVICE_AG;
    public $CHARGE_TRAVAIL;
    public $ETAT_AG;
    public $COTATION_AG;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM agent WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_AG= $id['ID_AG'];
                $this->NOM_AG= $datareqSelPays['NOM_AG'];
                $this->MATRICULE_AG= $datareqSelPays['MATRICULE_AG'];
                $this->SERVICE_AG= $datareqSelPays['SERVICE_AG'];
                $this->CHARGE_TRAVAIL= $datareqSelPays['CHARGE_TRAVAIL'];
                $this->ETAT_AG= $datareqSelPays['ETAT_AG'];
                $this->COTATION_AG= $datareqSelPays['COTATION_AG'];


    }


//Liste de tous les users
static function getAllService($service) {

    global $db;

    $requtilisateur = $db->fetch('SELECT * FROM  agent WHERE SERVICE_AG=? ORDER BY NOM_AG ASC ', [$service], true);
    return $requtilisateur;

}


//Liste des agents a coté
static function getCotation($service) {

    global $db;
    
    $requtilisateur = $db->fetch('SELECT * FROM  agent WHERE ETAT_AG=? AND COTATION_AG = (SELECT MIN(COTATION_AG) FROM agent WHERE SERVICE_AG=? AND ETAT_AG=?) AND SERVICE_AG=?  ORDER BY DATE_ACTOIN_AG ASC LIMIT  1 ', [1,$service,1,$service], true);
    return $requtilisateur;

}

static function getActifCotation($mat) {

    global $db;
    
    $requtilisateur = $db->fetch('UPDATE agent SET COTATION_AG=COTATION_AG+? WHERE MATRICULE_AG =? AND ETAT_AG=? ', [1,$mat,1], true);
    return $requtilisateur;

}

static function getdecrementeCotation($mat) {

    global $db;
    $datetime=date('Y-m-d H:i:s',time());
    $requtilisateur = $db->fetch('UPDATE agent SET COTATION_AG=COTATION_AG-?, DATE_ACTOIN_AG=?  WHERE MATRICULE_AG =? ', [1,$datetime,$mat], true);
    return $requtilisateur;

}

static function getdecrementeReCotation($mat) {

    global $db;
   
    $requtilisateur = $db->fetch('UPDATE agent SET COTATION_AG=COTATION_AG-? WHERE MATRICULE_AG =? ', [1,$mat], true);
    return $requtilisateur;

}
}