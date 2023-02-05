<?php include("includes/header.php") ?>

<?php 

    if(isset($_GET['id'])){
        $id= $_GET['id'];

        $query= "SELECT * FROM equipos WHERE id = $id";
        $result= mysqli_query($conn, $query);

        if(mysqli_fetch_array($result) == 1){
            $row= mysqli_fetch_array($result);
            $id= $row['id'];
            $entregado_por= $row['entregado_por'];
            $fecha_entrega= $row['fecha_entrega'];
        }
    }

    if(isset($_POST['entregar'])){
        $entregado_por= $_POST['entregado_por'];
        $fecha_entrega= $_POST['fecha_entrega'];

        $query= "UPDATE equipos set entregado_por = '$entregado_por', fecha_entrega = '$fecha_entrega' WHERE id = $id";
        $result_entrega= mysqli_query($conn, $query);

        $_SESSION['message']= 'Equipo entregado';
        $_SESSION['message_type']= 'success';

        header("Location: equipos.php");
    }

?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <div class="card card-body">

                <form action="entregar_pc.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <div class="form-control">

                        <input type="text" autofocus name="entregado_por" class="form-control" placeholder="Entregado por">
                        <input type="date" name="fecha_entrega" class="form-control" placeholder="Fecha de entrega">

                    </div>
                    <button type="submit" name="entregar" class="btn btn-success">
                        Entregar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>