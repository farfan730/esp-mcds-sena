<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Ejemplo de  MVC</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Pacifico" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    
  </head>

  <body style="font-family: 'Gloria Hallelujah', cursive;">

        <div class="container">  
            <div class="row"> 
             <div class="col-md-8 offset-md-2">                
                <h1 class="text-center"> <i class="fa fa-users"></i>CRUD MVC</h1>
                <hr>              
                  <a href="?page=add" class="btn btn-success"><i class="fa fa-plus"> Add User </i></a>
                  <br> <br>

                  <table class="table table-striped table-hover table-dark">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>FirstName</th>
                        <th>lastName</th>
                        <th>email</th>                        
                        <th>Actions</th>
                      </tr>              
                    </thead>

                    <tbody>
                      <?php foreach ($datos as $user): ?>
                         <tr>
                              <td><?php echo $user['id']; ?></td>
                              <td><?php echo $user['firstName']; ?></td>
                              <td><?php echo $user['lastName']; ?></td>
                              <td><?php echo $user['email']; ?></td>
                             <td>
                                <a href="?page=show&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-search"></i></a>
                                <a href="" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                             </td>
                         </tr> 
                      <?php endforeach ?>       

                    </tbody>








                  </table>
              </div>      
            </div>
        </div>


      <script src="public/js/jquery-3.3.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script>
      
     $(document).ready(function(){


      <?php if (isset($_SESSION['status'])): ?>




      <?php endif ?>


      swal(
            'Mennssage',
            '<?php echo $_SESSION['message'] ?>',
            '<?php echo $_SESSION['status'] ?>'
          )


     });




    </script>


  </body>
</html>

