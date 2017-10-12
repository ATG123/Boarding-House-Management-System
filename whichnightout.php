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
<a href="viewinside.html" style="float:right;color:white;"><h1>LOG OUT</h1></a>

<ul>
  <li class="dropdown">
    <a href="#stud" class="dropbtn">SETTINGS</a>
    <div class="dropdown-content">
      <a href="profilebasicinfo.php">VIEW BASIC INFO</a>
      <a href="profilepayinfo.php">PAYMENT INFO</a>
      <a href="complaint.php">COMPLAINT</a>
      <a href="whichnightout.php">FILL NIGHT OUT FORM</a>
      <a href="feedback.html">FEEDBACK FORM</a>
      <a href="viewprevcomplaints.php">VIEW PREVIOUS COMPLAINTS</a>
      <a href="facilities.php">ADDITIONAL FACILITIES</a>
    </div>
  </li>
</ul>

<div class="container" style="width:45%;margin-left: 400px;margin-top: 75px;border-radius: 15px; border:3;opacity:0.85;">
<h3>NIGHT OUT FORM</h3>
<a href="fifthpg.html">NIGHT OUT FOR MORE THAN ONE DAY</a>
<br><br>
<a href="onedayfifthpg.html">NIGHT OUT FOR ONLY ONE DAY</a>
</div>
</body>
</html>
