
<?php
session_start();
?>
<html>
<head>
<style type="text/css">
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

?>

<h2>Credit Amount</h2>
<form name="frm"method="GET" action="credit.php" target="self">
<table >
<tr><td>Date: </td><td><input type="date" name="t2"id="demo"/></td></tr>
<tr><td>Enter amount to deposite</td><td><input type="number" name="t3" size="20"></td></tr>
<tr><td>deposited by</td><td><input type="text" name="t5" size="30"></td></tr>
<tr><td><input type="submit"value="submit"></td></tr>

</table>
</form>
</body>
</html>