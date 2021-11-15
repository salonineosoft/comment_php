<?php


include("database.php");

$iddd= $_GET['comm1'];
  //$commid=$_POST['commid'];
 //echo "DFDFD";
 $arr= mysqli_query($conn,"select * from comment where post_id=$iddd");
  while($pp=mysqli_fetch_assoc($arr))
  {
    
      echo $pp['comments']."<br>";
  }



// showcomment.php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>