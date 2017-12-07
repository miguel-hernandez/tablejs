<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TableJS</title>
  <link rel="stylesheet" href="bootstrap3.3.7.min.css">

  <style>
  .table_head{
  	background-color: #8ECAD5;
  	text-align: center;
  	font-weight: bold;
  	text-transform: uppercase;
  	width: 100% !important;
  }
  </style>
</head>
<body>
  <p>
    <center><h3>tableJS</h3></center>
  </p>
  <div class="container">
    <p>
      <div class="row">
        <div class="col-md-9"></div>
        <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3">
          <button id="btn_show_row_selected" class="btn btn-primary btn-block"> Mostrar fila seleccionada </button>
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
