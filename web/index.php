<html>
  <title>FORMULARIO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
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
            <br>
          </header>
          <nav>
            <ul>
              <li class="nav-item">
            </li>
            </ul>
          </nav>
    <section>      
    <center>
        <h1>BIENVENIDO</h1>
        <h2>Este es un formulario que tu debes de llenar</h2>
        <h3>Debes ser muy claro con los datos y los datos deben ser verdaderos</h3>
        <!DOCTYPE html>
<html lang="en">
  
  <body>
    <!--Vista inicial-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand">View Data</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Page Content -->
    <main role="main" class="container my-auto">
      <br></br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Primer Apellido</th>
              <th scope="col">Segundo Apellido</th>
              <th scope="col">Email</th>
              <th scope="col">Teléfono</th>
            </tr>
          </thead>
          <tbody>
          <?php
                $db = new SQLite3('agenda.db');
                $results = $db->query('SELECT * FROM personas');

                while ($row = $results->fetchArray()) { ?>
                <tr>
                <td> <?php echo $row['nombre']?> </td>
                <td> <?php echo $row['apellido_paterno']?> </td>
                <td> <?php echo $row['apellido_materno']?> </td>
                <td> <?php echo $row['email']?> </td>
                <td> <?php echo $row['telefono']?> </td>
              </tr>
              <?php } ?>
          </tbody>
        </table>

    <div style="width: 500px;">
        <a href="/"><button type="button" class="btn" style="background:#C0C0C0">Regresar</button></a>
    </div>

  </body>
</html>
        width="400"
        height="341">
    </center>
</section>
    </body>
</html>