<?php 
   session_start();
   require 'dbcon.php';
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
            <span class="navbar-brand mb-0 h1" style="color: black; font-size: xx-large; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bolder;">Welcome to Recruit CRM</span>
           
                
          </nav>
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
               
                

                <form class="form-container">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter password">
                    </div>
                   
                    <a href="ajax/home.php"><button type="button" class="btn btn-primary" name="login">Login</button></a>
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
                    if(isset($_POST['login']))
                    {
                        $mail=$_POST['email'];
                        $pass=$_POST['password'];
                        $query = " select * from admin where ='$email' and pwd='$pass'";
                        $runquery = mysqli_query($con,$query);
                        if(mysqli_num_rows($runquery)>0)
                        {
                        $email_temp = mysqli_fetch_assoc($runquery);
                        $db_name = $sid_temp['name'];
                        $db_password=$sid_temp['password'];
                                               
                        $_SESSION['name']= $db_name;

                        $_SESSION['[password]']=$db_password;
                       
                       echo '<script type="text/javascript"> alert("Login Successful") </script>';
                        if($flag==0)
                        {  
                           header('location:profile.php');
                        }
                        else
                        {
                            header('location:resume.php');
                        }
                        
                        }
                        else
                        {
                        echo '<script type="text/javascript"> alert("Ivalid User Mail or Password") </script>';
                        }
                    }
                ?>