
<?php   
session_start();

if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}

if(isset($_POST['envoyer'])){
   // echo "test";
 // TRAITEMENT POUR LA TABLE CONTEST


    $id_Tc              = str_secur($_POST['id_Tc']);
    $num_tc             = str_secur($_POST['num_tc']);
    $date_tc            = str_secur($_POST['date_tc']);
    // $date_requi         = str_secur($_POST['date_requi']);

    $date_declara       = str_secur($_POST['date_declara']);

    $date_visite        = str_secur($_POST['date_visite']);
    $lieu_visite        = str_secur($_POST['lieu_visite']);
    $date_depot_visit   =str_secur($_POST['date_rapport']); // date du depot du rapport
    $Date_cotation      = str_secur($_POST['Date_cotation']);
    $agent_visit        = str_secur($_POST['agent_visiteur']);
    $date_Dvisite       = str_secur($_POST['date_Dvisite']);
    $date_Fvisite       = str_secur($_POST['date_Fvisite']);
    $type_visite        = str_secur($_POST['type_visite']);
    $agent_pl           = str_secur($_POST['agent_pl']);
    $onglet             = 9;


    $date_inf=date('Y-m-d H:i:s'); 
    
    
    $respons = Req_Contest::addFicheInspection($num_tc,$date_declara,$date_visite,$agent_visit,$date_depot_visit,$onglet,$lieu_visite,$type_visite,$Date_cotation,$date_Dvisite,$date_Fvisite,$agent_pl);


   //TRAITEMENT POUR LA TABLE ARTICLE  
    $numeroletc=$_POST['num_tc'];
    $latche=$_POST['ok'];
   
    foreach ($latche as $valeur) {
		  $sh=$_POST['sh'.$valeur];
		  $origine=$_POST['origine'.$valeur];
		  $quantite=$_POST['quantite'.$valeur];
		  $unite=$_POST['unite'.$valeur];
		  $article=$_POST['nd'];
		  $la_tc=$_POST['numtc'.$valeur];

          $statut=$_POST['ario'.$valeur];
         // echo $statut ; 
         $req=article:: addInspectionUpdate($sh,$origine,$quantite,$unite,$valeur,$statut);

    }
    //exit();

    $num_tt=$la_tc;


    //gestiion des nouveaux articles existant

    // supprimer l'existant des article dans la table 
    $del_article=article_new::del_article($num_tc);

    $newarticle=$_POST['updatearticle'];

    foreach ($newarticle as $valeur) {

        $article_add=$_POST['aj_article'.$valeur];
        $sh_add=$_POST['aj_sh'.$valeur];
        $origine_add=$_POST['aj_origine'.$valeur];
        $aquantite_add=$_POST['aj_quantite'.$valeur];
        $unite_add=$_POST['aj_unite'.$valeur];

       $new_article=article_new::addArticle($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add);
       
    }

    //gestion des articles nouveau
    $newarticle=$_POST['addarticle'];

    foreach ($newarticle as $valeur) {

        $article_add=$_POST['aj_article'.$valeur];
        $sh_add=$_POST['aj_sh'.$valeur];
        $origine_add=$_POST['aj_origine'.$valeur];
        $aquantite_add=$_POST['aj_quantite'.$valeur];
        $unite_add=$_POST['aj_unite'.$valeur];

        $new_article=article_new::addArticle($num_tt,$article_add,$sh_add,$origine_add,$aquantite_add,$unite_add);
       
    }
   
    //Insertion dans la table transmissionion
    $statut=1;
    $commentaire="Retour après prise en compte de l'observation";
    

    $latransmission=transmission::traiterinspect($numeroletc,$statut,$commentaire);



        //gestion de l'historique
        $action=VISIT.$_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'];
        Histo($action,$id_Tc);

        //  var_dump($repons); exit();
        $_SESSION['ajout']='ok';

        if ($respons == 1){
        //gestion de l'historique
        $action=VISIT.$_SESSION['NOM_USER'].' '.$_SESSION['PRENOM_USER'];
        Histo($action,$num_tc);
        $message = "Ajouter avec succes";
        echo  $message;
        }else
        {
        $message = "Erreur enregistrement";
        echo  $message;
        }


  redirect('rap_inspection');
 
} 


if(isset($_GET['serach'])){
    // echo "test"; exit();
    $num_tc=trim($_GET['serach']);
    $attribut="num_tc='$num_tc' ";
    $response = Req_Contest::getAllrecherche($attribut);
   
    
    // requete pour les article declarer et trouve 
    $infotc=article::update_tc_trouve($num_tc);
    //requete pour les article non trouve mais declarer
     $info_non_tc=article::update_tc_nontrouve($num_tc);

    //requete pour les article non trouve mais declarer
     $article_new=article_new::getUnique_tc($num_tc);
     
     
}

?>