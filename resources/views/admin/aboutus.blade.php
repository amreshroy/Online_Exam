

@extends('layouts.adminMaster')


@section('title')

	| Admin Dashboard |

@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Reading Topic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form actiom="/save-aboutus" method="POST">
        {{ csrf_field() }}

      <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title :</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Documents:</label>
            <textarea name="doc" class="form-control" id="message-text"></textarea>
          </div>
       
        </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
       </form>
    </div>
  </div>
</div>
 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center text-info"> Reading Contents Table</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add  Reading Topic</button>

                @if (session('status'))
        <div class="alert alert-success" role="alert">
        	{{ session('status') }}
        </div>
        @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> ID </th>
                      <th> Title </th>
                      <th> Documents </th>
                      <th> EDIT </th>
                      <th> DELETE </th>
                    </thead>
                    <tbody>
                    	@foreach ($aboutus as $data)
                      <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{ $data->title }} </td>
                        <td> {{ $data->doc }} </td>
                        
                        <td>
                        	<a href="{{ url('about-us/'.$data->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        	<form action="{{ url('about-us-delete/'.$data->id) }}" method="POST" >
                        		{{ csrf_field() }}
                        		{{ method_field('DELETE') }}

								<button type="submit" class="btn btn-danger">Delete</button>
                        	</form>
                        	
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  </div>

@endsection


@section('scripts')

@endsection


@section('title')

@endsection
