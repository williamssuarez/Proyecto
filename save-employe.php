<?php 

include ("db/database.php");

if (isset($_POST['save-employee'])){
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $opr= $_POST['opr'];

    $query= "INSERT INTO empleados(nombre, apellido, operador_tecnico) VALUES ('$nombre', '$apellido', '$opr')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die('Query failed');
    }

    $_SESSION['message']= 'Empleado guardado exitosamente';
    $_SESSION['message_type']= 'success';

    header("Location: empleados.php");

}

?>