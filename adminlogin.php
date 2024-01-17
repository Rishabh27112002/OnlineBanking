<html>
<body>
    <?php
    session_start();
    $_SESSION["firstname"]="Rishabh";
    ?>
    <?php
    session_start();
    echo'the session data is:'.$_SESSION["Firstname"];
    $t1=$_GET['t1'];
    $t2=$_GET['t2'];
    $conn=mysqli_connect("localhost","root","","test");
    mysqli_select_db($conn,"test");
    $sql=mysqli_query($conn,"select * from bankadmin where username='$t1' and password='$t2'");
     
    if($di=mysqli_fetch_array($sql))
    {     
			include"admin home.html";
  }
  else
  {
	  echo"incorrect user";
  }
  ?>
</body>
</html>	  