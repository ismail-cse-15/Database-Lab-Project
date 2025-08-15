<?php

require_once("config.php");

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
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
   </style>
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script> -->
   </head>
   <body>
   <ul>
     <li><a  href="home.php">Home</a></li>
     <li><a href="employee.php">Employee</a></li>
     <li><a href="department.php">Department</a></li>
       <li><a class="active" href="#address">Address</a></li>
         <li><a href="project.php">Project</a></li>
           <li><a href="work.php">Work</a></li>
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
     <h1>Enter data about employee's address</h1>
     <br>

     <div class="container">
      <form class="" action="action3.php" method="post">
        <div class="row">
          <div class="col-25">
          <label for="">Street no</label>

          </div>
          <div class="col-75">
            <input type="text" name="street_no" placeholder="Street no"value=""required="">

          </div>
           </div>
          <div class="row">
            <div class="col-25">
            <label for="">Street name</label>

            </div>
            <div class="col-75">
              <input type="text" name="street_name" placeholder="Street name"value=""required="">

            </div>
             </div>
             <div class="row">
               <div class="col-25">
                 <label for="">City</label>


               </div>
               <div class="col-75">
                 <input type="text" name="city" placeholder="City" value=""required>

               </div>

             </div>
             <div class="row">
               <div class="col-25">
                 <label for="">Zip code</label>


               </div>
               <div class="col-75">
                 <input type="text" name="zip_code" placeholder="Zip code" value=""required>

               </div>

             </div>
             <div class="row">
               <input type="submit" name="" value="Submit">

             </div>
      </form>



     </div>

   </body>
 </html>
