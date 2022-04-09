<div class="flexible-content">
<div class="row">
<div class="col-6">
<div class="card">
<div class="card-header">
<h3 class="card-title">Productos</h3>
<div class="card-tools">
<!--
<div class="input-group input-group-sm" style="width: 150px;">
<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
<div class="input-group-append">
<button type="submit" class="btn btn-default">
<i class="fas fa-search"></i>
</button>
-->

<a href="<?php echo site_url("producto/add"); ?>" class="btn btn-sm btn-success">Nuevo</a>
</div>
</div>


<div class="card-body table-responsive p-0" style="height: 300px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
            <tr>
                <th>Ruta</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $p){ ?>
            <tr>
                <td><?php echo $p["path"]; ?></td>
                <td><?php echo $p["codigo"]; ?></td>
                <td><?php echo $p["precio"]; ?></td>
                <td><a class="btn btn-warning btn-xs" href="<?php echo site_url("producto/edit/".$p["idproducto"]); ?>">Editar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</div>

</div>
</div>
</div>