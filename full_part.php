<?php

require_once("config.php");
if(isset($_POST['s1']))
{
  $emp_no=$_POST['emp_no'];
  $basic=$_POST['basic'];
  $salary_date=$_POST['salary_date'];
  $net_salary=$basic+($basic*.21);
}
else if(isset($_POST['s2']))
{
  // echo "parttime worker";
  $emp_no=$_POST['emp_no'];
  $basic=1;
  $query1="SELECT DISTINCT (employee.hourly_rate*ft_pt_work.num_of_hours) AS basic
  FROM employee,ft_pt_work WHERE
  employee.emp_ID='$emp_no' AND
 ft_pt_work.emp_id='$emp_no'";
  $send1=mysqli_query($connection,$query1);
   $row=mysqli_fetch_array($send1);

  $basic=1*$row['basic'];
    $net_salary=$basic+($basic*.21);
  $salary_date=$_POST['salary_date'];

}

$query="INSERT INTO salary VALUES('$emp_no','$basic','$net_salary','$salary_date')";

$send=mysqli_query($connection,$query);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
   <style>
   body{
   background-image: url('images/image1.jpg');
     text-align: center;
     background-color: #7DA3A1;
     background-repeat: no-repeat;
         background-size: cover;
   }
   ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
       overflow: hidden;
       background-color: #333;
   }

   li {
       float: left;
       border-right:1px solid #bbb;
   }

   li:last-child {
       border-right: none;
   }

   li a {
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
   }

   li a:hover:not(.active) {
       background-color: #111;
   }

   .active {
       background-color: #4CAF50;
   }
   ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
   }

   li {
    float: left;
   }

   li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
   }

   li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
   }

   li.dropdown {
    display: inline-block;
   }

   .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
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

   .dropdown-content a:hover {background-color: #f1f1f1}

   .dropdown:hover .dropdown-content {
    display: block;
   }

   </style>
  <link rel="stylesheet" type="text/css" href="homepage_style.css">
   </head>
   <body>
     <ul>
       <li><a  href="home.php">Home</a></li>
       <li><a href="employee.php">Employee</a></li>
       <li><a  href="department.php">Department</a></li>
         <li><a  href="address.php">Address</a></li>
           <li><a href="project.php">Project</a></li>
             <li><a href="work.php">Work</a></li>
                <li><a class="active" href="salary.php">Salary</a></li>
             <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">Query</a>
   <div class="dropdown-content">
     <a href="query1.php">Query 1</a>
     <a href="query2.php">Query  2</a>
     <a href="query3.php">Query  3</a>
     <a href="query4.php">Query  4</a>
     <a href="view.php">View</a>
   </div>
   </li>
   <li class="dropdown">
   <a href="javascript:void(0)" class="dropbtn">Database</a>
   <div class="dropdown-content">
   <a  href="emp_table.php">Employee</a>
   <a href="dept_table.php">Department</a>
   <a  href="address_table.php">Address</a>
   <a   href="project_table.php">Project</a>
   <a  href="work_table.php">Full time part time work</a>
   <a  href="salary_table.php">Salary</a>
   </div>
   </li>
     <!-- <li><a href="tables.php">Table</a></li> -->

       <li style="float:right"><a href="about.php">About</a></li>
     </ul>

   </body>
 </html>
