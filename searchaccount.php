<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
</head>
<body>
<?php
$t1=$_GET['t1'];
$t2=$_GET['t2'];
  $conn= mysqli_connect("localhost","root","","test");
  mysqli_select_db($conn,"test");
 $sql=mysqli_query($conn,"select * from bank where Accountno=('$t1') and Mobileno=('$t2')");
 ?>
 <table  border=1>
<?php
while($di=mysqli_fetch_array($sql))
{                        ?>            
<tr><td>First Name</td><td><?php  echo $di[0];  ?> </td></tr>
<tr><td>Last Name</td><td><?php  echo $di[1];  ?> </td></tr>
<tr><td>Gender</td><td><?php  echo $di[2];  ?> </td></tr>
<tr><td>Date of Birth</td><td><?php  echo $di[3];  ?> </td></tr>
<tr><td>Fathers Name</td><td><?php  echo $di[4];  ?></td></tr>
<tr><td>Mothers Name</td><td><?php  echo $di[5];  ?></td></tr>
<tr><td>Nattionality</td><td><?php  echo $di[6];  ?></td></tr>
<tr><td>Martial Status</td><td><?php  echo $di[7];  ?></td></tr>
<tr><td>Aadhar Number</td><td><?php  echo $di[8];  ?></td></tr>
<tr><td>Pan Number</td><td><?php  echo $di[9];  ?></td></tr>
<tr><td>Mobile no</td><td><?php  echo $di[10];  ?></td></tr>
<tr><td>Email Id</td><td><?php  echo $di[11];  ?></td></tr>
<tr><td>Permanent Address</td><td><?php  echo $di[12];  ?></td></tr>
<tr><td>Residential Address </td><td><?php  echo $di[13];  ?></td></tr>
<tr><td>City</td><td><?php  echo $di[14];  ?></td></tr>
<tr><td>State</td><td><?php  echo $di[15];  ?></td></tr>
<tr><td>Country</td><td><?php  echo $di[16];  ?></td></tr>
<tr><td>PIN</td><td><?php  echo $di[17];  ?></td></tr>
<tr><td>Religion</td><td><?php  echo $di[18];  ?></td></tr>
<tr><td>Category</td><td><?php  echo $di[19];  ?></td></tr>
<tr><td>Educational Qualification</td><td><?php  echo $di[20];  ?></td></tr>
<tr><td>Occupation type</td><td><?php  echo $di[21];  ?></td></tr>
<tr><td>Nomminee Name</td><td><?php  echo $di[22];  ?></td></tr>
<tr><td>Relation with nomminee</td><td><?php  echo $di[23];  ?></td></tr>
<tr><td>Account type</td><td><?php  echo $di[24];  ?></td></tr>
<tr><td>Account no</td><td><?php  echo $di[25];  ?></td></tr>
<tr><td>image</td><td><img src=<?php  echo $di[26]?> height=200 width=200> </td></tr>
<tr><td>Signature</td><td><img src=<?php echo $di[27]?> height=200 width=200></td></tr>
<tr><td>Balance </td><td><?php  echo $di[28];  ?></td></tr>


<?php	}
?> 
</body>
</html>