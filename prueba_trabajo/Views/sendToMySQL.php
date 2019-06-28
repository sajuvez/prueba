<?php
include 'common/connectToMySQL.php';
// $username = "root";
// $password = "";
// $hostname = "localhost";
// $database = "prueba_trabajo";
// //conexión con la base de datos y el servidor
// $conn = mysqli_connect($hostname, $username, $password, $database) or die("<h2>No se encuentra el servidor</h2>");
//
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
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
  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


  echo'
    <script>
      alert("Registro Exitoso");
      location.href="index.html";
    </script>
  ';
  mysqli_close($conn);
?>
	<!-- //ingresamos la informacion a la base de datos
	$link->query("INSERT INTO productos (producto, cantidad, lote, fecha_vencimiento, precio) VALUES('$product_name','$cantidad','$lote','$fecha_venc','$precio')",$link);
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'

 ?> -->
