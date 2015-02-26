@extends('layouts.default') 
@section('title',  $post->title )
@section('content')

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading h3 text-center">
                        {{ $post->title }} - ${{ $post->amount }}
                        @if(Auth::id() == $post->user_id)
                            {!! link_to_route('post.edit', '{edit}', $post->id) !!}
                        @endif
                    </div>
                    <div class="panel-body">
                        {{ $post->location }}
                        <p>
                            {{ $post->body }}
                        </p>
                        <hr/>
                        {!! Classifieds\Image::getImages($post->id) !!}
                                            
                    </div>
                </div>
        </div>
    </div>
</div>


@stop

