<html>
    <head>
      <style>

body{
  text-align:center;

}

/*  table css */
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

 margin:0;
 padding:0;
       
}
ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow: hidden;

  
}
li {
float:left;
}
li a:hover:not(.active){
  background-color:purple;
  color:white;
}
li a{
  display: block;
  color: black;
  text-align:center;
  padding:14px 16px;
  text-decoration: none;
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

        
        
        
        
        
        
        
        <br>
<h2>Register Users</h2>
<?php

$con=mysql_connect("localhost","root","");

$db=mysql_select_db("bookstore");
echo("<table id='tbl'  align='center' ><tr><th>Name<th>Mobile no<th>Address<th>Email<th>User Name<th>Password</tr>");
$res=mysql_query("select * from register;");
   while($row=mysql_fetch_array($res))
   {
?>
<form metho="post" action="#">
    <br>&nbsp;&nbsp;&nbsp;
    <?php
    echo("<tr><td>".$row[0]);
    echo("<td>".$row[1]);
    echo("<td>".$row[2]);
    echo("<td>".$row[3]);
    echo("<td>".$row[4]);
    echo("<td>".$row[5]);
    
    echo("</tr>");
   }
?>
</table>
</form>
</body>
</html>