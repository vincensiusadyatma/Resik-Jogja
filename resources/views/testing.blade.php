<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <h1 class="text-3xl font-bold underline text-amber-600">
      Resik Jogjasss
      @if(Auth::check())
          <p>Welcome, {{ Auth::user()->username }}!</p>
      @else
          <p>You are not logged in.</p>
      @endif

    </h1>
  </body>
</html>