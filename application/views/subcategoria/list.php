<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sub-Categor&iacute;as</h3>
                <div class="card-tools">
                <!--
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
                -->

                <a href="<?php echo site_url("subcategoria/add"); ?>" class="btn btn-sm btn-success">Nuevo</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Ruta</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($subcategorias as $sc){ ?>
                        <tr>
                            <td><?php echo $sc["nombre_categoria"] ?>/</td>
                            <td><?php echo $sc["nombre"] ?></td>
                            <td><a class="btn btn-warning btn-xs" href="<?php echo site_url("subCategoria/edit/".$sc["idsubcategoria"]); ?>">Editar</a></td>
                        </tr>
                        <?php } ?>   
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>