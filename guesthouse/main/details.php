<?php
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("db_hotel",$con);
	
	
?>
<!doctype html>
<html class="no-js" lang="">

<head>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="418" border="1">
    <tr>
      <td width="84" height="66">customer id </td>
      <td width="99">check-in date</td>
      <td width="98">check-out date </td>
      <td width="49">adult</td>
      <td width="54">children</td>
    </tr>
    <tr>
	<?php 
	$tbl=mysql_query("select * from tbl_hotel");
	
	while($r=mysql_fetch_array($tbl))
	{
	?>
      <td height="42"><?php  echo $r["cust_id"]; ?></td>
      <td><?php  echo $r["checkin"]; ?></td>
      <td><?php  echo $r["checkout"]; ?></td>
      <td><?php  echo $r["adult"]; ?></td>
      <td><?php  echo $r["children"]; ?></td>
    </tr>
	<?php 
	 }
	?>
  </table>
</form>  
</body>

</html>
