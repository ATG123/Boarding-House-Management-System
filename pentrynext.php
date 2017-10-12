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
    width: 250px;
    border: 20px red;
    <!--margin-left: 100px;-->
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
<div class="container" style="width:80%;margin-left: 160px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<tr>
<th>ADHAR</th>
<th>TYPE OF ROOM</th>
<th>SUB TYPE OF ROOM</th>
<th>ROOM NUMBER</th>
<th>BED NUMBER</th>
</tr>
<?php
include 'justdefine.php';
include 'connect.php';

$getcontact=$_SESSION["contactno"];
$query="select * from basicformfill where contactno='$getcontact'";
$count=mysql_query($query) or die("Error , Search Query Failed");
while($res = mysql_fetch_array($count))
{
   $getadhar=$res['adhar'];
}
$_SESSION["adhar"]=$getadhar;
   $pquery = "select * from notifyuser where adhar='$getadhar'";
   $countrows=mysql_query($pquery) or die("Error , Search Query Failed");
echo "<br>";
echo "<b>DETAILS OF THE ROOM THAT HAS BEEN CHOSEN FOR U ARE : </b>";
echo "<br><br>";
while ($res = mysql_fetch_array($countrows)) 
{     
?>
<tr>
  <th><?php echo $res['adhar']; ?></th>

  <?php $_SESSION["typeroom"]=$res['typeofroom'];?>
  <th><?php echo $res['typeofroom']; ?></th>

  <?php $_SESSION["subtyperoom"]=$res['subtypeofroom'];?>
  <th><?php echo $res['subtypeofroom']; ?></th>

  <?php $_SESSION["roomnumber"]=$res['roomno']; ?>
  <th><?php echo $res['roomno']; ?></th>

  <?php $_SESSION["bednumber"]=$res['bedno']; ?>
  <th><?php echo $res['bedno']; ?></th>
</tr>
<?php
 }
?>
</table>
<form action="pentrynextnext.php" method="post"> 
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<tr>
<th>TYPE OF ROOM</th>
<th>SUB TYPE OF ROOM</th>
<th>TOTAL PAYEMENT</th>
<th>DEPOSIT</th>
</tr>
<?php
$type=$_SESSION["typeroom"];
$sub=$_SESSION["subtyperoom"];

$payquery = "select * from paytable where typeofroom='$type' and subtypeofroom='$sub' ";
$countrows=mysql_query($payquery) or die("Error , Search Query Failed");
echo "<br>";
echo "<b>PAYMENT DETAILS FOR THE ABOVE REQUIREMENTS ARE  : </b>";
echo "<br><br>";
while ($res = mysql_fetch_array($countrows)) 
{     
?>
<tr>
  <th><?php echo $res['typeofroom']; ?></th> 
  <th><?php echo $res['subtypeofroom']; ?></th>
  <th><?php echo $res['totalpay']; ?></th>
  <th><?php echo $res['deposit']; ?></th>
</tr>
<?php
 }
mysql_close($connection);
?>
</table>
<br>
<h3>WOULD U LIKE TO BOOK THE SEAT ??</h3>
<input type="radio" name="ans" value="YES"><b>YES</b>
<input type="radio" name="ans" value="NO"><b>NO</b>
<br><br>
<input type="submit" name="submit" value="REPLY">
</form>

</div>
</body>
</html>

