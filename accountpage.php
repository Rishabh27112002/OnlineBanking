<html>
<body>
<?php

$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];
$t7=$_POST['t7'];
$t8=$_POST['t8'];
$t9=$_POST['t9'];
$t10=$_POST['t10'];
$t11=$_POST['t11'];
$t12=$_POST['t12'];
$t13=$_POST['t13'];
$t14=$_POST['t14'];
$t15=$_POST['t15'];
$t16=$_POST['t16'];
$t17=$_POST['t17'];
$t18=$_POST['t18'];
$t19=$_POST['t19'];
$t20=$_POST['t20'];
$t21=$_POST['t21'];
$t22=$_POST['t22'];
$t23=$_POST['t23'];
$t24=$_POST['t24'];
$t25=$_POST['t25'];
$t26=$_POST['t26'];
$t27=$_FILES['nm1'];
$t28=$_FILES['nm2'];
$t29=$_POST['nm3'];

move_uploaded_file($t27['tmp_name'],"folder/".$t27['name']);
move_uploaded_file($t28['tmp_name'],"folder/".$t28['name']);
$xx="folder/".$t27['name'];
$xy="folder/".$t28['name'];
echo"$t1<br>";
echo"$t2<br>";
echo"$t3<br>";
echo"$t4<br>";
echo"$t5<br>";
echo"$t6<br>";
echo"$t7<br>";
echo"$t8<br>";
echo"$t9<br>";
echo"$t10<br>";
echo"$t11<br>";
echo"$t12<br>";
echo"$t13<br>";
echo"$t14<br>";
echo"$t15<br>";
echo"$t16<br>";
echo"$t17<br>";
echo"$t18<br>";
echo"$t19<br>";
echo"$t20<br>";
echo"$t21<br>";
echo"$t22<br>";
echo"$t23<br>";
echo"$t24<br>";
echo"$t25<br>";
echo"$t26<br>";
echo"$xx<br>";
echo"$xy<br>";
echo"$t29<br>";
$conn=mysqli_connect("localhost","root","","test");
mysqli_select_db($conn,"test");
$recs=mysqli_query($conn,"insert into bank values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20','$t21','$t22','$t23','$t24','$t25','$t26','$xx','$xy','$t29')");

if($recs!=0)
{
print"<h2>Account Created Successfully!....</h2>";
}
else
{
print"<h2>sorry try again!....</h2>";
}

?>
</body>
</html>