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
                <div class="card-header">My Listings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($listings))
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Company</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a class="pull-right btn btn-default btn-sm" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
