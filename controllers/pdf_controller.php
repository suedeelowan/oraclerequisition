
<?php   
session_start();

if(isset($_POST['Deconnexion']))
{
    session_destroy();
    $_SESSION['USERNAME']="";
    header("Location:login");
}


    
    $num_tc             = "890492";
   // $num_declaration    = str_secur($_POST['num_declara']);
    // $attribut="num_tc='$num_tc' OR num_declaration='$num_declaration'";
    $attribut="num_tc='$num_tc' ";

  
    $response = Req_Contest::getAllrecherche($attribut);
   
    
    // requete pour les article declarer et trouve 
    $infotc=article::update_tc_trouve($num_tc);
    //requete pour les article non trouve mais declarer
     $info_non_tc=article::update_tc_nontrouve($num_tc);

    //requete pour les article non trouve mais declarer
     $article_new=article_new::getUnique_tc($num_tc);

   

?>