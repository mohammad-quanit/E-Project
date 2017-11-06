<?php 
	include 'connection.php';
	 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['uname']);
      $password = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = " SELECT id FROM staff WHERE staff_username = '$username' and staff_password = '$password' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $username;
         
         header("location: welcome.php");
      }else {
         $message = "Please Provide Correct Username/Password!";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }


  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BTS Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<style type="text/css">
	body{
		background-color: #fff;
	}
	.jumbotron {
		background-image: url("images/bts.jpg");
		background-size: cover;
		height: 650px;
		margin-bottom: 3px;
		/*margin: 20px;*/
	}
	/* Add a dark background color with a little bit see-through */ 
.navbar {
    margin-bottom: 0;
    background-color: transparent;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #fff !important;
    /*background-color: #08a00a;*/
}
.navbar-nav li a {
    color: #000 !important;
    font-size: 15px;
}
/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #000 !important;
    /*background-color: #f9c509 !important;*/
}

.navbar-nav li.active a:hover {
    color: #fff !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    background-color: #FFCC00 !important;
    width: 50px;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #371d5b !important;
}

/*Dropdown links 
.dropdown-menu li a {
    color: #000 !important;
}

 On hover, the dropdown links will turn red 
.dropdown-menu li a:hover {
    background-color: red !important;
}*/

form {
    border: 3px solid #f1f1f1;
    width: 600px;
    margin:0 auto;
    border-radius: 70px;
    background-color: #5ed4ff;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    border-radius: 10px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    width: 600px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#myFooter{
  margin-top: -2px;
    padding-top:0px;
    background-color: #22d88c;
    border: 1px solid grey;
    color: #ffffff;
}

#myFooter .container{
    text-align: center;
  background-color: #22d88c;

}

#myFooter .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color: #ffffff;
    background-color: #22d88c;
}

#myFooter ul{
    list-style-type: none;
    padding: 0;
    margin-bottom: 18px;
}

#myFooter a{
    color: #ffffff;
    font-size: 18px;
}

#myFooter li{
    display: inline-block;
    margin: 0px 15px;
    line-height: 2;
}

#myFooter .footer-social{
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
    /*background-color: #eee;*/
    background-color: #22d88c;
}

#myFooter .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color:#efeded;
    color: #d0d0d0;
    border-radius: 51%;
    padding: 10px;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 43px;
    text-decoration: none;
    transition:color 0.2s;
}

#myFooter .fa-facebook:hover{
   color: #2b55ff;
}

#myFooter .fa-facebook:focus{
    color: #2b55ff; 
}

#myFooter .fa-google-plus:hover{
    color:red;
}

#myFooter .fa-google-plus:focus{
    color:red;
}

#myFooter .fa-twitter:hover{
    color: #00aced;

}

#myFooter .fa-twitter:focus{
    color:#00aced;
}



/* CSS used for positioning the footers at the bottom of the page. */
/* You can remove this. */



.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}
	
	
</style>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="background-color:#0e1859;" class="navbar-brand" href="main.php">BTS Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="background-color: #f9c509 !important;"><a href="main.php">Home</a></li>
        <li style="background-color: #08a00a  !important;"><a href="about.php">About Us</a></li>
        <!-- <li><a href="#tour">TOUR</a></li> -->
        <li style="background-color: #c90808  !important;"><a href="contact.php">Conatct Us</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron"></div>


<div style="background-color: #60e3f7">

	<form action="" method="POST">
  
	  <div class="imgcontainer">
      <h2>** For Staff Only **</h2>
	    <img src="images/ogin.png" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>
<br>

	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>
	<br>        
	    <button type="submit" name="login">Login</button>
	<br>
	    <input type="checkbox" checked="checked"> Remember me
	  </div>

	  <div class="container" style="background-color:#637dff">
	    <button type="button" class="cancelbtn" name="clr">Cancer</button>
	    <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>
</div>

<footer id="myFooter">
	<div class="footer-social">
        <div class="container">
            
        
        <p class="" style="font-size: 10px;">Designed By <a href="https://mohammad-quanit.github.io/">Mohammad Quanit</a></p><br>
        <p class="footer-copyright">© 2017 All Rights Reserved</p>
        </div>
        
            <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
       </div>


    </footer>

</body>
</html>