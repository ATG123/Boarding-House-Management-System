<?php
session_start();
?>
<html>
<head>
<script type="text/javascript">
function formvalidator()
{
if(document.form1.month.value == "" || document.form1.month.value == null)
{
alert("*YOU CANT PROCEED WITHOUT SELECTING THE MONTH");
document.form1.month.focus() ;
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

<form action="pfacilities.php" name="form1" onsubmit="return formvalidator();" method="post">
<br>
<h3>SELECT THE MONTH IN WHICH YOU WOULD LIKE TO GET THE FOLLOWING FACILITIES</h3>
<br>
<b>SELECT MONTH</b>
<select name="month">
<option></option>
<option value="JANUARY">JANUARY</option>
<option value="FEBUARY">FEBUARY</option>
<option value="MARCH">MARCH</option>
<option value="APRIL">APRIL</option>
<option value="MAY">MAY</option>
<option value="JUNE">JUNE</option>
<option value="JULY">JULY</option>
<option value="AUGUST">AUGUST</option>
<option value="SEPTEMBER">SEPTEMBER</option>
<option value="OCTOBER">OCTOBER</option>
<option value="NOVEMBER">NOVEMBER</option>
<option value="DECEMBER">DECEMBER</option>
</select>
<br><br>
<table  border="4"  cellpadding="8" align="center" bordercolor="#C65000" style="text-align:center">
<tr>
<th>DO YOU WANT WI-FI SERVICE ?<br>(100 per month)</th>
<td><input type="radio" name="wifi" value="YES" checked>YES</td>
<td><input type="radio" name="wifi" value="NO">NO</td>
</tr>

<tr>
<th>DO YOU WANT MONTHLY LAUNDRY SERVICE ?<br>(500 per month)</th>
<td><input type="radio" name="laundry" value="YES" checked>YES</td>
<td><input type="radio" name="laundry" value="NO">NO</td>
</tr>

<tr>
<th  rowspan=2>DO YOU WANT MONTHLY MESS SERVICE ?<br>(1200 each)</th>
<td><input type="checkbox" name="breakfast">BREAKFAST</td>
<td><input type="checkbox" name="lunch">LUNCH</td>
</tr>

<tr>
<td><input type="checkbox" name="snacks">SNACKS</td>
<td><input type="checkbox" name="dinner">DINNER</td>
</tr>
</table>

<br><br>
<input type="submit" value="SUBMIT">
</form>
</div>
</body>
</html>

