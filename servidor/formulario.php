<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/style.css"></link>

<title>Untitled Document</title>
<style type="text/css">
<!--
body		{ background:#CCCCCC url(images/tu-no-sabes.png) no-repeat left top; font-size:100%;}

#dedica-video{
	background-color:#FFFFFF;
	background-image:url(images/tu-no-sabes.png);
	background-repeat:no-repeat;
	background-position:left top;
	
	margin:100px auto 100px auto;
	width:550px;
}
#dedica-video table{
	font-size:0.69em;
}


</style>
</head>

<body>
<div id="dedica-video">
<h4>Enviar a un amigo</h4>
<form  method="post" action="tellck.php">

<table width="100%" border="2">
  <tr>
    <td width="18%">Tu Nombre</td>
    <td width="26%"><input type=text name="y_name" size="23" /></td>
    <td width="16%">Tu Email</td>
    <td width="40%"><input type=text name="y_email" size="35" /></td>
  </tr>
  <tr>
    <td>Nombre del amigo</td>
    <td><input type=text name="f_name" size="23" /></td>
    <td>Email del amigo</td>
    <td><input type=text name="f_email" size="35" /></td>
  </tr>
  <tr>
    <td>Tu <span class="style1">mens</span>aje</td>
    <td colspan="3"><textarea name="y_msg" rows=5 cols=29></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=submit value="Enviar"/></td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>

</div>








</body>
</html>
