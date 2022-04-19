var quest = (attr_id)=>{
  $("#exampleModalCenter").modal("show");
  $("#modal-product-content" ).html( "<div class='loader'></div>" );
  $.ajax({
    url: detalle_producto_url + attr_id,
    context: document.body
  }).done(function(data) {
    $( "#modal-product-content" ).html( data );
  });
}
$(document).ready(function() {
  $(document).on("click",".producto-row",(e)=>{
    var attr_id = $(e.target).data("idprod");
    if (typeof attr_id === 'undefined')
    {
      return;
    }
    quest(attr_id);
  });
  $(document).on("click",".producto-inf-btn",(e)=>{
    var attr_id = $(e.target).data("idprod");
    if (typeof attr_id === 'undefined')
    {
      return;
    }
    quest(attr_id);
  });


});