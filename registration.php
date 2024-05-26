<html>
    <head>
        <title>demo of log in page</title>
       <style>
        body{
 margin:0;
 padding:0;
 justify-content:center;
        
}
/*   header css    */
header{
 font-family:Arial,sans-serif;
        background-color: purple;
        color:white;
        padding:20px;
        text-align:center;
    } 
header h1{
  margin:0;
  font-size:36px;
}  
/*  registration form css  */
#loginbody{
    font-family:Arial,sans-serif;
    background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
}
#container{
    min-height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
#container form{
    width: 400px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.951);
}
h3{
    font-size:30px;
    font-style:arial;
}
#btn{
   background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
   border:none;
   color:white;
   width:60%;
   padding:4%;
}
/*  nav bar  */
ul {
    font-family:Arial,sans-serif;
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 background-color:#f1f1f1;
 //font-size:110%;
  
}

#b {
float:left;
}

li a{
  display: block;
  color: #000;
  text-align:center;
  padding:14px 16px;
  text-decoration: none;
}
li a:hover{
 background-color:#555;
 color:white;
}

#adminimg{

 width:20px;
 height:20px;
 border-radius:50px;
}
#book{
  display:block;
  text-decoration:none;
}
/*  dropdown nav bar  */
#dropdown {
  float: left;
  overflow: hidden;
}
#dropdown #dropbtn {
  
  font-size: 100%;  
  border: none;
  //outline: none;
  padding: 14px 16px;
  font-family: inherit;
  margin: 0;
  font-family:Arial,sans-serif;

}
#navbar a:hover, #dropdown:hover #dropbtn {
  background-color:#555;
  color:white;
  margin:0;
}
#dropdown-content {
  font-size:70%;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:1;
}
#dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

#dropdown-content a:hover {
  background-color:#ddd;
  //background-color:#f1f1f1 ;

}
#dropdown:hover #dropdown-content {
  display: block;
}

/* footer */
footer{
 background-color:#1b1b1b;
}  

#cpyimg{
 margin:0px;
 padding:0px;
 width:40px;
 height:40px;
 border-radius:50px;

}

footer h3{
  color:white;
}

table{
  font-style:courier; 
  color:#f1f1f1;
}     </style>
    </head>
    <body>


    <header>
        <h1>Gangwal Book Store</h1>
        <p>Welcome to our book shop</p>
    </header>

    <div id="menu">
            <ul>
            
                <li id="b"><a href="adminlogin.php"><img src="images/ll.jpg" id="adminimg"></a></li>
                <li id="b"><a href="index.php">Home</a></li>
                <li id="b"><a href="about.php">About</a></li>
                <li id="b"><a href="feedback.php">Feedback</a></li>
                <li id="b"><a href="registration.php">User Login</a></li>


                <div id="dropdown">
                <button id="dropbtn">Books
                </button>
                <div id="dropdown-content">
                <a href="history.php">HISTORY</a>
                <a href="mystry.php">MYSTRY & CROME</a>
                <a href="science.php">SCIENCE FICTION</a>
                <a href="educational.php">EDUCATIONAL</a>
                <a href="cooking.php">COOKING</a>
                </div>
                </div>
            </ul>
        </div>



    <div id="loginbody">
       
             <div id="container">
                <form method="post" action="registration.php">
                <h3>Register Here</h3>
                <input type="text" name="t1" required placeholder="Enater Your Full Name" ><br><br>
                <input type="number" name="t2" required placeholder="Enter Your Mobile Number" ><br><br>
                <input type="text" name="t3" required placeholder="Enter Your Address" ><br><br>
                <input type="email" name="t4" required placeholder="Enter Email" ><br><br>
                <input type="text" name="t5" required placeholder="Enter Username" ><br><br>
                <input type="password" name="t6" required placeholder="Enter Password" ><br><br>
                <input type="submit" name="submit" required value="CREATE ACCOUNT" id="btn">
                <p>already have an account?<a href="userlogin.php">login here</a></p>
                </form>
            
            </div>
    </div>



    
<footer>
             <table  width="90%" height="30%" align="center">
        <tr><br>
            <td> <h3>Explore</h3></td>
            <td><h3>Help</h3></td>
            <td><h3>Categories</h3></td>
            <td><h3>Follow us</h3></td>
        </tr>
        <tr>
            <td>about us</td>
            <td>FAQs</td>
            <td>School books</td>
            <td><a href="w1.png"><img src="images/twiter.jpeg" id="cpyimg"></a></li>
                <a href="demo1.html"><img src="images/logo.jpeg" id="cpyimg"></a></li>
                <a href="demo1.html"><img src="images/insta.jpg" id="cpyimg"></a></li>
                <a href="demo1.html"><img src="images/you.jpeg" id="cpyimg"></a></li>
                </td>
        </tr>
        <tr>
            <td>Privacy </td>
            <td>Contact us</td>
            <td>Higher Education</td>
        </tr>
        <tr>
            <td>Terms of Use</td>
            <td></td>
            <td>Competitive Examination</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Fiction & Literature</td>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Children & young adults</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Non-Fiction </td>
        </tr>
       
        </tr>
        </table><br>
</footer>




        </body>
</html>
<?php
if(isset($_POST['submit']))
{
$name=$_POST["t1"];
$mbn=$_POST["t2"];
$add=$_POST["t3"];
$email=$_POST["t4"];
$uname=$_POST["t5"];
$pass=$_POST["t6"];


$con=mysql_connect("localhost","root","");
 $b=mysql_select_db("bookstore");
 

$res=mysql_query("insert into register values('$name','$mbn','$add','$email','$uname','$pass');");
if($res==TRUE)
echo('<script> alert("You are register Successfuly")</script>');
else
echo('<script> alert("Something went wrong")</script>');
mysql_close($con);
}
?>


