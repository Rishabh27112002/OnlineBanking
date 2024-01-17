<?php
session_start();
?>
<html>
<head>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            font-family: 'Arial';
}
        h1 {
        text-align: center;
        color: black;
        background: radial-gradient(rgb(230, 243, 41), rgb(238, 46, 46));
        padding: 20px;
        font-family: lucida calligraphy;
    }
        </style>
        </head>
<body>
<h1>All in One Bank</h1>
<?php
echo"Accountno is".$_SESSION["Accountno"];
echo"Balance is".$_SESSION["Balance"];

$t1=$_SESSION["Accountno"];
$t6=$_SESSION["Balance"];
$t4="credit";
$t2=$_GET['t2'];
$t3=$_GET['t3'];
$t5=$_GET['t5'];
$x=$t6+$t3;
$y=$t1;
$conn=mysqli_connect("localhost","root","","test");
mysqli_select_db($conn,"test");
$recs=mysqli_query($conn,"insert into credit values('$t1','$t2','$t3','$t4','$t5','$x')");
if($recs!=0)
{
print"<h2>credited successfully!....</h2>";

}
else
{
print"<h2>sorry try again!....</h2>";
}

?>
<?php
$conn=mysqli_connect("localhost","root","","test");
mysqli_select_db($conn,"test");
$recs=mysqli_query($conn,"update bank set Balance='$x' where Accountno='$y'");
echo"updated balance=$x";
?>
</body>
</html>