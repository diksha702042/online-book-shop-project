<html>
    <head>
        <title>demo of log in page</title>
       <style>
        #loginbody{
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
       </style>
    </head>
    <body id="loginbody">
       
             <div id="container">
                <form method="post" action="userlogin2.php">
                <h3>Login</h3>
                <input type="text" name="t1" required placeholder="Enter Username" id="box"><br><br>
                <input type="password" name="t2" required placeholder="Enter Password" id="box"><br><br>
                <input type="cpasswoed" name="t3" required placeholder="Confirm Password" id="box"><br><br>
                <input type="submit" name="submit" required value="Forgot Password" id="btn"><br><br>
                </form>
            
            </div>
        </body>
</html>
<?php
$uname=$_POST["t1"];
$pass=$_POST["t2"];
$cpass=$_POST["t3"];
if($_POST["submit"])
{
if($pass==$cpass)
{

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bookstore");

$res=mysql_query("update register set password='$cpass' where uname='$uname';");
if($res==TRUE)
echo('<script> alert("Password Was Change Successfuly")</script>');
else
echo('<script> alert("Something went wrong")</script>');
mysql_close($con);
}
}
?>