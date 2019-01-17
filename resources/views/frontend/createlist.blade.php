@extends('layouts.frontend.master')
@section('content')
<div class="container p-5">
        @if(\Session::has('error'))
        <div class="alert alert-danger">
        {{\Session::get('error')}}
        </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Listings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        //
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection