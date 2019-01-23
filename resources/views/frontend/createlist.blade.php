@extends('layouts.frontend.master')
@section('content')
<div class="container p-5">
    @include('frontend.msgs.messages')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Listings <span class="float-right"><a href="/my-account" class="btn btn-success btn-sm">Go Back</a></span></div>

                <div class="card-body">
                    
                    
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                        {{Form::bsText('website','',['placeholder' => 'Website'])}}
                        {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
                        {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
                        {{Form::bsText('address','',['placeholder' => 'Business Address'])}}
                        {{Form::bsTextArea('bio','',['id' => 'teditor', 'placeholder' => 'About This Business'])}}
                        {{Form::bsSubmit('submit','Submit',['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
     CKEDITOR.replace( 'teditor' );
</script>
@endsection