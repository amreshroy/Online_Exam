@extends('layouts.app')

@section('content')
<div class="container">

 


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
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/main.css">
    <script src="{{ asset('frontEnd') }}/js/jquery.js"></script>
    <script src="{{ asset('frontEnd') }}/js/main.js"></script>
</head>
<body>

<div class="phpcoding">
    <section class="headeroption"></section>
        <section class="maincontent">
        <div class="menu">
        <ul>
            <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
            <li><a href="{{ url('Profile') }}">Profile</a></li>
            <li><a href="{{ url('Reading') }}">Reading</a></li>
            <li><a href="{{ url('Practice') }}">Practice</a></li>
            <li><a href="{{ url('Exam') }}">Exam</a></li>
            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
            <!--<li><a href="logout.php">Logout</a></li>-->
        </ul>
        </div>

<div class="main">
 <div class="table-responsive">
     <!-- <table class="table">
      	<h2> {{ Auth::user()->name }}</h2>
        <h2> {{ Auth::user()->email }}</h2>
        <h2> {{ Auth::user()->usertype }}</h2>
      </table> -->

     <div class="container">
         <div class="row my-2">
             <div class="col-lg-8 order-lg-2">
                 <ul class="nav nav-tabs">
                     <li class="nav-item">
                         <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">User Profile</a>
                     </li>
                     <!-- <li class="nav-item">
                         <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                     </li> -->
                     <li class="nav-item">
                         <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                     </li>
                 </ul>
                 <div class="tab-content py-4">
                     <div class="tab-pane active" id="profile">
                         <!-- <h5 class="mb-3">User Profile</h5> -->
                         <div class="row">
                             <div class="col-md-9">
                                 <h4> Name : {{ Auth::user()->name }} </h4>

                                 <p>About</p>
                                 <h3>Hobbies</h3>
                                 <p>
                                     Indie music, skiing and hiking. I love the great outdoors.
                                 </p>
                             </div>
                             
                             
                         </div>
                         <!--/row-->
                     </div>
                 
                     <div class="tab-pane" id="edit">
                         <form role="form">
                             
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                 <div class="col-lg-9">
                                     <input class="form-control" type="email" value="{{ Auth::user()->email }}">
                                 </div>
                             </div>
                             
                             
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                 <div class="col-lg-9">
                                     <input class="form-control" type="text" value="" placeholder="Street">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"></label>
                                 <div class="col-lg-6">
                                     <input class="form-control" type="text" value="" placeholder="City">
                                 </div>
                                 
                             </div>
                             
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                 <div class="col-lg-9">
                                     <input class="form-control" type="text" value="{{ Auth::user()->name }}">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                 <div class="col-lg-9">
                                     <input class="form-control" type="password" value="{{ Auth::user()->password }}">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                                 <div class="col-lg-9">
                                     <input class="form-control" type="password" value="{{ Auth::user()->password }}">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"></label>
                                 <div class="col-lg-9">
                                     <input type="reset" class="btn btn-secondary" value="Cancel">
                                     <input type="button" class="btn btn-primary" value="Save Changes">
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 order-lg-1 text-center">
                 <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                 <h6 class="mt-2">Upload a different photo</h6>
                 <label class="custom-file">
                     <input type="file" id="file" class="custom-file-input">
                     <span class="custom-file-control btn btn-primary">Choose file</span>
                 </label>
             </div>
         </div>
     </div>
    
</div>
 </section>
<section class="footeroption">
        <h2><?php echo "Online Exam System"; ?></h2><br/>
    </section>
</div>
</body>
</html>



</div>
@endsection
