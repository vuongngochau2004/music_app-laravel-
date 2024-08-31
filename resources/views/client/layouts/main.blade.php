
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset ('clients/img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset ('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset ('clients/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('client.layouts.navbar')
    <!-- ##### Header Area End ##### -->
   
    
    @section('content-wrapper')
        @show
    
    <!-- ##### Contact Area Start ##### -->
    @include('client.layouts.contact')
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('client.layouts.footer')
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('clients/js/jquery/jquery-2.2.4.min.js') }}"></script> <!-- Popper js -->
   
    <script src="{{asset('clients/js/bootstrap/popper.min.js') }}"></script> <!-- Bootstrap js -->
    
    <script src="{{asset('clients/js/bootstrap/bootstrap.min.js') }}"></script> <!-- All Plugins js -->
    
    <script src="{{asset('clients/js/plugins/plugins.js') }}"></script> <!-- Active js -->
    
    <script src="{{asset('clients/js/active.js') }}"></script>
</body>

</html>




