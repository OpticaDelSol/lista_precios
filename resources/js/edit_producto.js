$(document).ready(function() {
    $('#summernote').summernote();
    $("form").one('submit',(e)=>{
        e.preventDefault();
        $("#descripcion").val($("#summernote").summernote('code'));
        $("form").submit();
    });

});