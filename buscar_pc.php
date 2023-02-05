<?php include("includes/header.php") ?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-10">

        <!--Buscador-->
            <form action="" class="d-flex" role="search" method="post">
                <input class="form-control me-2" type="number" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="buscar_pc">Buscar</button>
            </form>

            <!--Mensaje-->
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Numero de bien</th>
                            <th>Departamento</th>
                            <th>Recibido por</th>
                            <th>Fecha de entrada</th>
                            <th>Problema</th>
                            <th>Entregado por</th>
                            <th>Fecha de Entrega</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_POST['buscar_pc'])){
                            $num_bien= $_POST['buscar_pc'];
                        
                            $query= "SELECT * FROM equipos WHERE numero_bien LIKE '%$num_bien%'";
                            $result= mysqli_query($conn, $query);
                        
                            if(!$result){
                                die('Query Failed');
                            }
                        
                            $_SESSION['message']= 'Busqueda Completada';
                            $_SESSION['message_type']= 'success';
                        
                            header("Location: buscar_pc.php");

                            while($rows= $result->fetch_array()){ ?>
                                <tr>
                                    
                                    
                                    <td><?php echo $row['numero_bien']?></td>
                                    
                                    <td>
                                        <a href="edit_pc.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <a href="delete_pc.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                        <a href="entregar_pc.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
                                            <i class="bi bi-truck"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>