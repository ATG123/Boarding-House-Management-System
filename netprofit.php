<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: #D5DBDB;
}
li.dropdown {
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F4ECF7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover {background-color: #CB4335;
color:white;}
.dropdown:hover .dropdown-content 
{
    display: block;
}

body
{
font-size:18px;
font-family:Garamond;
background-image: url('hostel6.jpg');
background-size: cover;
}

div {
    border-radius: 5px;
    background-color: #D5DBDB;
    opacity:0.85;
   color:black;
    padding: 20px;  
    width: 250px;
    border: 20px red;
    <!--margin-left: 100px;-->
    <!--margin-top: 75px;-->

    border: 2px solid #FCF3CF;

}
table
{
border-collapse:collapse;
}
</style>
</head>
<body>
<a href="transfercontrolaccroles.html" style="float:right;color:white"><h3>LOG OUT</h3></a>
<ul>
<li class="dropdown">
    <b><a href="#stud" class="dropbtn">STUDENT DETAILS</a>
    <div class="dropdown-content"></b>
      <b><a href="viewbasicstudinfo.php">VIEW BASIC STUDENT INFO</a></b>
      <b><a href="completestudinfo.php">VIEW COMPLETE STUDENT INFO</a></b>
      <b><a href="viewonedaynightout.php">STUDENT ON NIGHTOUT FOR ONE DAY</a></b>
      <b><a href="viewmorethanonedaynightout.php">STUDENT ON NIGHTOUT FOR MORE THAN ONE DAY</a></b>
    </div>
  </li>


   <li class="dropdown">
    <b><a href="#stud" class="dropbtn">STAFF DETAILS</a></b>
    <div class="dropdown-content">
      <b><a href="fourthpg.html">FILL BASIC STAFF INFORMATION</a></b>
      <b><a href="viewbasicstaffinfo.php">VIEW BASIC STAFF INFORMATION</a></b>
      <b><a href="acttrytosearch.php">EDIT STAFF INFO</a></b>
      <b><a href="#">STAFF LEAVE RECORD</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">NOTFICATIONS</a></b>
    <div class="dropdown-content">
      <b><a href="dispprefbasic_enquiry.php">NEW ENQURIES</a></b>
      <b><a href="shownewcomplaints.php">COMPLAINTS</a></b>
      <b><a href="viewfeedback.php">FEEDBACK STATUS</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">FACILITIES</a></b>
    <div class="dropdown-content">
      <b><a href="wifistatus.php">WI-FI</a></b>
      <b><a href="laundrystatus.php">LAUNDRY</a></b>
      <b><a href="messstatus.php">MESS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">STATUS OF ROOMS</a></b>
    <div class="dropdown-content">
      <b><a href="showacstatustoadmin.html">AC ROOMS</a></b>
      <b><a href="shownonacstatustoadmin.html">NON AC ROOMS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">OTHER INFO</a></b>
    <div class="dropdown-content">
      <b><a href="netprofit.php">NET PROFIT</a></b>
      <b><a href="hitratio.php">HIT RATIO</a></b>
    </div>
  </li>
</ul>
<div class="container" style="width:80%;margin-left: 160px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<h3 style="text-align:center;font-size:25px;">CALCULATION OF NET PROFIT</h3>
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">

<th colspan="2" style="text-align:center;font-size:25px;">NET PROFIT CALCULATION</th>

<tr></tr><tr></tr><tr></tr><tr></tr>

<?php
define("DB_NAME","hostel_management_system");
define("DB_USER","root");
define("DB_PASS","");
define("DB_HOST","localhost");
include 'connect.php';
?>
<tr>
<th colspan="2" style="text-align:center;font-size:25px;">INDIVIDUAL  PROFIT FROM AC ROOMS BOOKING</th>
</tr>
<tr>
<th>ONE SEATER ROOM</th>
<?php
$querytry="select * from acrooms where roomno in (1,2,3) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$aconeamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$aconeamt=$count*82500;
?>
<td><?php echo $aconeamt; ?></td>
</tr>
<tr>
<th>TWO SEATER ROOM</th>
<?php
$querytry="select * from acrooms where roomno in (4,5,6) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$actwoamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$actwoamt=$count*77000;
?>
<td><?php echo $actwoamt; ?></td>
</tr>
<tr>
<th>THREE SEATER ROOM</th>

<?php
$querytry="select * from acrooms where roomno in (7,8,9,10) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$acthreeamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$acthreeamt=$count*68200;
$actotal=$aconeamt + $actwoamt + $acthreeamt;
?>
<td><?php echo $acthreeamt; ?></td>
</tr>
<tr>
<th>TOTAL  PROFIT FROM AC ROOMS BOOKING</th>
<td><?php echo $actotal; ?></td>
</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th colspan="2" style="text-align:center;font-size:25px;">INDIVIDUAL  PROFIT FROM NON AC ROOMS BOOKING</th>
</tr>
<tr>
<th>ONE SEATER ROOM</th>
<?php
$querytry="select * from nonacrooms where roomno in (11,12,13) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$nonaconeamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$nonaconeamt=$count*71500;
?>
<td><?php echo $nonaconeamt; ?></td>
</tr>
<tr>
<th>TWO SEATER ROOM</th>
<?php
$querytry="select * from nonacrooms where roomno in (14,15,16) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$nonactwoamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$nonactwoamt=$count*66000;
?>
<td><?php echo $nonactwoamt;?></td>
</tr>
<tr>
<th>THREE SEATER ROOM</th>
<?php
$querytry="select * from nonacrooms where roomno in (17,18,19,20) and status='Booked' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$nonacthreeamt=0;
$count=0;
while ($res = mysql_fetch_array($traversal)) 
{
$count++;
}
$nonacthreeamt=$count*57200;
$nonactotal=$nonaconeamt + $nonactwoamt + $nonacthreeamt;
?>
<td><?php echo $nonacthreeamt; ?></td>

<tr>
<th>TOTAL  PROFIT FROM NON AC ROOMS BOOKING</th>
<td><?php echo $nonactotal;?></td>
</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th colspan="2" style="text-align:center;font-size:25px;">PROFIT FROM THE INDIVIDUAL SECTOR OF EXTRA FACILITIES PROVIDED</th>
</tr>
<tr>
<th>TOTAL PROFIT FROM WIFI SECTOR IS</th>
<?php
$querytry="select wifiamt from facilities";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$totalwifiprofit=0;
while ($res = mysql_fetch_array($traversal)) 
{
$totalwifiprofit=$totalwifiprofit+$res['wifiamt'];
}
?>
<td><?php echo $totalwifiprofit;?></td>
</tr>
<tr>
<th>TOTAL PROFIT FROM LAUNDRY SECTOR IS</th>
<?php
$querytry="select laundryamt from facilities";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$totallaundryprofit=0;
while ($res = mysql_fetch_array($traversal)) 
{
$totallaundryprofit=$totallaundryprofit+$res['laundryamt'];
}
?>
<td><?php echo $totallaundryprofit; ?></td>
</tr>
<tr>
<th>TOTAL PROFIT FROM MESS SECTOR IS</th>
<?php
$querytry="select messamt from facilities";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$totalmessprofit=0;
while ($res = mysql_fetch_array($traversal)) 
{
$totalmessprofit=$totalmessprofit+$res['messamt'];
}
$totalfacilities=$totalwifiprofit + $totallaundryprofit + $totalmessprofit;?>
<td><?php echo $totalmessprofit; ?></td>
</tr>
<tr>
<th>TOTAL PROFIT FROM THE SECTOR OF EXTRA FACILITIES PROVIDED</th>
<td><?php echo $totalfacilities;?></td>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<th style="font-size:22px;">TOTAL PAYMENT GIVEN TO STAFF</th>
<?php
$querytry="select salary from staffinfo";
$traversal=mysql_query($querytry) or die("Error,Query Failed");
$totalstaffpay=0;
while ($res = mysql_fetch_array($traversal)) 
{
$totalstaffpay=$totalstaffpay+$res['salary'];
}
?>
<td><?php echo $totalstaffpay; ?></td>
</tr>
<?php
$netprofit=0;
$actnetincome=0;
$netprofit=$actotal + $nonactotal + $totalfacilities;
?>
<tr>
<th style="font-size:22px;">TOTAL PAYMENT GIVEN TO AGENCY</th>
<th style="font-size:22px;">20000</th>
</tr>
<?php
$agency=20000; 
mysql_query("call newcalcnetprofit($netprofit,$totalstaffpay,$agency)") or die("<script language='javascript'>alert('ERROR IN CALLING THE PROCEDURE');</script>");

$query="select * from onebyone";
$count=mysql_query($query) or die("<script language='javascript'>alert('ERROR IN CALCULATING NET PROFIT');</script>");

while($res = mysql_fetch_array($count))
{
  $printnetprofit=$res['totalnetprofit'];
}
?>
<tr>
<th style="font-size:22px;">NET PROFIT</th>
<th><?php echo $printnetprofit; ?></th>
</tr>
<?php
mysql_close($connection);
?>
</table>
</div>
</body>
</html>

