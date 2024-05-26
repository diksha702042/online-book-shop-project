<html>
<head>
    <title>Bookstore</title>
    <style>
body {
 //font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
 //background-color: #f2f2f2;
   
}
/*  header  */
header{
 font-family: Arial, sans-serif;
 background-color: purple;
 color:white;
 padding:20px;
 text-align:center;
    } 
header h1{
  margin:0;
  font-size:36px;
}  


/*  nav bar  */
ul {
 font-family: Arial, sans-serif;
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
/* about details */
#h{
 font-size: 200%;
 text-align: center;
 color: purple;
 }
 
 #tab1{
 color:brown;
 font-size:200%;
 text-align:left;
 
}
#tab2{
 color:brown;
 font-size:200%;
 text-align:left;

}
#t{
 text-align:center;
 font-family: Arial, sans-serif;
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
            </ul>
                </div>
  </div>
<br>
    




    <div id="h">ABOUT US</div>
    <br>
    <div id="t"> 
       <p> "Rise and rise again until lambs become lions"</p>
        <p>                   - Robin Hood</p>

              <p>"Read and read again until fliesbecome bookworms"</p>

Ever lusted over a book but had to control yourself because it was too expensive?
Worry not! Because Gangwal is here to answer all your literary prayers. Knowledge is priceless but the books come with a bill and 
the Gangwal Team is committed to bring to you the best of the brilliant from the world of written text, at prices which are literally a steal.
 Call us the Robin Hood of ABCs for we shall use every weapon there is to meet your bibliophilic fantasies. So fellas' put on your reading capes 
 because it is time to fly into the mystical world of best sellers.
Never will you even have to scan over the price tag again as you pretend to read the preface. Let the only thing that 
comes between you and the next book be the 5 books you are reading right now. The books will always wait for you like loyal lovers with faithful hearts and the Gangwal Team,

     <h2>Our Story</h2>
     
       <p> Welcome to the Online Book Shop, your one-stop destination for discovering and purchasing your favorite books online.</p>  
       <p>We are passionate about literature and committed to bringing you an extensive collection of books from various genres.</p> 
<br>
        <h2>Our Mission</h2>
        
       <p> Our mission is to promote reading and make it convenient for book enthusiasts to access a wide range of books at their fingertips.</p>
       <p>  We aim to provide a seamless online shopping experience for book lovers of all ages.
</p>
       <br> <h2>Why Choose Us</h2>
        
       <p>Wide Selection: We offer a diverse selection of books, from classics to bestsellers.</p>
           <p> Convenience:    Shop from the comfort of your home, 24/7.</p>
           <p>Quality Service: Our team is dedicated to providing excellent customer service.</p>
            <p>Secure Shopping: Your online safety is our priority, and we ensure secure transactions.
         </p>
         <p>Adress: Newasa Road W.no-6 ,Shrirampur,Ahmednagar.</p>
         <p>  Mobile No:  9325078090</p>
        </div>   
  <br>
  <br>







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
        </table>
<br>
    </footer>
</body> 
</html>