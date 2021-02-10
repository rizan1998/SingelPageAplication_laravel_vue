<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- style css --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body >
       <div id="parsinta">
           <navigation></navigation>
          
            <div class="px-5 mt-3">
                <router-view></router-view>
            </div>  
          
       </div>

       {{-- vue js --}}
       <script src="/js/app.js" ></script>
    </body>
</html>
