<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="../images/ico.png" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylesD.css">
        <link rel="stylesheet" href="../pluggins/sweetalert2.min.css">
       
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login ">
        <div><img src="../images/LOGO.png" class="center-block" width="120px" alt="" style="padding-bottom: 10px;"></div>
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">LOGIN</span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
        
        
    <script  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>  
     <script src="../js/bootstrap.min.js"></script>    
     <script src="../js/popper.min.js"></script>    
        
     <script src="../pluggins/sweetalert2.all.min.js"></script>    
     <script src="codigoAjax.js"></script>    
    </body>
</html>