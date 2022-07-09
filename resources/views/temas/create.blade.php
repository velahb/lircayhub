<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Temas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="brand" href="/home">LircayHub &nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">

            <a class="nav-item nav-link" href="/home">Alzhaimer</a>
            <a class="nav-item nav-link" href="/cardiologia">Cardiolgia</a>


          </div>
        </div>
    </nav>
    <div class="container"></div>
    <h4>Crear Tema</h4>
    <div class="row">
        <form action={{route('temas.store')}} method="post">
            @csrf
          <div class="form-group">
             <label for="nombre">Nombre Tema</label>
             <input type="text" class="form-control" name="nombre" required maxlength="50" >

          </div>

          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" >

         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <input type="reset" class="btn btn-default" value="Cancelar">
            <a href="javascript:history.back()">Volver </a>
        </div>
        </form>
    </div>

</body>
</html>
