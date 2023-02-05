<?php

if(isset($_GET['buscar-pc'])){
    $num_bien= $_GET['buscar-pc'];

    $query= "SELECT * FROM equipos WHERE numero_bien = '$num_bien";
    $result_search= mysqli_query($conn, $query);

    if(!$result_search){
        die('Query Failed');
    }

    $_SESSION['message']= 'Busqueda Completada';
    $_SESSION['message_type']= 'success';

    header("Location: buscar_pc.php");
}


?>