<?php 

    include("database.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];

        $query= "DELETE FROM equipos WHERE id = $id";
        $result= mysqli_query($conn, $query);

        if(!$result){
            die('Query Failed');
        }

        $_SESSION['message']= 'Equipo eliminado exitosamente';
        $_SESSION['message_type']= 'danger';

        header("Location: equipos.php");

    }


?>