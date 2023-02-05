<?php 

include("includes/header.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];

        $query= "SELECT * FROM equipos WHERE id = $id";
        $result= mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $row= mysqli_fetch_array($result);
            $id= $row['id'];
            $numero_bien= $row['numero_bien'];
            $departamento= $row['departamento'];
            $recibido_por= $row['recibido_por'];
            $fecha_recibido= $row['fecha_recibido'];
            $problema= $row['problema'];
            $fecha_entrega= $row['fecha_entrega'];
            $entregado_por= $row['entregado_por'];
        }
    }

    if(isset($_POST['update'])){
        $id= $_GET['id'];
        $numero_bien= $_POST['numero_bien'];
        $departamento= $_POST['departamento'];
        $recibido_por= $_POST['recibido_por'];
        $fecha_recibido= $_POST['fecha_recibido'];
        $problema= $_POST['problema'];
        $fecha_entrega= $_POST['fecha_entrega'];
        $entregado_por= $_POST['entregado_por'];

        $query= "UPDATE equipos set 
        numero_bien = '$numero_bien', 
        departamento = '$departamento', 
        recibido_por = '$recibido_por',
        fecha_recibido = '$fecha_recibido',
        problema = '$problema',
        entregado_por = '$entregado_por',
        fecha_entrega = '$fecha_entrega'
        WHERE id = $id
        ";
        $result_update= mysqli_query($conn, $query);

        $_SESSION['message']= 'Datos actualizados exitosamente';
        $_SESSION['message_type']=  'info';

        header("Location: equipos.php");
    }

?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <div class="card card-body">

                <form action="edit_pc.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-control">

                        <input type="text" autofocus name="numero_bien" class="form-control" value="<?php echo $numero_bien ?>" placeholder="Numero de bien">
                        <input type="text" autofocus name="departamento" class="form-control" value="<?php echo $departamento ?>" placeholder="Departamento">
                        <input type="text" autofocus name="recibido_por" class="form-control" value="<?php echo $recibido_por ?>" placeholder="Recibido por">
                        <input type="text" autofocus name="fecha_recibido" class="form-control" value="<?php echo $fecha_recibido ?>" placeholder="Fecha recibido">
                        <input type="text" autofocus name="problema" class="form-control" value="<?php echo $problema ?>" placeholder="Problema">
                        <input type="text" autofocus name="fecha_entrega" class="form-control" value="<?php echo $fecha_entrega ?>" placeholder="Fecha de entrega">
                        <input type="text" autofocus name="entregado_por" class="form-control" value="<?php echo $entregado_por ?>" placeholder="Entregado por">

                    </div>
                    <button type="submit" name="update" class="btn btn-success">
                        Actualizar
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>