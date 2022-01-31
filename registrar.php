<?php 

include("con_db.php");

insertar($conexion);

function insertar($conexion){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $message = trim($_POST['message']);

    $consulta = "INSERT INTO datos(name, email, tel, message)
    VALUES ('$name', '$email', '$tel', '$message')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location: index.html");
}

?>