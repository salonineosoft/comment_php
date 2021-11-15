<?php
include("database.php");
session_start();
$email=$_SESSION['email'];

//print_r( $_SESSION);
$idd = $_SESSION['user_id'];

$sql=mysqli_query($conn,"select * from post where user_id='$idd'");

if(isset($_POST['comment']))
{
  $comm=$_POST['comments'];
  //$commid=$_POST['commid'];
 
  mysqli_query($conn,"insert into comment (comments) values('$comm')");
}

//   $delid=$_GET['del'];
//  //if(isset($_POST['delete']))

//  //echo("hhghgh");
//  mysqli_query($conn,"delete from post where user_id=$delid");


?>



<!DOCTYPE html>
<html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
      .icon{
          color:white;
          margin-left:450px;
      }
    </style>
</head>
<body>

    <!-----nav bar-------->
<?php
include("nav.php");
?>

<!---------------modal comment------------------>

<!---------------------comment modal end---------------------->
<!---------navbar end------------->
<div class="row mt-5 ml-2">
<?php while($arr = mysqli_fetch_assoc($sql))
{
    ?>
   
<div class="card ml-3" style="width: 18rem;">
  <img class="card-img-top" src="<?=$arr['image']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$arr['title']?></h5>
    <p class="card-text"><?=$arr['description']?></p>
    <!-- <h5 class="card-title"><?=$arr['id']?></h5> -->
     <!-- <a href="delete.php?del=<?php echo $arr['id'];?>" name="delete" class="btn btn-primary">delete</a>  -->
    <a href="comment.php?comm1=<?php echo $arr['id'];?>" type="button" class="btn btn-primary" name="comment">comment</a> 
    <a href="showcomment.php?comm1=<?php echo $arr['id'];?>" type="button" class="btn btn-primary" name="comment">show comments</a>

  </div>
</div>

</div>
<?php
}
?>
</div>
</body>
</html>