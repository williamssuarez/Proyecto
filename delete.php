<?php
 include("database.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];

        $query= "DELETE FROM empleados WHERE id = $id";
        $result= mysqli_query($conn, $query);

        if(!$result){
            die('Solicitud fallida');
        }

        $_SESSION['message']= 'Empleado eliminado exitosamente';
        $_SESSION['message_type']= 'danger';
        header("Location: empleados.php");

    }


?>