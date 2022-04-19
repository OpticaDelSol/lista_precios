<div class="flexible-content">
<div class="row">
<div class="col-md-12">
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


<div class="card-body table-responsive p-0" style="height: 600px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
            <tr>
                <th>Ruta</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $p){ ?>
            <tr>
                <td><?php echo $p["path"]; ?></td>
                <td><?php echo $p["codigo"]; ?></td>
                <td style="text-align:right;">$&nbsp;   <?php echo number_format($p["precio"],2); ?></td>
                <td style="text-align:center;"><span class="badge <?php echo ($p["activo"]=="1") ? "bg-success" : "bg-danger"  ?>"><?php echo ($p["activo"]=="1" ? "S&iacute;":"No"); ?></span></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="<?php echo site_url("producto/edit/".$p["idproducto"]); ?>"><i class="fas fa-edit "></i></a>
                    <span data-idprod="<?php echo $p["idproducto"] ?>" class="btn btn-primary btn-sm producto-inf-btn"><i data-idprod="<?php echo $p["idproducto"] ?>" class="fa fa-solid fa-clock "></i></span>
                    
                </td>
                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>