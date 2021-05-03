<?php
session_start() ;
$show = 0 ;
if (isset($_SESSION["show"])) {
    $show = 1;
}
unset($_SESSION["show"]) ;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/styling/styleLogin.css">
    <title>Sign in</title>
</head>
<body>
  
    <section>
        
        <div class="container box">
            
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <form action="signUpProcess.php" method="post">
                <div class="form-group">
                    <?php if ($show==1) { ?>
                    <div class="alert alert-dismissible alert-danger ">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Email already used</strong>  , try again.
                </div>
                    <?php } ?>
                  <label for="exampleInputEmail1">Email address</label>
                  <input  name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example: xyz@gmail.com" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="row">
                    <div class="col"> First name
                      <input name="firstName"type="text" class="form-control" required size="45"
                      pattern="[a-zA-Z]{2,40}"   >
                    </div>
                    <div class="col">Last name
                      <input  name="lastName" type="text" class="form-control" required size="45"
                      pattern="[a-zA-Z]{2,40}" >
                    </div>
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input  name="password" type="password" class="form-control" id="exampleInputPassword1" required size="45"
                  pattern="[a-zA-Z0-9]{8,20}" >
                  <small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain only letters and numbers at the same time
</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Retype Password</label>
                    <input type="password" class="form-control " id="exampleInputPassword2" required size="45"
                    pattern="[a-zA-Z0-9]{8,20}">
                  </div>
                  <div class="container">
                    <h6>Already have an account? <a href="login.php">Sign in</a></h6>
                </div>
                <button type="submit" class="btn btn-secondary ">Create Account</button>
                
              </form>
            </div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </section>


   
   
    <script src="../Assets/styling/bootstrap.min.js"></script>
    <script src="../Assets/styling/jquery-2.1.3.min.js"></script>
    <script src="../scripts/controleFormInscrit.js"></script>
</body>
</html>