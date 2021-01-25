<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi Musicali</title>

        <!-- FONT FAMILY -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <!-- STYLESHEET -->
        <link rel="stylesheet" href="css/style_dischi.css">
    </head>
    <body>
      <header>
          <div class="container">
              <a href="/home"> <img src="img/logo_dischi.png" alt="logo"></a>
          </div>
      </header>

      <div class="cds-container container">
        @foreach ($dischi['response'] as $cd)
        <div class="cd">
          <img src="{{$cd['poster']}}" alt="poster">
          <h3>{{$cd['title']}}</h3>
          <span class="author">{{$cd['author']}}</span>
          <span class="year">{{$cd['year']}}</span>
        </div>
        @endforeach

      </div>
    </body>
</html>
