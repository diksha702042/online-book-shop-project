<head>
    <title>Online Book Shop Feedback Form</title>
  <style>
body{
 background-color: white;
 margin:0;
 padding:0;
        
}
/* header css  */
header{
    font-family:Arial,sans-serif;
        background-color: purple;
        color:white;
        padding:20px;
        text-align:center;
    } 
.h12{
  margin:0;
  font-size:36px;
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

/* feedback form */
.c1 {
            width: 50%;
            margin: 0 auto;
            background-color: ;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            
        }

        .h11{
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
        }

input[type="submit"] {
            background-color: orange;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
}

input[type="submit"]:hover {
 background-color: red;
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
        <h1 class="h12">Gangwal Book Store</h1>
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
<br>



        <div class="c1">
            <h1 class="h11">Online Book Shop Feedback</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
    
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
    
                <div class="form-group">
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" required></textarea>
                </div>
    
                <div class="form-group">
                    <input type="submit" value="Submit Feedback">
                </div>
            </form>
        </div> <br>



    <footer><br>
             <table  width="90%" height="30%" align="center">
        <tr>
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

  <?php
if(isset($_POST["submit"]))
{
$uname=$_POST["name"];
$email=$_POST["email"];
$feedback=$_POST["feedback"];



$con=mysql_connect("localhost","root","");
 $b=mysql_select_db("bookstore");
 

$res=mysql_query("insert into feedback values('$uname','$email','$feedback');");
if($res==TRUE)
echo('<script> alert("Thank You For Your Feedback ")</script>');

mysql_close($con);
}
?>


 
