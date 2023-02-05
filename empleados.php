<?php include("includes/header.php") ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">

        <!--AVISO DE ESTADO DE OPERACION-->
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>

        <!--TARJETA DEL FORMULARIO-->
            <div class="card card-body">
            <!--FORMULARIO PARA GUARDAR EMPLEADOS-->
                <form action="empleados/save-employe.php" method="post">
                        <div class="form-control">
                            <input type="text" name="nombre" id="" placeholder="Nombre" class="form-control" autofocus>
                            <input type="text" name="apellido" id="" placeholder="Apellido" class="form-control">
                            <input type="number" name="opr" id="" class="form-control" min="1" max="4" value="1">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save-employee" value="Guardar Empleado">
                </form>

            </div>

                
        </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Operador Tecnico</th>
                            <th>Agregado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query =  "SELECT * FROM empleados";
                        $result_employe= mysqli_query($conn, $query);

                        while($row= mysqli_fetch_array($result_employe)){ ?>
                             <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['apellido']?></td>
                                <td><?php echo $row['operador_tecnico']?></td>
                                <td><?php echo $row['agregado'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                        

                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                             </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
                

            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>

