

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
<body>

<div class="phpcoding">
    <section class="headeroption"></section>
        <section class="maincontent">
        <div class="menu">
        <ul>
            <li><a href="{{ route('login') }}">Login</a></li>
            <!--<li><a href="profile.php">Profile</a></li>
            <li><a href="exam.php">Exam</a></li>-->
            <li><a href="{{ route('register') }}">Registration</a></li>
            <li><a href="/contact-us">Contact</a></li>
            <li><a href="/about-us">About Us</a></li>
        </ul>
        </div>

<div class="main">
   
@include('frontView.slider')

    
</div>
 </section>
<section class="footeroption">
        <h2><?php echo "Online Exam System"; ?></h2><br/>
        

        <div class="fotter_top_area">
    <div class="container footer">
        <div class="row">

           <div class="footer_menu">
               <ul>
                <li><a href="?m=about_us">About Us</a></li>
               </ul>
           </div>   
           <div class="footer_menu">
               <ul>
                <li><a href="?m=contact_us">Contact Us</a></li>
               </ul>
           </div>   
           <div class="footer_menu">
               <ul>
                <li><a href="?m=privacy_policy">Privacy Policy</a></li>
               </ul>
           </div>   
           <div class="footer_menu">
               <ul>
                <li><a href="?m=terms_cond">Terms & Conditions</a></li>
               </ul>
           </div>   
           
        </div>
    </div>
</div>

    </section>
</div>
</body>
</html>

