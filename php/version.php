<?php 
echo "Ver. 1.9 Compilación 2017.12.16";

/*

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