<?php
function calcular_precio($precio_ant, $porcentaje){
    return floatval( $precio_ant ) + floatval( $precio_ant ) * floatval( $porcentaje ) * 0.01;
}