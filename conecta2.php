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

echo $nombreproducto=$_GET["nompro"];
echo $codigo=$_GET["codigo"];
echo $clasificacion=$_GET["clasificacion"];
echo $mayoreop=$_GET["mayoreo"];
echo $ventap=$_GET["venta"];
$sql="INSERT INTO datosproducto(id_Producto,NombreP,Codigo,Clasificacion,PrecioMayoreo,PrecioVenta) VALUES ('','$nombreproducto',' $codigo','$clasificacion','$mayoreop',' $ventap')";
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