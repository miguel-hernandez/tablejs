$(document).ready(function () {
  init();

  $("#btn_grid_edit").click(function(e){
    e.preventDefault();
    var arr_row = grid.get_row_selected();
    show_selected(arr_row);
  });

  $("#btn_grid_delete").click(function(e){
    e.preventDefault();
    var arr_row = grid.get_row_selected();
    show_selected(arr_row);
  });
});

function init(){
  $.ajax({
    type: 'POST',
    url: "Usuario.php",
    data: {},
    success: function (data) {
      var arr_pgridok = JSON.parse(data);
      columnas = ["id_usuario","nombre","paterno","materno","email"];

      grid = new Grid(
        "div_grid", // el id del div HTML
        columnas, // El array de columnas, serán los encabezados
        arr_pgridok // E array de los datos para llenar el grid, los índices deben corresponder a los nombres de las columnas
      );
      grid.load();

    },
    error: function (data) {
      console.error("error...");
    }
  });
}// init()

function show_selected(row){
  var arr_ = [];
  var str = "";
  arr_.push(row);

  for(var i=0;i<arr_.length;i++){
    for(var j=0;j<columnas.length;j++){
      str = str+[columnas[j]]+": "+arr_[i][columnas[j]]+"<br>         ";
    }
  }

  $("#fila_seleccionada").empty();
  $("#fila_seleccionada").append(str);
}// show_selected()
