<html>
  <head>
    <style>
    /*  nav bar */
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
  color: gray;
  text-align:center;
  padding:14px 16px;
  text-decoration: none;
}
li a:hover:not(.active){
  background-color:purple;
  color:white;
}  
    /* disp   */
table{
  //border-color:black;
  //border-style:solid;
  width:100%;
  text-align:center;
  background-color:#F0F8FF;
}
table img{
    width:100%;  
    text-align:center;
}
#thead{
  background-color:#89CFF0;
}
h2{
  margin:3%;
  padding:5px;
  font-size:36px;
  text-align:center;
} 
#disp{
  border-style:solid;
  border-color:black;
  width:70%;
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






<h2>All Product</h2><br>
<div id="disp">
<table><tr id="thead"><th>Product<th>Name<th>Price</tr>
<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");


$res=mysql_query("select * from addproduct1;");
            while($row=mysql_fetch_array($res)){
?>
    <form method="post" action="#">
    
      <tr><td width="8%">
      <img src="images/<?php echo $row['image'];?>" alt="">
      <td width="50%"><?php echo($row[0]);?>
      <td><?php echo($row[1]);?>
      </tr>
      </form>
    
      <?php
      };
      
   ?>
   </table>
    </div>
   </body>
    </html>



    <?php
if(isset($_POST["t1"]))
{
$i=$_POST["image"];
$n=$_POST["t1"];
$p=$_POST["t2"];
$ty=$_POST["t3"];
$author=$_POST["t4"];

$con=mysql_connect("localhost","root","");

$db=mysql_select_db("bookstore");


$res=mysql_query("insert into addproduct1 values('$n','$p','$ty','$author','$i');");
if($res==true)
echo('<script> alert("Add product successfully")</script>');
else
echo('<script> alert("Something went wrong")</script>');
}
?>