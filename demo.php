<html>
    <head>
        <style>
/*   header part  */
header h1{
  margin:0;
  font-size:36px;
}  
body{
 font-family:Arial,sans-serif;
 //background-color: #f2f2f2;
 margin:0;
 padding:0;
       
}
header{
        background-color: #d01f3a;
        color:white;
        padding:20px;
        text-align:center;
    } 

    /* nav bar  */
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
#adminimg{

 width:30px;
 height:30px;
 border-radius:50px;

}
 /* add product part */
#content{
    min-height: 70%;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
#content form{
    width: 400px;
    text-align: center;
   // background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
   background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
   
}
#content h3{
    font-size:30px;
    font-style:arial;
}
#addbtn{
    background-color:white;
   border:none;
   color:black;
   width:60%;
   padding:4%;
}
/*  footer  */
footer{
 background-color: #333;
 color: white;
 text-align: center;
 padding: 10px 0; 
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
    <div id="content">
        <form method="post" action="demo1.php"> 
            <h3>Add Product</h3>          
            <input type="text" name="t1" placeholder="Book Name" required><br><br>
            <input type="text" name="t2" placeholder="Book Price" required><br><br>
            <input type="text" name="t3" placeholder="Book Type" required><br><br>
            <input type="text" name="t4" placeholder="Book Author" required><br><br>
            <input type="file" name="image" ><br><br>
            <input type="submit" value="SUBMIT" id="addbtn"><br><br>
            </div>

        </form>
        </body> 
        </html>
  

    
