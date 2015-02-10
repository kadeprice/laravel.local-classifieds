@extends('layouts.default') 
@section('title', 'Home')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" id="home">
    <div class="container">
        <div class="media">
            <a href="#" class="pull-right"><img class="media-object" src="images/Finder_256.png"/></a>

            <div class="media-body">
                <div class="col-md-11">
                    <h1 class="title">Malad <span>List</span></h1>

                    <p>Your place to buy and sell stuff in Malad and the surrounding area. </p>

                    <p><a class="btn btn-success btn-lg">Learn more <i class="icon icon-angle-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="slider" id="features">
    <div class="container">This is a bunch of info
        
            <div class="col-md-4 col-md-pull-8">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <h4 class="list-group-item-heading">List group item heading</h4>

                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor </p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">List group item heading</h4>

                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor </p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">List group item heading</h4>

                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor </p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">List group item heading</h4>

                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
                            tellus ac cursus commodo, tortor </p>
                    </a>

                </div>


            </div>
    </div>
</section>
@stop