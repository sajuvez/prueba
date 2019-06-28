<!DOCTYPE html>
<html>
<head>
	<title>ensayo_2</title>
	<META CHARSET="UTF-8">
</head>
<body>
</body>
<?php
include 'common/connectToMySQL.php';
// $username = "root";
// $password = "";
// $hostname = "localhost";
// $database = "prueba_trabajo";
// //conexión con la base de datos y el servidor
// $conn = mysqli_connect($hostname, $username, $password, $database) or die("<h2>No se encuentra el servidor</h2>");
//
// if (!$conn) {
//       die("Connection failed: " . mysqli_connect_error());
// }
echo "Connected successfully";
	//obtenemos los valores del formulario
	$product_name = $_POST['product_name'];
	$cantidad = $_POST['cantidad'];
	$lote = $_POST['lote'];
	$fecha_venc = $_POST['fecha_venc'];
	$precio = $_POST['precio_product'];

	//Obtiene la longitus de un string
	$req = (strlen($product_name)*strlen($cantidad)*strlen($lote)*strlen($fecha_venc)*strlen($precio)) or die("No se han llenado todos los campos");

  $sql = "INSERT INTO productos (producto, cantidad, lote, fecha_vencimiento, precio) VALUES ('$product_name', '$cantidad', '$lote', '$fecha_venc', '$precio')";
  // if (mysqli_query($conn, $sql)) {
  //       echo "New record created successfully";
  // } else {
  //       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }
  mysqli_close($conn);

  echo'
    <script>
      alert("Registro Exitoso");
      location.href="index.html";
    </script>
  ';
 echo "Producto: "; echo $_POST{'product_name'};echo "<br/>";
 echo "Cantidad: ";echo $_POST{'Cantidad'};echo "<br>";
 echo "Lote: "; echo $_POST{'Lote'};echo "<br>";
 echo "Fecha Vencimiento: "; echo $_POST{'fecha_venc'};echo "<br>";
 echo "Precio: ";echo $_POST{'precio_product'};


 ?>
 <p>Compruebe los datos antes de enviarlos, si no son correctos debe volver a escribirlos</p>
 <p>Los datos son correctos?</p><a href="sendToMySQL.php" >ENVIAR</a>
 <P>Los datos son incorrectos </P><a href="javascript:history.go(-1)">REINTENTAR</a>




</html>
