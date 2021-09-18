<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="utf-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';
      mail("d.charton@codeur.online", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
      header("Refresh:5; url=https://dylanc903.promo-93.codeur.online/portfolio/index.php#signup");
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>
<?php if(isset($msg)) {
         echo $msg;
      }
      ?>