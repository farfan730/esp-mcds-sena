<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Show User</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Pacifico" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  </head>

  <body style="font-family: 'Gloria Hallelujah', cursive;">

        <div class="container">  
            <div class="row"> 
              <div class="col-md-8 offset-2">                
                <h1 class="text-center"> <i class="fa fa-users"></i>CRUD MVC</h1>
                <hr>              
                 <h2> <i class="fa fa-search"></i>Show User</h1>
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="./">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Show User</li>
                    </ol>
                </nav>


                <table class="table table-striped table-dark">
                	
                	<?php foreach ($datos as $user): ?>
                		<tr>
                			<th> Id: </th>
                			<td><?php echo $user['id']; ?></td>
                		</tr>

                		<tr>
                			<th> Full Name: </th>
                			<td><?php echo $user['firstName']."".$user['lastName']; ?></td>
                		</tr>

                		<tr>
                			<th> E Mail: </th>
                			<td><?php echo $user['email']; ?></td>
                		</tr>

                		<tr>
                			<th> Phone Number: </th>
                			<td><?php echo $user['phoneNumber']; ?></td>
                		</tr>

                		<tr>
                			<th> Address: </th>
                			<td><?php echo $user['address']; ?></td>
                		</tr>


                	<?php endforeach ?>

                </table>

              



              
              </div>      
            </div>
        </div>


  </body>
</html>

