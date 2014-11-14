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
<title>(Type a title for your page here)</title>
</head>

<body>
<?
/// Collect the ip address of visitor and display above the form//
// Remove next three lines if IP address is not required ///
$ip=$_SERVER['REMOTE_ADDR'];// Collect the ip address of visitor
if(strlen($ip) > 3){
echo "Your IP address=$ip"; // Display the ip to visitor 
}
//// End of collecting and displaying IP address of visitor //////
 ?>

<form method=post action=tellck.php>
      <table  border="0" cellpadding="0" cellspacing="0" align=center>
<tr bgcolor='#f1f1f1'><td colspan=2 align=center><font face='Verdana' size='2' ><b>Dedicar a un amigo</b></font></td></tr>

<tr><td width=100><font face='Verdana' size='2' >Tu Nombre</font></td><td width=200><input type=text name=y_name></td></tr>
<tr bgcolor='#f1f1f1'><td><font face='Verdana' size='2' >Tu Email</font></td><td><input type=text name=y_email></td></tr>
<tr ><td><font face='Verdana' size='2' >Nombre de Amig@</font></td><td><input type=text name=f_name></td></tr>
<tr bgcolor='#f1f1f1'><td><font face='Verdana' size='2' >Email de amig@</font></td><td><input type=text name=f_email></td></tr>
<tr ><td><font face='Verdana' size='2' >Tu Mensaje</font></td><td><textarea name=y_msg rows=5 cols=20></textarea></td></tr>

<tr bgcolor='#f1f1f1'><td colspan=2 align=center><font face='Verdana' size='2' ><input type=submit value='Send'></font></td></tr>
</table>
</form>

<center><a href='http://www.plus2net.com'>PHP SQL HTML free tutorials and scripts</a></center> 

</body>

</html>
