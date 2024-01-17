<?php
	session_start();
	?> 
<html> 
<head>
<style type="text/css">
        h1 {
        text-align: center;
        color: black;
        background: radial-gradient(rgb(230, 243, 41), rgb(238, 46, 46));
        padding: 20px;
        font-family: lucida calligraphy;
        }
	a:link,a:visited
	{
 
color:green;
background-color:white;
width:120px;
text-align:center;
 text-decoration:none;
}

a:hover,a:active
{
 
color:blue;
background-color:yellow;
width:120px;
text-align:center;
 
text-decoration:none;
}
body  
{  
   background: linear-gradient(135deg, #71b7e6, #9b59b6);  
    font-family: 'Arial';  
}  
	
</style>
</head>
<body>
<h1>All in One Bank</h1>
<?php
$t1=$_GET['t1'];
$t2=$_GET['t2'];
  $conn= mysqli_connect("localhost","root","","test");
  mysqli_select_db($conn,"test");
 $sql=mysqli_query($conn,"select * from bank where Accountno='$t1'and Mobileno='$t2'");
 ?>
 
<table cellspacing=5 cellpadding=10>
<?php
if($di=mysqli_fetch_array($sql))
{                        ?>            
<tr><td>First Name-</td><td><?php  echo $di[0];  ?> </td>
<td>Last Name-</td><td><?php  echo $di[1];  ?> </td>
<td>Mobile no-</td><td><?php  echo $di[10];  ?> </td>
<td>Accountno-</td><td><?php  echo $di[25];  ?> </td>
<tr><td>Balance-</td><td><?php  echo $di[28];  ?> </td></tr>
<tr><td>image</td><td><img src=<?php  echo $di[26]?> height=200 width=200> </td>
<td>Signature</td><td><img src=<?php echo $di[27]?> height=200 width=200></td></tr>
<?php
$_SESSION["Accountno"]=$di[25];
$_SESSION["Balance"]=$di[28];
?>
<?php	}
?>
</table>
<table cellspacing=10 cellpadding=20 border=1>
 <tr><td><a href="credit2.php"target="#">Credit</a></td>
<td><a href="debit2.php" target="#">Debit</a></td>
<td><a href="passbook.php"target="#">print Passbook</a></td></tr>
</table>

</body></html>