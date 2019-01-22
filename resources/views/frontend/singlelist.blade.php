@extends('layouts.frontend.master')
@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="blue-text">{{$listing->name}}</h2>
                    <small><em>by </em>{{$listing->user->name}}</small>
                    <hr/>
                    <p>{{$listing->bio}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Contact Details</div>
                    
                <div class="card-body">
                <p><strong>Address:</strong> <span>{{$listing->address}}</span></p>
                    <p><strong>Email:</strong> <span>{{$listing->email}}</span></p>
                    <p><strong>Phone:</strong> <span>{{$listing->phone}}<span></p>
                    <p><strong>Website:</strong> <span>{{$listing->website}}<span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection