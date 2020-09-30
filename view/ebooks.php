
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
<script src="../javascript/code.js"></script>
</head>
<body>

<div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<div class="row">
  
  <div class="column left">
<div class="topnav">
  <a href="../index.php">Re-Read</a>
  <a href="libros.php">Libros</a>
  <a href="ebooks.php">eBooks</a>
</div>

    <h3>Toda la actualidad en eBook</h3>
 <!--   
<div class="ebook">
  <img src="../img/ebook1.jpeg" alt="ebook 1">
  <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
</div>
<div class="ebook">
  <img src="../img/ebook2.jpeg" alt="ebook 2">
  <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
</div>
<div class="ebook">
  <img src="../img/ebook3.jpeg" alt="ebook 3">
  <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
</div>
<div class="ebook">
  <img src="../img/ebook4.jpeg" alt="ebook 4">
  <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
</div>
<div class="ebook">
  <img src="../img/ebook5.jpeg" alt="ebook 5">
  <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
</div>
-->
<?php
// 1. Conexión con la base de datos.
include '../services/connection.php';

// 2. Selección y muestra de datos de la base de datos.
$result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");

if(!empty($result)&& mysqli_num_rows($result) > 0) {
    //datos de salida de cada fila (fila = row)
    $i=0;
    while ($row = mysqli_fetch_array($result)) {
        $i++;
        echo "<div class='ebook'>";
        //Añadimos las imagenes a la pagina con la etiqueta img de HTML
        echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
        //Añadimos el titulo a la pagina con la etiqueta h2 de HTML
        echo "<div class='desc'>".$row['Description']." </div>";
        echo "</div>";
        if ($i%3==0) {
          echo "<div style='clear:both;'></div>";
        }
    }
} else{
    echo "0 resultados";
}
?>
</div>
  <div class="column right">
    <h2>Top Ventas</h2>
    <?php
// 1. Conexión con la base de datos.
//include '../services/connection.php';

// 2. Selección y muestra de datos de la base de datos.
$result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = '1'");

if(!empty($result)&& mysqli_num_rows($result) > 0) {
    //datos de salida de cada fila (fila = row)
    while ($row = mysqli_fetch_array($result)) {
    echo "<p>".$row['Title']."</p>";
    }
} else{
    echo "0 resultados";
}
?>
<!--
    <p>Cien años de soledad.</p>
    <p>Cronica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
-->
  </div>
</div>
  
</body>
</html>


