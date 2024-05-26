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
#btn{
  border:none;
  color:white;
  padding:10px 30px;
  text-align:center;
  text-decoration:none;
  display:inline-block;
  font-size:16px;
  margin:3px 2px;
  cursor:pointer;
  background-color:red;
}
 
    </style>
  </head>
      <body>


<div>
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

  <div>
   <table align="center">
     <tr>
       <th>Product
       <th>Name
       <th>Price
       <th>Book Type
       <th>Author Name
       <th>Action
        
      </tr>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");


$res=mysql_query("select * from addproduct1;");
            while($row=mysql_fetch_array($res)){
?>
    <form method="post" action="#">
    
      <tr><td  width="10%">
      <img src="images/<?php echo $row['image'];?>" alt="">
      <td width="20%">                <?php echo($row[0]);?>
      <td>                <?php echo($row[1]);?>
      <td width="20%">    <?php echo($row[2]);?>
      <td width="20%">    <?php echo($row[3]);?>


      <td width="30%"> 
        <input type="submit" value="Delete" name="remove" id="btn">
        <input type="hidden" name="t1" value="<?php echo($row[0]);?>">
    
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
if(isset($_POST["remove"]))
{
$bname=$_POST['t1'];

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");


$res=mysql_query(" delete from addproduct1 where name='$bname'; ");

}
?>


