function cambiarEstatus(self){
    var checked = $("input[id=" + self.id + "]:checked").length;
    var estatus_pregunta;
    if (checked == 0) {
        estatus_pregunta=0;
    } else {
        estatus_pregunta=1;
    }
    
    $.ajax({
  type : 'POST',
  url : 'actualizar_estatus/'+self.id+"/"+estatus_pregunta,
  data :'',
  dataType: 'json',
  success : function(data) {
    console.log(data);
    window.location = 'preguntas';
  },
  error : function(jqXHR, textStatus, errorThrown) {
    alert('Error ' + jqXHR +textStatus + errorThrown);
  }
});
}
