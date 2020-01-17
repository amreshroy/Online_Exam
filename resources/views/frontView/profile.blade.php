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
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a class="current" href="{{ url('Profile') }}">Profile</a></li>
            <li><a href="{{ url('Reading') }}">Reading</a></li>
            <li><a href="{{ url('Pquizzes/indexs') }}">Practice</a></li>
            <li><a href="{{ url('quizzes/index') }}">Exam</a></li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

        </ul>
        </div>

    <div class="main">
     <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Profile </h4>
              </div>
              <div class="card-body">
                @foreach($users as $user)
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Name : {{ Auth::user()->name }}</li>
                  <li class="list-group-item">E-mail : {{ Auth::user()->email }}</li>
                  <li class="list-group-item">Phone : {{ Auth::user()->phone }}</li>
                  <li class="list-group-item">Address : {{ Auth::user()->address }}</li>
                  <li class="list-group-item">Usertype : {{ Auth::user()->usertype }}</li>
                </ul>
                <button class="mt-3"><a class="btn btn-info " href="/Profile-edit/{{ $user->id }}">Edit Details</a></button>
                @endforeach
              </div>
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