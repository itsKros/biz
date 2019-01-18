@extends('layouts.frontend.master')
@section('content')
<div class="container p-5">
    @include('frontend.msgs.messages')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listings <span class="float-right"><a href="/my-account" class="btn btn-success btn-sm">Go Back</a></span></div>

                <div class="card-body">
                    
                    
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id],'method' => 'POST']) !!}
                        {{Form::bsText('name',$listing->name,['placeholder' => 'Company Name'])}}
                        {{Form::bsText('website',$listing->website,['placeholder' => 'Website'])}}
                        {{Form::bsText('email',$listing->email,['placeholder' => 'Contact Email'])}}
                        {{Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone'])}}
                        {{Form::bsText('address',$listing->address,['placeholder' => 'Business Address'])}}
                        {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About This Business'])}}
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::bsSubmit('submit','Submit',['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection