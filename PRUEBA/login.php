
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>   
    <div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
         <br>   
        <div class="card bg-info">
      
            <div class="card-header text-center text-light bg-secondary">
               <h3>Bienvenido</h3>
                  
            </div>
           
            <div class="card-body m-3 bg-primary">
            
                <form method="POST" action="">
                  
                <?php 
                include("conexion.php");
                include("form.php");
                ?>  

                <input type="text" name="nombre_usuario"  class="form-control" id="" placeholder = "Nombre de Usuario"><br>
                <input type="password" name="contraseña"  class="form-control" id="" placeholder = "Ingrese la Contraseña"><br>
                <input name = "guardar" class="btn btn-success" type="submit" value="Iniciar Sesion">
                <!-- <input name = "registrar" class="btn btn-success float-sm-end" type="submit" value="Registrarse"> -->
            </form>
            
                <a href="registrar.php" class="text-light float-end">Registrar</a>
            </div>
           
            <div class="card-footer text-muted">
                
            </div>
        </div>
        
        
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
</body>
</html>
