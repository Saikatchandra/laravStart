@extends('layouts.app')

@section('title','Item')

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
                  <h4 class="card-title "> Edit Item</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('item.update',$item->id) }}"  enctype="multipart/form-data">
                         {{ csrf_field() }}
                       {{ method_field('PUT') }}
                       <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <select class="form-control" name="category">
                           @foreach($categories as $key=>$category)
                           <option {{ $category->id == $item->category->id ? 'selected' : ''}} 
                           value="{{ $category->id }}"> {{ $category->name}} </option>
                           @endforeach
                          </select>
                   
                         </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                         </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea name="description" class="form-control"  >{{ $item->description }}</textarea>
                         </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="number"  name="price" class="form-control" value="{{ $item->price }}">
                         </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label class="bmd-label-floating">Image</label>
                          <input type="file" name="image">
                         </div>
                      </div>


                      
                      <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary"> Save </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            

@endsection

@push('scripts')

@endpush

