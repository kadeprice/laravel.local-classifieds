@extends('layouts.default') 
@section('title', 'Posts')
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
                            <li class="media @if(!$post->approved) text-warning @endif">
                                <div class="row">
                                    <div class="media-heading">
                                        <a href="{{ route('post.show',$post->id) }}">
                                            <div class="col-md-6"><strong>{{ $post->title }} - ${{ $post->amount }}</strong></div>
                                            <div class="col-md-2"> {{ $post->location }}</div>

                                        </a>
                                        @if(\Illuminate\Support\Facades\Auth::id() == $post->user_id) 
                                        <div class="col-md-2">
                                            @if(!$post->approved) {!! link_to_route('post.approve', '{approve}', $post->id) !!} @endif
                                            {!! link_to_route('post.edit', '{edit}', $post->id) !!}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="media-body">
                                    {{ $post->body }}
                                </div>
                            </li>
                            <hr/>
                        @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>


@stop