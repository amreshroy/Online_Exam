


<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
    <title>Online Exam System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/main.css">
    
    <script src="{{ asset('frontEnd') }}/js/jquery.js"></script>
    <script src="{{ asset('frontEnd') }}/js/main.js"></script>

   
    <script src="{{asset('js/app.js')}}"></script>

</head>
<body style="background-color: #0c5460">

<div class="phpcoding">
    <section class="headeroption"></section>
        <section class="maincontent">
        <div class="menu">
        <ul>
        	 <li><a href="/">Home</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <!--<li><a href="profile.php">Profile</a></li>
            <li><a href="exam.php">Exam</a></li>-->
            <li><a href="{{ route('register') }}">Registration</a></li>
            <li><a href="/contact-us">Contact</a></li>
            <li><a class="current" href="/Abouts">About Us</a></li>
        </ul>
        </div>

<div class="main">
   
	<div class="bg-light">
	  <div class="container py-5">
	    <div class="row h-100 align-items-center py-5">
	      <div class="col-lg-6">
	        <h1 class="display-6"> About us page </h1>
	        <p class="lead text-muted mb-0"> Create a minimal about us </p>
	        <p class="lead text-muted"> Snippet by </p>
	      </div>
	      <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
	    </div>
	  </div>
	</div>

	<div class="bg-white py-5">
	  <div class="container py-5">
	    <div class="row align-items-center mb-5">
	      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
	        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
	        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
	      </div>
	      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
	    </div>
	    <div class="row align-items-center">
	      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
	      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
	        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
	        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="bg-light py-5">
	  <div class="container py-5">
	    <div class="row mb-4">
	      <div class="col-lg-5">
	        <h2 class="display-4 font-weight-light">Our team</h2>
	        <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	      </div>
	    </div>

	    <div class="row text-center">
	      <!-- Team item-->
	      <div class="col-xl-3 col-sm-6 mb-5">
	        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
	          <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
	          <ul class="social mb-0 list-inline mt-3">
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
	          </ul>
	        </div>
	      </div>
	      <!-- End-->

	      <!-- Team item-->
	      <div class="col-xl-3 col-sm-6 mb-5">
	        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
	          <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
	          <ul class="social mb-0 list-inline mt-3">
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
	          </ul>
	        </div>
	      </div>
	      <!-- End-->

	      <!-- Team item-->
	      <div class="col-xl-3 col-sm-6 mb-5">
	        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
	          <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
	          <ul class="social mb-0 list-inline mt-3">
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
	            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
	          </ul>
	        </div>
	      </div>
	      <!-- End-->

    
</div>
 </section>
<section class="footeroption">
        <h2><?php echo "Online Exam System"; ?></h2><br/>

<footer class="footer">
        
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed 
          </div>
        </div>
      </footer>

    </section>
</div>
</body>
</html>



