function Grid(iddiv,columnas,arr_datos){
  obj_grid = this;

  obj_grid.iddiv = iddiv;
  obj_grid.columns = columnas;
  obj_grid.arr_datos = arr_datos;

  obj_grid.html  = "";
  obj_grid.arr_row_selected = [];

  this.init  = function(){
    $("#"+obj_grid.iddiv+ " tbody tr").each(function () {
      $(this).css( {"background-color": "white", "font-size": "14px"} );
    });
  }// init()

  this.load = function(){
    var html="";
    obj_grid.init();

    html += "<div class='table-responsive'>";
    html += "<table id='idtable' class='table bordered condensed'>";
    html += "<thead>";
    html += "<tr class='info'>";

    for (var i = 0; i<obj_grid.columns.length; i++) {
      html += "<td id='"+obj_grid.columns[i]+"'>";
      html += obj_grid.columns[i];
      html += "</td>";
    }
    html += "</tr>";
    html += "</thead>";

    html += "<tbody>";
    for (var i = 0; i<obj_grid.arr_datos.length; i++) {
      html += "<tr>";
      for (var j=0; j<obj_grid.columns.length; j++) {
        html += "<td id='"+obj_grid.columns[j]+"' data='"+obj_grid.arr_datos[i][obj_grid.columns[j]]+"'>";
        html += obj_grid.arr_datos[i][obj_grid.columns[j]];
        html += "</td>";
      }
      html += "</tr>";
    }

    html += "</tbody>";
    html += "</table>";
    html += "</div>";

    obj_grid.html = html;

    obj_grid.finish();

  }// load()

  this.finish = function(){
    $("#"+obj_grid.iddiv).empty();
    $("#"+obj_grid.iddiv).append(obj_grid.html);
  }// load()

  this.get_row_selected = function(){
    return obj_grid.arr_row_selected;
  }// load()

  $(document).on("click", "#"+obj_grid.iddiv+" tbody tr", function(e) {
    obj_grid.init();
    $(this).css( {"background-color": "#CEF6CE", "font-size": "16px"} );
    var data = $(this).attr('id');

    $("#id_seleccionado").empty("");
    $("#id_seleccionado").append(data);

    $(this).children("td").each(function (){
      obj_grid.arr_row_selected[this.id] = $(this).attr('data');
    });
  });
}// Grid
