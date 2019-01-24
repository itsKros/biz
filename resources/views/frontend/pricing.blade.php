@extends('layouts.frontend.master')
@section('content')
<div class="container p-5">
    @include('frontend.msgs.messages')
    <div class="row justify-content-center">
        <div class="col-md-4 offset-col-md-4">
            <div class="card">
                <div class="card-header">Subscribtion Packages</div>

                <div class="card-body">
                    
                    {{$user->name}}
                    {{$user->isSubscribed}}
                    
                    
                </div>

                <div class="card-footer">
                
                    <form method="post" action="#">
                        <input type="hidden" name="name" value=""/>
                        <button class="btn btn-success" type="submit">
                           Subscribe
                        </button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
