<?php 
   require 'dbcon.php';
   session_start();
   error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recruit CRM</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>
    
    <section class="container-fluid bg">
        <nav class="navbar fixed-top">
            <span class="navbar-brand mb-0 h1" style="color: black; font-size: xx-large; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bolder;">Register Page</span>
           
                
          </nav>
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
               
                

                <form class="form-container-reg" action="register.php" method="post">
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                        
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email">
                      
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="phone"  placeholder="Enter contact">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" placeholder="enter password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                  </form>

            </section>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>


<?php
    if (isset($_POST['register'])) 
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $query= "insert into user (name,email,phone,password) values ($name','$email','$phone','$password')";
        $runquery = mysqli_query($con,$query);
        if($runquery)
        {
          echo '<script type="text/javascript">alert("Registration successful") </script>';
          header("location:login.php");
        }
        else
        {
          echo '<script type="text/javascript"> alert("Registration Unsuccessful") </script>';
        }
     }
?>