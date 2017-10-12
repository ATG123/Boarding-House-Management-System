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
<form action="profilepg.html" method="post">
<?php
include 'justdefine.php';
include 'connect.php';
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$getcompbox=$_POST["complaint"];
}
$result=$_SESSION["accessprofileemail"];
$querytry="select * from basicformfill where emailid='$result' ";
$temp=mysql_query($querytry) or die("Error,Query Failed");
while ($res = mysql_fetch_array($temp)) 
{
$getadhar=$res['adhar'];
}

$query="select * from notifyuser where adhar='$getadhar' ";
$temp=mysql_query($query) or die("Error,Query Failed");
while ($res = mysql_fetch_array($temp)) 
{
 $room=$res['roomno'];
 $bed=$res['bedno'];
}

$my_file = 'complaintid.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));

$querycomp="insert into complaintbox (complaintid,roomno,bedno,complaint,resolvedstatus)values('$data','$room','$bed','$getcompbox','Not Yet Resolved')";
mysql_query($querycomp) or die("<script language='javascript'>alert('ERROR IN SENDING COMPLAINT');</script>");
echo "<br>";

$data=$data+1;
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);

echo "<script language='javascript'>alert('COMPLAINT HAS BEEN SUCCESSFULLY SENT.');</script>";
mysql_close($connection);
?>
</form>
</body>
</html>

