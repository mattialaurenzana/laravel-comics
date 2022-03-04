<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>


    {{-- sezione del pre header --}}
    <div class="pre-header">
        @yield('preHeader')
    </div>
    
    {{-- header uguale per tutte le pagine --}}
    @include("partials.header") 

    {{-- sezione jumbotron --}}
    
        @yield('jumbo-content')
    


    {{-- sezione fumetti --}}
    <div class="comic-container">
        @yield('comic-content')
    </div>


    {{-- sezione items --}}
    <div class="section-items">
        @yield('items-content')
    </div>


    {{-- footer uguale per tutte le pagine --}}
    @include("partials.footer")
    
</body>
</html>