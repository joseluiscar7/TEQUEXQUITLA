<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servidor="sql206.260mb.net";
$usuario="n260m_14426545t";
$contraseña="drag0n";
$bd="celerino";
$con=mysql_connect($servidor ,$usuario,$contraseña) or die("Error en la conexión".mysql_Error());
mysql_select_db($bd,$con);

echo $nombre=$_GET["nombre"];
echo $direccion=$_GET["direccion"];
echo $telefono=$_GET["telefono"];
echo $rfc=$_GET["rfc"];

$sql="INSERT INTO datostienda(id_Tienda,Nombre,Direccion,Telefono,Rfc) VALUES ('','$nombre',' $direccion','$telefono','$rfc')";
$resultado=mysql_query($sql,$con);
if ($resultado){
	echo "La insercion de los datos se realizo de manera satisfactoria";
}else{
	die("Hubo un error al guardar la informacion ".mysql_error());
}
mysql_close($con);
?>




</body>
</html>