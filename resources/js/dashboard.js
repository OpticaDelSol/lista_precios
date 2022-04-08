$(document).ready(function() {
  $(document).on("click",".producto-row",(e)=>{

    var attr_id = $(e.target).data("idprod");
    $("#exampleModalCenter").modal("show");
    $("#modal-product-content" ).html( "<div class='loader'></div>" );
    $.ajax({
        url: detalle_producto_url + attr_id,
        context: document.body
      }).done(function(data) {
        $( "#modal-product-content" ).html( data );
      });

  });
    /*$(".producto-row").each(()=>{
        $(this).click((e)=>{
            

        });
    });*/
});