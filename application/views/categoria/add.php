<section class='content'>
  <div class='container-fluid'>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Cagegor&iacute;a</h3>
                </div>
                <div class="card-body">
                    <?php echo form_open('categoria/add/'); ?>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Descripci&oacute;n</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripci&oacute;n">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" value="Guardar">
                    </div>
                    <?php  echo form_close();  ?>
                    <div class="form-group">
                        <a href="" class="btn btn-danger">Cancelar</a>
                    </div>

                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
</section>
