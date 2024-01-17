<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleteaccount</title>
</head>
<body>
<?php
$t1=$_GET['t1'];
$t2=$_GET['t2'];
  $conn= mysqli_connect("localhost","root","","test");
  mysqli_select_db($conn,"test");
 $sql=mysqli_query($conn,"delete from bank where Accountno=('$t1') and Mobileno=('$t2')");
 ?> 
</body>
</html>