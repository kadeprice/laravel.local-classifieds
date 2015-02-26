@include("layouts/head")
<body>
    @include('flash::message')
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
    
<script>
    $('div.alert').not('.alert-danger').delay(3000).slideUp(300);
    $('#flash-overlay-modal').modal();
</script>
</body>
</html>

