<?php 
$prev_cat = null;
$prev_subcat = null;
foreach($productos as $p){ 
    if($prev_subcat!=$p["subcategoria_idsubcategoria"] || $prev_cat!=$p["categoria_idcategoria"]){

        if($prev_subcat!=null){//cierre de card anterior, si existe
            ?>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <?php
        }
        if($prev_cat!=$p["categoria_idcategoria"]){//cambio de categoria o primera vez
            if($prev_cat!=null){//cierre de tab categoria
            ?>
                </div>
                </div><!-- end of tab -->
            <?php } ?>

                <div class="tab-pane fade <?php echo ($p['categoria_idcategoria'] == $cur_cat_id? 'active show' : ''); ?>" id="vert-tabs-right-<?php echo $p["categoria_idcategoria"] ?>" role="tabpanel" aria-labelledby="vert-tabs-right-<?php echo $p["categoria_idcategoria"] ?>-tab">
                <div class="row">
            <?php
            $prev_cat = $p["categoria_idcategoria"];
        }

        
        $prev_subcat = $p["subcategoria_idsubcategoria"];
    ?>
    
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?php echo $p["nombre_subcategoria"] ?></h3>
            <div class="card-tools">
                
            </div>
        </div>
        
        <div class="card-body">
            <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php } ?>
                    <tr >
                    <td data-idprod="<?php echo $p["idproducto"] ?>" class="producto-row"><?php echo $p["codigo"]  ?> &nbsp;&nbsp;
                    <!--span class="badge bg-danger">-55%</span-->
                    <span class="badge bg-success">Nuevo</span>
                </td>
                    <td data-idprod="<?php echo $p["idproducto"] ?>" class="producto-row" style="text-align:right;">$&nbsp;<?php echo number_format( $p["precio"],2 )?></td>
                    <td>
                        <a class="btn btn-xs btn-success producto-row" data-idprod="<?php echo $p["idproducto"] ?>" href="#"><i class="fa fa-info"></i></a>       
                        <!--a class="btn btn-xs btn-warning" href="">Editar</a-->       
                    </td>
    </tr>

<?php }
if($prev_subcat!=null)
{
    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </div><!-- end of tab -->
    <?php
}