<?php
// Establecer los datos de conexió

// Crear la conexión
$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");

/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}

//obtener los datos de los productos
$cantidad=$_POST["cantidad"];
$nombre=$_POST["nombre"];
$id=$_POST["id"];
$pagar=$_POST["pagar"];
$precio=$_POST["precio"];

 //consulta insert a mysql 
   //insert into nonbre de la tabla values variables de php
   $insertar="INSERT INTO detalle_pedidos(Cantidad,Total_Pagar,Nombre_Platillo,Precio,ID_personal)
   VALUES('$cantidad','$pagar','$nombre','$precio','$id')";

    //corroborar
    if (mysqli_query($link,$insertar)){
        if(mysqli_affected_rows($link)>0){


            echo '<script type="text/javascript">
          alert("datos Insertados:D");
        window.location.href="detalle-p-insertar.html"
        </script>
        '; 
    }else{  
        echo '<script type="text/javascript">
        alert("no existe este registro :S");
      window.location.href="detalle-p-insertar.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("datos no insertados :S");
      window.location.href="detalle-p-insertar.html"
      </script>
      '; 
    }
       
    mysqli_stmt_close($insertar);
    mysqli_close($link);

?>