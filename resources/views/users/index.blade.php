@extends('layouts.default') 
@section('title', 'Create Post')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading h3 text-center">
                    Users
                </div>
            
                @foreach($users as $user)
                    <p> 
                        <a href="{{ route("users.posts", $user->id)  }}">
                        {{ $user['fname'] }} {{ $user['lname'] }} <strong>{{ implode(",",$user->showRoles()) }} </strong>
                        </a>

                    </p>
                @endforeach
            </div>
        </div> 
    </div>
</div>
    

@stop