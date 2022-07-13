var btn_cat_msg="Seleccione una categoria...";
var btn_scat_msg="Seleccione una subcategoria...";
var btn_enabled_msg="Modificar precios";

$("#btn-submit").attr("disabled","true")
$("#btn-submit").val(btn_cat_msg)
$("#btn-submit").val(btn_cat_msg)

/*const updatePrice = ()=>{
    var oldPrice = $("#precio-ant").val()
    var ratio=$("#porcentaje").val()
    ratio = parseFloat(ratio)
    var newPrice = parseFloat(oldPrice)+((ratio/100)*oldPrice)
    $("#precio-nuevo").val(newPrice)

}

$("#porcentaje").change(updatePrice)*/
/*$("#btn-submit").data("t","0")

setInterval(()=>{

    if($("#btn-submit").prop("disabled")){
        $("#btn-submit").css(
            "background-color", "#aaaaaa"
        )
    }
    else{
        let t = $("#btn-submit").data("t")
        $("#btn-submit").css(
            "background-color", (t=="1"?"#00CD00":"#00C400")

        )
        $("#btn-submit").data("t",(t=="1"?"0":"1"))
        
    }
},500)
*/
/*
    ajax
*/

$("#categoria").change(()=>{
    let opt = $("#categoria").children("option:selected").attr("value");
    $("#btn-submit").attr("disabled","true")
    if(opt=="-1"){
        $("#grupo-container").html("")
        $("#btn-submit").val(btn_cat_msg)
        return
    }
    $.ajax({
        url: "http://localhost/price_list/codeigniter/subCategoria/getforcatid/"+opt,
        success: (data)=>{
            $("#grupo-container").html(data)

            $("#btn-submit").val(btn_scat_msg)

            $("#subcategoria").change(()=>{
                if($("#subcategoria").children("option:selected").attr("value")=="-1"){
                    $("#btn-submit").attr("disabled","true")
                    $("#btn-submit").val(btn_scat_msg)
                    return
                }
                $("#btn-submit").removeAttr("disabled")
                $("#btn-submit").val(btn_enabled_msg)
            })

        }
    })
})