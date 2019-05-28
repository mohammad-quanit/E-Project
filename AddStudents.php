<?php 
include 'connection.php';
ini_set('mysqli.connect_timeout', 300);
ini_set('default_socket_timeout', 300); 	

if (isset($_POST['submit'])) {
 
   $conn = mysqli_connect('localhost','root','','a.m.system');
   if(! $conn ) {die('Could not connect: ' . mysqli_error());}
  		//setting field variables
   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
   $gender = $_POST['gender'];
   $DOB = $_POST['dob'];
   $batch = $_POST['batch'];
   $address = $_POST['address'];  
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $img = addslashes(file_get_contents($_FILES['f1'] ['tmp_name']));

   $sqlInsert="INSERT into students 
   (STD_First_Name,STD_Lastt_Name,STD_Gender,STD_DOB,STD_Email,STD_Phone,STD_Address,STD_Batch, STD_Image) 
   VALUES ('$fname' , '$lname' , '$gender' ,'$DOB', '$email', '$phone', '$address', '$batch', '$img') ";

   if (mysqli_query($conn, $sqlInsert)) {
    $message = "Updated Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
}else{
  echo "<script type='text/javascript'>alert('Error Inserting!!');</script>" . mysqli_error($conn);
}

}			
					// fieldData();
		 // 			if (getimagesize($_FILES['image']['tmp_name']) == false) {
		 // 				echo "Please select an image!";
		 // 			}else{
		 // 				$image = addslashes($_FILES['image']['tmp_name']);
		 // 				$name = addslashes($_FILES['image']['name']);
		 // 				$image = file_get_contents($image);
		 // 				$image = base64_encode($image);
			// 			// move_uploaded_file($image, "uploads/$name");
		 // 				// saveImage($image);
		 // 			}
 		// }
 		//displayImage();
 		//save image func
 		// function saveImage($image){
 		// 	$conn = mysqli_connect('localhost','root','','a.m.system');
			// if(! $conn ) {die('Could not connect: ' . mysqli_error());}
			// 	$qry = ' UPDATE students SET STD_Image="$image" ';

			// 	$res = mysqli_query($conn, $qry);
			// 	if ($res) {
			// 		echo "<br>Image Uploaded";
			// 	}else{
			// 		echo "<br>Image not Uploaded" . mysqli_error($conn);
			// 	}
 		// }

 		//retrieve image func
 		// function displayImage(){
 		// 	$con = mysqli_connect('localhost','root','','a.m.system');
			// if(! $conn ) {die('Could not connect: ' . mysqli_error());}
			// 	$qry = " SELECT STD_Image from students";
			// 	$result = mysqli_query($conn , $qry);
			// 	while ($row = mysqli_fetch_array($result)) {
			// 		echo ' <img height="300" width="300" src="data:STD_Image;base64,'.$row['STD_Image'].'"> ';
			// 	}
			// 	mysqli_close($conn);
 		// }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>Add-Students</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style>
    body {
     font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
     background-image: url("images/shutterstock_18085369.jpg");
     background-size: cover;
   }
   h1 {
     color: #99CC00;
     margin: 0px 0px 5px;
     padding: 0px 0px 3px;
     font: bold 18px Verdana, Arial, Helvetica, sans-serif;
     border-bottom: 1px dashed #E6E8ED;
   }

   .navbar {
    margin: 0px;
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


  #container1 {
    background-color: transparent;
    /*background-image:url(tablet.jpg);*/
    background-size:650px 750px;
    background-repeat:no-repeat;
    background-position:center;
  }

  .centered-form {
    margin-top: 121px;
    margin-bottom: 120px;
  }

  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 1px 4px 9px;
  }

  /*footer styling*/

  #myFooter{
   margin-top: -30px;
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
          <li style="background-color: #08a00a  !important;"><a href="about.php">About Us</a></li>
          <li style="background-color: #c90808  !important;"><a href="contact.php">Conatct Us</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">

   <div class="container" id="container1">
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title text-center">Add New Students</h3>
          </div>

          <div class="panel-body">


            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required>
              </div>

              <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="gender" id="gender" class="form-control input-sm" placeholder="Gender" required>
              </div>
              <div class="form-group">
                <input type="text" name="dob" id="datepicker" class="form-control input-sm" placeholder="Date Of Birth.." required>
              </div>

              <div class="form-group">
                <input type="text" name="batch" id="batch" class="form-control input-sm" placeholder="Batch" required>
              </div>


              <div class="form-group">
                <textarea type="text" name="address" id="address" class="form-control input-sm" placeholder="Address.." required></textarea>
              </div>

              
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="number" name="phone" id="phone" class="form-control input-sm" placeholder="Phone" required>
                  </div>
                </div>

                <div class="form-group col-sm-6">
                 <input type="file" name="f1">
               </div>
             </div>
             
             
             <input type="submit" value="Register" name="submit" class="btn btn-info btn-block">
           </form>

         </div>
       </div>
       
     </div>
     
   </div>
   
 </div>

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

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
</body>
</html>