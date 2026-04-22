--Versión: 1.28
DELIMITER $$
DROP PROCEDURE `insertarCuadreCajaDetalleGas`$$
CREATE PROCEDURE `insertarCuadreCajaDetalleGas`(IN `idVent` INT, IN `idProd` INT, IN `cant` DOUBLE, IN `idCont` INT, IN `contAhora` REAL, IN `contSoles` REAL, IN `contLitros` REAL, IN `contAntes` REAL, IN `ventaSubTotal` FLOAT, IN `contLitroAntes` REAL, IN `contSolesAntes` REAL)
BEGIN
INSERT INTO `ventaDetalle`
(`idventaDetalle`, `idVenta`,
`idProducto`,
`detveContAnterior`, `detvenContLitroAnt`,`detvenContSolesAnt`,
`detveCantidad`, `detveCantidadLitros`,
`detvePrecio`, `detveSubTotal`,
`detvenContMecan`,`detvenContLitros`,`detvenContSoles`)
select 
null, idVent,
idProd,
contAntes,contLitroAntes,contSolesAntes,
cant, round(cant/3.785,4),
prodPrecioActual, ventaSubTotal,
contAhora,contLitros,contSoles
from  productos where idproductos= idProd;
UPDATE `contenedorProductos` 
SET 
    `contUltimaFecha` = NOW(),
    `contStock` = `contStock` - cant,
    `contStockLitros` = `contStockLitros` - (cant/3.785)
WHERE
    `idcontenedorProductos` = idCont;
UPDATE `productos` 
SET 
    `prodCtaAnterior` = contAhora ,
    `ctaSolesAnterior`= contSoles,
    `ctaGalones`=contLitros 
WHERE
    `idproductos` = idProd;
END$$
DELIMITER ;


-----------Cuadre de valores -----------------
update productos
set ctaSolesAnterior = 397772.26,
prodCtaAnterior=56351.74,
ctaGalones = 56271
where idproductos = 29;

update productos
set ctaSolesAnterior = 658317.59,
prodCtaAnterior=93477.53,
ctaGalones = 93369
where idproductos = 30;

update productos
set ctaSolesAnterior = 886168.42,
prodCtaAnterior=121942.10,
ctaGalones = 121.782
where idproductos = 32;

update productos
set ctaSolesAnterior = 1167002.71,
prodCtaAnterior=161232.69,
ctaGalones = 161062
where idproductos = 33;

--Gas
UPDATE `contenedorProductos`
SET
    `contStock` = 4234.83,
    `contStockLitros` = 4234.83 * 3.785,
    `contUltimaFecha` = NOW()
WHERE `contenedorProductos`.`idcontenedorProductos` = 1;

UPDATE `contenedorProductos`
SET
    `contStock` = 3100,
    `contStockLitros` = 3100 * 3.785,
    `contUltimaFecha` = NOW()
WHERE `contenedorProductos`.`idcontenedorProductos` = 2;

UPDATE `contenedorProductos`
SET
    `contStock` = 579.2,
    `contStockLitros` = 579.2 * 3.785,
    `contUltimaFecha` = NOW()
WHERE `contenedorProductos`.`idcontenedorProductos` = 4;

UPDATE `contenedorProductos`
SET
    `contStock` = 889.14,
    `contStockLitros` = 889.14 * 3.785,
    `contUltimaFecha` = NOW()
WHERE `contenedorProductos`.`idcontenedorProductos` = 5;