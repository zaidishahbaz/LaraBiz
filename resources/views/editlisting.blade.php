@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="card card-default">
      <div class="card-header">Edit Listing <a class="float-right" class="btn btn-sm " href="/dashboard">Go Back</a> </div>
      <div class="card-body">
          {!!Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST'])!!}
          {{Form::bsText('name',$listing->name,['placeholder'=> 'Company Name'])}}
          {{Form::bsText('website',$listing->website,['placeholder'=> 'Company Website'])}}
          {{Form::bsText('email',$listing->email,['placeholder'=> 'Contact Email'])}}
          {{Form::bsText('phone',$listing->phone,['placeholder'=> 'Contact Phone'])}}
          {{Form::bsText('address',$listing->address,['placeholder'=> 'Business Address'])}}
          {{Form::bsTextArea('bio',$listing->bio,['placeholder'=> 'About This Business'])}}
          {{Form::hidden('_method', 'PUT')}}
          {{Form::bsSubmit('submit')}}
        {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>
@endsection
