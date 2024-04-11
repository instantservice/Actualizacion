<?php
// Establecer los datos de conexió

// Crear la conexión
$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");

/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}

//obtener los datos de los productos
$Estatus=$_POST["estatus"];
$id =$_POST["id"];

 //consulta insert a mysql 
   //insert into nonbre de la tabla values variables de php
   $insertar="INSERT INTO mesa(Estatus,ID_Personal)
   VALUES('$Estatus','$id')";

    //corroborar
    if (mysqli_query($link,$insertar)){
        if(mysqli_affected_rows($link)>0){

            echo '<script type="text/javascript">
          alert("datos Insertados");
        window.location.href="../mesa-insertar.html"
        </script>
        '; 
    }else{  
        echo '<script type="text/javascript">
        alert("no existe este registro");
      window.location.href="../mesa-insertar.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("datos no insertados");
      window.location.href="../mesa-insertar.html"
      </script>
      '; 
    }
       
    mysqli_stmt_close($insertar);
    mysqli_close($link);

?>