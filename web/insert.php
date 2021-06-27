<!DOCTYPE html>
<html>
    <title>Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        body { background-color: rgba(102, 183, 230, 0.637); }
        header{
    width: 100%;
    padding: 0px;
    color: white;
    text-align: center;
}
nav ul{
    width: 100%;
    background-color: rgb(81, 176, 231);
    color: rgb(255, 254, 254);
    padding: 0;
    margin: 0;
    text-align: center;
    letter-spacing: normal;
    overflow: hidden;
    -webkit-transition: max-height 0.4s;
    -ms-transition: max-height 0.4s;
    -moz-transition: max-height 0.4s;
    -o-transition: max-height 0.4s;
    transition: max-height 0.4s;
}
/*BARRA PEQUEÑA DEL TITULO*/
nav ul li{
    display: inline-block;
    padding: 15px;
}

a{
    text-decoration: none;
    color: inherit;
    display: absolute;
}
section{
    line-height: 1.5em;
    font-size: 0.9em;
    padding: 10px;
    margin: 0 auto;
    max-width: 960px;
}
      </style>
    <body>
        <header>
            <a href="/">
                  <img src="https://image.flaticon.com/icons/png/512/69/69524.png" style="height:50px; width:50px" alt>
              </a>
          </header>
          <br>
          <nav>
            <ul>
                <li class="nav-item">
                  <a href="/list"><li><h4>LISTA</h4></li></a>
                  <a href="/insert"><li><h4>INSERTAR</h4></li></a>
              </li>
              </ul>
          </nav>
    <center>
    <form method="POST" action="" class="pure-form pure-form-aligned">
        <div class="inputBox">
            <h1>FORMULARIO</h1>
        <fieldset>
            <div class="pure-control-group">
                <label for="aligned-name">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa nombre" />
            </div>
            <br>
            <div class="pure-control-group">
                <label for="aligned-apepate">A.Paterno</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Ingresa apellido" />
            </div>
            <br>
            <div class="pure-control-group">
                <label for="aligned-apemate">A.materno</label>
                <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Ingresa apellido" />
                <span class="validity"></span>
            </div>
            <br>
            <div class="pure-control-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="pure-control-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            <br>
            <div class="pure-control-group">
                <label for="aligned-cb" class="pure-checkbox">
                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
            </div>
        </div>
        </fieldset>
    </form>
    </center>
    </body>
</html>