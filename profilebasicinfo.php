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
<h2> BASIC INFORMATION </h2>
<form action="profilepg.html" method="post">
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<?php
include 'justdefine.php';
include 'connect.php';

$result=$_SESSION["accessprofileemail"];
$querytry="select * from basicformfill where emailid='$result' ";
$traversal=mysql_query($querytry) or die("Error,Query Failed");

while ($res = mysql_fetch_array($traversal)) 
{
?>
<tr><th>ENQUIRY ID</th><td><?php echo $res['enquiryid'];?></td></tr>

<?php $_SESSION["getadhar"]=$res['adhar'];?>
  <tr><th>ADHAR</th><th><?php echo $res['adhar'];?></th></tr> 

  <tr><th>FIRST NAME</th><th><?php echo $res['firstname'];?></th></tr>
  <tr><th>LAST NAME</th><th><?php echo $res['lastname'];?></th></tr>
<tr><th>EMAIL ID</th><th><?php echo $res['emailid'];?></th></tr>
<tr><th>CONTACT NUMBER</th><th><?php echo $res['contactno'];?></th></tr>
<?php
 }

$res=$_SESSION["getadhar"];
$query="select * from notifyuser where adhar='$res' ";
$temp=mysql_query($query) or die("Error,Query Failed");
while ($res = mysql_fetch_array($temp)) 
{
?>
<tr><th>ROOM NUMBER</th><th><?php echo $res['roomno'];?></th></tr>
<tr><th>BED NUMBER</th><th><?php echo $res['bedno'];?></th></tr>
 
<?php
}
mysql_close($connection);
?>
</table>
</form>

</div>
</body>
</html>

