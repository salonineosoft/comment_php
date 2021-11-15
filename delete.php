<?php
include("database.php");
$idd=$_GET['del'];
//if(isset($_POST['delete']))

//echo("hhghgh");
 mysqli_query($conn,"delete from post where user_id='$idd'");












?>