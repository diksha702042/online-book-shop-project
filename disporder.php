<html>
    <head>
        <style>
body{
 font-family:Arial,sans-serif;
 margin:0;
 padding:0;
       
}
form{
 display:flex;
}
img{
 width:50%;
 height:20%;
}
table{
  text-align:center;
  border-collapse:collapse;
  width:80%;
}
th,td{
  padding:8px;
  border-bottom:2px solid #ddd;
}
h2{
    text-align:center;
}
/* nav bar*/
ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow: hidden;  
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


<h2>All Orders</h2>


<table align='center'>
    <tr>
        <th>Product</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Qty</th>
        <th>Total Amt</th>
        <th>User Name</th>
    </tr>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");

$res=mysql_query("SELECT * FROM `order1` ");
    while($row=mysql_fetch_array($res)){
?>
    <form method="post" action="#">  
      <tr>   
      <td width="10%">   <img src="images/<?php echo $row['image'];?>" alt=""><br><br>
      <td>   <?php echo($row[1]); ?><br>
      <td>   <?php echo($row[2]); ?><br>
      <td>   <?php echo($row[3]); ?><br>
      <td>   <?php echo($row[5]); ?><br>
      <td>   <?php echo($row[4]); ?><br>
      </tr>
    </form>
    
    
    <?php

    };
    ?>
    </table>
</body>
</html>