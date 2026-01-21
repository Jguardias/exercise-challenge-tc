CREATE DATABASE IF NOT EXISTS `db_exercise-challenge-tc`;
USE `db_exercise-challenge-tc`;
DROP TABLE IF EXISTS `productos`;


CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `precio` int(20) NOT NULL,
  `peso` int(20) NOT NULL,
  `categoria` varchar(35) NOT NULL,
  `stock` int(20) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `fecha_ultima_venta` datetime DEFAULT NULL,
  `estado` int(1) NOT NULL COMMENT '0: Inactivo , 1: Activo',
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `productos` (`nombre_producto`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `estado`) VALUES
('Café Molido', 'REF001', 12000, 500, 'Alimentos', 100, 1),
('Té Verde', 'REF002', 8000, 250, 'Alimentos', 50, 1);