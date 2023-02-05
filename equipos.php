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
            <!--FORMULARIO PARA GUARDAR EQUIPOS-->
                <form action="save-pc.php" method="post">
                    <div class="form-control">
                        <input type="number" name="numero-bien" placeholder="Numero de bien" class="form-control">
                        <input type="text" name="departamento" placeholder="Departamento" class="form-control">
                        <input type="text" name="recibido" placeholder="Recibido por" class="form-control">
                        <input type="text" name="problema" placeholder="problema" class="form-control">
                        <input type="date" name="entregado" placeholder="entregado" class="form-control">
                        <input type="text" name="entregado-por" placeholder="Entregado por" class="form-control">
                    </div>
                        <input type="submit" class="btn btn-success btn-lock" name="save-pc" value="Guardar Equipo" >
                </form>
        </div>

            
            
        <div name="margin" class="col-md-8">
            <a href="buscar_pc.php" class="btn btn-outline-success">
                <i class="bi bi-search"></i>
            </a>
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
                    $query= "SELECT * FROM equipos";
                    $result_pc= mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_pc)){ ?>
                        <tr>
                            <td><?php echo $row['numero_bien']?></td>
                            <td><?php echo $row['departamento'] ?></td>
                            <td><?php echo $row['recibido_por'] ?></td>
                            <td><?php echo $row['fecha_recibido'] ?></td>
                            <td><?php echo $row['problema'] ?></td>
                            <td><?php echo $row['entregado_por']?></td>
                            <td><?php echo $row['fecha_entrega'] ?></td>
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
                </tbody>
            </table>
        </div>


        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>