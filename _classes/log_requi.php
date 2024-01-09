<?php

class log_requi
{
    public $ID;
    public $ID_LOG ;
    public $COMPTE;
    public $ACTION;
    public $TCNUM;
    public $DATE;

    function __construct($id) {

            global $db;

            $id = str_secur($id);

            $reqSelPays = $db->fetch('SELECT * FROM log_requi WHERE ID = ?', [$id], false);
            $datareqSelPays = $reqSelPays;

                $this->ID = $id;
                $this->ID_LOG= $id['ID_LOG'];
                $this->COMPTE= $datareqSelPays['COMPTE'];
                $this->ACTION= $datareqSelPays['ACTION'];
                $this->TCNUM= $datareqSelPays['TCNUM'];
                $this->DATE= $datareqSelPays['DATE'];


    }


//Liste de tous les users
static function insertLOG($action,$latc) {

    global $db;

    echo $ladate=date('Y-m-d H:i:s'); 
    //exit();
    $compte=$_SESSION['IDUSER'];
    $requtilisateur = $db->fetch('insert into log_requi (ID_LOG ,COMPTE,ACTION,TCNUM,DATE) values ( ?, ?, ?, ?, ?)', ['', $compte, $action, $latc, $ladate], true);
    return $requtilisateur;

}




}