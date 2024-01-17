<html>
<body>
<?php

$t1=$_GET['t1'];
$t2=$_GET['t2'];
$conn=mysqli_connect("localhost","root","","test");
mysqli_select_db($conn,"test");
$recs=mysqli_query($conn,"update bankadmin  set password='$t2' where username='$t1'");

if($recs!=0)
{
print"<h2>data update!....</h2>";
}
else
{
print"<h2>sorry try again!....</h2>";
}

?>
<a href="adminlogin.html">Go to login page</a>
</body>
</html>