@extends('layouts.default') 
@section('title', 'Create Post')
@section('content')

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading h3 text-center">
                        @if(isset($category)) 
                            {{ $category->category }}
                        @else
                            Posts
                        @endif
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                        @foreach($posts as $post)
                            <a href="{{ route('post.show',$post->id) }}">
                                <li class="media">
                                    <div class="row">
                                        <div class="media-heading">
                                            <div class="col-md-6"><strong>{{ $post->title }} - ${{ $post->amount }}</strong></div>
                                            <div class="col-md-4"> {{ $post->location }}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="media-body">
                                            {{ $post->body }}
                                        </div>
                                    </div>
                                </li>
                            </a>
                                <hr/>
                        @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>


@stop