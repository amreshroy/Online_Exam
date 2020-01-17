
@extends('layouts.adminMaster')


@section('title')

	| Admin Dashboard |

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center text-info"> Topic Table-Edit Data</h4>

       			<form actiom="{{ url('aboutus-update/'.$aboutus->id) }}" method="POST">
       			  {{ csrf_field() }}
       			  {{ method_field('PUT') }}

       			<div class="modal-body">

       			    <div class="form-group">
       			      <label for="recipient-name" class="col-form-label">Title :</label>
       			      <input type="text" name="title" value="{{ $aboutus->title }}"class="form-control">
       			    </div>
       			    <div class="form-group">
       			      <label for="message-text" class="col-form-label">Documents:</label>
       			      <textarea name="doc" class="form-control"> {{ $aboutus->doc }} </textarea>
       			    </div>
       			 
       			  </div>
       			 
       			<div class="modal-footer">
       			  <a href="{{ url('abouts') }}" class="btn btn-secondary" data-dismiss="modal">BACK</a>
       			  <button type="submit" class="btn btn-primary">UPDATE</button>
       			</div>
       			 </form>
                </div>
              </div>
            </div>
         
  </div>
  @endsection