@extends('layouts.app')

@section('title','Slider')

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
                  <h4 class="card-title "> Update Slider</h4>
                  
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('slider.update',$slider->id) }}"  enctype="multipart/form-data">
                         {{ csrf_field() }}
                       {{ method_field('PUT') }}
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                        </div>
                       </div>
                      </div><div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub_title</label>
                          <input type="text" class="form-control" name="sub_title"  value="{{ $slider->sub_title }}">
                        </div>
                       </div>
                      </div>
                      
                      <div class="row">
                      <div class="col-md-2">
                         <label class="control-label">Image</label>
                          <input type="file" name="image" id="image">
                       </div>
                      </div>
                      <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary"> Save </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            

@endsection

@push('scripts')

@endpush

