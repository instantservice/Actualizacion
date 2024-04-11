<?php
// Establecer los datos de conexió

// Crear la conexión
$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");

/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}

//obtener los datos de los productos
$Tipo=$_POST["tipo"];
$Nombre=$_POST["nombre"];
$Telefono=$_POST["tel"];
$Direccion=$_POST["direccion"];

 //consulta insert a mysql 
   //insert into nonbre de la tabla values variables de php
   $insertar="INSERT INTO personal(Tipo,Nombre,Telefono,Direccion)
   VALUES('$Tipo','$Nombre','$Telefono','$Direccion')";

    //corroborar
    if (mysqli_query($link,$insertar)){
        if(mysqli_affected_rows($link)>0 ){

            echo '<script type="text/javascript">
          alert("datos Insertados:D");
        window.location.href="../personal-Insertar.html"
        </script>
        '; 
    }else{  
        echo '<script type="text/javascript">
        alert("no existe este registro :S");
      window.location.href="../personal-Insertar.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("datos no actualizados :S");
      window.location.href="../personal-Insertar.html"
      </script>
      '; 
    }
       
    mysqli_stmt_close($insertar);
    mysqli_close($link);

?>