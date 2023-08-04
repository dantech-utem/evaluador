function cambiarEstatus(self){
    var checked = $("input[id=" + self.id + "]:checked").length;
    var estatus_usuario;
    if (checked == 0) {
        estatus_usuario=0;
    } else {
        estatus_usuario=1;
    }
    
    $.ajax({
  type : 'POST',
  url : 'actualizar_estatus/'+self.id+"/"+estatus_usuario,
  data :'',
  dataType: 'json',
  success : function(data) {
    console.log(data);
    window.location = 'O_usuarios';
  },
  error : function(jqXHR, textStatus, errorThrown) {
    alert('Error ' + jqXHR +textStatus + errorThrown);
  }
});
}
