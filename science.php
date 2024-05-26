<html>
<head>
    <title>BOOK SHOP</title>
  <style>
body{
 margin:0;
 padding:0;
 justify-content:center;
        
}
/*   header css    */
header{
        background-color:purple;
        color:white;
        padding:20px;
        text-align:center;
        font-family:Arial,sans-serif;
}
h1{
  margin:0;
  font-size:36px;
}  

/*  nav bar  */
ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 background-color:#f1f1f1;
 //font-size:110%;
 font-family:Arial,sans-serif;
  
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

/*   display product buy   */
#img1{
  width:80%;
  height:80%;
  margin:9px;
  
}
#product{
width:90%;
height:70%;
margin:10%;
border-style:solid;
border-color:dark gray;
box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
justify-content:center;
text-align:center;
color:gray;
background-color: white;
}
#container{
  //display:inline-block;
  margin:25px;
  width:20%;
  
}
#allproduct{
 
  padding:20px;
  justify-content:center;
  display:flex;
}
form{
  height:300px;
}
#btn{
  border:none;
   background-color:orange;
   color:white;
   width:70%;
   padding:3%;
   margin:7px;
   border-radius:2px;
}
#btn:hover{
  background-color:gray;
}
#qt{
  width:30%;
}
#hh{
  color:white;
  background-color:purple;
  width:30%;
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
}
     
  </style>
  </head>
<body>
    <header>
        <h1>Gangwal Book Shop</h1>
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
                <a href="science.php">SCIENCE FICTION</a>
                <a href="educational.php">EDUCATIONAL</a>
                <a href="cooking.php">COOKING</a>
                </div>

            </ul>
        </div>
        <br><br>
        <center><h1 id="hh">Science and Fiction Books</h1></center>         
  
<div id=allproduct>
             
    <div id="container">
    <div id="product">
    <a href="sproduct1.php"><img src="images/32.jpg" id="img1"></a>
    General Science
    </div></div>

    <div id="container">
    <div id="product">
    <a href="sproduct2.php"><img src="images/31.jpg" id="img1"></a>
    Relativity
    </div></div>
    
    <div id="container">
    <div id="product">
    <a href="sproduct3.php"><img src="images/23.jpg" id="img1"></a>
    Time Trap
    </div></div>
    
    <div id="container">
    <div id="product">
    <a href="sproduct4.php"><img src="images/26.jpg" id="img1"></a>
    Beyond Infinity
    </div></div>
  
</div>
  
   </body>
</html>
  </body>
  </html>



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
                <a href="demo1.html"><img src="images/you.jpeg" id="cpyimg"></a></li>              
                <a href="demo1.html"><img src="images/insta.jpg" id="cpyimg"></a></li>
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