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
      <table class="table">
        <tbody>
           @foreach ($users as $user)
                      <tr>
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->usertype }} </td>
                        <td> 
                          <a href="/role-edit/{{ $user->id }}" class="btn btn-success">Edit </a> 
                        </td>
                        <!-- <td> 
                          <form action="/role-delete/{{ $user->id }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger">Delete </button>
                          </form>
                        </td> -->
                      </tr>
                      @endforeach
        </tbody>
      </table>
    </div> 
    
</div>
 </section>
<section class="footeroption">
        <h2><?php echo "Online Exam System"; ?></h2><br/>
        <p><?php echo "This site is make for research perpase"?></p>
    </section>
</div>
</body>
</html>



</div>
@endsection
