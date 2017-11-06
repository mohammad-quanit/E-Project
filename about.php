<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>


<style type="text/css">
   @import url('https://fonts.googleapis.com/css?family=BenchNine');
	body{
		background-color: #fff;}
	
.navbar {
    margin: 0px;
    background-color: #efeded;
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



/*about section styling*/
#aboutTxt{
	text-align: justify;
}



/*footer styling*/

#myFooter{
	margin-top: 0px;
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
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a style="background-color:#0e1859;" class="navbar-brand" href="welcome.php">BTS Management System</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li style="background-color: #f9c509 !important;"><a href="welcome.php">Home</a></li>
		        <li style="background-color: #8043cc  !important;"><a href="#results">Results</a></li>
		        <li style="background-color: #08a00a  !important;"><a href="#about">About Us</a></li>
		        <li style="background-color: #c90808  !important;"><a href="contact.php">Conatct Us</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<br><br><br>

<!-- Container (About Section) -->
	
<div class="container">
	<div id="aboutTxt" class="col-sm-4">
		<h1 style="font-family: 'BenchNine', sans-serif; text-shadow:1px 1px 0 #444;">
			About Bts System.
		</h1>
		<p>
			The School is located on three sites. The original school in Saddar, the heart of the city of Karachi, is listed as a heritage building and now houses Classes VII, VIII and IX. At Clifton, not far from the sea front, in a building opened in 1991, we teach children from Nursery to Class VI. Our newest premises, opened in 1999, houses our O and A-level students.
		</p>
		<p>
            The School is entirely independent, receiving no grant from the government or any other source, and is controlled by a Board of government vernors registered as a Society under the Societies Registration Act of 1860.
		</p>
	</div>

	<div id="aboutImg" class="col-md-4">
		<img src="images/schools-in-karachi.jpg" class="img-rounded" alt="about">
	</div>
</div>

<br>

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