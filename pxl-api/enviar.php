<?php

require('PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;

$form_usuario 	= $_GET['nombre'];
$form_tel 		= $_GET['telefono'];
$form_correo 	= $_GET['correo'];
$form_mensaje 	= $_GET['mensaje'];

// creamos arreglso para respuestas
$res = array();
$vacio = array();

// verificamos que las variables tengan datos
if(empty($form_usuario)){
	$vacio['nombre'] =	'ingresar un nombre';
}

if(empty($form_tel)){
	$vacio['telefono'] = 'ingresar un teléfono';
}

if(empty($form_correo)){
	$vacio['correo'] = ' ingresar un correo';
}

if(empty($form_mensaje)){
	$vacio['mensaje'] = 'ingresa un mensaje';
}

$mailPara = 'david@pxl88.com';
$mailParaNombre = 'Admin';
$mailHTML =
'
'.$form_usuario.'
'.$form_tel.'
'.$form_correo.'
'.$form_mensaje.'
';

// si el arreglo vacio viene sin datos enviamos los datos

if(empty($vacio)){

	$mail->setFrom($mailPara,$mailParaNombre);

	$mail->From = $mailPara;
	$mail->FromName = 'asunto';

	$mail->addAddress($mailPara, $mailParaNombre); // Add a recipient
	$mail->addReplyTo($form_correo, $form_usuario);

	$mail->isHTML(true);
	$mail->Subject = 'Contacto página web';
	$mail->Body    = $mailHTML;

	$mail->CharSet = 'UTF-8';

	$mail->send();

	$res['enviado'] = true;
	$res['enviado_aviso'] = 'enviado correctamente';

}else{

	$res['enviado'] = false;
	$res['vacio'] = $vacio;
}

echo json_encode($res);


?>
