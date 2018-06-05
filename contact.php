<?php
$erreur = NULL;
$info = NULL;

    @$nom     = $_POST['Nom'];
    @$prenom  = $_POST['Prenom'];
    @$email   = $_POST['Email'];
    @$sujet   = $_POST['Sujet'];
    @$message = "Nom : ".$nom."<br>"."Prénom : ".$prenom."<br>".$_POST['Message'];

if( $nom != '' ){


  if(filter_var($email, FILTER_VALIDATE_EMAIL)){



    $destinataire = "myriam_hamzaoui@yahoo.fr";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    $send = mail($destinataire,$sujet,$email,$headers);
      if($send)
      {
        $info = "Votre email à été envoyé" ;
        echo "<h1 style='text-align:center;color:green'>".$info."</h1>";

      }
      echo '<META http-equiv="refresh" content="3;URL=Contactez-nous.html">';
  }
  else{
    $erreur="Adresse email invalide";
    echo "<h1 style='text-align:center;color:green'>".$erreur."</h1>";
    echo '<META http-equiv="refresh" content="3;URL=Contactez-nous.html">';
  }
}else{
  $erreur= "Veuillez remlir tous les champs obligatoire * " ;
  echo "<h1 style='text-align:center;color:green'>".$erreur."</h1>";
  echo '<META http-equiv="refresh" content="2;URL=Contactez-nous.html">';
}
?>
