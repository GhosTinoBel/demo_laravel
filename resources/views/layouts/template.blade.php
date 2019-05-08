<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} - MyBlog.com</title>        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

    </head>

    <body>
      <div class="container">

        @include('layouts._nav')

        {{-- ceci est pour les commentaires blade (car ils ne s'affichent pas dans le code source) --}}

        <!-- ceci est un commentaire HTML (car il s'affiche dans le code source ) --> 

        @yield('head')

        <div class="jumbotron">
          @yield('mot_page')
        </div>

        @yield('content')

        <footer class="footer">
       <div class="col-md-6 col-md-offset-5">
          <p>&copy; 2016 Company, Inc.</p>
       </div>
        </footer>

      </div> <!-- /container -->

        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/jquery-3.4.1.min.js"></script>

        @include('flashy::message')
    </body>
</html>
