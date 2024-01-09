
<?php   
session_start();

if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}

if(isset($_POST['envoyer'])){

    $num_tc             = str_secur($_POST['num_tc']);
    $date_tc            = str_secur($_POST['date_tc']);
    $code_declara       = str_secur($_POST['code_declara']);
    $nom_declara        = str_secur($_POST['nom_declara']).str_secur($_POST['code_declara']);
    $moyen_tranp        = str_secur($_POST['moyen_transport']);
    $marchandise        = str_secur($_POST['marchandise']);
    $code_imp           = str_secur($_POST['code_imp']);
    $nom_imp            = str_secur($_POST['nom_imp']);
    $num_declaration    = str_secur($_POST['num_declara']);
    $date_declara       = str_secur($_POST['date_delara']);
    $date_depot_visit   = str_secur($_POST['date_rapport']);
     $date_visite       = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $conformite         = str_secur($_POST['conformite']);
    $date_requi         = str_secur($_POST['date_requi']);
    $vav                = str_secur($_POST['vav']);
    $onglet             = 1;
    $nom_off_visiteur   = str_secur($_POST['nom_off_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $nom_op_visite      = str_secur($_POST['nom_op_visite']);
    $date_Fvisite      = str_secur($_POST['date_Fvisite']);

 $response = Req_Contest::insert_tc($num_tc,$date_tc, $num_declaration, $code_declara, $nom_declara, $code_imp,$nom_imp,$date_visite,
 $agent_visit,$conformite,$date_depot_visit, $onglet, $moyen_tranp, $marchandise, $date_declara, $lieu_visite, $type_visite, $vav,
 $Date_cotation,$date_requi,$date_Fvisite,$nom_op_visite,$date_Dvisite,$nom_off_visiteur);

//var_dump($reponse); exit();
 if($response ==1){
    $messages = " Enregistrement effectué avec succes! ";
      
}else
{
    $messages = " Erreur de l'enregistrement. Veuillez ressaisir! ";
     
}

   redirect('ajout_tc');
 
} 


if(isset($_GET['search'])){
    $numerotc=trim($_GET['search']);
     $info_tc = Req_Contest::getnumerotc($numerotc);
}

?>