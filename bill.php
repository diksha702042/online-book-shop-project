<html>
    <head>
        <style>

table{
  padding:2%;
  margin:5%;
  height:20%;
  width:90%;
  text-align:center;
  font-family:oblique;
}
th{
  background-color:#fff;
}
#d1{

    background-color:#FFEFD5;
    border-radius: 5px;
    padding: 50px;
    width: 300px;
    margin: 12% auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
    text-align:center;
    
}

</style>


    </head>
    <body>
        <div id="d1">
<div id="bill">
 <font color='red'>Gangwal Book Store</font><br>
 2345678934<br><br>

<table>
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Qty</th>


    </tr>
    

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");

$res=mysql_query(" select * from order1 order by id desc
");
    if($row=mysql_fetch_array($res)){
?>
    <form method="post" action="#">   
    <?php echo($row[4]); ?><br>
    <?php  $runame=($row[4]); ?><br>
       <td > <?php echo($row[1]); ?><br>
       <td> <?php echo($row[2]); ?><br>
       <td > <?php echo($row[3]); ?><br>
       <tr>
       <td>Total
       <td colspan="2"> <?php echo($row[5]); ?><br>
    </tr>
    </table>
    </form>
  
    
    <?php

    };

    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("bookstore");
    
    $res=mysql_query(" select * from register where uname='$runame';
    ");
        if($row=mysql_fetch_array($res)){
            echo("<br>Name:");
            echo($row[1]);
            echo("<br>Mobile No:");
            echo($row[2]);
            echo("<br>Address: ");
            echo($row[3]);
            echo("<br>Email Id: ");
            echo($row[4]);
        }
    ?>
    </table>
  </div>





    </div>
</body>
</html>