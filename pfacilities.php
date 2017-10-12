<?php
session_start();
?>
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
    width: 150px;
    border: 20px red;
    <!--margin-left: 400px;-->
    <!--margin-top: 75px;-->
    border: 2px solid #FCF3CF;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    font-family:Garamond;
}
</style>
</head>
<body>
<a href="viewinside.html" style="float:right;color:white;"><h4>LOG OUT</h4></a>
</div>
<ul>
  <li class="dropdown">
    <b><a href="#stud" class="dropbtn">SETTINGS</a></b>
    <div class="dropdown-content">
      <b><a href="#updateprofile">UPDATE YOUR PROFILE</a></b>
      <b><a href="profilebasicinfo.php">VIEW BASIC INFO</a></b>
      <b><a href="profilepayinfo.php">PAYMENT INFO</a></b>
      <b><a href="complaint.php">COMPLAINT</a></b>
      <b><a href="whichnightout.php">FILL NIGHT OUT FORM</a></b>
      <b><a href="feedback.html">FEEDBACK FORM</a></b>
      <b><a href="viewprevcomplaints.php">VIEW PREVIOUS COMPLAINTS</a></b>
      <b><a href="facilities.php">ADDITIONAL FACILITIES</a></b>
    </div>
  </li>
</ul>
<div class="container" style="width:45%;margin-left: 400px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<form action="profilepg.html" method="post">
<?php
include 'justdefine.php';
include 'connect.php';

$adhar=$_SESSION["getadhar"];

$query="select * from notifyuser where adhar='$adhar' ";
$temp=mysql_query($query) or die("Error,Query Failed");
while ($res = mysql_fetch_array($temp)) 
{
   $room=$res['roomno'];
   
   $bed=$res['bedno'];
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$selmonth=$_POST["month"];
$totalwifipay=0;
$totallaundrypay=0;
$total=0;
switch($_POST["wifi"])
{
case "YES":
   $fwifi="YES";
   $totalwifipay=100;
   break;
case "NO":
   $fwifi="NO";
   $totalwifipay=0;
   break;
}
switch($_POST["laundry"])
{
case "YES":
   $flaundry="YES";
   $totallaundrypay=500;
   break;
case "NO":
   $flaundry="NO";
   $totallaundrypay=0;
   break;
}
$totalmesspay=0;
if(isset($_POST["breakfast"]))
 {
   $totalmesspay=$totalmesspay+40*30;
  }
if(isset($_POST["lunch"]))
 {
   $totalmesspay=$totalmesspay+1200;
  }
if(isset($_POST["snacks"]))
 {
   $totalmesspay=$totalmesspay+40*30;
  }
if(isset($_POST["dinner"]))
 {
   $totalmesspay=$totalmesspay+1200;
  }

}
$total=$totalwifipay+$totallaundrypay+$totalmesspay;
?>
<br><br>
<h3>PAYMENT INFO CORRESPONDING TO THE FACILITIES YOU HAVE SELECTED</h3>
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<tr>
<th>MONTH SELECTED</th>
<th><?php echo $selmonth; ?></th>
</tr>
<tr>
<th>WIFI PAYMENT</th>
<th><?php echo $totalwifipay; ?></th>
</tr>
<tr>
<th>LAUNDRY PAYMENT</th>
<th><?php echo $totallaundrypay; ?></th>
</tr>
<tr>
<th>MESS PAYMENT</th>
<th><?php echo $totalmesspay; ?></th>
</tr>
<tr>
<th>TOTAL PAYMENT</th>
<th><?php echo $total; ?></th>
</tr>
</table>
<?php
$count=0;
$pquery="select month from facilities where month='$selmonth' and roomno='$room' and bedno='$bed' ";
$countrows=mysql_query($pquery) or die("Error,icodhpQuery Failed");
while($res = mysql_fetch_array($countrows))
{
$count++;
}

if($count==0)
 {
      $query="insert into facilities values ('$room','$bed','$selmonth','$totalwifipay','$totallaundrypay','$totalmesspay','$total')";
      mysql_query($query) or die("Error,Query Failed");
 }
else
 {
    echo "<script language='javascript'>alert('YOUR DETAILS FOR THE SELECTED MONTH HAVE ALREADY BEEN TAKEN.DETAILS OF SAME USER FOR THE SAME MONTH CANNOT BE TAKEN TWICE')</script>";
 }
mysql_close($connection);
?>
</form>
</div>
</body>
</html>

