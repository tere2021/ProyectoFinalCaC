//codigo data tables
$(document).ready(function(){
    tablaClientes=$("#tablaClientes").DataTable({
            "columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"     
        }],
    //cambiamos el lenguaje al español
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast":"Último",
            "sNext":"Siguiente",
            "sPrevious": "Anterior"
         },
         "sProcessing":"Procesando...",
     }
    });


    $("#btnNuevo").click(function () { 
        //resetea el modal
        $("#formClientes").trigger("reset");
        //podemos aplicar estilos
        $(".modal-header").css("background-color","#a4d929");
        $(".modal-header").css("color","#fff");
        //usamos el mismo form para alta y modific
        $(".modal-title").text("Nuevo Cliente");

        $("#modalCRUD").modal("show");
        id=null;
        opcion=1;//alta
    });

    var fila; //captura la fila para Editar o Borrar el registro
    //boton EDITAR
    $(document).on("click",".btnEditar", function () { 
        fila= $(this).closest("tr");
        id=parseInt(fila.find('td:eq(0)').text());
        nombre=fila.find('td:eq(1)').text();
        apellido=fila.find('td:eq(2)').text();
        email=fila.find('td:eq(3)').text();
        telefono=fila.find('td:eq(4)').text();
        TipoMascota=fila.find('td:eq(5)').text();
        nombreMascota=fila.find('td:eq(6)').text();
        sweet=fila.find('td:eq(7)').text();
        fi=fila.find('td:eq(8)').text();
        fe=fila.find('td:eq(9)').text();

        $("#nombre").val(nombre);
        $("#apellido").val(apellido);
        $("#email").val(email);
        $("#telefono").val(telefono);
        $("#TipoMascota").val(TipoMascota);
        $("#nombreMascota").val(nombreMascota);
        $("#sweet").val(sweet);
        $("#fi").val(fi);
        $("#fe").val(fe);

        opcion =2;//editar
        $(".modal-header").css("background-color","#2a0fa6");
        $(".modal-header").css("color","#fff");
        $(".modal-title").text("Editar Cliente");

        $("#modalCRUD").modal("show");
    });

     //boton BORRAR
     $(document).on("click", ".btnBorrar", function (){ 
        fila= $(this);
        id= parseInt($(this).closest("tr").find('td:eq(0)').text());
        opcion =3;//borrar
        var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
        if(respuesta){
            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                dataType: "json",
                data:{opcion:opcion, id:id},
                success: function(){
                    tablaClientes.row(fila.parents('tr')).remove().draw();
                }
            });
         }
    });


    $("#formClientes").submit(function(e){
        //evita q recargue la pag
        e.preventDefault();
        nombre=$.trim($("#nombre").val());
        apellido=$.trim($("#apellido").val());
        email=$.trim($("#email").val());
        telefono=$.trim($("#telefono").val());
        TipoMascota=$.trim($("#TipoMascota").val());
        nombreMascota=$.trim($("#nombreMascota").val());
        sweet=$.trim($("#sweet").val());
        fi=$.trim($("#fi").val());
        fe=$.trim($("#fe").val());



        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data:{nombre:nombre, apellido:apellido, email:email, telefono:telefono, TipoMascota:TipoMascota, nombreMascota:nombreMascota, sweet:sweet, fi:fi, fe:fe,id:id, opcion:opcion},
            success: function(data){
                console.log(data);
                id=data[0].id;
                nombre=data[0].nombre;
                apellido=data[0].apellido;
                email=data[0].email;
                telefono=data[0].telefono;
                TipoMascota=data[0].TipoMascota;
                nombreMascota=data[0].nombreMascota;
                sweet=data[0].sweet;
                fi=data[0].fi;
                fe=data[0].fe;
                
                if(opcion == 1) {
                    tablaClientes.row.add([id,nombre, apellido, email, telefono]).draw();
                }
                else {
                    tablaClientes.row(fila).data([id,nombre, apellido, email, telefono]).draw();
                }
            }        
        });
        $("#modalCRUD").modal("hide");  
 });
});