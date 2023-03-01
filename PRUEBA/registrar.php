<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
               <h3>Registro de usuario</h3>
                  
            </div>
           
            <div class="card-body m-3 bg-primary">

                <form method="POST" action="registro.php">
                  <input type="text" name="nombre"  class="form-control" id="" placeholder = "Ingrese su Nombre"><br>  
                  <input type="text" name="nombre_usuario"  class="form-control" id="" placeholder = "Nombre de Usuario"><br>
                  <input type="password" name="contraseña"  class="form-control" id="" placeholder = "Ingrese la Contraseña"><br>
                  <!-- <input type="password" name="contraseña2"  class="form-control" id="" placeholder = "Confirme la Contraseña"><br> -->
                  <button name = "registrarse" class="btn btn-success" type="submit" >Registrarse</button>

              </form>
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

            
