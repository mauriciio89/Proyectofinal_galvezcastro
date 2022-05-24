<?php
    //capturar info que se ingresa en los inputs del formulario se crean variables.

    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $comentario = $POST ['textarea'];

    // mandar la info

    $para = 'maugalvez89@gmail.com'
    $asunto = 'Este email fue mandado desde la web'

    // funcion que envia la info del form
    mail($para, $asunto, utf8_decode($mensaje));

    // funcion que direcciona al usuario una vez que completo el form
    header('Location:exito.html');
