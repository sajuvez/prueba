<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>factura</title>
  </head>
  <body>
    <?php

    $product_name = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    include 'common/connectToMySQL.php';

    $query = "SELECT * FROM `productos` WHERE `producto` = '$product_name'";


    $result = mysqli_query($conn, $query);
    $obj = $result->fetch_object();
    $precio_prod = $obj->precio;
    $cantidad_prod = $obj->cantidad;
    // echo "<br>";
    // echo "$precio_prod";

    $total = ($precio_prod*$cantidad);
    $resta = ($cantidad_prod-$cantidad);
    echo "$resta";
    echo "<br>";
// echo "$total";
echo "<form action='#' method='POST'>";
  echo "<p>el producto que va a conprar es: $product_name</p>";
  echo "<p>la cantidad es: $cantidad";
  echo "<p> valor unitario: $$precio_prod";
  echo "<p> total: $$total";
  echo "<br>";
echo "<a href='#'>aceptar</a>";

echo "</form>";
    ?>

  </body>
</html>
