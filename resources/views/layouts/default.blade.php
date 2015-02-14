@include("layouts/head")
<body data-spy="scroll" data-target="#topnav">
    <div class="flash">
        <!--Flash message-->
        @if (Session::get('notification'))
            <div id='myAlert' class='alert alert-warning alert-dismissable fade in' data-alert='alert'>
                
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div id="flash_message">{{ Session::get('notification') }} </div>
            </div>
        @endif
    </div>

<div class="navbar navbar-inverse navbar-fixed-top" id="topnav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ URL::to('images/expose-logo.png') }}" alt="Expose" height="17px" /> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>

        </div>
        <!--/.navbar-collapse -->
    </div>
</div>
@yield('content')  



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!--        {{ Html::script('//code.jquery.com/jquery-2.1.1.min.js') }}
        {{ Html::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js') }}
        {{ Html::script('bootstrap/js/bootstrap.min.js') }}-->
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script> 
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script> 
        <script src="{{ URL::to('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>

