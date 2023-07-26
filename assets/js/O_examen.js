function cambiarEstatus(self){
    var checked = $("input[id=" + self.id + "]:checked").length;
    var estatus;
    if (checked == 0) {
        estatus=0;
    } else {
        estatus=1;
    }
    
    $.ajax({
  type : 'POST',
  url : 'actualizar_estatus/'+self.id+"/"+estatus,
  data :'',
  dataType: 'json',
  success : function(data) {
    console.log(data);
    window.location = 'O_examen';
  },
  error : function(jqXHR, textStatus, errorThrown) {
    alert('Error ' + jqXHR +textStatus + errorThrown);
  }
});
}
