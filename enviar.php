<?php


    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $msg = $_POST['mensaje'];

        $header="From: soporte-it@veraquintana.net";
        $header.="Reply-to: soporte-it@veraquintana.net";
        $header.="X-Mailer: PHP/".phpversion();
        $mail=mail($email,$nombre,$msg,$header);
        echo $mail;
        if($mail){
            echo "<h4>Mail enviado exitosamente!</h4>";
        } else{
            echo "<h4>Mail NO enviado exitosamente!</h4>";
        }
    }



?>