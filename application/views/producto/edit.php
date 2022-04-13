<section class='content'>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Producto</h3>
                    </div>
                    <div class="card-body">
                    <?php if(isset($error)){?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Error</h5>
                       <?php echo $error; ?>
                        </div>
                    <?php }?>
                    <?php echo form_open('producto/edit/'.$idproducto); ?>
                        <div class="form-group">
                            <label for="codigo-producto">Nombre</label>
                            <input type="text" name="codigo" class="form-control" id="codigo-producto" placeholder="Nombre" value="<?php echo $producto["codigo"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" name="precio" class="form-control" id="precio" placeholder="Precio" value="<?php echo $producto["precio"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Decripci&oacute;n Corta</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="" value="<?php echo $producto["titulo"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="summernote">Descripci&oacute;n</label>
                            <input type="hidden" name="descripcion" id="descripcion">
                            <div id="summernote"><?php echo $producto["descripcion"]; ?></div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" name="activo" <?php  echo( ($producto["activo"] =="1" )? "checked='true'" : "") ?> value="activo">
                                <label class="custom-control-label" for="customSwitch3">Activo</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Guardar Cambios">
                        </div>
                        <?php  echo form_close();  ?>
                        <div class="form-group">
                            <a href="<?php echo site_url("producto/list"); ?>" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>      
            </div>
        </div>
    </div>
</section>
<script>
    //var subcategorias_url="<?php echo site_url("producto/get_subcategoria_by_categoria/"); ?>";
</script>
