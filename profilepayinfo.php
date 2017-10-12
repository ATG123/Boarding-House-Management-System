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
<h2> PAYMENT INFORMATION </h2>
<form action="profilepg.html" method="post">
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<?php
include 'justdefine.php';
include 'connect.php';

$result=$_SESSION["accessprofileemail"];

$res=$_SESSION["getadhar"];

$pquery = "select * from notifyuser where adhar='$res'";
   $countrows=mysql_query($pquery) or die("Error , Search Query Failed");
echo "<br>";
while ($res = mysql_fetch_array($countrows)) 
{     
    $_SESSION["typeroom"]=$res['typeofroom'];
    $_SESSION["subtyperoom"]=$res['subtypeofroom'];
    $_SESSION["roomnumber"]=$res['roomno'];
    $_SESSION["bednumber"]=$res['bedno'];
}
$type=$_SESSION["typeroom"];
$sub=$_SESSION["subtyperoom"];
$payquery = "select * from paytable where typeofroom='$type' and subtypeofroom='$sub' ";
$countrows=mysql_query($payquery) or die("Error , Search Query Failed");
while ($res = mysql_fetch_array($countrows)) 
{     
?>
<tr>
  <th>TYPE OF ROOM</th>
  <th><?php echo $res['typeofroom']; ?></th>
</tr>
<tr>
  <th>SUB TYPE OF ROOM</th>
  <th><?php echo $res['subtypeofroom']; ?></th>
</tr>
<tr>
  <th>TOTAL PAYEMENT</th>
  <th><?php echo $res['totalpay']; ?></th>
</tr>
<tr>
  <th>DEPOSIT</th>
  <th><?php echo $res['deposit']; ?></th>
</tr>
</tr>
<?php
 }
mysql_close($connection);
?>
</table>

</form>

</div>
</body>
</html>

