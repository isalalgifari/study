<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- CSS Files -->
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/now-ui-dashboard.css') !!}
        <!-- CSS Just for demo purpose, don't include it in your project -->
        {!! Html::style('assets/demo/demo.css') !!}
    </head>
    <body>
        <div class="wrapper">
            @include('component.admin.sidebar')
            <div class="main-panel">
                @include('component.admin.navbar')
                @yield('content')
            </div>
        </div>
    </body>
</html>