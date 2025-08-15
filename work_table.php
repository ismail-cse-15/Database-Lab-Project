<?php
require_once("config.php");
// $project_query="SELECT * FROM project";
// $department_query="SELECT * FROM department";
// $employee_query="SELECT * FROM employee";
//
//
// $salary_query="SELECT * FROM salary";

// $department_send=mysqli_query($connection,$department_query);
// $employee_send=mysqli_query($connection,$employee_query);

// $address_query="SELECT * FROM address";
// $address_send=mysqli_query($connection,$address_query);

//
// $salary_send=mysqli_query($connection,$salary_query);
// $project_send=mysqli_query($connection,$project_query);
$work_query="SELECT * FROM ft_pt_work";
$work_send=mysqli_query($connection,$work_query);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="table.css">
     <style>
     /*body{
       /*background-image: url('images/image1.jpg');*/
         text-align: center;
         background-color: #7DA3A1;
         /*background-repeat: no-repeat;
             background-size: cover;*/
     }*/
     body{
       text-align: center;
       background-color: #7DA3A1;

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
  h1{

     font-style: italic;
     font-variant: small-caps;
  }
  th,td{
    text-align: center;
  }
     </style>
       <!-- <link rel="stylesheet" type="text/css" href="table.css"> -->
   </head>
   <body>
     <ul>
       <li><a  href="home.php">Home</a></li>
       <li><a href="employee.php">Employee</a></li>
       <li><a  href="department.php">Department</a></li>
         <li><a  href="address.php">Address</a></li>
           <li><a href="project.php">Project</a></li>
             <li><a  href="work.php">Work</a></li>
               <li><a href="salary.php">Salary</a></li>
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
   <a class="active" href="javascript:void(0)" class="dropbtn">Database</a>
   <div class="dropdown-content">
   <a  href="emp_table.php">Employee</a>
   <a href="dept_table.php">Department</a>
   <a  href="address_table.php">Address</a>
   <a   href="project_table.php">Project</a>
   <a class="active" href="work_table.php">Full time part time work</a>
   <a  href="salary_table.php">Salary</a>
   </div>
   </li>
   <!-- <li><a class="active" href="tables.php">Table</a></li> -->
       <li style="float:right"><a href="about.php">About</a></li>
     </ul>




     <h1 class="header">Full time Part time work table</h1>
     <div>
       <table>
       <tr>
         <th>project ID</th>
         <th>Employee ID</th>
         <th>Department ID</th>
    <th>Number of works </th>
    <th>Works rate</th>

       </tr>
       <?php
  while ($row=mysqli_fetch_array($work_send))

    {
     echo "<tr>
       <td>$row[project_id]</td>
       <td>$row[emp_id]</td>
      <td>$row[dept_id]</td>
       <td>$row[num_of_hours]</td>
        <td>$row[works_date]</td>
     </tr>";
   }
        ?>
     </table>
     </div>


   </body>
 </html>
