<section class='content'>
  <div class='container-fluid'>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Cagegor&iacute;a</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($error)){?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Error</h5>
                       <?php echo $error; ?>
                        </div>
                    <?php }?>
                    <?php echo form_open('categoria/edit/'.$idcategoria); ?>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $categoria["nombre"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Descripci&oacute;n</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripci&oacute;n" value="<?php echo $categoria["descripcion"] ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" value="Guardar Cambios">
                    </div>
                    <?php  echo form_close();  ?>
                    <div class="form-group">
                        <a href="<?php echo site_url("categoria/list"); ?>" class="btn btn-danger">Cancelar</a>
                    </div>

                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
</section>
