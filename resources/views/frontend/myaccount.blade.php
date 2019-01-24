@extends('layouts.frontend.master')

@section('content')
<div class="container p-5">
    @include('frontend.msgs.messages')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span>My Listings</span> 
                    
                    @if( count($listings) == 3 && auth()->user()->isSubscribed == 0 )
                        <span class="float-right">You can not add more listing <a href="#" class="btn btn-success btn-sm">Buy Subscription</a></span>
                        
                    @elseif(auth()->user()->isSubscribed == 1 || auth()->user()->isSubscribed == 0 && count($listings) < 3)
                        <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add Listing</a></span>
                    @endif
                
                </div>
                
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
                                    <td>
                                    
                                    {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::bsSubmit('submit','Delete',['class' => 'btn btn-danger btn-sm'])}}
                                    {!! Form::close() !!}
                                    
                                    
                                    </td>
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
