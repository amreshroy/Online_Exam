
@extends('layouts.adminMaster') 


@section('title')

	| Admin Dashboard |

@endsection
	


@section('content')


 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center text-warning"> Registered User Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- <th> ID </th> -->
                      <th> Name </th>
                      <th> Email </th>
                      <th> Usertype </th>
                      <th> Edit </th>
                      <th> Delete </th>
                    </thead>
                    <tbody>
                    	@foreach ($users as $user)
                      <tr>
                        <!-- <td> {{ $user->id }}</td> -->
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->usertype }} </td>
                        <td> 
                          <a href="/role-edit/{{ $user->id }}" class="btn btn-success">Edit </a> 
                        </td>
                        <td> 
                          <form action="/role-delete/{{ $user->id }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger">Delete </button>
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

