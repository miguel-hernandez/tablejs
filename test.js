$(document).ready(function () {
  init();

  $("#btn_show_row_selected").click(function(e){
    e.preventDefault();
    var arr_row = grid.get_row_selected();
    console.info("arr_row");
    console.info(arr_row);
    var arr_columnas = grid.columns;
    if(arr_row.length==0){
      alert("Seleccione un registro");
    }else{
      console.info(arr_row[0]["id"]);
      show_selected(arr_row, arr_columnas);
    }
  });


});

function init(){
  $.ajax({
    type: 'POST',
    url: "Usuario.php",
    data: {},
    success: function (data) {
      var arr_result = JSON.parse(data);
      var columnas = arr_result.columnas;
      var result = arr_result.result;
      // columnas = ["id","nombre","paterno","materno","email"];

      grid = new Grid(
        "div_grid", // el id del div HTML
        columnas, // El array de columnas, serán los encabezados
        result // E array de los datos para llenar el grid, los índices deben corresponder a los nombres de las columnas
      );
      grid.load();

    },
    error: function (data) {
      console.error("error...");
    }
  });
}// init()

function show_selected(row, arr_columnas){
  var str = "";
  for(var i=0;i<row.length;i++){
    var miObjeto = arr_columnas;
    for (var item in miObjeto) {
      str = str+[item]+": "+row[i][item]+"<br>";
    }// end for columns
  }

  $("#fila_seleccionada").empty();
  $("#fila_seleccionada").append(str);
}// show_selected()
