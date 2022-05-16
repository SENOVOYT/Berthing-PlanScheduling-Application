<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/jpg" href="{{ asset('img/favicon.ico') }}"/>

        <title>Berth Planning</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
           
        </style>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600italic,600' rel='stylesheet' type='text/css'>
  <link rel="Stylesheet" href="{{ asset('css/home.css') }}" type="text/css" />


  <link rel="Stylesheet" href="https://ianlunn.github.io/Hover/css/hover.css" type="text/css" />
  
  <link rel="Stylesheet" href='https://fonts.googleapis.com/css?family=Muli' type='text/css'>
</head>

<body>
    @if (Route::has('login'))
   
        @auth
        <nav>
            <ul>
              <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></ul>
              </nav>
        @else
        <nav>
            <ul>
              <li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
            </ul>
          </nav>
            @endif
        @endauth
    
@endif

<div class="welcome">
BERTH PLANNING
</div>

</body>

</html>

























        
         

      