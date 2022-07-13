<label for="categoria">Sub-Categor&iacute;a</label>
<div>
<select name="subcategoria" id="subcategoria" class="form-control">
<option value="-1">Seleccione...</option>
<?php
    foreach($rows as $row)
    {
        ?>
            <option value="<?php echo $row["idsubcategoria"] ?>"><?php echo $row["nombre"] ?></option>
        <?php
    }
    ?>
</select>
</div>