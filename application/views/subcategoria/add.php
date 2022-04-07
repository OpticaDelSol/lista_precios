<section class='content'>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Agregar Sub-Cagegor&iacute;a</h3>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('subCategoria/add/'); ?>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Descripci&oacute;n</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripci&oacute;n">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categor&iacute;a</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <?php
                                
                                foreach($categorias as $cat){
                                ?>
                                <option value="<?php echo $cat["idcategoria"]; ?>"> <?php echo $cat["nombre"]; ?></option>
                                <?php } ?>
                            </select>
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