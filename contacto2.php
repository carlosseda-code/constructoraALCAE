<?php
$recaptcha=$_POST['g-recaptcha-response'];
if $recaptcha != '' {
    $secret="6LecLaQUAAAAAHh-IRTcVT81Uz7sJUxb0zImLFYQ";
    $ip=$_SERVER["REMOTE_ADDR"];
    $var=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
    $array=json_decode($var,true);
}
if(isSet($_POST["asunto"]) && !empty($_POST["asunto"]) && isSet($_POST["email"]) && !empty($_POST["email"]) && isSet($_POST["mensaje"]) && !empty($_POST["mensaje"]) && $array['success']){
    $destino="carlos.pluma@hotmail.com";
    $asunto=$_POST["asunto"];
    $mail=$_POST["email"];
    $desde="From: " . "ALCAECONSTRUCCION";
    $mensaje1=$_POST["mensaje"]; 
    $mensaje=$mensaje1. " " .$mail; 
    mail($destino,$asunto,$mensaje,$desde);
    
    
    header("location:contacto.php?error=0");
}else{
    header("location:contacto.php?error=1");
}
?>
