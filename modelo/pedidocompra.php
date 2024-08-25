<?php

class PedidoCompra {
    public $Fecha;
    public $Proveedor;
    public $FechaEntregaEstimada;
    public $CostoTotal;
    public $PedidoCerrado;
    public $ListaLineaCompra = array();

    public function MostrarInformacion() {
        echo 'Fecha del pedido: ' . $this->Fecha . '<br>';
        echo 'Id del proveedor: ' . $this->Proveedor->Id . '<br>';
        echo 'Proveedor del pedido: ' . $this->Proveedor->Descripcion . '<br>';
        echo 'Fecha de entrega estimada: ' . $this->FechaEntregaEstimada . '<br>';
        echo 'Costo total: ' . $this->CostoTotal . '<br>';
        echo 'Pedido cerrado: ' . $this->PedidoCerrado . '<br>';
        foreach($this->ListaLineaCompra as $lineacompra){
            echo 'Linea de compras: ';            
            echo '<li> Código del producto: ' . $lineacompra->Producto->Codigo . '</li>';
            echo '<li> Descripción del producto: ' . $lineacompra->Producto->Descripcion . '</li>';
            echo '<li> Precio de venta: ' . $lineacompra->Producto->PrecioVenta . '</li>';
            echo '<li> Cantidad: ' . $lineacompra->Cantidad . '</li>';
            echo '<li> Costo unitario: ' . $lineacompra->CostoUnitario . '</li>';
            echo '<li> Fue entregado: ' . $lineacompra->FueEntregado . '</li>';
        }
    }
}