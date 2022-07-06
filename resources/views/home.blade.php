<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link href="{{asset('css/normalize.css')}}" rel="stylesheet">
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<link href="{{asset('css/skeleton.css')}}" rel="stylesheet">

<title>Home</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="brand" href="#">LircayHub &nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">

            <a class="nav-item nav-link" href="#">Cardiologia</a>
            <a class="nav-item nav-link" href="#">Kinesiologia</a>


          </div>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <a href="#" class="logout" onclick="this.closest('form').submit()">Logout</a>
        </form>
      </nav>

      <div id="contenido">
        <div class="container">
            <h1>Ultimas investigaciones de alzhaimer</h1>

            <div class="row">
                <div class="six columns">
                    <label for="tweet"></label>
                    <form  id="formulario">
                            <label for="tweet"></label>
                            <textarea id="tweet" class="u-full-width"></textarea>
                            <input type="submit" class="button u-full-width button-primary" value="publicar">
                    </form>
                </div>
                <div class="six columns">

                    <div id="lista-tweets"></div>
                </div>
            </div>

        </div>
    </div> <!--#contenido-->
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>
