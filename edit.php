<?php 

 include("includes/header.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];
        
        $query= "SELECT * FROM empleados WHERE id=$id";
        $result= mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $row= mysqli_fetch_array($result);
            $id= $row['id'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $opr = $row['operador_tecnico'];
        }
    }
    
    if(isset($_POST['update'])){
        $id= $_GET['id'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $opr= $_POST['opr'];

        $query= "UPDATE empleados set nombre = '$nombre', apellido = '$apellido', operador_tecnico = '$opr' WHERE id = $id";
        $result_update= mysqli_query($conn, $query);

        $_SESSION['message']= 'Datos actualizados exitosamente';
        $_SESSION['message_type']= 'info';
        header("Location: empleados.php");
    }
?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">


                <div class="card card-body">

                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
                        <div class="form-control">
                            <input autofocus type="text" name="nombre" class="form-control" value="<?php echo $nombre ?>" placeholder="Actualiza el nombre">
                        
                            <input type="text" name="apellido" class="form-control" value="<?php echo $apellido ?>" placeholder="Actualizar apellido">
                    
                            <input type="number" min=1 max=4 name="opr" class="form-control" value="<?php echo $opr ?>" placeholder="Actualizar opr">
                        </div>
                        <button type="submit" class="btn btn-success" name="update">
                            Actualizar
                        </button>
                    </form>

                </div>


            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>