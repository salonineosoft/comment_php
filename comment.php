<?php
include("database.php");

$iddd= $_GET['comm1'];
if(isset($_POST['comment']))
{
  $comm=$_POST['comments'];
  //$commid=$_POST['commid'];
 
  mysqli_query($conn,"insert into comment (comments,post_id) values('$comm',$iddd)");

header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image: url("white7.jpg");
    }
    </style>
</head>
<body>
  <div class="container">
<form method="POST">
        <input type="text" name="comments" placeholder="comment">  
        <input type="submit" name="comment">
    </form>
  </div>
    </body>
    </html>

    