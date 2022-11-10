-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2016 a las 16:24:32
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ubicacion`
--
CREATE DATABASE IF NOT EXISTS `ubicacion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ubicacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio`
--

DROP TABLE IF EXISTS `anio`;
CREATE TABLE `anio` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anio`
--

INSERT INTO `anio` (`id`, `numero`) VALUES
(1, 2001),
(10, 2010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `id` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idprovincia` int(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `idprovincia`) VALUES
(1, 'Comuna 1', 1),
(2, 'Comuna 2', 1),
(3, 'Comuna 3', 1),
(4, 'Comuna 4', 1),
(5, 'Comuna 5', 1),
(6, 'Comuna 6', 1),
(7, 'Comuna 7', 1),
(8, 'Comuna 8', 1),
(9, 'Comuna 9', 1),
(10, 'Comuna 10', 1),
(11, 'Comuna 11', 1),
(12, 'Comuna 12', 1),
(13, 'Comuna 13', 1),
(14, 'Comuna 14', 1),
(15, 'Comuna 15', 1),
(16, 'Adolfo Alsina', 2),
(17, 'Alberti', 2),
(18, 'Almirante Brown', 2),
(19, 'Avellaneda', 2),
(20, 'Ayacucho', 2),
(21, 'Azul', 2),
(22, 'Bahia Blanca', 2),
(23, 'Balcarce', 2),
(24, 'Baradero', 2),
(25, 'Arrecifes', 2),
(26, 'Berazategui', 2),
(27, 'Berisso', 2),
(28, 'Bolivar', 2),
(29, 'Bragado', 2),
(30, 'Brandsen', 2),
(31, 'Campana', 2),
(32, 'Ca?uelas', 2),
(33, 'Capitan Sarmiento', 2),
(34, 'Carlos Casares', 2),
(35, 'Carlos Tejedor', 2),
(36, 'Carmen De Areco', 2),
(37, 'Patagones', 2),
(38, 'Castelli', 2),
(39, 'Colon', 2),
(40, 'Coronel Dorrego', 2),
(41, 'Coronel Pringles', 2),
(42, 'Coronel Rosales', 2),
(43, 'Coronel Suarez', 2),
(44, 'Chacabuco', 2),
(45, 'Chascomus', 2),
(46, 'Chivilcoy', 2),
(47, 'Daireaux', 2),
(48, 'Dolores', 2),
(49, 'Ensenada', 2),
(50, 'Escobar', 2),
(51, 'Esteban Echeverria', 2),
(52, 'Exaltacion De La Cruz', 2),
(53, 'Florencio Varela', 2),
(54, 'General Alvarado', 2),
(55, 'General Alvear', 2),
(56, 'General Arenales', 2),
(57, 'General Belgrano', 2),
(58, 'General Guido', 2),
(59, 'General Lamadrid', 2),
(60, 'Las Heras', 2),
(61, 'General Lavalle', 2),
(62, 'General Madariaga', 2),
(63, 'General Paz', 2),
(64, 'General Pinto', 2),
(65, 'General Pueyrredon', 2),
(66, 'General Rodriguez', 2),
(67, 'General San Martin', 2),
(68, 'San Miguel', 2),
(69, 'General Viamonte', 2),
(70, 'General Villegas', 2),
(71, 'Gonzales Chaves', 2),
(72, 'Guamini', 2),
(73, 'Hipolito Yrigoyen', 2),
(74, 'Juarez', 2),
(75, 'Junin', 2),
(76, 'Matanza', 2),
(77, 'Lanus', 2),
(78, 'La Plata', 2),
(79, 'Laprida', 2),
(80, 'Las Flores', 2),
(81, 'Leandro N. Alem', 2),
(82, 'Lincoln', 2),
(83, 'Loberia', 2),
(84, 'Lobos', 2),
(85, 'Lomas De Zamora', 2),
(86, 'Lujan', 2),
(87, 'Magdalena', 2),
(88, 'Maipu', 2),
(89, 'Mar Chiquita', 2),
(90, 'Marcos Paz', 2),
(91, 'Mercedes', 2),
(92, 'Merlo', 2),
(93, 'Monte', 2),
(94, 'Moreno', 2),
(95, 'Moron', 2),
(96, 'Navarro', 2),
(97, 'Necochea', 2),
(98, 'Nueve De Julio', 2),
(99, 'Olavarria', 2),
(100, 'Pehuajo', 2),
(101, 'Pellegrini', 2),
(102, 'Pergamino', 2),
(103, 'Pila', 2),
(104, 'Pilar', 2),
(105, 'Pinamar', 2),
(106, 'Puan', 2),
(107, 'Quilmes', 2),
(108, 'Ramallo', 2),
(109, 'Rauch', 2),
(110, 'Rivadavia', 2),
(111, 'Rojas', 2),
(112, 'Roque Perez', 2),
(113, 'Saavedra', 2),
(114, 'Saladillo', 2),
(115, 'Salliquelo', 2),
(116, 'Salto', 2),
(117, 'San Andres De Giles', 2),
(118, 'San Antonio De Areco', 2),
(119, 'San Cayetano', 2),
(120, 'San Fernando', 2),
(121, 'San Isidro', 2),
(122, 'San Nicolas', 2),
(123, 'San Pedro', 2),
(124, 'San Vicente', 2),
(125, 'Suipacha', 2),
(126, 'Tandil', 2),
(127, 'Tapalque', 2),
(128, 'Tigre', 2),
(129, 'Tornquist', 2),
(130, 'Trenque Lauquen', 2),
(131, 'Tordillo', 2),
(132, 'Tres Arroyos', 2),
(133, 'Tres De Febrero', 2),
(134, 'La Costa', 2),
(135, 'Monte Hermoso', 2),
(136, 'Veinticinco De Mayo', 2),
(137, 'Vicente Lopez', 2),
(138, 'Villa Gesell', 2),
(139, 'Villarino', 2),
(140, 'Zarate', 2),
(141, 'Tres Lomas', 2),
(142, 'F. Ameghino', 2),
(143, 'Presidente Peron', 2),
(144, 'J. C. Paz', 2),
(145, 'Malvinas Argentinas', 2),
(146, 'Punta Indio', 2),
(147, 'Ezeiza', 2),
(148, 'Ituzaingo', 2),
(149, 'Hurlingham', 2),
(150, 'Lezama', 2),
(151, 'Capital', 3),
(152, 'Capayan', 3),
(153, 'La Paz', 3),
(154, 'Ancasti', 3),
(155, 'El Alto', 3),
(156, 'Santa Rosa', 3),
(157, 'Paclin', 3),
(158, 'Valle Viejo', 3),
(159, 'Fray Mamerto Esquiu', 3),
(160, 'Ambato', 3),
(161, 'Poman', 3),
(162, 'Andalgala', 3),
(163, 'Belen', 3),
(164, 'Antofagasta De La Sierra', 3),
(165, 'Tinogasta', 3),
(166, 'Santa Maria', 3),
(167, 'Capital', 4),
(168, 'Calamuchita', 4),
(169, 'Colon', 4),
(170, 'Cruz Del Eje', 4),
(171, 'General Roca', 4),
(172, 'General San Martin', 4),
(173, 'Ischilin', 4),
(174, 'Juarez Celman', 4),
(175, 'Marcos Juarez', 4),
(176, 'Minas', 4),
(177, 'Pocho', 4),
(178, 'Punilla', 4),
(179, 'Rio Cuarto', 4),
(180, 'Rio Primero', 4),
(181, 'Rio Seco', 4),
(182, 'Rio Segundo', 4),
(183, 'Roque Saenz Pe?a', 4),
(184, 'San Alberto', 4),
(185, 'San Javier', 4),
(186, 'San Justo', 4),
(187, 'Santa Maria', 4),
(188, 'Sobremonte', 4),
(189, 'Tercero Arriba', 4),
(190, 'Totoral', 4),
(191, 'Tulumba', 4),
(192, 'Union', 4),
(193, 'Capital', 5),
(194, 'Goya', 5),
(195, 'Curuzu Cuatia', 5),
(196, 'Mercedes', 5),
(197, 'Esquina', 5),
(198, 'Lavalle', 5),
(199, 'Santo Tome', 5),
(200, 'Paso De Los Libres', 5),
(201, 'Monte Caseros', 5),
(202, 'San Luis Del Palmar', 5),
(203, 'Bella Vista', 5),
(204, 'Empedrado', 5),
(205, 'San Roque', 5),
(206, 'General Paz', 5),
(207, 'Saladas', 5),
(208, 'San Martin', 5),
(209, 'Concepcion', 5),
(210, 'Mburucuya', 5),
(211, 'Ituzaingo', 5),
(212, 'Sauce', 5),
(213, 'San Cosme', 5),
(214, 'General Alvear', 5),
(215, 'San Miguel', 5),
(216, 'Itati', 5),
(217, 'Beron De Astrada', 5),
(218, 'San Fernando', 6),
(219, 'Primero De Mayo', 6),
(220, 'Libertad', 6),
(221, 'General Donovan', 6),
(222, 'Sargento Cabral', 6),
(223, 'Pcia. De La Plaza', 6),
(224, 'Bermejo', 6),
(225, 'Lib. Gral. San Martin', 6),
(226, 'Tapenaga', 6),
(227, 'San Lorenzo', 6),
(228, 'Mayor L. J. Fontana', 6),
(229, 'O Higgins', 6),
(230, 'Comandante Fernandez', 6),
(231, 'Quitilipi', 6),
(232, '25 De Mayo', 6),
(233, 'Maipu', 6),
(234, 'Independencia', 6),
(235, 'General Belgrano', 6),
(236, '9 De Julio', 6),
(237, 'Chacabuco', 6),
(238, '12 De Octubre', 6),
(239, '2 De Abril', 6),
(240, 'Fray J. Sta. Maria De Oro', 6),
(241, 'Almirante Brown', 6),
(242, 'General G?emes', 6),
(243, 'Rawson', 7),
(244, 'Biedma', 7),
(245, 'Telsen', 7),
(246, 'Gastre', 7),
(247, 'Cushamen', 7),
(248, 'Futaleufu', 7),
(249, 'Langui?eo', 7),
(250, 'Tehuelches', 7),
(251, 'Paso De Indios', 7),
(252, 'Martires', 7),
(253, 'F. Ameghino', 7),
(254, 'Gaiman', 7),
(255, 'Rio Senguer', 7),
(256, 'Sarmiento', 7),
(257, 'Escalante', 7),
(258, 'Parana', 8),
(259, 'La Paz', 8),
(260, 'Diamante', 8),
(261, 'Victoria', 8),
(262, 'Nogoya', 8),
(263, 'Gualeguay', 8),
(264, 'Tala', 8),
(265, 'Uruguay', 8),
(266, 'Gualeguaychu', 8),
(267, 'Islas Del Ibicuy', 8),
(268, 'Villaguay', 8),
(269, 'Concordia', 8),
(270, 'Federal', 8),
(271, 'Colon', 8),
(272, 'Feliciano', 8),
(273, 'Federacion', 8),
(274, 'San Salvador', 8),
(275, 'Formosa', 9),
(276, 'Laishi', 9),
(277, 'Pilcomayo', 9),
(278, 'Pirane', 9),
(279, 'Pilagas', 9),
(280, 'Pati?o', 9),
(281, 'Bermejo', 9),
(282, 'Matacos', 9),
(283, 'Ramon Lista', 9),
(284, 'General Belgrano', 10),
(285, 'Palpala', 10),
(286, 'San Antonio', 10),
(287, 'El Carmen', 10),
(288, 'San Pedro', 10),
(289, 'Santa Barbara', 10),
(290, 'Ledesma', 10),
(291, 'Valle Grande', 10),
(292, 'Tumbaya', 10),
(293, 'Tilcara', 10),
(294, 'Humahuaca', 10),
(295, 'Cochinoca', 10),
(296, 'Rinconada', 10),
(297, 'Santa Catalina', 10),
(298, 'Yavi', 10),
(299, 'Susques', 10),
(300, 'Atreuco', 11),
(301, 'Capital', 11),
(302, 'Caleu Caleu', 11),
(303, 'Catrilo', 11),
(304, 'Chalileo', 11),
(305, 'Chapaleufu', 11),
(306, 'Chical-Co', 11),
(307, 'Conhelo', 11),
(308, 'Curaco', 11),
(309, 'Guatrache', 11),
(310, 'Hucal', 11),
(311, 'Loventue', 11),
(312, 'Lihuel Calel', 11),
(313, 'Limay Mahuida', 11),
(314, 'Maraco', 11),
(315, 'Puelen', 11),
(316, 'Quemu Quemu', 11),
(317, 'Rancul', 11),
(318, 'Realico', 11),
(319, 'Toay', 11),
(320, 'Trenel', 11),
(321, 'Utracan', 11),
(322, 'Capital', 12),
(323, 'Sanagasta', 12),
(324, 'Castro Barros', 12),
(325, 'Arauco', 12),
(326, 'San Blas De Los Sauces', 12),
(327, 'Chilecito', 12),
(328, 'Famatina', 12),
(329, 'Felipe Varela', 12),
(330, 'General Lamadrid', 12),
(331, 'Vinchina', 12),
(332, 'Independencia', 12),
(333, 'Chamical', 12),
(334, 'Angel Vicente Pe?aloza', 12),
(335, 'General Belgrano', 12),
(336, 'Juan Facundo Quiroga', 12),
(337, 'General Ortiz De Ocampo', 12),
(338, 'Rosario Vera Pe?aloza', 12),
(339, 'General San Martin', 12),
(340, 'Capital', 13),
(341, 'Godoy Cruz', 13),
(342, 'Guaymallen', 13),
(343, 'Las Heras', 13),
(344, 'Lavalle', 13),
(345, 'Maipu', 13),
(346, 'Lujan', 13),
(347, 'Tupungato', 13),
(348, 'San Martin', 13),
(349, 'Junin', 13),
(350, 'Rivadavia', 13),
(351, 'Tunuyan', 13),
(352, 'San Carlos', 13),
(353, 'Santa Rosa', 13),
(354, 'La Paz', 13),
(355, 'San Rafael', 13),
(356, 'Malargue', 13),
(357, 'General Alvear', 13),
(358, 'Capital', 14),
(359, 'Apostoles', 14),
(360, 'Candelaria', 14),
(361, 'Leandro N. Alem', 14),
(362, 'Concepcion De La Sierra', 14),
(363, 'San Javier', 14),
(364, 'San Ignacio', 14),
(365, 'Obera', 14),
(366, 'L. General San Martin', 14),
(367, 'Cainguas', 14),
(368, '25 De Mayo', 14),
(369, 'Montecarlo', 14),
(370, 'Guarani', 14),
(371, 'El Dorado', 14),
(372, 'San Pedro', 14),
(373, 'Iguazu', 14),
(374, 'Gral. Manuel Belgrano', 14),
(375, 'Confluencia', 15),
(376, 'Zapala', 15),
(377, 'A?elo', 15),
(378, 'Pehuenches', 15),
(379, 'Chos Malal', 15),
(380, 'Minas', 15),
(381, 'Torquin', 15),
(382, 'Loncopue', 15),
(383, 'Picunches', 15),
(384, 'Alumine', 15),
(385, 'Catan Lil', 15),
(386, 'Picun Leufu', 15),
(387, 'Collon Cura', 15),
(388, 'Huiliches', 15),
(389, 'Lacar', 15),
(390, 'Los Lagos', 15),
(391, 'Adolfo Alsina', 16),
(392, 'Conesa', 16),
(393, 'San Antonio Oeste', 16),
(394, 'Valcheta', 16),
(395, 'Nueve De Julio', 16),
(396, '25 De Mayo', 16),
(397, '?orquinco', 16),
(398, 'Pilcaniyeu', 16),
(399, 'Bariloche', 16),
(400, 'Pichi Mahuida', 16),
(401, 'Avellaneda', 16),
(402, 'General Roca', 16),
(403, 'El Cuy', 16),
(404, 'Capital', 17),
(405, 'La Caldera', 17),
(406, 'General G?emes', 17),
(407, 'Metan', 17),
(408, 'Anta', 17),
(409, 'Rivadavia', 17),
(410, 'Oran', 17),
(411, 'San Martin', 17),
(412, 'Iruya', 17),
(413, 'Santa Victoria', 17),
(414, 'Cerrillos', 17),
(415, 'Chicoana', 17),
(416, 'La Vi?a', 17),
(417, 'Guachipas', 17),
(418, 'Rosario De La Frontera', 17),
(419, 'La Candelaria', 17),
(420, 'Cafayate', 17),
(421, 'San Carlos', 17),
(422, 'Molinos', 17),
(423, 'Cachi', 17),
(424, 'Rosario De Lerma', 17),
(425, 'La Poma', 17),
(426, 'Los Andes', 17),
(427, 'Capital', 18),
(428, 'Santa Lucia', 18),
(429, 'Chimbas', 18),
(430, 'Rivadavia', 18),
(431, 'Zonda', 18),
(432, 'Rawson', 18),
(433, 'Nueve De Julio', 18),
(434, 'San Martin', 18),
(435, 'Angaco', 18),
(436, 'Albardon', 18),
(437, 'Ullum', 18),
(438, 'Pocito', 18),
(439, 'Sarmiento', 18),
(440, '25 De Mayo', 18),
(441, 'Caucete', 18),
(442, 'Valle Fertil', 18),
(443, 'Jachal', 18),
(444, 'Iglesia', 18),
(445, 'Calingasta', 18),
(446, 'Pueyrredon', 19),
(447, 'Pringles', 19),
(448, 'Pedernera', 19),
(449, 'Chacabuco', 19),
(450, 'San Martin', 19),
(451, 'Junin', 19),
(452, 'Ayacucho', 19),
(453, 'Belgrano', 19),
(454, 'Gobernador Dupuy', 19),
(455, 'Deseado', 20),
(456, 'Lago Buenos Aires', 20),
(457, 'Magallanes', 20),
(458, 'Rio Chico', 20),
(459, 'Corpen Aike', 20),
(460, 'Lago Argentino', 20),
(461, 'Guer Aike', 20),
(462, 'Belgrano', 21),
(463, 'Caseros', 21),
(464, 'Castellanos', 21),
(465, 'Constitucion', 21),
(466, 'Garay', 21),
(467, 'General Lopez', 21),
(468, 'General Obligado', 21),
(469, 'Iriondo', 21),
(470, 'La Capital', 21),
(471, 'Las Colonias', 21),
(472, 'Nueve De Julio', 21),
(473, 'Rosario', 21),
(474, 'San Cristobal', 21),
(475, 'San Javier', 21),
(476, 'San Jeronimo', 21),
(477, 'San Justo', 21),
(478, 'San Lorenzo', 21),
(479, 'San Martin', 21),
(480, 'Vera', 21),
(481, 'Capital', 22),
(482, 'Avellaneda', 22),
(483, 'Aguirre', 22),
(484, 'Alberdi', 22),
(485, 'Atamisqui', 22),
(486, 'Banda', 22),
(487, 'Belgrano', 22),
(488, 'Copo', 22),
(489, 'Choya', 22),
(490, 'Figueroa', 22),
(491, 'Guasayan', 22),
(492, 'Jimenez', 22),
(493, 'Loreto', 22),
(494, 'Juan F. Ibarra', 22),
(495, 'Mitre', 22),
(496, 'Moreno', 22),
(497, 'Ojo De Agua', 22),
(498, 'Pellegrini', 22),
(499, 'Quebrachos', 22),
(500, 'Rivadavia', 22),
(501, 'Robles', 22),
(502, 'Rio Hondo', 22),
(503, 'Silipica', 22),
(504, 'San Martin', 22),
(505, 'Salavina', 22),
(506, 'Sarmiento', 22),
(507, 'Taboada', 22),
(508, 'Capital', 23),
(509, 'Lules', 23),
(510, 'Famailla', 23),
(511, 'Monteros', 23),
(512, 'Chicligasta', 23),
(513, 'Rio Chico', 23),
(514, 'Alberdi', 23),
(515, 'La Cocha', 23),
(516, 'Graneros', 23),
(517, 'Simoca', 23),
(518, 'Leales', 23),
(519, 'Cruz Alta', 23),
(520, 'Burruyacu', 23),
(521, 'Trancas', 23),
(522, 'Yerba Buena', 23),
(523, 'Tafi Viejo', 23),
(524, 'Tafi Del Valle', 23),
(525, 'Ushuaia', 24),
(526, 'Rio Grande', 24),
(527, 'Antartida Argentina', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Bolivia'),
(3, 'Brasil'),
(4, 'Canada'),
(5, 'Chile'),
(6, 'Colombia'),
(7, 'Costa Rica'),
(8, 'Cuba'),
(9, 'Ecuador'),
(10, 'El Salvador'),
(11, 'Espa?a'),
(12, 'Estados Unidos'),
(13, 'Guatemala'),
(14, 'Honduras'),
(15, 'Mexico'),
(16, 'Nicaragua'),
(17, 'Panama'),
(18, 'Paraguay'),
(19, 'Peru'),
(20, 'Puerto Rico'),
(21, 'Uruguay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

DROP TABLE IF EXISTS `poblacion`;
CREATE TABLE `poblacion` (
  `id` int(5) NOT NULL,
  `idDepartamento` int(5) NOT NULL,
  `idAnio` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `poblacion`
--

INSERT INTO `poblacion` (`id`, `idDepartamento`, `idAnio`, `valor`) VALUES
(1, 16, 1, 16245),
(136, 71, 1, 12037),
(137, 17, 1, 10373),
(138, 18, 1, 515556),
(139, 25, 1, 27279),
(140, 19, 1, 328980),
(141, 20, 1, 19669),
(142, 21, 1, 62996),
(143, 22, 1, 284776),
(144, 23, 1, 42039),
(145, 24, 1, 29562),
(146, 74, 1, 19443),
(147, 26, 1, 287913),
(148, 27, 1, 80092),
(149, 28, 1, 32442),
(150, 29, 1, 40259),
(151, 30, 1, 22515),
(152, 31, 1, 83698),
(153, 32, 1, 42575),
(154, 33, 1, 12854),
(155, 34, 1, 21125),
(156, 35, 1, 11539),
(157, 36, 1, 13992),
(158, 38, 1, 7852),
(159, 44, 1, 45445),
(160, 45, 1, 38647),
(161, 46, 1, 60762),
(162, 39, 1, 23179),
(163, 42, 1, 60892),
(164, 40, 1, 16522),
(165, 41, 1, 23794),
(166, 43, 1, 36828),
(167, 47, 1, 15857),
(168, 48, 1, 25216),
(169, 49, 1, 51448),
(170, 50, 1, 178155),
(171, 51, 1, 243974),
(172, 52, 1, 24167),
(173, 147, 1, 118807),
(174, 53, 1, 348970),
(175, 142, 1, 8171),
(176, 54, 1, 34391),
(177, 55, 1, 10897),
(178, 56, 1, 14876),
(179, 57, 1, 15381),
(180, 58, 1, 2771),
(181, 62, 1, 18286),
(182, 59, 1, 10984),
(183, 60, 1, 12799),
(184, 61, 1, 3063),
(185, 63, 1, 10319),
(186, 64, 1, 11129),
(187, 65, 1, 564056),
(188, 66, 1, 67931),
(189, 67, 1, 403107),
(190, 69, 1, 17641),
(191, 70, 1, 28960),
(192, 72, 1, 11257),
(193, 73, 1, 8819),
(194, 149, 1, 172245),
(195, 148, 1, 158121),
(196, 144, 1, 230208),
(197, 75, 1, 88664),
(198, 134, 1, 60483),
(199, 76, 1, 1255288),
(200, 77, 1, 453082),
(201, 78, 1, 574369),
(202, 79, 1, 9683),
(203, 80, 1, 23551),
(204, 81, 1, 16358),
(205, 82, 1, 41127),
(206, 83, 1, 17008),
(207, 84, 1, 33141),
(208, 85, 1, 591345),
(209, 86, 1, 93992),
(210, 87, 1, 16603),
(211, 88, 1, 10193),
(212, 145, 1, 290691),
(213, 89, 1, 17908),
(214, 90, 1, 43400),
(215, 91, 1, 59870),
(216, 92, 1, 469985),
(217, 93, 1, 17488),
(218, 135, 1, 5602),
(219, 94, 1, 380503),
(220, 95, 1, 309380),
(221, 96, 1, 15797),
(222, 97, 1, 89096),
(223, 98, 1, 45998),
(224, 99, 1, 103961),
(225, 37, 1, 27938),
(226, 100, 1, 38400),
(227, 101, 1, 6030),
(228, 102, 1, 99193),
(229, 103, 1, 3318),
(230, 104, 1, 232463),
(231, 105, 1, 20666),
(232, 143, 1, 60191),
(233, 106, 1, 16381),
(234, 146, 1, 9362),
(235, 107, 1, 518788),
(236, 108, 1, 29179),
(237, 109, 1, 14434),
(238, 110, 1, 15452),
(239, 111, 1, 22842),
(240, 112, 1, 10902),
(241, 113, 1, 19715),
(242, 114, 1, 29600),
(243, 116, 1, 29189),
(244, 115, 1, 8682),
(245, 117, 1, 20829),
(246, 118, 1, 21333),
(247, 119, 1, 8119),
(248, 120, 1, 151131),
(249, 121, 1, 291505),
(250, 68, 1, 253086),
(251, 122, 1, 137867),
(252, 123, 1, 55234),
(253, 124, 1, 44529),
(254, 125, 1, 8904),
(255, 126, 1, 108109),
(256, 127, 1, 8296),
(257, 128, 1, 301223),
(258, 131, 1, 1742),
(259, 129, 1, 11759),
(260, 130, 1, 40181),
(261, 132, 1, 57244),
(262, 133, 1, 336467),
(263, 141, 1, 7439),
(264, 136, 1, 34877),
(265, 137, 1, 274082),
(266, 138, 1, 24282),
(267, 139, 1, 26517),
(268, 140, 1, 101271),
(269, 150, 1, 0),
(270, 16, 10, 17072),
(271, 71, 10, 12047),
(272, 17, 10, 10654),
(273, 18, 10, 552902),
(274, 25, 10, 29044),
(275, 19, 10, 342677),
(276, 20, 10, 20337),
(277, 21, 10, 65280),
(278, 22, 10, 301572),
(279, 23, 10, 43823),
(280, 24, 10, 32761),
(281, 74, 10, 20239),
(282, 26, 10, 324244),
(283, 27, 10, 88470),
(284, 28, 10, 34190),
(285, 29, 10, 41336),
(286, 30, 10, 26367),
(287, 31, 10, 94461),
(288, 32, 10, 51892),
(289, 33, 10, 14494),
(290, 34, 10, 22237),
(291, 35, 10, 11570),
(292, 36, 10, 14692),
(293, 38, 10, 8205),
(294, 44, 10, 48703),
(295, 45, 10, 42277),
(296, 46, 10, 64185),
(297, 39, 10, 24890),
(298, 42, 10, 62152),
(299, 40, 10, 15825),
(300, 41, 10, 22933),
(301, 43, 10, 38320),
(302, 47, 10, 16889),
(303, 48, 10, 27042),
(304, 49, 10, 56729),
(305, 50, 10, 213619),
(306, 51, 10, 300959),
(307, 52, 10, 29805),
(308, 147, 10, 163722),
(309, 53, 10, 426005),
(310, 142, 10, 8869),
(311, 54, 10, 39594),
(312, 55, 10, 11130),
(313, 56, 10, 14903),
(314, 57, 10, 17365),
(315, 58, 10, 2816),
(316, 62, 10, 19747),
(317, 59, 10, 10783),
(318, 60, 10, 14889),
(319, 61, 10, 3700),
(320, 63, 10, 11202),
(321, 64, 10, 11261),
(322, 65, 10, 618989),
(323, 66, 10, 87185),
(324, 67, 10, 414196),
(325, 69, 10, 18078),
(326, 70, 10, 30864),
(327, 72, 10, 11826),
(328, 73, 10, 9585),
(329, 149, 10, 181241),
(330, 148, 10, 167824),
(331, 144, 10, 265981),
(332, 75, 10, 90305),
(333, 134, 10, 69633),
(334, 76, 10, 1775816),
(335, 77, 10, 459263),
(336, 78, 10, 654324),
(337, 79, 10, 10210),
(338, 80, 10, 23871),
(339, 81, 10, 16799),
(340, 82, 10, 41808),
(341, 83, 10, 17523),
(342, 84, 10, 36172),
(343, 85, 10, 616279),
(344, 86, 10, 106273),
(345, 87, 10, 19301),
(346, 88, 10, 10188),
(347, 145, 10, 322375),
(348, 89, 10, 21279),
(349, 90, 10, 54181),
(350, 91, 10, 63284),
(351, 92, 10, 528494),
(352, 93, 10, 21034),
(353, 135, 10, 6499),
(354, 94, 10, 452505),
(355, 95, 10, 321109),
(356, 96, 10, 17054),
(357, 97, 10, 92933),
(358, 98, 10, 47722),
(359, 99, 10, 111708),
(360, 37, 10, 30207),
(361, 100, 10, 39776),
(362, 101, 10, 5887),
(363, 102, 10, 104590),
(364, 103, 10, 3640),
(365, 104, 10, 299077),
(366, 105, 10, 25728),
(367, 143, 10, 81141),
(368, 106, 10, 15743),
(369, 146, 10, 9888),
(370, 107, 10, 582943),
(371, 108, 10, 33042),
(372, 109, 10, 15176),
(373, 110, 10, 17143),
(374, 111, 10, 23432),
(375, 112, 10, 12513),
(376, 113, 10, 20749),
(377, 114, 10, 32103),
(378, 116, 10, 32653),
(379, 115, 10, 8644),
(380, 117, 10, 23027),
(381, 118, 10, 23138),
(382, 119, 10, 8399),
(383, 120, 10, 163240),
(384, 121, 10, 292878),
(385, 68, 10, 276190),
(386, 122, 10, 145857),
(387, 123, 10, 59036),
(388, 124, 10, 59478),
(389, 125, 10, 10081),
(390, 126, 10, 123871),
(391, 127, 10, 9178),
(392, 128, 10, 376381),
(393, 131, 10, 1764),
(394, 129, 10, 12723),
(395, 130, 10, 43021),
(396, 132, 10, 57110),
(397, 133, 10, 340071),
(398, 141, 10, 8700),
(399, 136, 10, 35842),
(400, 137, 10, 269420),
(401, 138, 10, 31730),
(402, 139, 10, 31014),
(403, 140, 10, 114269),
(404, 150, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idpais` int(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`, `idpais`) VALUES
(1, 'Ciudad Autonoma Bs.As', 1),
(2, 'Buenos Aires', 1),
(3, 'Catamarca', 1),
(4, 'Cordoba', 1),
(5, 'Corrientes', 1),
(6, 'Chaco', 1),
(7, 'Chubut', 1),
(8, 'Entre Rios', 1),
(9, 'Formosa', 1),
(10, 'Jujuy', 1),
(11, 'La Pampa', 1),
(12, 'La Rioja', 1),
(13, 'Mendoza', 1),
(14, 'Misiones', 1),
(15, 'Neuquen', 1),
(16, 'Rio Negro', 1),
(17, 'Salta', 1),
(18, 'San Juan', 1),
(19, 'San Luis', 1),
(20, 'Santa Cruz', 1),
(21, 'Santa Fe', 1),
(22, 'Santiago del Estero', 1),
(23, 'Tucuman', 1),
(24, 'Tierra del Fuego', 1),
(25, 'Chuquisaca', 2),
(26, 'Cochabamba', 2),
(27, 'Beni', 2),
(28, 'La Paz', 2),
(29, 'Oruro', 2),
(30, 'Pando', 2),
(31, 'Potosi', 2),
(32, 'Santa Cruz', 2),
(33, 'Tarija', 2),
(34, 'Acre', 3),
(35, 'Alagoas', 3),
(36, 'Amapa', 3),
(37, 'Amazonas', 3),
(38, 'Bahia', 3),
(39, 'Ceara', 3),
(40, 'Distrito Federal', 3),
(41, 'Espirito Santo', 3),
(42, 'Goias', 3),
(43, 'Maranhao', 3),
(44, 'Mato Grosso', 3),
(45, 'Mato Grosso do Sul', 3),
(46, 'Minas Gerais', 3),
(47, 'Para', 3),
(48, 'Paraiba', 3),
(49, 'Parana', 3),
(50, 'Pernambuco', 3),
(51, 'Piaui', 3),
(52, 'Rio de Janeiro', 3),
(53, 'Rio Grande do Norte', 3),
(54, 'Rio Grande do Sul', 3),
(55, 'Rondonia', 3),
(56, 'Roraima', 3),
(57, 'Santa Catarina', 3),
(58, 'Sao Paulo', 3),
(59, 'Sergipe', 3),
(60, 'Tocantins', 3),
(61, 'Alberta', 4),
(62, 'British Columbia', 4),
(63, 'Manitoba', 4),
(64, 'New Brunswick', 4),
(65, 'Newfoundland and Labrador', 4),
(66, 'Northwest Territories', 4),
(67, 'Nova Scotia', 4),
(68, 'Nunavut', 4),
(69, 'Ontario', 4),
(70, 'Prince Edward Island', 4),
(71, 'Quebec', 4),
(72, 'Saskatchewan', 4),
(73, 'Yukon Territory', 4),
(74, 'Antofagasta', 5),
(75, 'Araucania', 5),
(76, 'Atacama', 5),
(77, 'Bio-Bio', 5),
(78, 'Coquimbo', 5),
(79, 'Libertador General B.', 5),
(80, 'Los Lagos', 5),
(81, 'Magallanes', 5),
(82, 'Maule', 5),
(83, 'Santiago', 5),
(84, 'Tarapaca', 5),
(85, 'Valparaiso', 5),
(86, 'Amazonas', 6),
(87, 'Antioquia', 6),
(88, 'Arauca', 6),
(89, 'Atlantico', 6),
(90, 'Distrito Capital de Bogota', 6),
(91, 'Bolivar', 6),
(92, 'Boyaca', 6),
(93, 'Caldas', 6),
(94, 'Caqueta', 6),
(95, 'Casanare', 6),
(96, 'Cauca', 6),
(97, 'Cesar', 6),
(98, 'Choco', 6),
(99, 'Cordoba', 6),
(100, 'Cundinamarca', 6),
(101, 'Guainia', 6),
(102, 'Guaviare', 6),
(103, 'Huila', 6),
(104, 'La Guajira', 6),
(105, 'Magdalena', 6),
(106, 'Meta', 6),
(107, 'Narino', 6),
(108, 'Norte de Santander', 6),
(109, 'Putumayo', 6),
(110, 'Quindio', 6),
(111, 'Risaralda', 6),
(112, 'San Andres y Providencia', 6),
(113, 'Santander', 6),
(114, 'Sucre', 6),
(115, 'Tolima', 6),
(116, 'Valle del Cauca', 6),
(117, 'Vaupes', 6),
(118, 'Vichada', 6),
(119, 'Alibori', 7),
(120, 'Atakora', 7),
(121, 'Atlantique', 7),
(122, 'Borgou', 7),
(123, 'Collines', 7),
(124, 'Kouffo', 7),
(125, 'Donga', 7),
(126, 'Littoral', 7),
(127, 'Mono', 7),
(128, 'Oueme', 7),
(129, 'Plateau', 7),
(130, 'Zou', 7),
(131, 'Camaguey', 8),
(132, 'Ciego de Avila', 8),
(133, 'Cienfuegos', 8),
(134, 'Ciudad de La Habana', 8),
(135, 'Granma', 8),
(136, 'Guantanamo', 8),
(137, 'Holguin', 8),
(138, 'Isla de la Juventud', 8),
(139, 'La Habana', 8),
(140, 'Las Tunas', 8),
(141, 'Matanzas', 8),
(142, 'Pinar del Rio', 8),
(143, 'Sancti Spiritus', 8),
(144, 'Santiago de Cuba', 8),
(145, 'Villa Clara', 8),
(146, 'Azuay', 9),
(147, 'Bolivar', 9),
(148, 'Canar', 9),
(149, 'Carchi', 9),
(150, 'Chimborazo', 9),
(151, 'Cotopaxi', 9),
(152, 'El Oro', 9),
(153, 'Esmeraldas', 9),
(154, 'Galapagos', 9),
(155, 'Guayas', 9),
(156, 'Imbabura', 9),
(157, 'Loja', 9),
(158, 'Los Rios', 9),
(159, 'Manabi', 9),
(160, 'Morona-Santiago', 9),
(161, 'Napo', 9),
(162, 'Orellana', 9),
(163, 'Pastaza', 9),
(164, 'Pichincha', 9),
(165, 'Sucumbios', 9),
(166, 'Tungurahua', 9),
(167, 'Zamora-Chinchipe', 9),
(168, 'Ahuachapan', 10),
(169, 'Cabanas', 10),
(170, 'Chalatenango', 10),
(171, 'Cuscatlan', 10),
(172, 'La Libertad', 10),
(173, 'La Paz', 10),
(174, 'La Union', 10),
(175, 'Morazan', 10),
(176, 'San Miguel', 10),
(177, 'San Salvador', 10),
(178, 'Santa Ana', 10),
(179, 'San Vicente', 10),
(180, 'Sonsonate', 10),
(181, 'Usulutan', 10),
(182, 'Andalucia', 11),
(183, 'Aragon', 11),
(184, 'Asturias', 11),
(185, 'Baleares', 11),
(186, 'Ceuta', 11),
(187, 'Canarias', 11),
(188, 'Cantabria', 11),
(189, 'Castilla-La Mancha', 11),
(190, 'Castilla y Leon', 11),
(191, 'Catalu?a', 11),
(192, 'Comunidad Valenciana', 11),
(193, 'Extremadura', 11),
(194, 'Galicia', 11),
(195, 'La Rioja', 11),
(196, 'Madrid', 11),
(197, 'Melilla', 11),
(198, 'Murcia', 11),
(199, 'Navarra', 11),
(200, 'Pais Vasco', 11),
(201, 'Alabama', 12),
(202, 'Alaska', 12),
(203, 'Arizona', 12),
(204, 'Arkansas', 12),
(205, 'California', 12),
(206, 'Colorado', 12),
(207, 'Connecticut', 12),
(208, 'Delaware', 12),
(209, 'District of Columbia', 12),
(210, 'Florida', 12),
(211, 'Georgia', 12),
(212, 'Hawaii', 12),
(213, 'Idaho', 12),
(214, 'Illinois', 12),
(215, 'Indiana', 12),
(216, 'Iowa', 12),
(217, 'Kansas', 12),
(218, 'Kentucky', 12),
(219, 'Louisiana', 12),
(220, 'Maine', 12),
(221, 'Maryland', 12),
(222, 'Massachusetts', 12),
(223, 'Michigan', 12),
(224, 'Minnesota', 12),
(225, 'Mississippi', 12),
(226, 'Missouri', 12),
(227, 'Montana', 12),
(228, 'Nebraska', 12),
(229, 'Nevada', 12),
(230, 'New Hampshire', 12),
(231, 'New Jersey', 12),
(232, 'New Mexico', 12),
(233, 'New York', 12),
(234, 'North Carolina', 12),
(235, 'North Dakota', 12),
(236, 'Ohio', 12),
(237, 'Oklahoma', 12),
(238, 'Oregon', 12),
(239, 'Pennsylvania', 12),
(240, 'Rhode Island', 12),
(241, 'South Carolina', 12),
(242, 'South Dakota', 12),
(243, 'Tennessee', 12),
(244, 'Texas', 12),
(245, 'Utah', 12),
(246, 'Vermont', 12),
(247, 'Virginia', 12),
(248, 'Washington', 12),
(249, 'West Virginia', 12),
(250, 'Wisconsin', 12),
(251, 'Wyoming', 12),
(252, 'Alta Verapaz', 13),
(253, 'Baja Verapaz', 13),
(254, 'Chimaltenango', 13),
(255, 'Chiquimula', 13),
(256, 'El Progreso', 13),
(257, 'Escuintla', 13),
(258, 'Guatemala', 13),
(259, 'Huehuetenango', 13),
(260, 'Izabal, Jalapa', 13),
(261, 'Jutiapa', 13),
(262, 'Peten', 13),
(263, 'Quetzaltenango', 13),
(264, 'Quiche', 13),
(265, 'Retalhuleu', 13),
(266, 'Sacatepequez', 13),
(267, 'San Marcos', 13),
(268, 'Santa Rosa', 13),
(269, 'Solola', 13),
(270, 'Suchitepequez', 13),
(271, 'Totonicapan', 13),
(272, 'Zacapa', 13),
(273, 'Atlantida', 14),
(274, 'Choluteca', 14),
(275, 'Colon', 14),
(276, 'Comayagua', 14),
(277, 'Copan', 14),
(278, 'Cortes', 14),
(279, 'El Paraiso', 14),
(280, 'Francisco Morazan', 14),
(281, 'Gracias a Dios', 14),
(282, 'Intibuca', 14),
(283, 'Islas de la Bahia', 14),
(284, 'La Paz', 14),
(285, 'Lempira', 14),
(286, 'Ocotepeque', 14),
(287, 'Olancho', 14),
(288, 'Santa Barbara', 14),
(289, 'Valle', 14),
(290, 'Yoro', 14),
(291, 'Aguascalientes', 15),
(292, 'Baja California', 15),
(293, 'Baja California Sur', 15),
(294, 'Campeche', 15),
(295, 'Chiapas', 15),
(296, 'Chihuahua', 15),
(297, 'Coahuila de Zaragoza', 15),
(298, 'Colima', 15),
(299, 'Distrito Federal', 15),
(300, 'Durango', 15),
(301, 'Guanajuato', 15),
(302, 'Guerrero', 15),
(303, 'Hidalgo', 15),
(304, 'Jalisco', 15),
(305, 'Mexico', 15),
(306, 'Michoacan de Ocampo', 15),
(307, 'Morelos', 15),
(308, 'Nayarit', 15),
(309, 'Nuevo Leon', 15),
(310, 'Oaxaca', 15),
(311, 'Puebla', 15),
(312, 'Queretaro de Arteaga', 15),
(313, 'Quintana Roo', 15),
(314, 'San Luis Potosi', 15),
(315, 'Sinaloa', 15),
(316, 'Sonora', 15),
(317, 'Tabasco', 15),
(318, 'Tamaulipas', 15),
(319, 'Tlaxcala', 15),
(320, 'Veracruz-Llave', 15),
(321, 'Yucatan', 15),
(322, 'Zacatecas', 15),
(323, 'Atlantico Norte', 16),
(324, 'Atlantico Sur', 16),
(325, 'Boaco', 16),
(326, 'Carazo', 16),
(327, 'Chinandega', 16),
(328, 'Chontales', 16),
(329, 'Esteli', 16),
(330, 'Granada', 16),
(331, 'Jinotega', 16),
(332, 'Leon', 16),
(333, 'Madriz', 16),
(334, 'Managua', 16),
(335, 'Masaya', 16),
(336, 'Matagalpa', 16),
(337, 'Nueva Segovia', 16),
(338, 'Rio San Juan', 16),
(339, 'Rivas', 16),
(340, 'Bocas del Toro', 17),
(341, 'Chiriqui', 17),
(342, 'Cocle', 17),
(343, 'Colon', 17),
(344, 'Darien', 17),
(345, 'Herrera', 17),
(346, 'Los Santos', 17),
(347, 'Panama', 17),
(348, 'San Blas', 17),
(349, 'Kuna Yala', 17),
(350, 'Veraguas', 17),
(351, 'Alto Paraguay', 18),
(352, 'Alto Parana', 18),
(353, 'Amambay', 18),
(354, 'Asuncion', 18),
(355, 'Boqueron', 18),
(356, 'Caaguazu', 18),
(357, 'Caazapa', 18),
(358, 'Canindeyu', 18),
(359, 'Central', 18),
(360, 'Concepcion', 18),
(361, 'Cordillera', 18),
(362, 'Guaira', 18),
(363, 'Itapua', 18),
(364, 'Misiones', 18),
(365, 'Neembucu', 18),
(366, 'Paraguari', 18),
(367, 'Presidente Hayes', 18),
(368, 'San Pedro', 18),
(369, 'Amazonas', 19),
(370, 'Ancash', 19),
(371, 'Apurimac', 19),
(372, 'Arequipa', 19),
(373, 'Ayacucho', 19),
(374, 'Cajamarca', 19),
(375, 'Callao', 19),
(376, 'Cusco', 19),
(377, 'Huancavelica', 19),
(378, 'Huanuco', 19),
(379, 'Ica', 19),
(380, 'Junin', 19),
(381, 'La Libertad', 19),
(382, 'Lambayeque', 19),
(383, 'Lima', 19),
(384, 'Madre de Dios', 19),
(385, 'Moquegua', 19),
(386, 'Pasco', 19),
(387, 'Piura', 19),
(388, 'Puno', 19),
(389, 'San Martin', 19),
(390, 'Tacna', 19),
(391, 'Tumbes', 19),
(392, 'Ucayali', 19),
(393, 'Adjuntas', 20),
(394, 'Aguada', 20),
(395, 'Aguadilla', 20),
(396, 'Aguas Buenas', 20),
(397, 'Aibonito', 20),
(398, 'Anasco', 20),
(399, 'Arecibo', 20),
(400, 'Arroyo', 20),
(401, 'Barceloneta', 20),
(402, 'Barranquitas', 20),
(403, 'Bayamon', 20),
(404, 'Cabo Rojo', 20),
(405, 'Caguas', 20),
(406, 'Camuy', 20),
(407, 'Canovanas', 20),
(408, 'Carolina', 20),
(409, 'Catano', 20),
(410, 'Cayey', 20),
(411, 'Ceiba', 20),
(412, 'Ciales', 20),
(413, 'Cidra', 20),
(414, 'Coamo', 20),
(415, 'Comerio', 20),
(416, 'Corozal', 20),
(417, 'Culebra', 20),
(418, 'Dorado', 20),
(419, 'Fajardo', 20),
(420, 'Florida', 20),
(421, 'Guanica', 20),
(422, 'Guayama', 20),
(423, 'Guayanilla', 20),
(424, 'Guaynabo', 20),
(425, 'Gurabo', 20),
(426, 'Hatillo', 20),
(427, 'Hormigueros', 20),
(428, 'Humacao', 20),
(429, 'Isabela', 20),
(430, 'Jayuya', 20),
(431, 'Juana Diaz', 20),
(432, 'Juncos', 20),
(433, 'Lajas', 20),
(434, 'Lares', 20),
(435, 'Las Marias', 20),
(436, 'Las Piedras', 20),
(437, 'Loiza', 20),
(438, 'Luquillo', 20),
(439, 'Manati', 20),
(440, 'Maricao', 20),
(441, 'Maunabo', 20),
(442, 'Mayaguez', 20),
(443, 'Moca', 20),
(444, 'Morovis', 20),
(445, 'Naguabo', 20),
(446, 'Naranjito', 20),
(447, 'Orocovis', 20),
(448, 'Patillas', 20),
(449, 'Penuelas', 20),
(450, 'Ponce', 20),
(451, 'Quebradillas', 20),
(452, 'Rincon', 20),
(453, 'Rio Grande', 20),
(454, 'Sabana Grande', 20),
(455, 'Salinas', 20),
(456, 'San German', 20),
(457, 'San Juan', 20),
(458, 'San Lorenzo', 20),
(459, 'San Sebastian', 20),
(460, 'Santa Isabel', 20),
(461, 'Toa Alta', 20),
(462, 'Toa Baja', 20),
(463, 'Trujillo Alto', 20),
(464, 'Utuado', 20),
(465, 'Vega Alta', 20),
(466, 'Vega Baja', 20),
(467, 'Vieques', 20),
(468, 'Villalba', 20),
(469, 'Yabucoa', 20),
(470, 'Yauco', 20),
(471, 'Artigas', 21),
(472, 'Canelones', 21),
(473, 'Cerro Largo', 21),
(474, 'Colonia', 21),
(475, 'Durazno', 21),
(476, 'Flores', 21),
(477, 'Florida', 21),
(478, 'Lavalleja', 21),
(479, 'Maldonado', 21),
(480, 'Montevideo', 21),
(481, 'Paysandu', 21),
(482, 'Rio Negro', 21),
(483, 'Rivera', 21),
(484, 'Rocha', 21),
(485, 'Salto', 21),
(486, 'San Jose', 21),
(487, 'Soriano', 21),
(488, 'Tacuarembo', 21),
(489, 'Treinta y Tres', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superficie`
--

DROP TABLE IF EXISTS `superficie`;
CREATE TABLE `superficie` (
  `id` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `superficie`
--

INSERT INTO `superficie` (`id`, `idDepartamento`, `valor`) VALUES
(1, 16, 5877.86),
(2, 71, 3859.16),
(3, 17, 1124.98),
(4, 18, 129.33),
(5, 25, 1240.67),
(6, 19, 52.48),
(7, 20, 6748.9),
(8, 21, 6540.25),
(9, 22, 2247.49),
(10, 23, 4115.27),
(11, 24, 1591.87),
(12, 74, 5071.94),
(13, 26, 221.01),
(14, 27, 137.59),
(15, 28, 4912.16),
(16, 29, 2211.87),
(17, 30, 1126.02),
(18, 31, 954.54),
(19, 32, 1190.11),
(20, 33, 548.89),
(21, 34, 2520.39),
(22, 35, 3910.74),
(23, 36, 1061.31),
(24, 38, 2063.19),
(25, 44, 2287.38),
(26, 45, 4163.19),
(27, 46, 2057.09),
(28, 39, 994.57),
(29, 42, 1622.6),
(30, 40, 5831.5),
(31, 41, 5257.14),
(32, 43, 6006.83),
(33, 47, 3827.47),
(34, 48, 1973.14),
(35, 49, 99.93),
(36, 50, 303.75),
(37, 51, 120.22),
(38, 52, 634.17),
(39, 147, 236.81),
(40, 53, 189.9),
(41, 142, 1808.55),
(42, 54, 1614.35),
(43, 55, 3384.08),
(44, 56, 1482.64),
(45, 57, 1843.21),
(46, 58, 2329.91),
(47, 62, 2978.29),
(48, 59, 4811.37),
(49, 60, 720.1),
(50, 61, 2598.73),
(51, 63, 1197.46),
(52, 64, 2541.44),
(53, 65, 1460.74),
(54, 66, 360.14),
(55, 67, 55.75),
(56, 69, 2145.28),
(57, 70, 7232.8),
(58, 72, 4826.84),
(59, 73, 1629.01),
(60, 149, 35.43),
(61, 148, 38.24),
(62, 144, 50.16),
(63, 75, 2253.2),
(64, 134, 252.63),
(65, 76, 329.22),
(66, 77, 48.35),
(67, 78, 942.23),
(68, 79, 3454.98),
(69, 80, 3340.27),
(70, 81, 1603.49),
(71, 82, 5781.54),
(72, 83, 4755.67),
(73, 84, 1724.35),
(74, 85, 87.3),
(75, 86, 777.13),
(76, 87, 1785.29),
(77, 88, 2601.65),
(78, 145, 63.09),
(79, 89, 3096.68),
(80, 90, 455.12),
(81, 91, 1049.47),
(82, 92, 173.13),
(83, 93, 1847.54),
(84, 135, 209),
(85, 94, 186.13),
(86, 95, 55.66),
(87, 96, 1617.56),
(88, 97, 4791.57),
(89, 98, 4284.05),
(90, 99, 7658.78),
(91, 37, 13569.7),
(92, 100, 4531.89),
(93, 101, 1820.17),
(94, 102, 3010.19),
(95, 103, 3452.99),
(96, 104, 383.01),
(97, 105, 66.89),
(98, 143, 120.73),
(99, 106, 6370.92),
(100, 146, 1550.74),
(101, 107, 91.49),
(102, 108, 951.51),
(103, 109, 4315.26),
(104, 110, 3954.92),
(105, 111, 1978.87),
(106, 112, 1572.22),
(107, 113, 3541.48),
(108, 114, 2685.18),
(109, 116, 1611.08),
(110, 115, 794),
(111, 117, 1132.04),
(112, 118, 857.59),
(113, 119, 2757.5),
(114, 120, 877.08),
(115, 121, 51.44),
(116, 68, 82.8),
(117, 122, 652.26),
(118, 123, 1319.3),
(119, 124, 656.27),
(120, 125, 943.87),
(121, 126, 4836.53),
(122, 127, 4149.24),
(123, 128, 304.35),
(124, 131, 1295.61),
(125, 129, 4149.33),
(126, 130, 5509.19),
(127, 132, 5962.88),
(128, 133, 43.04),
(129, 141, 1262.45),
(130, 136, 4769.45),
(131, 137, 33.77),
(132, 138, 165.45),
(133, 139, 10099.8),
(134, 140, 1188.85);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anio`
--
ALTER TABLE `anio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_provincia` (`idprovincia`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idDepartamento` (`idDepartamento`,`idAnio`) USING BTREE,
  ADD KEY `idAnio` (`idAnio`),
  ADD KEY `idDepartamento_2` (`idDepartamento`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_pais` (`idpais`);

--
-- Indices de la tabla `superficie`
--
ALTER TABLE `superficie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idDepartamento` (`idDepartamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anio`
--
ALTER TABLE `anio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=528;
--
-- AUTO_INCREMENT de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=490;
--
-- AUTO_INCREMENT de la tabla `superficie`
--
ALTER TABLE `superficie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`idprovincia`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD CONSTRAINT `poblacion_ibfk_1` FOREIGN KEY (`idAnio`) REFERENCES `anio` (`id`),
  ADD CONSTRAINT `poblacion_ibfk_2` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`id`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `superficie`
--
ALTER TABLE `superficie`
  ADD CONSTRAINT `superficie_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
