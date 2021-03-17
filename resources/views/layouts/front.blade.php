<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/jquary.js')}}"></script>
</head>
<body>

@include('front.menu')


<div class="content min-vh-100">
    <div class="container">
        <div class="row">

            <div class="col-8">
            @yield('content')
            </div>
            <div class="col-4">
       @include('front.kategori')
       </div>
        
        </div>    
    
    </div>


</div>


<footer>

<div class="container-fluid bg-dark text-center text-white">
        Ferman

</div>


</footer>    

@yield('js')


</body>
</html>