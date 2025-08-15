<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require_once("config.php");
    // $project_location=$_POST['project_location'];
    // $dept_location=$_POST['dept_location'];
    $query="SELECT employee.emp_name,address.street_no,address.street_name,address.city,address.zip_code,project.project_location,department.dept_location
FROM address,department,employee,ft_pt_work,project,salary
WHERE employee.emp_ID=address.emp_id AND ft_pt_work.emp_id=employee.emp_ID AND ft_pt_work.project_id=project.project_ID AND ft_pt_work.dept_id=department.dept_ID AND employee.dept_ID=department.dept_ID AND salary.emp_no=employee.emp_ID
AND project.project_location='Burton Canberra' AND department.dept_location!='Canberra'";

    $send=mysqli_query($connection,$query);
     ?>
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
  th,td{
    text-align: center;
  }
     </style>
      <!-- <link rel="stylesheet" type="text/css" href="table.css"> -->
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script> -->
  </head>
  <body>
    <ul>
      <li><a  href="home.php">Home</a></li>
      <li><a href="employee.php">Employee</a></li>
      <li><a  href="department.php">Department</a></li>
        <li><a  href="address.php">Address</a></li>
          <li><a href="project.php">Project</a></li>
            <li><a href="work.php">Work</a></li>
               <li><a  href="#salary">Salary</a></li>
            <li class="dropdown">
    <a class="active" href="javascript:void(0)" class="dropbtn">Query</a>
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
    <h1 class="header">Query three</h1>
<table>
  <tr>
    <th>Employee name</th>
    <th>Street no</th>
    <th>Street name</th>
    <th>City</th>
    <th>Zip code</th>
    <th>Project location</th>
    <th>Department location</th>
  </tr>
<?php
while($row=mysqli_fetch_array($send))
{
  echo "<tr>
    <td>$row[emp_name]</td>
    <td>$row[street_no]</td>
    <td>$row[street_name]</td>
    <td>$row[city]</td>
    <td>$row[zip_code]</td>
    <td>$row[project_location]</td>
    <td>$row[dept_location]</td>
  </tr>";
}
 ?>
</table>
  </body>
</html>
