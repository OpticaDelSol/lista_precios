<section class='content'>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nuevo Producto</h3>
                    </div>
                    <div class="card-body">
                    <?php if(isset($error)){?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Error</h5>
                       <?php echo $error; ?>
                        </div>
                    <?php }?>
                    <?php echo form_open('producto/add/'); ?>
                        <div class="form-group">
                            <label for="codigo-producto">Nombre</label>
                            <input type="text" name="codigo" class="form-control" id="codigo-producto" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Decripci&oacute;n Corta</label>
                            <input type="text" name="titulo" class="form-control" id="Desc. Corta" placeholder="Desc. Corta">
                        </div>
                        <div class="form-group">
                            <label for="summernote">Descripci&oacute;n</label>
                            <input type="hidden" name="descripcion" id="descripcion">
                            <div id="summernote"></div>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categor&iacute;a</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <?php
                                foreach($categorias as $cat){
                                ?>
                                <option value="<?php echo $cat["idcategoria"] ?>"> <?php echo $cat["nombre"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" id="subcategoria-container">
                            <label>Seleccione una categor&iacute;a</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Guardar">
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
    var subcategorias_url="<?php echo site_url("producto/get_subcategoria_by_categoria/"); ?>";
</script>
