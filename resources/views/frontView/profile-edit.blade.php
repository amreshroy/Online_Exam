@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3> Edit Registered User Details</h3>
				</div>
				<div class="card-body">
					<form action="/Profile-update/{{ Auth::user()->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<div class="form-group">
						    <label> Name </label>
						    <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control">
						</div>
						<div class="form-group">
						    <label> E-mail </label>
						    <input type="text" name="" value="{{ Auth::user()->email }}" class="form-control">
						</div>
						<div class="form-group">
						    <label> Phone Number </label>
						    <input type="number" name="" value="" class="form-control">
						</div>
						<div class="form-group">
						    <label> Address </label>
						    <input type="text" name="" value="" class="form-control">
						</div>
						
						
						<button type="submit" class="btn btn-success">Update</button>
						<a href="/Profile" class="btn btn-danger">Cancel</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>
 

@endsection


@section('scripts')

 <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

@endsection
