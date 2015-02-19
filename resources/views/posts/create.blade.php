@extends('layouts.default') 
@section('title', 'Create Post')
@section('content')

<div style='height:60px;'></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading h2">Create {{ $category->category }} Post</div>
				<div class="panel-body">
			
                                    <br/>
                                    @if(isset($post))
                                       {!! Form::model($post, ['route' => array('post.update', $post->id), 'method' => 'patch', 'files'=>true]) !!}

                                    @else
                                        {!! Form::open(['route' => 'post.store',]) !!}

                                    @endif           
                                        <div class="form-group">
                                           {!! Form::label('title', "Title",["class"=>"text-muted"]) !!}
                                           {!! Form::text('title',null,["class"=>"form-control","placeholder"=>"Enter Post Title",'required' => 'required']) !!}
                                            {!! $errors->first('title', '<span class=warning>:message</span>') !!}
                                        </div>             
                                        <div class="form-group">
                                           {!! Form::label('location', "Location",["class"=>"text-muted"]) !!}
                                           {!! Form::text('location',null,["class"=>"form-control","placeholder"=>"Enter Location"]) !!}
                                            {!! $errors->first('location', '<span class=warning>:message</span>') !!}
                                        </div>          
                                        <div class="form-group">
                                           {!! Form::label('amount', "Amount",["class"=>"text-muted",'required' => 'required']) !!}
                                           {!! Form::text('amount',null,["class"=>"form-control","placeholder"=>"Enter Amount",'required' => 'required']) !!}
                                            {!! $errors->first('amount', '<span class=warning>:message</span>') !!}
                                        </div>
                                        <div class="form-group">	
                                           {!! Form::label('body', "Body",["class"=>"text-muted"]) !!}
                                           {!! Form::textarea('body',null,["class"=>"form-control","placeholder"=>"Enter Post Details", 'required' => 'required']) !!}
                                            {!! $errors->first('body', '<span class=warning>:message</span>') !!}
                                        </div>
                                        @if(isset($post))
                                        
                                        <div class="form-group">	
                                           {!! Form::label('approved', "Approved",["class"=>"text-muted"]) !!}
                                           {!! Form::checkbox('approved',"true",$post->approved) !!}
                                            
                                        </div>
                                        @endif
                                        <div style="position:relative; margin-top: 100px;">
                                            {!! Form::hidden('category_id',$category->id) !!}
                                           {!! Form::submit("Submit Post",array("class"=>"btn btn-primary")) !!}
                                        </div>

                                   {!! Form::close() !!}

                                </div>
                            </div>
                </div>
        </div>
</div>
@stop