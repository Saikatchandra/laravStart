@extends('layouts.app')

@section('title','Contact')

@push('css')
  
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a href="{{route('slider.create')}}" class="btn btn-primary">Add new</a>
              <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title ">{{$contact->subject}}</h4>
               </div>
                <div class="card-content">
                  <div class="row">
                    <div class="col-md-12">
                     <strong>Name: {{ $contact->name }} </strong> 
                     <b>Email: {{ $contact->email }}<b/> 
                     <strong> Message </strong> <hr>
                     <p>{{ $contact->message }} </p><hr>
                    </div>
                   </div>
                   <a href="{{route('contact.index')}}" class="btn btn-danger">Back</a>
                </div>
              </div>
            </div>
            

@endsection

@push('scripts')
 
@endpush

