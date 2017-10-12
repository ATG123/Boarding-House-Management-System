<?php
session_start();
?>
<html><head>
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

container {
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
<ul>
  <b><li><a href="secondpg.html">FILL THE FORM</a></li></b>
   <b><li><a href="entry.html">VIEW NOTIFICATIONS</a></li></b>
   <b><li><a href="signup.html">SIGN UP</a></li></b>
   <b><li><a href="login.html">LOGIN</a></li></b>
</ul>
<div class="container" style="width:45%;margin-left: 400px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<?php
include 'justdefine.php';
include 'connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_POST["email"];
$pass=$_POST["pass"];
$ckpass=$_POST["ckpass"];
}
$query="select * from basicformfill where emailid='$email' and display='student'";
$countrows=mysql_query($query) or die("Error,Select Query Failed.");
$count=0; 
while($res = mysql_fetch_array($countrows))
{
  $count++;
}
if($count==0)
{
echo "<script language='javascript'>alert('ONLY THE STUDENTS OF THESE HOSTEL ARE ALLOWED TO CREATE THEIR ACCOUNT HERE.');</script>";
}
else
if($count>0)
{
$x=strcmp($pass,$ckpass);
$y=abs($x);
if($y)
     echo "<script language='javascript'>alert('THE PASSWORD YOU ENTERED DOESNT MATCH , PLEASE ENTER THE PROPER PASSWORD.');</script>";
else
{
    $querytry="insert into emailpass values ('$email','$pass')"; 
    mysql_query($querytry) or die("<script language='javascript'>alert('YOUR ACCOUNT CANNOT BE CREATED , BECAUSE THIS EMAIL ID ALREADY EXISTS.');</script>");
    $_SESSION["accessprofileemail"]=$email;
   
     echo "<script language='javascript'>document.location='profilepg.html';</script>";
}
mysql_close($connection);
}
?>


</div>
</body>
</html>

