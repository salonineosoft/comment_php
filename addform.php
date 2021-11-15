<?php
include("database.php");
session_start();
$email = $_SESSION['email'];
$idd = $_SESSION['user_id'];
if(isset($_POST['sub']))
{
    $title=$_POST['title'];
    $des=$_POST['description'];
    $tmp=$_FILES['image']['tmp_name'];
    $fname=$_FILES['image']['name'];

    $desp ="user/";
    move_uploaded_file($tmp,"user/".$fname);
    $image="user/".$fname;

    $sql = mysqli_query($conn,"insert into post(title,description,image,user_id) values('$title','$des','$image',$idd)");
    header("location:dashboard.php");
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
        h3{
            color:cadetblue;
        }
        body{
            background-image: url("white7.jpg");
            margin-left:290px;
        }
        .head{
            margin-left: 130px;
        }
    </style>
</head>
<body>
<h3 class="head mt-5">Add Post Here</h3>
    <form method="POST" enctype="multipart/form-data">
    <div class="container mt-5">
    <input type="text" class="form-control col-8" name="title" placeholder="title"><br>
    <input type="text" class="form-control col-8" name="description" placeholder="description"><br>
    <input type="file" name="image"><br>
    <input type="submit" name="sub"  class="btn btn-success mt-3 col-8">
  </div>
</body>
</html>