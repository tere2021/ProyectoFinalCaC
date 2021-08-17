<?php 
require_once("vistas/top.php");
include_once ("bd/conexion.php");
$objeto= new Conexion();
$conexion=$objeto->Conectar();

$consulta= "SELECT id, nombre, apellido, email, telefono FROM cliente";
$resultado=$conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consultaMascota= "SELECT idMascota, tipo, idRaza, edad, idDuenio, observaciones FROM mascota";
$resultadoM=$conexion->prepare($consultaMascota);
$resultadoM->execute();
$dataM=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consultaHabitacion= "SELECT idHabitacion, tipoHabitacion, tamanio, cantidad, disponibilidad FROM habitaciones";
$resultadoH=$conexion->prepare($consultaHabitacion);
$resultadoH->execute();
$dataH=$resultadoH->fetchAll(PDO::FETCH_ASSOC);
?>



<!--dashboard-->
<div class="container">
    <div class="row"> 
        <div  class="col-lg-12">
    
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row"> 
        <div  class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaClientes" class="table table-striped table-bordered table-condensed " style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Tipo Mascota</th>
                            <th>Nombre</th>
                            <th>Sweet</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Egreso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($data as $dat) {
                        ?>
                        <tr>
                            <td><?php echo $dat['id'] ?></td>
                            <td><?php echo $dat['nombre'] ?></td>
                            <td><?php echo $dat['apellido'] ?></td>
                            <td><?php echo $dat['email'] ?></td>
                            <td><?php echo $dat['telefono'] ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>     
            </div>
        </div>
    </div>
</div>



<!--modal -->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;
                </span>
                </button>
            </div>
            <form id="formClientes">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                        <div class="check">
                        <h5>Tipo de mascota</h5>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="TipoMascota">
                            <label class="form-check-label" for="TipoMascota">
                                Perro
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="TipoMascota2" >
                            <label class="form-check-label" for="TipoMascota2">
                                Gato
                            </label>
                      
                        </div>
                        <div class="form-group">
                            <label for="nombreMascota" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreMascota">
                        </div>

                        <div class="form-group">
                             <label for="Habitacion" class="col-form-label">Sweet:</label>
                            <select name="Habitacion">
                            <?php
                            foreach($dataH as $datH) {
                       
                                        $idHabitacion=$datH['id'];
                                        $tipoHabitacion=$datH['tipoHabitacion'];
                                        ?>
                      
                               
                                    <option value="<?php echo $idHabitacion; ?>"> <?php echo $tipoHabitacion;?> </option>
                                    <?php
                        }
                        ?>
                            </select>
                        
                           
                        </div>
                        <div class="form-group">
                            <label for="fi" class="col-form-label">Fecha Ingreso:</label>
                            <input type="date" class="form-control" id="fi">
                        </div>
                        <div class="form-group">
                            <label for="fe" class="col-form-label">Fecha Recogida:</label>
                            <input type="date" class="form-control" id="fe">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once("vistas/bottom.php");?>
