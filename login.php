<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="description" content="Veterinaria Lolo">
    <meta name="keywords" content="Veterinaria">   
    <meta name="author" content="Codo a Codo 4.0">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" href="./images/ico.png">
    <title>Veterinaria Lolo</title>

    <!-- Link´s CSS -->
  
    <link rel="stylesheet" href="./css/signin.css">           
</head>
<body>
<!-- Login-->
<div class="cod-container">
        <div class="form-header" >
             <img src="./images/LOGO.png" alt="Logo">
        </div>  

        <div class="form-content">
            <form action="checklogin.php" method="post" target="_blank" class="cod-form">
                <div class="form-title">
                    <h3>Iniciar Sesión</h3>
                </div>

                <div class="input-group">
                    <label class="label" for="inputEmail">Email</label>
                    <input type="email" class="form-input" name="inputEmail" id="inputEmail">
                </div>
                <div class="input-group">
                    <label class="label" for="inputPassword">Contraseña</label>
                    <input type="password" class="form-input" name="inputPassword" id="inputPassword">
                </div>
                <div class="input-group">
                    <input type="submit" class="form-input" value="Iniciar Sesión">
                    <p>No tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
            </form>
        </div>

        <div class="form-content">
            <form action="#" class="cod-form">
                <div class="form-title">
                    <h3>Registrate Gratis</h3>
                </div>

                <div class="input-group">
                    <label class="label" for="reg-correo">Correo</label>
                    <input type="email" class="form-input" name="reg-correo" id="reg-correo">
                </div>

                <div class="input-group">
                    <label class="label" for="reg-pass">Contraseña</label>
                    <input type="password" class="form-input" name="reg-pass" id="reg-pass">
                </div>

                <div class="input-group">
                    <label class="label" for="reg-rep-pass">Repetir Contraseña</label>
                    <input type="password" class="form-input" name="reg-rep-pass" id="reg-rep-pass">
                    
                </div>

                <div class="input-group">
                    <label class="label" for="reg-nombre">Nombre</label>
                    <input type="text" class="form-input" name="reg-nombre" id="reg-nombre">
                    
                </div>
                <div class="input-group">
                    <label class="label" for="reg-ape">Apellido</label>
                    <input type="text" class="form-input" name="reg-ape" id="reg-ape">
                    
                </div>
                <div class="input-group">
                    <label class="label" for="reg-tel">Telefono</label>
                    <input type="tel" class="form-input" name="reg-tel" id="reg-tel">
                </div>
           

                <div class="input-group">
                    <input type="submit" class="form-input" value="Registrate">
                    <p>Ya tienes cuenta? <a href="#" class="alt-form">Ingresa aquí</a></p>
                </div>
               
            </form>
        </div>
</div>  

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/form.js"></script>
</body>
</html>