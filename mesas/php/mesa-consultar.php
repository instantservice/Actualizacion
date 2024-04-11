<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Eatilos/consulta.css">

    <title>Consultar-Mesas</title>
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
$consulta="select*from mesa";
$resultado = $link->query($consulta);

//recorremos cada uno de lops registros con unciclo while
echo '<table border="1">';
echo '<tr>';
echo '<th>ID_Mesa</th>';
echo '<th>Estatus</th>';
echo '<th>ID_Personal</th>';


echo '</tr>';
while($fila = $resultado->fetch_assoc()){
    echo '<tr>';  //fila de nuestra tabla
    echo '<td>'.$fila['ID_mesa'].'</td>';
    echo '<td>'.$fila['Estatus'].'</td>';
    echo '<td>'.$fila['ID_Personal'].'</td>';

}

?>
</div>
</from>
</body>
</html>