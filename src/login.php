<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/styling/bootstrap.css">
    
    <link rel="stylesheet" href="../Assets/styling/styleLogin.css">
    <title>Login</title>
</head>
<body>
  
    <section>
        
        <div class="container box">
            
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <form>
                <div class="form-group ">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group ">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required size="45"
                  pattern="[a-zA-Z0-9]{8,20}">
                </div>
                <div class="container">
                    <h6>   forgot password ? <a href="">click here</a> </h6>   
                </div>
                <div class="container">
                    <h6>Dont have an account? <a href="pageInscription.php">Sign up</a></h6>
                </div>
                
                <button type="submit" class="btn btn-secondary">sign in</button>
              </form>
            </div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
    </section>
   
    <script src="../Assets/styling/bootstrap.min.js"></script>
    <script src="../Assets/styling/jquery-2.1.3.min.js"></script>
</body>
</html>