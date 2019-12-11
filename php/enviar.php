<?php

if(strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

    mail('emaildestino@dominio.com','Contacto desde Holamundo.es',
        "Contacto desde Holamundo.es\n\n".

        "El usuario {$_POST['nombre']} con e-mail {$_POST['email']} desea contactar e incluye el siguiente mensaje:\n\n".$_POST['mensaje']);

}

?>