-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2020 a las 08:51:21
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_usuario` int(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_usuario`, `username`, `password`) VALUES
(888, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(10) NOT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `importe_total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE `invitado` (
  `id_usuario` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(6765, 'Starcraft', '19.95', 'Juega online a este común estilo de RTS, con Protoss, Terran y Zerg, facciones de los juegos previos o disfruta de la nueva gran campaña, Legacy of the Void, que te mantendrá ocupado durante horas, ¡y con tu mente dando vueltas durante días tras completarla!', 'templates/img/starcraft.jpg'),
(6768, 'Doom Eternal', '59.95', 'La cronología exacta de esta nueva entrega no ha sido especificada, pero se sabe que el juego se desarrolla luego de los eventos de la entrega anterior. Doom Slayer regresa para repeler a los demonios y salvar a la Tierra. ¡Y a Marte! ¡Y también a otro par de planetas!', 'templates/img/doom-eternal.jpg'),
(6770, 'Amnesia', '0.00', 'Amnesia:The Dark Descent es un juego de horror y supervivencia en primera persona. Un juego sobre la inmersión, el descubrimiento y la vida dentro de una pesadilla. Una experiencia que te helará la sangre.', 'templates/img/amnesia.jpg'),
(6773, 'Mortal Kombat', '19.00', 'Mortal Kombat 11, la entrega más reciente de la icónica saga, te permitirá disfrutar de una experiencia mucho más profunda y personalizada. Las nuevas variantes de los personajes te ofrecen un control de tus kombatientes sin precedentes, ya que podrás personalizarlos como tú quieras. ', 'templates/img/mortal.jpg'),
(6774, 'Mafia', '49.95', 'Prospera como gánster durante la Ley Seca en esta reinvención del clásico. Tras un inesperado percance con la mafia, Tommy Angelo entra a regañadientes en el mundo del crimen organizado. A pesar de su reticencia inicial, las ventajas de unirse a la familia Salieri son demasiadas como para dejarlas pasar. ', 'templates/img/mafia.jpg'),
(6775, 'Assassins Creed', '19.95', 'El jugador puede elegir entre ser un hombre (Alexios) o una mujer (Kassandra): en ambos casos, eres un mercenario descendiente del afamado Leónidas I. Ellos han heredado su lanza rota y la reconstruyen a partir de los fragmentos para crear una nueva y poderosa arma con sus correspondientes nuevos poderes.', 'templates/img/assassins.jpg'),
(6777, 'Dragon Age:IV', '69.95', 'La épica serie de juegos de rol de BioWare da un salto emocionante con la fuerza de Frostbite 3. Te esperan hermosos paisajes y nuevas posibilidades increíbles. Prepárate para DragonAge:IV', 'templates/img/dragon.jpg'),
(6779, 'Destroy All Humans!', '29.95', '¡Vuelve el clásico de culto! Aterroriza a los terrícolas de los 50 en el papel del alienígena Crypto-137. Recoge su ADN y derroca al Gobierno de EE. UU. en este remake del legendario juego de acción, aventura e invasiones extraterrestres.', 'templates/img/destroy.jpg'),
(6780, 'GTA V', '9.95', 'Grand Theft Auto V para PC es un juego de acción y aventuras, el quinto de la serie GTA. Como ya es tradición en los juegos de esta serie, se obtienen puntos mediante la comisión de delitos.', 'templates/img/gta.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrado`
--

CREATE TABLE `registrado` (
  `id_usuario` int(6) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `invitado`
--
ALTER TABLE `invitado`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);
ALTER TABLE `productos` ADD FULLTEXT KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `registrado`
--
ALTER TABLE `registrado`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT de la tabla `invitado`
--
ALTER TABLE `invitado`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6781;

--
-- AUTO_INCREMENT de la tabla `registrado`
--
ALTER TABLE `registrado`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
