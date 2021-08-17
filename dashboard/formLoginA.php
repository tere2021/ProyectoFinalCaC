<?php require_once("vistas/head.php");?>

<!-- Login-->
<div id="login" >
    <h3 class="text-center display-4"></h3>
        <img class="centrado" src="../images/LOGO.png" alt="Logo" >

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center"> 
            <div id="login-column" class="col-md-6">

             <div id="login-box" class="col-md-12 bg-light text-dark">
                    <form id="formLogin" class="form"  action=""   method="post">
                        <h3 class="text-center text-dark">Iniciar Sesión</h3>
                    
                        <div class="form-group">
                            <label  for="inputEmail" class="text-dark">Email</label>
                            <input type="email" name="inputEmail" id="inputEmail"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label  for="inputPassword" class="text-dark">Contraseña</label>
                            <input type="password"  name="inputPassword" id="inputPassword" class="form-control">
                        </div>
                        <div class="form-group  text-center">
                            <input type="submit" name="submit" class="btn btn-lg btn-block" value="Iniciar Sesión">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  


<?php require_once("vistas/endofpage.php");?>