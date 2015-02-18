@extends('layouts.default') 
@section('title', 'Create User')
@section('content')
<div style='height:60px;'></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Profile</div>
				<div class="panel-body">
			
                                    <br/>
                                    @if(isset($user))
                                       {!! Form::model($user, ['route' => array('users.update', $user->id), 'method' => 'patch', 'files'=>true]) !!}

                                    @else
                                        {!! Form::open(['route' => 'users.store',]) !!}

                                    @endif           
                                        <div class="form-group">
                                           {!! Form::label('fname', "First Name",["class"=>"text-muted"]) !!}
                                           {!! Form::text('fname',null,["class"=>"form-control","placeholder"=>"Enter First Name"]) !!}
                                            {!! $errors->first('fname', '<span class=warning>:message</span>') !!}
                                        </div>             
                                        <div class="form-group">
                                           {!! Form::label('lname', "Last Name",["class"=>"text-muted"]) !!}
                                           {!! Form::text('lname',null,["class"=>"form-control","placeholder"=>"Enter Last Name", 'required' => 'required']) !!}
                                            {!! $errors->first('lname', '<span class=warning>:message</span>') !!}
                                        </div>
                                        <div class="form-group">	
                                           {!! Form::label('email', "Email",["class"=>"text-muted"]) !!}
                                           {!! Form::email('email',null,["class"=>"form-control","placeholder"=>"Enter Email", 'required' => 'required']) !!}
                                            {!! $errors->first('email', '<span class=warning>:message</span>') !!}
                                        </div>
                                        @if(!isset($user))
                                            <div class="form-group">	
                                               {!! Form::label('password', "Password",["class"=>"text-muted"]) !!}
                                               {!! Form::password('password',["class"=>"form-control"]) !!}
                                                {!! $errors->first('password', '<span class=warning>:message</span>') !!}
                                            </div>
                                            <div class="form-group">	
                                               {!! Form::label('password_confirmation', "Confirm Password",["class"=>"text-muted"]) !!}
                                               {!! Form::password('password_confirmation',["class"=>"form-control"]) !!}
                                                {!! $errors->first('password_confirmation', '<span class=warning>:message</span>') !!}
                                            </div>
                                            <div class="QapTcha"></div>
                                        @endif
                                        <div style="position:relative; margin-top: 100px;">
                                           {!! Form::submit("Sign Up",array("class"=>"btn btn-primary")) !!}
                                        </div>

                                   {!! Form::close() !!}

                                </div>
                            </div>
                </div>
        </div>
</div>
@stop