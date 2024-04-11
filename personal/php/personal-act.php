<?php
/*conexion a MySQL desde PHP*/
/*direccion del servidor,nombre del usuario,contraseña y nombre de la bd*/ 
$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");
/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}
//obtener los datos del formulario
    $Id=$_POST["id"];
    $Tipo= $_POST["tipo"];
    $Nombre = $_POST["nombre"];
    $Telefono= $_POST["tel"];
    $Direccion = $_POST["direccion"];
 

 //insert into nonbre de la tabla values variables de php
 $actualizar="UPDATE personal set Tipo='$Tipo',Nombre='$Nombre',Telefono='$Telefono',Direccion='$Direccion' where ID_Personal=$Id";
 //ejecutar la consulta

 if(mysqli_query($link,$actualizar )){
  if(mysqli_affected_rows($link)>0 ){

  


    echo '<script type="text/javascript">
  alert("datos actualizados :D");
window.location.href="../personal-actualizar.html"
</script>
'; 
 }else{
    echo '<script type="text/javascript">
    alert("no existe este registro :S");
  window.location.href="../personal-actualizar.html"
  </script>
  '; 

 }
}else{
    echo '<script type="text/javascript">
    alert("datos no actualizados :S");
  window.location.href="../personal-actualizar.html"
  </script>
  '; 
}
mysqli_stmt_close($actualizar);
mysqli_close($link);
?>