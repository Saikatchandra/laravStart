@extends('layouts.app')

@section('title','Category')

@push('css')
 
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @include('layouts.includes.msg') 
            </div>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add new Category</h4>
                  
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('category.store') }}"  enctype="multipart/form-data">
                         {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="name">
                        
                       </div>
                      </div>
                    </div>
                   
                      <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary"> Save </button>
                   
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            

@endsection

@push('scripts')

@endpush

