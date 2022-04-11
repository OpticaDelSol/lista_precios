$(document).ready(function() {
    $('#summernote').summernote();

    $("form").one('submit',(e)=>{
        e.preventDefault();
        $("#descripcion").val($("#summernote").summernote('code'));
        $("form").submit();
    });

    function update_subcategoria()
    {
      let id = $("#categoria").children("option:selected").val();

      $.ajax({
          url: subcategorias_url + id,
          context: document.body
        }).done(function(data) {
          $( "#subcategoria-container" ).html( data );
        });
    }

    $("#categoria").change(()=>{
      update_subcategoria();
    });

    update_subcategoria();

  });
