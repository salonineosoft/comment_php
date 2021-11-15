<?php
include("database.php");
$error='';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if(!empty($name) && !empty($email) && !empty($pass))
    {
       $sql=mysqli_query($conn,"insert into userdata(name,email,password) values('$name','$email','$pass')");
       header("location:login.php");
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
       .header{
           color:black;
           
       }
      .btttn{
          margin-left:105px;
      }
       
       
        
    </style>

</head>
<body>
    <div class="header text-center">
<h2>Registration form<h2>
</div>
<div class="container">
<form  method="POST" enctype="multipart/form-data">
    <div class="container mt-5 col-7">
    <?php
if(!empty($error)){
?>
<div class="alert alert-danger col-auto"><?=$error?></div>
<?php
}
?>
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="btttn">
  <button type="submit" name="submit" class="btn btn-primary ml-5">Register</button>
  <a href="login.php" type="submit" name="submit" class="btn btn-success">Login</a>
  </div>
</form>
</div>
</div>
</body>
</html>