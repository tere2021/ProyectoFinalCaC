$('#formLogin').submit(function (e) { 
    e.preventDefault();
    
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
   
    if(usuario.length == "" || password.length == ""){
        Swal.fire({
            type:'warning',
            title: 'Debe ingresar un usuario y/o contraseña',
        });
        return false;
    } else{
        $.ajax({
            url:"login.php",
            type: "POST",
            dataType:"json",
            data: {usuario:usuario, password:password},
            success: function (data) {
                if(data=='null'){
                    Swal.fire({
                        type: 'error',
                        title: 'Usuario y/o contraseña incorrecto',
                    });
                }else{
                    Swal.fire({
                        type: 'sucess',
                        title: 'Conexion exitosa!',
                        confirmButtonColor: '#a4d929',
                        confirmButtonText: 'Ingresar'
                    }).then((result)=>{
                        if(result.value) {
                            window.location.href="dashboard.php";
                        }
                    })
                }
                
            }
        });
    }
      
    
});