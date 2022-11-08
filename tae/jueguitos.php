<?php
    

require_once('conexion.php');

$nombre=$_GET['nombre'];

$apellido=$_GET['apellido'];

$edad=$_GET['edad'];
 

$conn=new conexion();


$queryINSERT="INSERT INTO `participantes` (`id`, `apellido`,`nombre`, `edad`) VALUES ('$nombre', '$apellido', '$nombre', '$edad');";

$insert= mysqli_query($conn->conectardb(),$queryINSERT);



echo "Se subieron los datos con exito}";

PRINT <<<HERE

<a href="main.html">
<button >messi melon tierra</button>
</a>

HERE;


header("Location: https://localhost/SCP/index.php");
?>