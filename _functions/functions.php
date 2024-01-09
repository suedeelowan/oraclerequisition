<?php


function str_secur($string)
    {
        return htmlspecialchars($string);
    }

function getPageLanguage($lang, $pages)
{
  $dataPages = [];

    foreach ($pages as $p)
    {

        $jsonString = file_get_contents('_lang/'.$lang.'/'.$p.'.json');
        $json  = json_decode($jsonString);
        $dataPages[$p] = $json;
    }

    return (object) $dataPages;
}


function redirect($location)
{
    return header("Location: $location");
}



 function dateTransform($date)
 {
   return date('d/m/Y', strtotime($date));
 }

 function dateTransformLong($date)
 {
   return date('d/m/Y H:i', strtotime($date));
 }

 function dateFrancais(){

  // Définir le fuseau horaire
  date_default_timezone_set('Africa/Abidjan');

    // Obtenir la date actuelle
    $date = new DateTime();

    // Jour de la semaine en français
    $jours = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    // Mois en français
    $mois = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

    // Afficher la date formatée en français
   // $ladte= $jours[$date->format('w')] . ' ' . $date->format('d') . ' ' . $mois[$date->format('n')] . ' ' . $date->format('Y H:i:s');
    $ladte= $jours[$date->format('w')] . ' ' . $date->format('d') . ' ' . $mois[$date->format('n')]. ' ' . $date->format('Y') ;
  return $ladte;

 }

// fonction permettant de recuperer l'identifiant de la ligne à ressortir de la table declaration oc3
 function afficheDonne($id_Tc)
 {
     $result = Req_Contest::getUniTc($id_Tc);
    // echo  $result;

   return $result;
 }
 
 function afficheArticletrouve($id_Tc)
 {
     $result = article::ficheUniTc($id_Tc,1);
    // echo  $result;

   return $result;
 }

 function afficheArticleNONtrouve($id_Tc)
 {
     $result = article::ficheUniTcNON($id_Tc,0);
    // echo  $result;

   return $result;
 }

 function afficheArticleNouveau($id_Tc)
 {
     $result = article_new::articletrouve($id_Tc);
    // echo  $result;

   return $result;
 }
 

 function agearticle($date){
     
    $datetime1 = new DateTime($date); // Date ajout article
    $datetime2 = new DateTime(date("d-m-Y"));   // Date du jour actuelle
    $interval = $datetime1->diff($datetime2);
    $nbrjrs= $interval->format('%a jrs');   // nbre de  jours
   return $nbrjrs;
}

    
 function profiluser($user){
    $i=0;
  $resuluser=droit::getverifprofil($user);
  foreach ($resuluser as $index => $one):  $one['id_profil'];    endforeach;
  //echo $one['id_profil'].'@@'; exit();
    return $one['id_profil'];
  
}

function agt_service($service){
$agent=agent::getAllService($service);
return $agent;
}

function agt_cotation($service){
  $agent=agent::getCotation($service);
  return $agent;
  }

function matriculeagent($champ,$tc){
  $mat=Req_Contest::lematricule($champ,$tc);
  foreach($mat as $index => $lematri):
    $lemat=$lematri[$champ];
  endforeach;
   //echo substr($lemat,0,7).'@'; exit();
  return substr($lemat,0,7) ;
}


function fichiercourrier($num_tc){
  $fich=dossier_requisition::courrierunique($num_tc);
  foreach ($fich as $index => $moncour):    endforeach;
  return $moncour["FICHIER_COUR"];
  }

function Histo($action,$latc){
  $log=log_requi::insertLOG($action,$latc);
  return $log;
  }

  function egalatroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcNAPTroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function egaleseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcNAPseptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function egalesupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcNAPSupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }
// TC APURES SANS RDV
  function TCAPtroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcAPSRDVTroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function TCAPseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcAPSRDVSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function TCAPupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcAPSRDVSupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  // RDV SANS VISITE

  function TCSRDVtroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcAPSRDVTroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function TCSRDVseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcAPSRDVSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function TCSRDVSupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcRDVSVSupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  ///Tc visitées sans évaluation

  function TCVSEtroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVSETroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function TCVSEseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVSESeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function TCVSESupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVSESupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  //////Tc en contestation non transmis en PL
  function TCCNTtroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcCNTTroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function TCCNTseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcCNTSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function TCCNTSupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcCNTSupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  ///Tc Visitées Non transmis en reevaluation
  function TCVNTrtroisjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVNTRTroisJours();
    
  foreach ($NbreNAP as $index => $one): $i++;   endforeach;
 
    return $i;
  
}
  function TCVNTRseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVNTRSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

  function TCVNTRSupseptjour(){
    $i=0;
    $NbreNAP=Req_Contest::getnbreTcVNTRSupSeptJours();
    foreach ($NbreNAP as $index => $one): $i++;   endforeach;
    return $i;
  }

function ageTC($date){
     
  $datetime1 = new DateTime($date); // Date ajout article
  $datetime2 = new DateTime(date("d-m-Y"));   // Date du jour actuelle
  $interval = $datetime1->diff($datetime2);
  $nbrjrs= $interval->format('%a jrs');   // nbre de  jours
 return $nbrjrs;
}

function accordtotal($pdf_nom_imp,$pdf_rfcv,$pdf_courrier){

  $letexte='
        <style >
        p { font-size:18px;  }
        div { font-size:18px;  }
      </style>
      <br/><br/><br/><br/><br/><br/><br/><br/>
      <div align="right" style="margin-right: 95px;">
      Abidjan, le '.dateFrancais().'
      </div>



      <div style=" padding-top: 70px;">
      <b>OBJET :</b> ACCEPTATION DE LA DEMANDE DE REVISION DE LA VALEUR 
      <br/> <br/>

      &nbsp;&nbsp;&nbsp;-	NOM DE L’IMPORTATEUR : <b>'.$pdf_nom_imp.'</b> <br/>
      &nbsp;&nbsp;&nbsp;-	N° RFCV : <b>'.$pdf_rfcv.'</b>

      </div>


      <p style="margin-left:30px ;">
      Madame, Monsieur <br/>
      </p>

      <div style="margin-left: 30px;">
      <p>
      Nous avons reçu votre demande de révision de la valeur déclarée pour le dossier
      dont les références sont citées ci-dessus.

      </p>

      <p>Après analyse des documents soumis, nous sommes d’avis de revenir sur la valeur de vos marchandises.</p>

      <p>
      Aussi, les valeurs seront modifiées et une copie du RFCV révisé vous sera envoyée.
      </p>

      <p>
      Veuillez agréer, Monsieur, Madame, l’expression de nos salutations distinguées.
      </p>


      <br/><br/><br/>
      <p style="">Cordialement</p>



      </div>
      <br/><br/><br/><br/><br/><br/><br/>
      <div style="text-align: right; margin-right: 100px;" ><img src="views/pdf/signaturecb.png" style="width: 100px;" alt="la signature/></div>
      <div style="text-align: right; margin-right: 100px;" >Chef de Bureau Recevabilité<br/><br/>
        Et Gestion Des Recours</div>

        
        
  ';

  return $letexte;
}

function accordpartiel($pdf_nom_imp,$pdf_rfcv,$pdf_courrier){

    $letexte='
          <style >
          p { font-size:18px;  }
          div { font-size:18px;  }
        </style>
        <br /><br /><br /><br /><br /><br /><br />
  <div align="right" style="margin-right: 95px;">Abidjan, le '.dateFrancais().'</div>
  <div style="padding-top: 70px;">OBJET : <strong>ACCEPTATION PARTIELLE DE LA DEMANDE DE REVISION DE LA VALEUR</strong> <br /><br />
  &nbsp;&nbsp;&nbsp;- NOM DE L&rsquo;IMPORTATEUR : <b>'.$pdf_nom_imp.'</b> <br />
  &nbsp;&nbsp;&nbsp;- N&deg; RFCV : <b>'.$pdf_rfcv.'</b> <br />

  </div>
  <br/>
  <p style="margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp; Madame, Monsieur</p>

  <div style="margin-left: 30px;">
  <p>&nbsp;&nbsp;&nbsp;&nbsp; Nous avons re&ccedil;u votre demande de r&eacute;vision de la valeur d&eacute;clar&eacute;e pour le dossier dont les r&eacute;f&eacute;rences sont cit&eacute;es ci-dessus.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp; Apr&egrave;s analyse des documents soumis, nous sommes d&rsquo;avis de revenir&nbsp; partiellement sur la valeur des marchandises.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp; Aussi, les valeurs seront modifi&eacute;es et une copie du RFCV r&eacute;vis&eacute; vous sera envoy&eacute;e.</p>
  <p> Veuillez agr&eacute;er, Monsieur, Madame, l&rsquo;expression de notre parfaite consid&eacute;ration.</p>
  <br />
  <br/>
  Cordialement
  </div>
  <p><br /><br /><br /></p>
  <div style="text-align: right; margin-right: 100px;" ><img src="views/pdf/signaturecb.png" style="width: 100px;" alt="la signature/></div>
  <div style="text-align: right; margin-right: 100px;">Chef de Bureau Recevabilit&eacute;<br /><br />Et Gestion Des Recours</div>
          
    ';

    return $letexte;
}



function rejet($pdf_nom_imp,$pdf_rfcv,$pdf_courrier,$pdf_fdi,$pdf_fdi_date){

    $letexte='
          <style >
          p { font-size:18px;  }
          div { font-size:18px;  }
        </style>
        <br /><br /><br /><br /><br /><br /><br />
  <div align="right" style="margin-right: 95px;">Abidjan, le '.dateFrancais().'</div>
  <div style="padding-top: 70px;">OBJET : <strong>REJET DE LA DEMANDE DE CONTESTATION DE VALEUR</strong> <br /><br />
  &nbsp;&nbsp;&nbsp;- NOM DE L&rsquo;IMPORTATEUR : <b>'.$pdf_nom_imp.'</b> <br />
  &nbsp;&nbsp;&nbsp;- N&deg; RFCV : <b>'.$pdf_rfcv.'</b> <br />
  &nbsp;&nbsp;&nbsp;- N&deg; FDI : <b>'.$pdf_fdi.'du '.$pdf_fdi_date.'</b> <br /><br /><br />
  &nbsp;&nbsp;&nbsp;- N&deg; FACTURE : <b>XXXXXX du JJ-MM-AAAA</b></div>
  <br/>
  <p style="margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp; Madame, Monsieur</p>

  <div style="margin-left: 30px;">
  <p>&nbsp;&nbsp;&nbsp;&nbsp; En r&eacute;ponse &agrave; votre demande de contestation de la valeur sur le RFCV cit&eacute; en objet, nous vous informons de notre d&eacute;cision de maintenir l&rsquo;&eacute;valuation faite sur vos marchandises.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp; En cas de refus de la valeur en douane port&eacute;e sur le RFCV, vous avez la possibilit&eacute; de recourir au comit&eacute; d&rsquo;arbitrage de la valeur en levant votre d&eacute;claration avec le sous r&eacute;gime OC3 conform&eacute;ment &agrave; la Circulaire&nbsp; N&deg;2138/MBPE/DGD du 04 f&eacute;vrier 2021.</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp; Veuillez agr&eacute;er, Monsieur, Madame, l&rsquo;expression de notre parfaite consid&eacute;ration.</p>
  <br />

  </div>
  <p><br /><br /><br /></p>
  <div style="text-align: right; margin-right: 100px;" ><img src="views/pdf/signaturecb.png" style="width: 100px;" alt="la signature/></div>
  <div style="text-align: right; margin-right: 100px;">Chef de Bureau Recevabilit&eacute;<br /><br />Et Gestion Des Recours</div>
          
    ';

    return $letexte;
}

function getTC($numtc){
  
     $attribut=" num_tc='".$numtc."'";
   
    $all = req_contest::getAllrecherche($attribut);
    return $all;  

}

function veriftransmission($tc){
  $leretour=transmission::retour($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
return $lenbre;
}

function verifretour($tc){
  $leretour=transmission::insp_retour($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
return $lenbre;
}

function commentaire_de_retour($tc){
  $leretour=transmission::commentaire_retour($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['COMMENTAIRE']; endforeach;
return $lenbre;
}


function verif_exist_transmission($tc){
  $leretour=transmission::transmis($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
return $lenbre;
}

function verif_retour_transmission($tc){
  $leretour=transmission::doc_retour_staut($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['INSPECTION']; endforeach;
return $lenbre;
}


function verifsoumis($tc){
  $leretour=transmission::soumis($tc);
foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
return $lenbre;
}
function verifsoumiaudit($tc){
  $leretour=transmission::Reeval_Audit_dossier($tc);
  foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
  return $lenbre['nbre'];
}
function verif_transmis_audit($tc){
  $leretour=transmission::Reeval_Audit_transmis_dossier($tc);
  foreach($leretour as $index => $lenbre) : $lenbre=$lenbre['nbre']; endforeach;
  return $lenbre['nbre'];
}

function comment_transmission($tc){
  $leretour=transmission::commentaire($tc);
foreach($leretour as $index => $lenbre) : $comment=$lenbre['COMMENTAIRE']; endforeach;
return $comment;
}


function premeirelignepdf($num_tc){

  $attribut="num_tc='$num_tc' ";
  $response = Req_Contest::getAllrecherche($attribut);
  
  return $response;
}


function dossier_retour(){

  
  $leretour =  transmission::doc_retour();
  foreach($leretour as $index => $lenbre) : $comment=$lenbre['INSPECTION']; endforeach;
  
  return $comment;
}
function nbr_dossier_retour(){

  $i=0;
  $leretour =  transmission::doc_retour();
  foreach($leretour as $index => $lenbre) : $i++; endforeach;
  
  return $i;
}

function dossier_pour_pl(){

$attribut='';  
  $leretour =  Req_Contest::EnvoiPL($attribut);
  $i=0;
  foreach($leretour as $index => $lenbre) :  $i++; endforeach;
  
  return $i;
}

function dossier_retour_agt(){

  $attribut="INSPECTION='2'  AND SUBSTRING(agent_visit, 1, 7)='".$_SESSION['USERNAME']."' AND t.NUM_TC=r.num_tc ";  
     $table="req_reev_contest r, transmission t ";
     $all =Req_Contest::listedossier($table,$attribut);
     $i=0;
     foreach($all as $index => $lenbre) : $i++; endforeach;
  
     
  //$response =  tramission::doc_retour_agt();
  
  return $i;
}