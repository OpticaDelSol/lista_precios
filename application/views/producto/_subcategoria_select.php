<label for="categoria">Sub-Categor&iacute;a</label>
<select class="form-control" id="subcategoria" name="subcategoria">
    <?php
    foreach($subcategorias as $sc){
    ?>
    <option value="<?php echo $sc["idsubcategoria"] ?>"> <?php echo $sc["nombre"] ?></option>
    <?php } ?>
</select>
