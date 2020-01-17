

@extends('layouts.adminMaster')


@section('title')

	| Admin Dashboard |

@endsection


@section('content')

 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center text-warning">Admin : {{ Auth::user()->name }}</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <h2 class="font-weight-bold text-success">Welcome To The "Online Exam System" Admin Dashboard</h2>
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
