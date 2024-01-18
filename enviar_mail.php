
<?php 

if ($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["email"] == "" || $_POST["tfno"] == "" || $_POST["asunto"] == "" || $_POST["comentario"] == ""){
    echo "Ha habido un error!! <br>Debe rellenar todos los campos. <br><br>";
}

$texto_mail = $_POST["comentario"];
$destinatario = $_POST["email"];
$asunto = $_POST["asunto"];

$header = "MIME-version: 1.0\r\n";
$header.= "Content-type: text/html; charset=iso-8859-1\r \n";
$header.= "From: Prueba Juan <miSitioWeb@web.cl>\r \n";

echo $header;

$exito = mail($destinatario, $asunto, $texto_mail, $header);

if($exito == true){
    echo "Mensaje enviado exitosamente";
}else{
    echo "Ha habido un error";
}


?>