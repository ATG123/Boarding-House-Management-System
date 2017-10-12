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
table
{
border-collapse:collapse;
}
</style>
</head>
<body>
<a href="transfercontrolaccroles.html" style="float:right;color:white"><h3>LOG OUT</h3></a>
<br>

<ul>
<li class="dropdown">
    <b><a href="#stud" class="dropbtn">STUDENT DETAILS</a>
    <div class="dropdown-content"></b>
      <b><a href="viewbasicstudinfo.php">VIEW BASIC STUDENT INFO</a></b>
      <b><a href="completestudinfo.php">VIEW COMPLETE STUDENT INFO</a></b>
      <b><a href="viewonedaynightout.php">STUDENT ON NIGHTOUT FOR ONE DAY</a></b>
      <b><a href="viewmorethanonedaynightout.php">STUDENT ON NIGHTOUT FOR MORE THAN ONE DAY</a></b>
    </div>
  </li>

   <li class="dropdown">
    <b><a href="#stud" class="dropbtn">STAFF DETAILS</a></b>
    <div class="dropdown-content">
      <b><a href="fourthpg.html">FILL BASIC STAFF INFORMATION</a></b>
      <b><a href="viewbasicstaffinfo.php">VIEW BASIC STAFF INFORMATION</a></b>
      <b><a href="acttrytosearch.php">EDIT STAFF INFO</a></b>
      <b><a href="#">STAFF LEAVE RECORD</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">NOTFICATIONS</a></b>
    <div class="dropdown-content">
      <b><a href="dispprefbasic_enquiry.php">NEW ENQURIES</a></b>
      <b><a href="shownewcomplaints.php">COMPLAINTS</a></b>
      <b><a href="viewfeedback.php">FEEDBACK STATUS</a></b>
    </div>
  </li>

 <li class="dropdown">
    <b><a href="#staff" class="dropbtn">FACILITIES</a></b>
    <div class="dropdown-content">
      <b><a href="wifistatus.php">WI-FI</a></b>
      <b><a href="laundrystatus.php">LAUNDRY</a></b>
      <b><a href="messstatus.php">MESS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">STATUS OF ROOMS</a></b>
    <div class="dropdown-content">
      <b><a href="showacstatustoadmin.html">AC ROOMS</a></b>
      <b><a href="shownonacstatustoadmin.html">NON AC ROOMS</a></b>
    </div>
  </li>

<li class="dropdown">
    <b><a href="#staff" class="dropbtn">OTHER INFO</a></b>
    <div class="dropdown-content">
      <b><a href="netprofit.php">NET PROFIT</a></b>
      <b><a href="hitratio.php">HIT RATIO</a></b>
    </div>
  </li>
</ul>

<div class="container" style="width:70%;margin-left: 200px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<h3>FEEDBACK FROM STUDENTS</h3>
<table border="4"  cellpadding="8" text-align="center" bordercolor="#C65000">
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>ROOM NUMBER</th>
<th>BED NUMBER</th>
<th>CLEANING ISSUES</th>
<th>INFRASTRUCTURE ISSUES</th>
<th>ELECTRICAL ISSUES</th>
<th>PLUMBING ISSUES</th>
<th>OTHER ISSUES</th>
</tr>
<?php
define("DB_NAME","hostel_management_system");
define("DB_USER","root");
define("DB_PASS","");
define("DB_HOST","localhost");
include 'connect.php';

$query = "select firstname,lastname,f.roomno,f.bedno,cleaning,infrastructure,electrical,plumbing,other from basicformfill b,feedback f,notifyuser n where b.adhar=n.adhar and display='student' and f.roomno=n.roomno and f.bedno=n.bedno";

$countrows=mysql_query($query) or die("Error , Search Query Failed");
$count=0;
$c1=$c2=$c3=$c4=$c5=0;

$i1=$i2=$i3=$i4=$i5=0;

$p1=$p2=$p3=$p4=$p5=0;

$e1=$e2=$e3=$e4=$e5=0;

$o1=$o2=$o3=$o4=$o5=0;

while ($res = mysql_fetch_array($countrows)) 
{
 $count++;

 $getpointfor=$res['cleaning'];
 $getpointfori=$res['infrastructure'];
 $getpointforp=$res['plumbing'];
 $getpointfore=$res['electrical'];
 $getpointforo=$res['other'];

 $a=strcmp($getpointfor,5);
 $b=strcmp($getpointfor,4);
 $c=strcmp($getpointfor,3);
 $d=strcmp($getpointfor,2);
 $e=strcmp($getpointfor,1);

 $ai=strcmp($getpointfori,5);
 $bi=strcmp($getpointfori,4);
 $ci=strcmp($getpointfori,3);
 $di=strcmp($getpointfori,2);
 $ei=strcmp($getpointfori,1);

 $ap=strcmp($getpointforp,5);
 $bp=strcmp($getpointforp,4);
 $cp=strcmp($getpointforp,3);
 $dp=strcmp($getpointforp,2);
 $ep=strcmp($getpointforp,1);

 $ae=strcmp($getpointfore,5);
 $be=strcmp($getpointfore,4);
 $ce=strcmp($getpointfore,3);
 $de=strcmp($getpointfore,2);
 $ee=strcmp($getpointfore,1);

 $ao=strcmp($getpointforo,5);
 $bo=strcmp($getpointforo,4);
 $co=strcmp($getpointforo,3);
 $do=strcmp($getpointforo,2);
 $eo=strcmp($getpointforo,1);

 if($a==0)
   $c5++;
 else
 if($b==0)
   $c4++;
 else
 if($c==0)
   $c3++;
 else
 if($d==0)
   $c2++;
 else
 if($e==0)
   $c1++;

 if($ai==0)
   $i5++;
 else
 if($bi==0)
   $i4++;
 else
 if($ci==0)
   $i3++;
 else
 if($di==0)
   $i2++;
 else
 if($ei==0)
   $i1++;

 if($ap==0)
   $p5++;
 else
 if($bp==0)
   $p4++;
 else
 if($cp==0)
   $p3++;
 else
 if($dp==0)
   $p2++;
 else
 if($ep==0)
   $p1++;

 if($ae==0)
   $e5++;
 else
 if($be==0)
   $e4++;
 else
 if($ce==0)
   $e3++;
 else
 if($de==0)
   $e2++;
 else
 if($ee==0)
   $e1++;

 if($ao==0)
   $o5++;
 else
 if($bo==0)
   $o4++;
 else
 if($co==0)
   $o3++;
 else
 if($do==0)
   $o2++;
 else
 if($eo==0)
   $o1++;

?>
    <tr>
     <td><?php echo $res['firstname']; ?></td>
     <td><?php echo $res['lastname']; ?></td>
     <td><?php echo $res['roomno']; ?></td>
     <td><?php echo $res['bedno']; ?></td>
     <td><?php echo $res['cleaning']; ?></td>
     <td><?php echo $res['infrastructure']; ?></td>
     <td><?php echo $res['electrical']; ?></td>
     <td><?php echo $res['plumbing']; ?></td>
     <td><?php echo $res['other']; ?></td>
   </tr>
<?php
 }
mysql_close($connection);
?>
</table>
<br>
<?php

$_SESSION["count"]=$count;

$cleanarr = array($c5,$c4,$c3,$c2,$c1);
$_SESSION["clean"]=$cleanarr;

$infraarr = array($i5,$i4,$i3,$i2,$i1);
$_SESSION["infra"]=$infraarr;

$electarr = array($e5,$e4,$e3,$e2,$e1);
$_SESSION["elect"]=$electarr;

$plumbarr = array($p5,$p4,$p3,$p2,$p1);
$_SESSION["plumb"]=$plumbarr;

$otherarr = array($o5,$o4,$o3,$o2,$o1);
$_SESSION["other"]=$otherarr;
?>

<h3>CLICK ON THE FOLLOWING BUTTONS TO SEE THE INDIVIDUAL STATUS OF : </h3>
<table border="4"  cellpadding="8" align="center" bordercolor="#C65000">
<tr>
<th rowspan="5">CLICK THE BUTTONS :</th>
<td><a href="feedbkcleanstatus.php"><input type="submit" name="submit" value="CLEANING ISSUES"></a></td>
</tr>
<tr>
<td><a href="feedbkinfrastatus.php"><input type="submit" name="submit" value="INFRASTRUCTURE ISSUES"></a></td>
</tr>
<tr>
<td><a href="feedbkelectstatus.php"><input type="submit" name="submit" value="ELECTRICAL ISSUES"></a></td>
</tr>
<tr>
<td><a href="feedbkplumbstatus.php"><input type="submit" name="submit" value="PLUMBING ISSUES"></a></td>
</tr>
<tr>
<td><a href="feedbkotherstatus.php"><input type="submit" name="submit" value="OTHER ISSUES"></a></td>
</tr>
</table>

</div>
</body>
</html>

