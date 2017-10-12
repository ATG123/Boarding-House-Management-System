<html><head><style>
  body
     {
         background-image:url("wood.jpg");
         text-align:center;
         font-family:Comic Sans MS;
         font-size:20px;
         color:white;
     }
</style></head><body>
<br>
<a href="firstpg.html" style="float:right">FILL THE ENQUIRY FORM</a>
<br><br><br>
<h3>STATUS OF AC ROOMS : </h3>
<br>
<b>NUMBER OF AVAILABLE BEDS IN ONE SEATER ROOM  ARE :</b>
<?php
define("DB_NAME","hostel_management_system");
define("DB_USER","root");
define("DB_PASS","");
define("DB_HOST","localhost");
include 'connect.php';

$queryone = "select * from acrooms where roomno in (1,2,3) and status='Not Booked' ";
$countrows=mysql_query($queryone) or die("Error , Search Query Failed For One Seater Room");
$countone=0;
while ($res = mysql_fetch_array($countrows)) 
{
   $countone=$countone+1;
 }
echo $countone;

echo "<br><br><b>NUMBER OF AVAILABLE BEDS IN TWO SEATER ROOM  ARE :</b>";
$querytwo = "select * from acrooms where roomno in (4,5,6) and status='Not Booked' ";
$countrows=mysql_query($querytwo) or die("Error , Search Query Failed For Two Seater Room");
$counttwo=0;
while ($res = mysql_fetch_array($countrows)) 
{
   $counttwo=$counttwo+1;
 }
echo $counttwo;

echo "<br><br><b>NUMBER OF AVAILABLE BEDS IN THREE SEATER ROOM  ARE :</b>";
$querythree = "select * from acrooms where roomno in (7,8,9,10) and status='Not Booked' ";
$countrows=mysql_query($querythree) or die("Error , Search Query Failed For Three Seater Room");
$countthree=0;
while ($res = mysql_fetch_array($countrows)) 
{
   $countthree=$countthree+1;
 }
echo $countthree;
mysql_close($connection);
?>
</body></html>

