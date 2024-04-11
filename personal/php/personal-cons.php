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
$consulta="select*from personal";
$resultado = $link->query($consulta);

//recorremos cada uno de lops registros con unciclo while
echo '<table border="1">';
echo '<tr>';
echo '<th>id</th>';
echo '<th>tipo</th>';
echo '<th>nombre</th>';
echo '<th>telefono</th>';
echo '<th>direccion</th>';


echo '</tr>';
while($fila = $resultado->fetch_assoc()){
    echo '<tr>';  //fila de nuestra tabla
    echo '<td>'.$fila['ID_personal'].'</td>';
    echo '<td>'.$fila['Tipo'].'</td>';
    echo '<td>'.$fila['Nombre'].'</td>';
    echo '<td>'.$fila['Telefono'].'</td>';
    echo '<td>'.$fila['Direccion'].'</td>';
}

?>
</div>
</from>
</body>
</html>