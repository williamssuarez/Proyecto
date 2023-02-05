<?php 

include("database.php");

    if(isset($_POST['save-pc'])){
        $bien=  $_POST['numero-bien'];
        $departamento= $_POST['departamento'];
        $recibidopor= $_POST['recibido'];
        $problema= $_POST['problema'];
        $entregadopor= $_POST['entregado-por'];
        $entregado= $_POST['entregado'];

        $query= "INSERT INTO equipos(numero_bien, departamento, recibido_por, problema, entregado_por, fecha_entrega) VALUES ('$bien', '$departamento', '$recibidopor', '$problema', '$entregadopor', '$entregado')";
        $result= mysqli_query($conn, $query);

        if(!$result){
            die('Query Failed');
        }

        $_SESSION['message']= 'Equipo guardado exitosamente';
        $_SESSION['message_type']= 'success';

        header("Location: equipos.php");
    }



?>