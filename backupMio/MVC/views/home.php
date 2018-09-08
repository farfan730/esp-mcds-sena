<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Ejemplo de  MVC</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </head>

  <body style="font-family: 'Pacifico', cursive;font-weight: 300;">


   <h1> Crud - MVC </h1>
    <strong>nombre:</strong> <?php echo $datos['nombre']; ?>
    <br>
    <strong>edad:</strong> <?php echo $datos['edad']; ?>
    <br>
    <strong>sexo:</strong> <?php echo $datos['sexo']; ?>
    <br>
    <strong>apellido:</strong> <?php echo $datos['apellido']; ?>
    <br>
    <br>    
   <br>


   <?php echo $nombre . ' ' . $apellido; ?>
   <?php echo $edad . ' ' . $sexo; ?>

  </body>
</html>

