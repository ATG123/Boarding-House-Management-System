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
<ul>
  <b><li><a href="secondpg.html">FILL THE FORM</a></li></b>
   <b><li><a href="entry.html">VIEW NOTIFICATIONS</a></li></b>
   <b><li><a href="signup.html">SIGN UP</a></li></b>
   <b><li><a href="login.html">LOGIN</a></li></b>
</ul>

<br>

<?php
include 'justdefine.php';
include 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$getadhar=$_SESSION["adhar"];
$state=$_POST["state"];
$city=$_POST["city"];
$address=$_POST["address"];
$clgname=$_POST["clgname"];
$clgaddr=$_POST["clgaddr"];
$fphone=$_POST["fphone"];
$mphone=$_POST["mphone"];
}
$pgquery = "insert into additionalinfo 
values('$getadhar','$state','$city','$address','$clgname','$clgaddr','$fphone','$mphone')";
mysql_query($pgquery) or die("<script language='javascript'>alert('ERROR IN FORM SUBMISSION.');</script>");


$query = "update basicformfill set display='student' where adhar='$getadhar' ";
mysql_query($query) or die("Update Query Failed");

echo "<script language='javascript'>alert('YOUR FORM HAS BEEN SUCCESSFULLY SUBMITTED.');</script>";
mysql_close($connection);
?>


</body>
</html>

