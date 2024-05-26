<htnl>
   <head>
      <style>
body{
//margin:10%;
padding:10px;
}
table{
   margin:7%;
   width:80%;
   text-align:center;
   font-size:120%;
   //border-style:solid;
}
td{
   width:50%;
}
img{
  width:40%;
  height:10%;
  margin:20px;
  text-align:center;
  justify-content:center;
  //border-style:solid;
  border:1px solid;
  padding:10px;
  box-shadow: 10px 10px 5px #888888;
}

#bin
{
   font-size:180%;
   //color:black;
  // text-shadow:-1px 0 black,0 1px black,1px 0 black,0 -1px black;
   //text-shadow: 0 0  3px #000000;
   //border-style:solid;
}
#btn{
  border:none;
   background-color:orange;
   color:white;
   width:30%;
   padding:3%;
   margin:7px;
   border-radius:2px;
   radius:10px;
   text-align:center;
}
#btn:hover{
 background-color:red;
 color:white;
}
#qt{
   width:20%;
}
#binfo{
   text-align:left;
}
#bimg{
   text-align:right;
}
pre{
   font-size:90%;
   color:lightseagreen;
}
form{
  // border-style:solid;
}



      </style>
   </head>
   <body>


<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");


$res=mysql_query("select * from addproduct1 where name='A Brief History of Time Stephen Hawking';");
            while($row=mysql_fetch_array($res)){
?>

     <table><tr><td id="bimg">

    <form method="post" action="hproduct2.php">
    

      <img src="images/<?php echo $row['image'];?>" >
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <td id="binfo"> 
      <div id="bin">
      <?php echo($row[0]); ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      
      <pre id="desc">
Description

A Brief History Of Time is a book authored by the 
science whiz Stephen Hawking. 
This New York Times bestseller is a pioneering book 
and gives us an insight into intense issues related 
to the universe. Questions such as how did the universe 
come into being, does time always flow forward, is the 
universe unending or is it defined by limitations, 
what is the extent of space, and what will happen 
eventually when it is all over is explained in the book.
      </pre>

      Price :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp; 
       <?php echo($row[1]);?> &nbsp;&nbsp;.Rs<br>
      Book Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo($row[2]);?><br> 
      Other Name:
      &nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo($row[3]);?><br><br>
      
            

      <input type="hidden" name="himage" value="<?php echo $row['image']; ?> " required>
      <input type="hidden" name="hname" value="<?php echo $row['0']; ?> "  required>
      <input type="hidden" name="hprice" value="<?php echo $row['1']; ?> "  required>
      
      Qty:   
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="text" name="quantity" value="1" id="qt"  required><br>
      
      Enter Name:
      <input type="text" name="uname"  required><br><br>
            </div>
      <input type="submit" name="buy" value="Buy now" id="btn">
      
    </form>
            </tr>
            </table>     
      
            </div>
            </div>        
      <?php
      };
      
   ?>

   </body>
</html>

<?php
$con=mysql_connect("localhost","root","");

$db=mysql_select_db("bookstore");

if(isset($_POST["buy"]))
{
$bbimages=$_POST["himage"];
$bbname=$_POST["hname"];
$bbprice=$_POST["hprice"];
$bqty=$_POST["quantity"];
$uname=$_POST["uname"];
$btot=$bbprice*$bqty;

$res=mysql_query("INSERT INTO `bookstore`.`order1` (
  `name` ,
  `price` ,
  `qty` ,
  `uname` ,
  `tot` ,
  `image`
  )
  VALUES (
  '$bbname', '$bbprice', '$bqty', '$uname', '$btot', '$bbimages'
  );
   
  ");
if($res==TRUE)
{
  header('location:bill.php');
}

}

?>
