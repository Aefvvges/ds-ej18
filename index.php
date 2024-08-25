<?php

require_once 'modelo/lineacompra.php';
require_once 'modelo/pedidocompra.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$proveedor = new Proveedor();
$proveedor->Id = 1;
$proveedor->Descripcion = 'Arcor';

$p1 = new Producto();
$p1->Codigo = 1234;
$p1->Descripcion = 'Lata de arvejas';
$p1->PrecioVenta = '$765';

$p2 = new Producto();
$p2->Codigo = 2345;
$p2->Descripcion = 'Galletas dulces';
$p2->PrecioVenta = '$988';

$lc1 = new LineaCompra();
$lc1->Producto = $p1;
$lc1->Cantidad = 50;
$lc1->CostoUnitario = '$720';
$lc1->FueEntregado = 'Si';

$lc2 = new LineaCompra();
$lc2->Producto = $p2;
$lc2->Cantidad = 70;
$lc2->CostoUnitario = '$960';
$lc2->FueEntregado = 'Si';

$pedidocompra = new PedidoCompra();
$pedidocompra->Fecha = '24/06/2023';
$pedidocompra->Proveedor = $proveedor;
$pedidocompra->FechaEntregaEstimada = '30/06/2023';
$pedidocompra->CostoTotal = '$1.753';
$pedidocompra->PedidoCerrado = 'Pedido cerrado';

$pedidocompra->ListaLineaCompra[] = $lc1;
$pedidocompra->ListaLineaCompra[] = $lc2;

$pedidocompra->MostrarInformacion();