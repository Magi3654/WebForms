<?php
$servername="localhost";
$database="Tutoria";
$username="root";
$password="suga9608*";

$no_control=$_POST['no_control'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$carrera=$_POST['carrera'];
$telefono=$_POST['telefono'];
$semestre=$_POST['semestre'];
$asunto=$_POST['asunto'];
$fecha=$_POST['fecha'];

//Create connection
$conn=mysqli_connect($servername,$username,
    $password,$database);

//Check connection
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());

}
echo "Connected successfully";

$query="INSERT INTO usuario(no_control,nombre,apellido,
carrera,telefono, semestre, asunto, fecha) 
values('$no_control','$nombre','$apellido','$carrera',
'$telefono','$semestre','$asunto','$fecha' )";

mysqli_query($conn, $query) or die ('Error');

mysqli_close($conn);

?>