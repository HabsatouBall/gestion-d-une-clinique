<html>
    <head>
        <title>Clinique - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 4</title>

        <!-- Bootstrap CSS CDN -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" id="bootstrap-css">
        
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/style4.css')}}">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    </head>
    <body>
       <div class="wrapper">
            @section('sidebar')
                @include('layouts.sidebar')
            @show

            <div class="container">
                @include('layouts.head')

                @yield('content')
            </div>
        </div>

    <script src="{{asset('js/app.js')}}" ></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    </body>
</html>
