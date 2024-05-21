<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>UD Sinar Wahyu</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="UD Sinar Wahyu" />
    <meta name="author" content="" />
    <meta name="keywords" content="UD Sinar Wahyu" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->

    @stack('css')
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('/') }}dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('/') }}dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
@yield('page')



@stack('js')

</body>
</html>

