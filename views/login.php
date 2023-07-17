<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="views/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- ejecuta inmediatamente al montarse la pag-->
    <script>
      if(sessionStorage.getItem('user_id') !== null) {
        window.location.href = 'index.php?action=servicios';
      }
    </script>
</head>
<body>

    <div class="container">
        <div class="form-content">
            <h1 id="title">INICIAR SESIÓN</h1>
            <?php  
                include "controller/login.php";
            ?>
            <form method="POST" action="">
                <div class="input-group">
                    <div class="input-field" id="nameInput">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Usuario" name="usuario">
                    </div>
                    <div class="input-field" id="apeInput">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                    </div>
                </div>    
                <div class="btn-field">
                    <input type="submit" value="Iniciar sesión" name="ingresar">
                </div>

            </form>
        </div>
    </div>
</body>
</html>