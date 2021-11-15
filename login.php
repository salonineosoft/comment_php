<?php
include("database.php");
$error='';
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if(!empty($email) && !empty($pass))
    {
      $sql =mysqli_query($conn,"select * from userdata where email='$email'");
      $arr=mysqli_fetch_assoc($sql);
      if(isset($arr['email']))
      {
          if($arr['password']==$pass)
          {
             session_start();
             $_SESSION['email']=$arr['email'];
             $_SESSION['user_id']=$arr['id'];
             //print_r($_SESSION);
             header("location:dashboard.php");
          }
          else
          {
              $error="password does not match";
          }
      }
      else{
          $error="user not register";

      }
    }



    else{
        $error="please fill all the field";
        
    }
}








?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
      .form-text{
        font-size: 12px;
      }
    </style>
</head>
<body>
<div class="header mt-3  text-center">
<h2>login form<h2>
<form method="POST" enctype="multipart/form-data">
    <div class="container mt-3 col-5">
    <?php
if(!empty($error)){
?>
<div class="alert alert-danger col-auto"><?=$error?></div>
<?php
}
?>

  <div class="form-group">
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit"  value="login" name="login" class="btn btn-primary">Submit</button>
  <a href="register.php" value="register" class="btn btn-success">register</a>
</form>
</div>
</body>
</html>