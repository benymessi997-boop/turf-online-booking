<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['uid'];
$rid=$_REQUEST['id'];
$amnt=$_REQUEST['amnt'];

if(isset($_POST['btn'])){

$check=mysqli_query($conn,"select * from book where sdate='$sdate' && edate='$time'");
$count=mysqli_num_rows($check);
if($count>0){
echo "<script>alert('Already booked in this slot')</script>";
}else{
	
	$qry=mysqli_query($conn,"insert into book values('','$uid','$rid','$sdate','$time','$amnt','','$amnt','','$onn')");
			
	
if($qry){
header("location:payment.php?amnt=".$amnt);
} 
}

}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>turf book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class=" bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Grounds</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                       
                        <div class="col-lg-5 px-5 text-end">
                           
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="uhome.php" class="nav-item nav-link ">Home</a>
								    <a href="viewmybook.php" class="nav-item nav-link ">View Booking</a>
									    <a href="index.php" class="nav-item nav-link ">Logout</a>
                               
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
		
		
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">  <img class="w-100" src="img/239836.jpg" alt="Image" height="745px">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;"> <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Grounds</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">ONLINE TURF BOOKING SYSTEM</h1>
                               
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/563012.jpg" alt="Image" height="745px">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Grounds</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">ONLINE TURF BOOKING SYSTEM</h1>
                              
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/hi.jpg" alt="Image"  height="745px">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Grounds</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">ONLINE TURF BOOKING SYSTEM</h1>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
		<br>
		<br>
		
		
		
		
		
<form id="f1" name="f1" method="post" action="#"  >
  <table width="60%" height="245" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><strong>Book Date</strong></td>
	</tr>
	<tr>
    <tr>
      <td width="46%" height="31">&nbsp;</td>
      <td width="54%">&nbsp;</td>
    </tr>
	 <tr>
      <td height="42">Check In </td>
      <td>
      		<input name="sdate" type="date" required>
      </td>
      
   
	
	   
    </tr>	
	 
	 <tr >
	  <td height="42">Format</td>
      <td><select name="onn"  style="background:#FFF;border-radius:5px;" required >
	  <option value="">Select</option>
	    <option value="6x6">6x6</option>
         <option value="7x7">7x7</option>
	   <option value="8x8">8x8</option>
	 
	  </select>
	  
	  
      </td>
    </tr>
	 <tr >
	  <td height="42">Slots</td>
      <td><input type="radio" value="7am-10am" style="margin-right:5px" name="time">7am-10am <input type="radio" value="11am-2pm" style="margin-right:5px" name="time">11am-2pm <input type="radio" value="3pm-6pm" style="margin-right:5px" name="time">3pm-6pm <input type="radio" value="7pm-10pm" style="margin-right:5px" name="time">7pm-10pm 
	  
	  
	 
	  
	  
      </td>
    </tr>
  
	 <tr>
	 <td height="61">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
  
</form>
		
		
		
		
		
		
		
		<br>
		<br>
		  <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" style="margin-top:50px;">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-2 col-lg-1">
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Location, City, Country</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://freewebsitecode.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://youtube.com/freewebsitecode"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://freewebsitecode.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://freewebsitecode.com">Your Site Name</a>, All Right Reserved. 
							
							
							Designed By <a class="border-bottom" href="https://freewebsitecode.com">Free Website Code</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>