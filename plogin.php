<?php
session_start();
?>
<html>
<head>
<style>
.card 
{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
body
{
  text-align:center;
  font-size:20px;
  font-family:Comic Sans MS;
}
h3
{
  font-size:25px;
}
</style>
<script type="text/javascript">
function formvalidator()
{
var mn = document.forms["form1"]["mob"].value;
if(mn == "" || mn == null || isNaN(mn) ||
mn.length < 10 || mn.length >10 )
{
alert("*PLZ Enter Valid Mobile Number");
document.form1.mob.focus() ;
return false;
} 
return true;
}
</script>
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
$email=$pass="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_POST["email"];
$pass=$_POST["pass"];
}
echo $email;	echo "<br>";
echo $pass;	echo "<br>";
$querytry="select password from emailpass where emailid='$email' "; 
$temp=mysql_query($querytry) or die("Error,Query Failed");
while ($res = mysql_fetch_array($temp)) 
{   
   $conform=$res['password'];
}
echo "RESULT OF COMPARISION IS : ";
echo "<br>";
$x=strcmp($pass,$conform);
$y=abs($x);
echo $y;
echo "<br>";
if($y)
     echo "The Password U Entered Doesn't Match , PLZ Enter The Proper Password";
else
{
      echo "valid.......";
      $_SESSION["accessprofileemail"]=$email;
      echo "<script language='javascript'>document.location='profilepg.html';</script>";
}
echo "<br>";
echo "closing connections";
mysql_close($connection);
?>

</div>
</body>
</html>

