@include("layouts/head")
<body>
    <div class="flash">
        <!--Flash message-->
        @if (Session::get('notification'))
            <div id='myAlert' class='alert alert-warning alert-dismissable fade in' data-alert='alert'>
                
                <button type="button" class="close" data-dismiss="alert">×</button>
                <div id="flash_message">{{ Session::get('notification') }} </div>
            </div>
        @endif
    </div>
    @include("navigation/mainmenu")

<div style='height:50px;'></div>
@yield('content')  



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script> 
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script> 
        <script src="{{ URL::to('/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('footer')
</body>
</html>

