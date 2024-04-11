<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Eatilos/consulta.css">

    <title>Consulta</title>
</head>
<body>
<form action="consulta.php" method="post">

<div class="container">
    <h1 class="infinity-outlineicon-"></h1>



<?php
//conexion a mysql

$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");
//comprobamos conexion
if($link===0){
    echo "error";

}
$consulta="select*from detalle_pedidos";
$resultado = $link->query($consulta);

//recorremos cada uno de lops registros con unciclo while
echo '<table border="1">';
echo '<tr>';
echo '<th>ID Folio</th>';
echo '<th>Cantidad</th>';
echo '<th>Total a pagar</th>';
echo '<th>Nombre del Platillo</th>';
echo '<th>Id Personal</th>';
echo '<th>Precio</th>';

echo '</tr>';
while($fila = $resultado->fetch_assoc()){
    echo '<tr>';  //fila de nuestra tabla
    echo '<td>'.$fila['ID_Folio'].'</td>';
    echo '<td>'.$fila['Cantidad'].'</td>';
    echo '<td>'.$fila['Total_Pagar'].'</td>';
    echo '<td>'.$fila['Nombre_Platillo'].'</td>';
    echo '<td>'.$fila['ID_personal'].'</td>';
    echo '<td>'.$fila['Precio'].'</td>';
}
?>
</div>
</from>
</body>
</html>