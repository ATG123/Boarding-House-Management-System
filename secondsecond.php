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
$adhar=$_POST["adhar"];
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$typeofroom=$_POST["typeofroom"];
$subtypeofroom=$_POST["subtypeofroom"];
}

$my_file = 'store.txt';
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));

$pgquery = "insert into basicformfill 
values('$data','$adhar','$fname','$lname','$email','$phone','$typeofroom','$subtypeofroom','basicinfo'
)";

mysql_query($pgquery) or die("<script language='javascript'>alert('FORM HAS NOT BEEN SUBMITTED PROPERLY.')</script>");

echo '<script language="javascript">';
echo "alert('NOW YOUR REQUEST-ID WILL BE GIVEN TO U PLZ DO REMEMBER IT FOR FUTURE USE.')";
echo '</script>';

echo '<script language="javascript">';
echo "alert('$data')";
echo '</script>';

$data=$data+1;
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);

mysql_close($connection);

echo "<script language='javascript'>alert('YOUR DETAILS HAVE BEEN SUCCESSFULLY TAKEN.');</script>";

echo "<script language='javascript'>alert('WE DO SURELY PROVIDE U THE BEST FACILITIES , WE WILL TRY TO COMMUNICATE U AS SOON AS POSSIBLE.');</script>";
?>
</div>
</body>
</html>

