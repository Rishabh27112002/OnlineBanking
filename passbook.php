<html>
<head><script language="javascript">
function printpage()
{
window.print();
}
</script>
<style>
   body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
                 font-family: 'Arial';
 }
 h1{
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
  <h2>Statement</h2>
<?php
$conn= mysqli_connect("localhost","root","","test");
  mysqli_select_db($conn,"test");
 $sql=mysqli_query($conn,"select * from credit");
 ?>
 
<table cellspacing=5 cellpadding=10>
<tr><th>Accountno</th><th>Date</th><th>Amount</th><th>Status</th><th>Debited/credited by</th><th>Netbalance</th></tr> 
<?php

while($di=mysqli_fetch_array($sql))
{                        ?> 
          
<tr><td><?php  echo $di[0];  ?> </td>
<td><?php  echo $di[1];  ?> </td>
<td><?php  echo $di[2];  ?> </td>
<td><?php  echo $di[3];  ?> </td>
<td><?php  echo $di[4];  ?> </td>
<td><?php  echo $di[5];  ?> </td></tr>
<?php   }
?>
</table>
<input type="button" name="print" value="print" onclick="printpage();">
</body>
</html>
