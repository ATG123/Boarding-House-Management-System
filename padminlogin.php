<html><head><style>
     body
     {
         	font-size:18px;
	    	font-family:Garamond;
          	background-image: url('hostel6.jpg');
		background-size: cover;
     }
</style></head></html>

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
$querytry="select password from adminemailpass where emailid='$email' "; 
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
{
  echo "The Password U Entered Doesn't Match , PLZ Enter The Proper Password";
}
else
{
      echo "valid.......";
      echo "<script language='javascript'>document.location='viewofadmin.html';</script>";
 }
echo "<br>";
echo "closing connections";
mysql_close($connection);
?>
