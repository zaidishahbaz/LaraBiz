@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="card card-default">
      <div class="card-header">{{$listing->name}} <a href="/listings" class="float-right btn btn-default btn-sm" >Go Back</a> </div>
      <div class="card-body">
        <ul class="list-group" >
          <li class="list-group-item">Address: {{$listing->address}}</li>
          <li class="list-group-item">Website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a> </li>
          <li class="list-group-item">Email: {{$listing->email}}</li>
          <li class="list-group-item">Phone: {{$listing->phone}}</li>

        </ul>
        <hr>
        <div class="card card-default">
          {{$listing->bio}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
