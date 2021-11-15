<?php
include("database.php");
$sql=mysqli_query($conn,"select * from post")

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
        .card{
            margin-left: 100px;
            border: indianred;
        }
        .card-img-top{
            height: 200%;
            width: 200%;
        }
        .btn{
          
            background-color:brown;
            color:white;
            margin-bottom: 1px;
        }
        h3{
            text-align: center;
            font-size: 30px;
            font-family: sans-serif;
            color: cadetblue;
        }
    </style>

</head>
<body>
<div class="row mt-5 ml-2">
    <h3>show all post here</h3>
    <div class="card">
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