<!DOCTYPE html>
<html>
<head>
  <title>Tienda BRM</title>
  <!-- <link rel="stylesheet"href="common/estilos.css"type="text/css"> -->
  <meta charset=utf-8" />
</head>
<body>
<center>
  <h3>Por favor ingresa el producto que vas a comprar</h3>
  <p>En la parte inferior podrás ver el listado de los productos disponibles.</p>
</select>
<form action="createFactura.php" method="POST"/>
<p>Producto: <input type="text" name="producto" size="40" />
<br>
<br>Cantidad: <input type="number" name="cantidad" size="40"/>

<p>Compruebe los datos antes de enviarlos, si no son correctos debe volver a escribirlos</p>
<p><input type="submit" value="generar factura"><input type="reset" value="borrar todo"></p>
</form>
</center>
<?php
include 'common/connectToMySQL.php';

$query = "SELECT * FROM productos";

$result = mysqli_query($conn, $query);

// Check resultado
// Si hubo un error mostras cual es
if (!$result) {
$message = 'Invalid query: ' . mysql_error() . " ";
$message .= 'Whole query: ' . $query;
die($message);
}
// var_dump($result);
// Use result
//Aca recorres todas las filas y te va devolviendo el resultado

// while ($fila =mysqli_fetch_array($result)){
// echo "<p>";
// echo $fila ["producto"];
// echo "</p>";
// echo "<p>";
// echo "-"; // un separador
// echo $fila["cantidad"];
// echo "-"; // un separador
// echo $fila ["fecha_vencimiento"];
// echo "-"; // un separador
// echo $fila["lote"];
// echo "-"; // un separador
// echo $fila["precio"];
// echo "</p>";
// }

echo "<h2>Productos disponibles</h2>";

echo  "<table border='1' cellspacing='0' cellpadding='0 text-align:center'>";
echo  "<th>productos</th><th>cantidad</th><th>lote</th><th>fecha_vencimiento</th><th>precio</th>";

while ($fila =mysqli_fetch_array($result)) {
  echo "<tr>" ;
  echo "<td><p>";
  echo $fila["producto"];
  echo "</p></td>";
  echo "<td><p>";
   echo $fila["cantidad"];
   echo"</p></td>";
  echo "<td><p>";
   echo $fila["lote"];
   echo"</p></td>";
  echo "<td><p>";
   echo $fila["fecha_vencimiento"];
   echo"</p></td>";
  echo "<td><p>";
   echo $fila["precio"];
   echo"</p></td>";
  echo "</tr>";
  // echo							"<tr> ";
  // echo							"<td><p>apple</p></td>";
  // echo							"<td><p>8</p></td>";
  // echo							"</tr>";
  // echo							"<tr> ";
  // echo							"<td><p>toshiba</p></td>";
  // echo							"<td><p>4</p></td>";
  // echo							"</tr>";
  // echo							"<tr> ";
  // echo							"<td rowspan='2' colspan='4'><p></p></td>";
  // echo							"<td><p>asus</p></td>";
  // echo							"<td><p>6</p></td>";
  // echo							"</tr>";
  // echo							"<tr> ";
  // echo							"<td><p>samsung</p></td>";
  // echo							"<td><p>9</p></td>";
  // echo							"</tr>";
}
  echo							"</table>";

?>
</body>

</html>
