<html>
<body>
    <?php
    $t1=$_GET['t1'];
    $t2=$_GET['t2'];
    $conn=mysqli_connect("localhost","root","","test");
    mysqli_select_db($conn,"test");
    $sql=mysqli_query($conn,"select * from tree where username='$t1' and password='$t2'");
     
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