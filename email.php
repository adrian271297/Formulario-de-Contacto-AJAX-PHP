<?php

if (isset($_POST['enviar'])){

$nombre = $_POST['nombre'];
$empresa = $_POST ['empresa'];
$pais = $_POST ['pais'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['motivo'];
$mensaje = $_POST['mensaje'];


    //Verifica campos vacios
    if (empty($nombre) or empty($email) or empty($telefono) or empty($mensaje)) {
            echo "Algunos campos obligados estan vacios."; 
    }

    else{

        $header = 'From: ' .$email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $info = "Este mensaje fue enviado por: "  . $nombre ." \r\n";
        $info .= "Su empresa es: " . $empresa . " \r\n";
    	$info .= "Pais: " . $pais . " \r\n";
        $info .= "Su correo es: " . $email . " \r\n";
        $info .= "Su teléfono es: " . $telefono . " \r\n";
        $info .= "Asunto: " . $asunto . " \r\n";
        $info .= "Mensaje: " . $mensaje . " \r\n";
        $info .= "Enviado: " . date('d/m/Y', time());

        $para = 'info@soltecpro.net';
        $asunto = 'Mensaje de formulario';

        mail($para, utf8_decode($asunto), utf8_decode($info), $header);

        echo "Su mensaje fue enviado exitosamente. Gracias !";
    }

}

?>