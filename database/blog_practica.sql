-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 08:08:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Primer Articulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae earum eveniet facilis, incidunt inventore laboriosam optio repellendus rerum veniam.', '2021-06-10 21:04:04', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque autem beatae consectetur dolores error esse fugit libero, minima minus obcaecati odit, possimus quam quis saepe tenetur, ullam. Ad culpa eius error nesciunt repellat vitae voluptas! Accusamus asperiores, at atque, dolore dolores dolorum ex fugit id illum ipsam nam, natus non odit rerum sit tempora ullam. Accusantium commodi corporis cum debitis deleniti dolore dolorum eum facilis fuga hic, illum impedit iusto minima modi molestias neque quidem, quis repellat sapiente sit vero vitae voluptate. Expedita nobis odit repudiandae rerum voluptas! Aut autem delectus deserunt ea eligendi, esse eum necessitatibus omnis soluta.', '1.png'),
(2, 'Segundo Articulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae\n    earum eveniet facilis, incidunt inventore laboriosam optio repellendus rerum veniam.', '2021-06-10 21:04:03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque autem beatae\n    consectetur dolores error esse fugit libero, minima minus obcaecati odit, possimus quam\n    quis saepe tenetur, ullam. Ad culpa eius error nesciunt repellat vitae voluptas! Accusamus\n    asperiores, at atque, dolore dolores dolorum ex fugit id illum ipsam nam, natus non odit rerum\n    sit tempora ullam. Accusantium commodi corporis cum debitis deleniti dolore dolorum eum facilis\n    fuga hic, illum impedit iusto minima modi molestias neque quidem, quis repellat sapiente sit vero\n    vitae voluptate. Expedita nobis odit repudiandae rerum voluptas! Aut autem delectus deserunt ea\n    eligendi, esse eum necessitatibus omnis soluta.', '2.png'),
(3, 'Tercer Articulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae\n    earum eveniet facilis, incidunt inventore laboriosam optio repellendus rerum veniam.', '2021-06-10 21:04:03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque autem beatae\n    consectetur dolores error esse fugit libero, minima minus obcaecati odit, possimus quam\n    quis saepe tenetur, ullam. Ad culpa eius error nesciunt repellat vitae voluptas! Accusamus\n    asperiores, at atque, dolore dolores dolorum ex fugit id illum ipsam nam, natus non odit rerum\n    sit tempora ullam. Accusantium commodi corporis cum debitis deleniti dolore dolorum eum facilis\n    fuga hic, illum impedit iusto minima modi molestias neque quidem, quis repellat sapiente sit vero\n    vitae voluptate. Expedita nobis odit repudiandae rerum voluptas! Aut autem delectus deserunt ea\n    eligendi, esse eum necessitatibus omnis soluta.', '3.png'),
(4, 'Cuarto Articulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae\n    earum eveniet facilis, incidunt inventore laboriosam optio repellendus rerum veniam.', '2021-06-10 21:04:03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque autem beatae\n    consectetur dolores error esse fugit libero, minima minus obcaecati odit, possimus quam\n    quis saepe tenetur, ullam. Ad culpa eius error nesciunt repellat vitae voluptas! Accusamus\n    asperiores, at atque, dolore dolores dolorum ex fugit id illum ipsam nam, natus non odit rerum\n    sit tempora ullam. Accusantium commodi corporis cum debitis deleniti dolore dolorum eum facilis\n    fuga hic, illum impedit iusto minima modi molestias neque quidem, quis repellat sapiente sit vero\n    vitae voluptate. Expedita nobis odit repudiandae rerum voluptas! Aut autem delectus deserunt ea\n    eligendi, esse eum necessitatibus omnis soluta.', '4.png'),
(6, 'Titulo de prueba', 'Extracto de prueba', '2021-06-16 17:34:29', 'Texto de prueba.', '14.jpg'),
(7, 'Titulo de prueba 2', 'Extracto de prueba 2', '2021-06-16 17:36:16', 'Texto de prueba 2', '10.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
