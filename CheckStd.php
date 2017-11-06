<?php 
include 'connection.php';
include 'session.php';

 ?>
<!DOCTYPE html>
<html>
<head>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
			<title>Checking Student</title>

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
		        <li style="background-color: #08a00a  !important;"><a href="about.php">About Us</a></li>
		        <li style="background-color: #c90808  !important;"><a href="contact.php">Conatct Us</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
<br><br><br>

<!-- container for student details -->


<div class="container" style="background-color: lightgrey; border-radius: 10px;"><br>
  			<h1 align="center">Students Details.</h1>
  			<h3 align="center">Date: <?php date_default_timezone_set('Asia/Karachi'); echo date("d-m-Y (D) H:i:s"); ?></h3>
  			<a href="AddStudents.php" class="btn btn-success">Add New students</a>
  			

  	<hr>
  		<div class="panel panel-body">
  			<form method="post" action="attendance.php" enctype="multipart/form-data">
  				<table class="table table-bordered table-striped">
  					<!-- <thead> -->
				      <tr>
				        <th>Serail Num</th>
				        <th>Batch</th>
				        <th>First Name</th>
				        <th>Last Name</th>
				        <th>Gender</th>
				        <th>D.O.B</th>
				        <th>Email</th>
				        <th>Phone No</th>
				    	<th>Address</th>        
				        <th>Image</th>
				      </tr>
				    <!-- </thead> -->
					
				<?php 
					
						$result = mysqli_query($conn, "SELECT * FROM students");
						$serialNum = 0;
						$counter=0;

						while ($row = mysqli_fetch_array($result)) {
						$serialNum++;
						
				?>
						<tr>
							<td><?php echo $serialNum; ?></td>

							<td><?php echo $row['STD_Batch']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_Batch']; ?>"  name="std_batch[]">

						  	<td><?php echo $row['STD_First_Name']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_First_Name']; ?>"  name="std_fname[]">

						  	<td><?php echo $row['STD_Lastt_Name']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_Lastt_Name']; ?>"  name="std_lname[]">

						  	<td><?php echo $row['STD_Gender']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_STD_Gender']; ?>"  name="std_gender[]">

						  	<td><?php echo $row['STD_DOB']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_DOB']; ?>"  name="std_dob[]">

							<td><?php echo $row['STD_Email']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_Email']; ?>"  name="std_email[]">

						  	<td><?php echo $row['STD_Phone']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_Phone']; ?>"  name="std_phone[]">

						  	<td><?php echo $row['STD_Address']; ?></td>
						  		<input type="hidden" value="<?php echo $row['STD_Address']; ?>"  name="std_add[]">
						  
						  	

							<td>
							<?php 
							echo ' <img src="data:image;base64, '.base64_encode($row['STD_Image']).'" height="100"  width="100" /> ';
							?></td>
								<!-- <input type="hidden" value="<?php echo $row['STD_Image']; ?>"  name="std_img[]"> -->
							
						</tr>
				<?php 
					$counter++;
					}
				?>
							
  				</table>
  				
  			</form>
  		</div>
  		<br><br>
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