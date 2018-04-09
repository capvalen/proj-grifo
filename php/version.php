<?php 
echo "Versión 1.18 Compilación 2018.04.09";

/*
Ver 1.17
ALTER TABLE `creditos` ADD `credObservacion` VARCHAR(200) NOT NULL AFTER `idUsuario`;
Cambio reoprtes y cambios de edicion

Ver 1.15
Cambios en los reportes, sumas y bloqueos de usuarios simples

Ver 1.13
Agregado contadores a las impresiones
Reportes con stock, historial de tanqueo y con nombres de cliente
Se anulo reporte mensual
fix desconectar

Ver 1.12
Agregado impresión silenciosa.

Ver 1.11
Agregado alerta de stock en la principal

Ver 1.10

ALTER TABLE `ventadetalle` ADD `detveContAnterior` REAL NOT NULL AFTER `idProducto`;
ALTER TABLE `ventadetalle` CHANGE `detveCantidad` `detveCantidad` DOUBLE NULL DEFAULT NULL COMMENT 'galones';
ALTER TABLE `ventadetalle` CHANGE `detveCantidadLitros` `detveCantidadLitros` DOUBLE NULL DEFAULT NULL;
ALTER TABLE `ventadetalle` ADD `detveSubTotal` FLOAT NOT NULL ;
ALTER TABLE `ventadetalle` ADD `detvenContMecan` REAL NOT NULL DEFAULT '0' , ADD `detvenContLitros` REAL NOT NULL DEFAULT '0' ;
ALTER TABLE `ventadetalle` ADD `detvenContSoles` REAL NOT NULL DEFAULT '0' ;
ALTER TABLE `ventadetalle` ADD `detvenContLitroAnt` REAL NOT NULL AFTER `detveContAnterior`, ADD `detvenContSolesAnt` REAL NOT NULL AFTER `detvenContLitroAnt`;
ALTER TABLE `ventadetalle` CHANGE `detveCantidadLitros` `detveCantidadLitros` DOUBLE NULL DEFAULT '0';

CREATE DEFINER=`root`@`localhost` PROCEDURE `listarVentasDetalle`()
    NO SQL
select p.prodNombre ,v.idVenta, ventFecha, ventMontoTotal,vt.idventaDetalle, vt.*, u.usuNombres, vt.detveCantidad,detveCantidadLitros, detvePrecio
from venta v
inner join ventadetalle vt on v.idVenta=vt.idVenta
inner join productos p on vt.idProducto= p.idProductos
inner join usuario u on u.idUsuario = v.idUsuario
order by ventFecha asc;


ver 1.9
modificar tabla productos
ALTER TABLE `productos` CHANGE `prodCtaAnterior` `prodCtaAnterior` DOUBLE NULL DEFAULT NULL COMMENT 'cta mecanica';
ALTER TABLE `productos` ADD `ctaSolesAnterior` DOUBLE NOT NULL DEFAULT '0' COMMENT 'soloGas' AFTER `prodCtaAnterior`, ADD `ctaGalones` DOUBLE NOT NULL DEFAULT '0' COMMENT 'soloGas' AFTER `ctaSolesAnterior`;


Ver 1.8.2
ligeros cambios esteticos

Ver 1.8
agregado ingreso en caja con litros
calculos en galones y litros
calculos con procedures

Convertir a Double: Tabla: contenedorproductos-> contStock y contStockLitros, productos-> prodCtaAnterior



Ver 1.7.3:
arreglado los galones con litros
fix editar usuario
ALTER TABLE `usuario` CHANGE `idSucursal` `idSucursal` INT(11) NOT NULL DEFAULT '1';






*/


 ?>