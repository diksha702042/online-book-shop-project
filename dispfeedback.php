<html>
    <head>
        <style>
table{
  border-collapse:collapse;
  width:80%;
}
th,td{
  padding:8px;
  border-bottom:2px solid #ddd;
  //background-color:#89CFF0;
}
            /* nav bar*/
 body{
 font-family:Arial,sans-serif;
 //background-color: #f2f2f2;
 margin:0;
 padding:0;
       
}
ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 // background-color:#333;
  
}

li {
float:left;
}
li a{
  display: block;
  color: black;
  text-align:center;
  padding:14px 16px;
  text-decoration: none;
}
li a:hover:not(.active){
  background-color:purple;
  color:white;
}
h2{
    text-align:center;
}
 
        </style>
    </head>
    <body>
    
    <div id="menu">
    <ul>
    
        <li><a href="index.php">Home</a></li>
        <li><a href="dispreg.php">Register Users</a></li>
        <li><a href="dispfeedback.php">Feedbacks</a></li>
        <li><a href="disporder.php">Orders</a></li>
        <li><a href="demo.php">Add Product</a></li>
        <li><a href="allproduct.php">All Product</a></li>
       
    </ul>
</div>

<h2>Feedback</h2>


    
<?php

$con=mysql_connect("localhost","root","");

$db=mysql_select_db("bookstore");
echo("<table  align='center' ><tr><th>Id<th>Customer Name<th>Email<th>Feedback</tr>");
$res=mysql_query("select * from feedback;");
   while($row=mysql_fetch_array($res))
   {
?>
    <br>&nbsp;&nbsp;&nbsp;
    <?php
    echo("<tr><td>".$row[0]);
    echo("<td>".$row[1]);
    echo("<td>".$row[2]);
    echo("<td>".$row[3]);
   
    echo("</tr>");
   }
?>


</body>
</html>