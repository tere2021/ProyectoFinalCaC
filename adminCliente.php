<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>
    <center>
        <h1 class="mb-5">Panel admin Clientes</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col" >Nombre</th>
                <th scope="col" >DNI</th>
                <th scope="col" colspan="3">Nro. Mascotas</th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td rowspan="1"><button type="button" class="btn btn-secondary btn col-4">Modificar</button></td>
                <td rowspan="1"><button type="button" class="btn btn-danger btn col-4">Eliminar</button></td>
            </tr>
            </tbody>
        </table>

        <div class="row container"  >
            <button type="button" class="btn btn-primary btn col-2">Agregar</button>
        </div>

    </center>
<?php require_once("endofpage.php");

