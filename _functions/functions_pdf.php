<?php

function accordtotal($pdf_nom_imp,$pdf_rfcv,$pdf_courrier){

  $letexte='
        <style >
        p { font-size:18px;  }
        div { font-size:18px;  }
      </style>
      <br/><br/><br/><br/><br/><br/><br/><br/>
      <div align="right" style="margin-right: 95px;">
      Abidjan, le '.strtoupper($pdf_courrier).'
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
  <div align="right" style="margin-right: 95px;">Abidjan, le '.strtoupper($pdf_courrier).'</div>
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
  <div align="right" style="margin-right: 95px;">Abidjan, le '.strtoupper($pdf_courrier).'</div>
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


function fiche_description(){ $ok='ario';
?>

<?php
return $ok;
}
?>