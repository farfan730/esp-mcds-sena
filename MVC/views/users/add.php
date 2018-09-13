<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <title>Add User</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Pacifico" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

  </head>

  <body style="font-family: 'Gloria Hallelujah', cursive;">

        <div class="container">  
            <div class="row"> 
             <div calss="col-md-8 offset-2">                
                <h1 class="text-center"> <i class="fa fa-users"></i>CRUD MVC</h1>
                <hr>              
                 
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="./">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Add User</li>
                    </ol>
                </nav>

                <form action="" method="post">
                  <input type="hidden" name="action" value="add">

                  <div class="form-group">
                    <label for=""><strong>FirstName</strong></label>
                    <input type="text" name="firstName" class="form-control" placeholder="first Name">                    
                  </div>  

                   <div class="form-group">
                    <label for=""><strong>Last Name</strong></label>
                    <input type="text" name="lastName" class="form-control" placeholder="last Name">                    
                  </div>

                  <div class="form-group">
                    <label for=""><strong>E Mail</strong></label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail">                    
                  </div> 

                  <div class="form-group">
                    <label for=""><strong>Phone Number</strong></label>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number">                    
                  </div> 


                   <div class="form-group">
                    <label for=""><strong>Address</strong></label>
                    <input type="text" name="address" class="form-control" placeholder="Adress" required>                    
                  </div> 


                  <div class="form-group">
                   
                    <button class="btn btn-success" type="submit">
                      <i class="fa fa-save"></i>Save
                    </button>  

                    <button class="btn btn-dark" type="reset">
                      <i class="fa fa-broom"></i> Reset
                    </button> 

                  </div> 

                </form>



              
              </div>      
            </div>
        </div>


  </body>
</html>

