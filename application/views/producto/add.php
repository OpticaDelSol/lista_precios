<div class="box">
    <div class="box-header">
        <h3 class="box-title">Nuevo Producto</h3>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label for="codigo-producto">C&oacute;digo</label>
            <input type="text" class="form-control" id="codigo-producto" placeholder="C&oacute;digo">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" placeholder="Precio">
        </div>
        <div class="form-group">
            <label for="titulo">T&iacute;tulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="T&iacute;tulo">
        </div>
        <div class="form-group">
            <label for="titulo">T&iacute;tulo</label>
            <textarea name="textarea" rows="10" cols="80"></textarea>
        </div>
        <div class="form-group">
            <label for="titulo">Categor&iacute;a</label>
            <select>
                <?php
                $dummydata = [];
                foreach($dummydata as $data){
                ?>
                <option <?php echo 0 ?>> <?php echo 0 ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="Guardar">
        </div>
        <div class="form-group">
            <a href="" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
    <div class="box-footer"></div>
</div>