@extends('layouts.app')

@section('title','Login')

@push('css')
 
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-1">
                @include('layouts.includes.msg') 
            </div>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">LogIN</h4>
                  
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" >
                         {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" name="email" value="{{ old('email')}}" required>
                        
                       </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password" required>
                        
                       </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                      <a href="{{route('welcome')}}" class="btn btn-danger">Back</a>
                      
                   
                   
                    </form>

                    <div class="row pull-right">
                      
                        <div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <h4>mh@gmail.com</h4>
                          <label class="bmd-label-floating">password</label>
                          <h4>123456</h4>
                          </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            </div>
            

@endsection

@push('scripts')

@endpush

