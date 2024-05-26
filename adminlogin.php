<html>
<head>

    <title>Login Page</title>

    <style>
    body {

margin: 0;

padding: 0;

font-family: sans-serif;

background-color:#fffaf0;

//background: url() no-repeat;
//background-size: cover;
//background-image:url('images/book3.jpg');
// background-repeat:no-repeat;
//background-size:100%100%;
// opacity:0.5;
                
}

#login-box {
background-color:white;

width: 380px;
height:50%;

position: absolute;

top: 50%;

left: 50%;

transform: translate(-50%, -50%);

color: #191970;

box-shadow: 0px 0px 10px rgba(1, 1, 1, 1.2);
}


#login-box h1 {

float: left;

font-size: 40px;

border-bottom: 4px solid #191970;

margin-bottom: 50px;

padding: 13px;
}

#textbox {

width: 100%;

overflow: hidden;

font-size: 20px;

padding: 8px 0;

margin: 8px 0;

border-bottom: 1px solid #191970;
}

#fa {

width: px;

float: left;

text-align: center;
}

#textbox input {

border: none;

outline: none;

background: none;

font-size: 18px;

float: left;

margin: 0 10px;
}

#button {

width: 50%;

padding: 8px;

color: #ffffff;

background: none #191970;

border: none;

border-radius: 6px;

font-size: 18px;

cursor: pointer;

margin:12px 0;

}
    </style>



</head>
 

<body>

    <form action="adminlogin.php" method="post">

        <div id="login-box">

            <h1>Admin Login</h1>
 

            <div id="textbox">

                <i></i>

                <input type="text" placeholder="Username" name="t1" required>

            </div>
 

            <div id="textbox">

                <i></i>

                <input type="password" placeholder="Password" name="t2" required>

            </div>
 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            <input  type="submit" value="LOGIN" id="button">

        </div>

    </form>

</body>

</html>


<?php
if(isset($_POST['t1']))
{
$un=$_POST["t1"];
$pass=$_POST["t2"];

if($_POST["t1"]=="diksha" && $_POST["t2"]=="123")
{
    header('location:adminview.php');
}
    else
 {
    echo('<script> alert("Invalid User Id & Password")</script>');
    
   
 }
}
?>

