-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-03-2012 a las 15:21:40
-- Versión del servidor: 5.1.61
-- Versión de PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `animevis_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animes`
--

CREATE TABLE IF NOT EXISTS `animes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL DEFAULT 'Ninguno',
  `categoria` varchar(100) NOT NULL DEFAULT 'Anime',
  `catg` varchar(100) NOT NULL DEFAULT 'anime',
  `agreg` date NOT NULL,
  `titu` varchar(100) NOT NULL DEFAULT 'Ninguno',
  `mini` varchar(100) NOT NULL,
  `descripccion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `proximo_c` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `buscador` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Volcado de datos para la tabla `animes`
--

INSERT INTO `animes` (`id`, `nombre`, `categoria`, `catg`, `agreg`, `titu`, `mini`, `descripccion`, `imagen`, `estado`, `proximo_c`) VALUES
(76, 'Naruto Shippuden', 'anime', 'anime', '2011-12-07', 'ninguno', '', '', '', '<font color="#CC0000">Finalizado</font>', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE IF NOT EXISTS `capitulos` (
  `id_capitulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` varchar(180) CHARACTER SET utf8 NOT NULL,
  `nombre_capitulo` varchar(200) NOT NULL,
  `sub` varchar(200) NOT NULL,
  `opcn` text NOT NULL,
  `embed` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id_capitulo`),
  FULLTEXT KEY `buscador` (`nombre_capitulo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=224 ;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`id_capitulo`, `id_anime`, `nombre_capitulo`, `sub`, `opcn`, `embed`, `url`) VALUES
(122, '76', '1', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(121, '76', '2', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(120, '76', '3', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(123, '76', '4', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(124, '76', '5', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(125, '76', '6', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(126, '77', '1', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(127, '77', '2', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(128, '77', '3', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(129, '77', '4', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(130, '77', '5', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(131, '78', '1', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(132, '78', '2', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>'),
(223, '76', '7', 'Sub Español', '<li><a href="#tab1">Opción 1</a></li>\r\n<li><a href="#tab2">Opción 2</a></li>\r\n<li><a href="#tab3">MEGAVIDEO</a></li>', '<div id="tab1" class="tab_content">\r\n\r\n<iframe scrolling="no" src="http://www.pelispediaservicio.com.ar/movies/private?mu=&ad=http://videosanime.net/publicidad.html" style="border: none; height: 360px; width: 635px;"></iframe>\r\n\r\n</div>\r\n<div id="tab2" class="tab_content">\r\n\r\n\r\n \r\n</div>\r\n<div id="tab3" class="tab_content">\r\n\r\n\r\n \r\n</div>', '<a href="" target="_blank"></a>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `cat`) VALUES
(1, 'accion'),
(2, 'aventura'),
(4, 'Artes Marciales'),
(5, 'Carreras'),
(6, 'Comedia'),
(7, 'Cyberpunk'),
(8, 'Deportes'),
(9, 'Drama'),
(10, 'Ecchi '),
(11, 'Escolares'),
(12, 'Fantasía'),
(13, 'Ficción'),
(14, 'Gore'),
(15, 'Harem'),
(16, 'Horror'),
(17, 'Josei'),
(18, 'Magia'),
(19, 'Mecha'),
(20, 'Militar'),
(21, 'Misterio'),
(22, 'Música'),
(23, 'Parodias'),
(24, 'Psicologico'),
(25, 'Recuentos de la Vida'),
(26, 'Romance'),
(27, 'Seinen'),
(28, 'Shojo'),
(29, 'Shonen'),
(30, 'Sobrenatural'),
(31, 'Tragedia'),
(32, 'Vampiros'),
(33, 'Yaoi '),
(34, 'Yuri ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
