<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;
		
	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		margin-right: 5%;
		margin-left: 5%;
		float: center;
		background-color: #b7bcbd;
		
	}

	</style>
	

     
</head>

<body>
<?php
include('include/db_con.php');
//session_start();
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$roomtype=$_POST['field_1'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$room_nos=$_POST['room_nos'];
$amount=$_POST['roomprice'];

$checkroom= "select count(*) from roomdetail where room_type='".$roomtype."' ";
$check=mysql_query($checkroom) or die (mysql_error($con));
$roomcount=mysql_fetch_array($check);
 $checkcount=$roomcount[0];
if($checkcount>=10)
{
?> <script>alert("Sorry Rooms Are not Available :( please try another Option !!");</script>
<?php }
else{
$s1="INSERT INTO roomdetail (username,checkin_date,checkout_date,room_type,no_of_room,amount)VALUES('".$username."','".$startdate."','".$enddate."','".$roomtype."','".$room_nos."','".$amount."')";
mysql_query($s1) or die (mysql_error($con));
header("location:success.php");
}
}
?>

<div id="contenar">

	<div id="r">
	<form action="registration.php" method="POST">
	<h2 align="center" id="h"><u><i>Book Room</i></u></h2>
	<h3> Welcome <?php //session_start(); 
	if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?> !!!</h3>
        <table width="370" height="70" >
		
          <tr>
            <td width="147">Check in Date</td>
            <td width="210">
            <input name="startdate1" type="date"  value="<?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?>" /></td>
          </tr>
          <tr>
            <td height="25">Check out Date</td>
            <td>
              <input name="enddate1" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?>" onchange='this.form.submit()' /></td>
          </tr>
			
      </table>
	  </form>
		<form action="registration.php" method="POST">
        <table width="371" height="225" >
		
          <tr>
            <td width="145"></td>
            <td width="210">
            <input name="startdate" type="hidden" value=" <?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; }?> "  /></td>
          </tr>
          <tr>
            <td></td>
            <td><input name="username" type="hidden" value="<?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>"  />
              <input name="enddate" type="hidden" value=" <?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }?> "  /></td>
          </tr>
		  <tr>
            <td>Room Type </td>
            <td>
              <select class="text_select" id="field_1" name="field_1" >  
<option value="00">- Select -</option>   
<?php if(isset($_POST['startdate1'])){
$paymentDate = $_POST['startdate1'];
$contractDateBegin = '2013-12-20';
$contractDateEnd ='2014-03-25';

if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd))
{
 $s2="select * from roomtype where room_seson ='high season' ";
$s3=mysql_query($s2);
}
else
{
$s2="select * from roomtype where room_seson='low season' ";
$s3=mysql_query($s2);
}


?>
<?php while($catdata=mysql_fetch_array($s3)) { ?>  <option value="<?php echo $catdata['room_price']; ?>"><?php echo $catdata['room_type']; ?></option>
           <?php } ?>
		   <?php } ?>
           </select></td>
          </tr>
		  <tr>
            <td>Price per Room</td>
            <td>
             Rs <span id="a1"  ></span>           </td>
          </tr>
		   <tr>
            <td>No. of Guest per Room</td>
            <td><input name="guest" type="text " size="10"/></td>
          </tr>
		  <tr>
            <td>No. of Rooms </td>
            <td>
              <input name="room_nos" id="room_nos" type="text " size="10" onChange="gettotal1()" /></td>
          </tr>
		  <tr>
            <td>Total Amount To Pay</td>
            <td>
             <input type="label" name="roomprice" id="total1"  size="10px" readonly="" />           </td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center"> <input type="submit" name="sub" value="Pay & Book" /></td>
          </tr>
       </table>
		</form>
		
		<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;




}
notEmpty()
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('room_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }
			</script>
 
		
	</div>
</div>
</body>
</html>