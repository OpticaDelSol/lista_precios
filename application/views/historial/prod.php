<section class='content'>
    <div class='container-fluid'>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-solid fa-clock"></i>&nbsp;
                            Historial de cambios de precio de producto:&nbsp;<?php echo $producto["codigo"] ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="bg-warning" >Fecha</th>
                                    <th class="bg-warning"  style="text-align: right;">Precio Anterior</th>
                                    <th class="bg-warning"  style="text-align: right;">Precio Nuevo</th>
                                    <th class="bg-warning"  style="text-align: right;">Cambio Grupo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($cambios as $c){ ?>
                                    <tr>
                                        <td><b><?php echo $c["fecha"]; ?></b></td>
                                        <td style="text-align: right;">$&nbsp;<?php echo $c["valor_anterior"]; ?></td>
                                        <td style="text-align: right;">$&nbsp;<b><?php echo $c["valor_nuevo"]; ?></b></td>
                                        <td style="text-align: right;">&nbsp;<b><?php 
                                        if($c["porcentaje"]!=""){
                                            echo (floatval($c["valor_nuevo"])>floatval($c["valor_anterior"])?"+":""). $c["porcentaje"]."%"; 
                                        }
                                        else{
                                            echo "-";
                                        }
                                        ?></b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>