$(document).ready(function() {
    $('#summernote').summernote();

    $("form").on('submit',(e)=>{
        
        var _error = false;
        var msg="";

        if($("#codigo-producto").val()=="")
        {
          msg += "Campo Nombre vacio\n";
          _error=true;
        }
        if($("#titulo").val()=="")
        {
          msg += "Campo descripcion corta vacio\n";
          _error=true;
        }

        if($("#subcategoria").val()=="")
        {
          msg += "Campo Sub categoria vacio\n";
          _error=true;
        }
        $("#descripcion").val($("#summernote").summernote('code'));

        if($("#descripcion").val().trim()=="")
        {
          msg += "Campo Sub categoria vacio\n";
          _error=true;
        }

        if(_error)
        {
          e.preventDefault();
          alert(msg);
          return;
        }

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
