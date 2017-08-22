<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TableJS</title>
  <link rel="stylesheet" href="bootstrap3.3.7.min.css">
</head>
<body>
  <p>
    <center><h3>tableJS</h3></center>
  </p>
  <div class="container">
    <p>
      <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-6 col-xs-6 col-md-2 col-lg-2">
          <button id="btn_grid_edit" class="btn btn-info btn-block"> Editar </button>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-2 col-lg-2">
          <button id="btn_grid_delete" class="btn btn-danger btn-block"> Eliminar </button>
        </div>
      </div>
    </p>

    <div class="row">
      <div class="col-sm-12">
        <div id="div_grid"></div>
      </div>
    </div>
  </div>

  <center> <label id="fila_seleccionada"></label> </center>

  <script src="jquery-3.2.1.min.js"></script>
  <script src="tablejs.js"></script>
  <script src="test.js"></script>

</body>
</html>
