<?
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Tiernoamor.com</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">

<?
$status = "OK";
$msg="";
$y_email=$_POST['y_email'];
$y_name=$_POST['y_name'];
$f_email=$_POST['f_email'];
$f_name=$_POST['f_name'];
$y_msg=$_POST['y_msg'];


if(substr_count($y_email,"@") > 1  or substr_count($f_email,"@") > 1){
$msg .="Use only one email address<BR>"; 
$status= "NOTOK";
}
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $y_email)){ // checking your email 
$msg .="Your email address is not correct<BR>"; 
$status= "NOTOK";}

if (strlen($y_name) <2 ) { // checking your name
$msg .="Por favor ingrese su nombre<BR>"; 
$status= "NOTOK";}

if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $f_email)) { // checking friends email 
$msg .="Email del amigo no es correcto<BR>"; 
$status= "NOTOK";}

if (strlen($f_name) <2 ) { // checking freinds name
$msg .="Por favor, introduzca el nombre de su amigo<BR>"; 
$status= "NOTOK";}

if (strlen($y_msg) <2 ) { // checking Message details
$msg .="Por favor, introduzca los datos de su mensaje<BR>"; 
$status= "NOTOK";}

if($status=="OK"){ // all validation passed
	
/////////// Sending the message starts here //////////////

$ip=$_SERVER['REMOTE_ADDR']; // Recoger la dirección IP del visitante

$HOST  = "http://".$_SERVER['HTTP_HOST'];

$ref=$_SERVER['HTTP_REFERER'];

/////Message at the top of the page showing the url////
$header_message = "Hola, $f_name \n $y_name, te ha enviado una dedicatoría desde el Portal TiernoAmor.com  \n $ref \n";

/// Body message prepared with the message entered by the user ////
$body_message =$header_message."\n".$y_msg."\n";

$body_message .="\n \n $ip \n Para ver la dedicatoria por favor acceder aqui $ref";

//// Mail posting part starts here /////////

$headers="";
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers; 
 // Un comment the above line to send mail in html format
$headers4=$y_email;         // Change this to change from address
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 

$subject="Hola $f_name, tienes una dedicatoria de TiernoAmor";

mail($f_email,$subject,$body_message,$headers);



////// Mail posting ends here ///////////
echo "<center><font face='Verdana' size='2' color=green>Muchas Gracias, Su Mensaje a sido enviado correctamente a $f_name</font></center>";

//////////// Sending the message ends here /////////////
}else{// display the error message
echo "<center><font face='Verdana' size='2' color=red>$msg</font></center>";
}
?>
<center><a href='http://www.tiernoamor.com/video'>Volver</a></center> 

</body>

</html>
