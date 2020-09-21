<?php 
echo "Versión 1.26 Compilación 20.0921";

/*
Ver 1.25
Arreglado actualizacones de tanqueo
Arreglado fechas en excel


Ver. 1.23
Agregado Opción de merma

Ver 1.22
Fusion de códigos:
UPDATE `creditos` SET  `idcliente` = 24 WHERE `idcliente`=38;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 38;
UPDATE `creditos` SET  `idcliente` = 25 WHERE `idcliente`=37;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 37;
UPDATE `creditos` SET  `idcliente` = 14 WHERE `idcliente`=16;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 16;
UPDATE `creditos` SET  `idcliente` = 14 WHERE `idcliente`=20;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 20;
UPDATE `creditos` SET  `idcliente` = 7 WHERE `idcliente`=36;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 36;
UPDATE `creditos` SET  `idcliente` = 44 WHERE `idcliente`=45;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 45;
UPDATE `creditos` SET  `idcliente` = 21 WHERE `idcliente`=32;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 32;
UPDATE `creditos` SET  `idcliente` = 29 WHERE `idcliente`=30;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 30;
UPDATE `creditos` SET  `idcliente` = 29 WHERE `idcliente`=43;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 43;
UPDATE `creditos` SET  `idcliente` = 19 WHERE `idcliente`=42;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 42;
UPDATE `creditos` SET  `idcliente` = 31 WHERE `idcliente`=28;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 28;
UPDATE `creditos` SET  `idcliente` = 26 WHERE `idcliente`=27;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 27;
UPDATE `creditos` SET  `idcliente` = 18 WHERE `idcliente`=33;
UPDATE `cliente` SET `cliActivo` = '0' WHERE `cliente`.`idCliente` = 33;
ALTER TABLE `creditos` CHANGE `credCancelado` `credCancelado` INT(1) NULL DEFAULT '0' COMMENT '0 sin cancelar, 1 cancelado, 2 anulado';
UPDATE `creditos` SET `credAdeuda`=1, credCancelado= 2 WHERE credFecha < '2018-03-01';
DROP PROCEDURE `listarCreditosFinNumFecha`; CREATE DEFINER=`infocat_root`@`%` PROCEDURE `listarCreditosFinNumFecha`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN SELECT year(credFechaCancelacion) as ano, month(credFechaCancelacion) as mes, count(idcreditos) as total FROM grifo.creditos where credCancelado=1 and credCancelado<>2 group by year(credFechaCancelacion), month(credFechaCancelacion) order by year(credFechaCancelacion), month(credFechaCancelacion) desc; END




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