<?php 
$host = 'mysql.webcindario.com';
$user = 'weboscarjhin2';
$pass = '6730026';
$bdat = 'weboscarjhin2';

$conn = new mysqli($host,$user,$pass,$bdat);

if ($conn->connect_errno > 0){
    die('Error de conexion ' . $conn->connect_error);
}
?>