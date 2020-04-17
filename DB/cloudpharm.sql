-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 05:46 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudpharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` int(255) NOT NULL,
  `Fecha_Pedido` date NOT NULL,
  `Vendedor` varchar(255) NOT NULL,
  `Credito` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` int(255) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Salario` int(255) NOT NULL,
  `Departamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `ID` int(255) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Stock` int(255) NOT NULL,
  `Entradas` int(255) NOT NULL,
  `Salidas` int(255) NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicamentos`
--

CREATE TABLE `medicamentos` (
  `ID` int(200) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `concentracion` varchar(255) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `presentacion_disponible` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicamentos`
--

INSERT INTO `medicamentos` (`ID`, `nombre`, `concentracion`, `fabricante`, `presentacion_disponible`, `precio`) VALUES
(2, 'Clarityne', ' Jarabe', '\r\nShering Plough ', 'Frasco 100 ml', '1,148.49'),
(3, 'Clarityne ', '10 mg.', '\r\nShering Plough ', 'Caja 10 tab.', '585.65'),
(4, 'Clarityne ', '10 mg.', '\r\nShering Plough ', 'Caja 20 tab.', ' 1,100.84'),
(5, 'Zyrtec', ' 10 mg.', '\r\n Glaxosmithkline ', 'Caja 20 tab. ', '1,170.00'),
(6, 'Zyrtec ', 'Jarabe', '\r\n Glaxosmithkline ', 'Frasco 60 ml ', '461.50 '),
(7, 'Meticorten ', '20 mg', '\r\nShering Plough ', 'Tira de 10 ', '940.80 '),
(8, 'Meticorten ', '50 mg', '\r\nShering Plough', ' Tira de 10 ', '1,606.50 '),
(9, 'Hidrocortisona ', 'Ampolla ', '100 mg.', '\r\nSintesis ', '110.99 '),
(10, 'Tylenol', ' Jarabe', '\r\nJhonson & Jhonson ', 'Frasco 120 ml.', ' 380.28'),
(11, 'Winasorb ', '500 mg', '\r\n Glaxosmithkline ', 'Sobre ', '14.00'),
(12, 'Tylenol ', '500 mg', '\r\nJhonson & Jhonson', ' Frasco 24 tab. ', '185.00'),
(13, 'Aspirina ', '500 mg', '\r\nBayer ', 'Tira 10 tab. ', '48.50'),
(14, 'Tylenol Extra Fuerte', '500 mg', '\r\nJhonson & Jhonson', ' Frasco 24 tab. ', '185.81'),
(15, 'Aspirina Forte', ' 500 mg', '\r\nBayer ', 'Unidad ', '5.35'),
(16, 'Sumigran Comp. ', '500 mg. ', 'Sued ', 'Unidad', '\r\n 28.35'),
(17, 'Artran ', '400 mg ', 'Alfa ', 'Unidad\r\n ', '7.38'),
(18, 'Artran ', '600 mg ', 'Alfa ', 'Unidad\r\n ', '10.00'),
(19, 'Voltaren ', '75 mg ', 'Novartis ', 'Unidad\r\n', ' 82.70 '),
(20, 'Voltaren Retard ', '100 mg ', 'Novartis ', 'Unidad\r\n', ' 115.40'),
(21, 'Tenaron', ' 15 mg', ' Roemers ', 'Caja de 10 tab.\r\n', ' 875.05'),
(22, 'Artricom Combinado\r\n', 'Sobre\r\n', 'Fluter Domull ', 'Unidad\r\n', ' 29.00'),
(23, 'Artrigesic\r\n', ' 20 mg', '\r\nEtical ', 'Unidad\r\n', ' 15.00'),
(24, 'Condrox Granulado ', 'Sobre ', 'Asofarma ', 'Caja 30 tab.\r\n', ' 3,250.50 '),
(25, 'Dolo Artrisar Combinado ', 'Sobre ', 'Sued ', 'Tira de 10\r\n', ' 750.00 '),
(26, 'Mobicox ', '15 g ', 'Boehringer ', 'Caja de 10 tab.\r\n', ' 1,383.00 '),
(27, 'Neural', '500 mg', '\r\nFluter Donmull  ', 'Unidad\r\n ', '25.00'),
(28, 'Reumisone Combinado', ' Sobre ', 'Fraperco', ' Unidad ', '35.10'),
(29, 'Valpakine', ' 200 mg', '\r\nSanofi ', 'Gotas 40 ml. ', '813.80'),
(30, 'Valpakine ', '500 mg', '\r\nSanofi', 'Caja 40 tab.', ' 2,033.20'),
(31, 'Tegretol ', '200 mg', '\r\nNovartis ', 'Tira de 10 ', '298.88'),
(32, 'Tegretol ', '200 mg', '\r\nNovartis ', 'Caja de 20 tab.', ' 887.37'),
(33, 'Tegretol C R ', '400 mg', '\r\nNovartis ', 'Caja de 30 tab. ', '1,765.80 '),
(34, 'Tegretol ', '0.02 ', 'Novartis ', 'Jarabe 100 ml ', '505.80'),
(35, ' Dilantin', ' 100 mg', '\r\nPfizer/Parke Davis ', 'Frasco de 100 tab. ', '1,949.50'),
(36, 'Lyrica ', '75 mg.', '\r\nPfizer/Parke Davis ', 'Caja de 28 tab.', ' 3,691.50'),
(37, 'Lyrica ', '150 mg.', '\r\nPfizer/Parke Davis ', 'Caja de 28 tab.', ' 3,762.46'),
(38, 'Trileptal', ' 60 mg', '\r\nNovartis', ' Frasco de 100 ml. ', '883.84 '),
(39, 'Actinium ', '120 ml', '\r\nArmstrong ', 'Jarabe 120 ml.', ' 942.50'),
(40, 'Rivotril ', '2.5mg', '\r\nRoche', ' Gotas 10 ml.', ' 1,066.00'),
(41, 'Diocam ', '0.5 mg', '\r\nGador ', 'Caja de 30 tab. ', '375.00'),
(42, 'Diocam ', '2 mg', '\r\nGador ', 'Caja de 30 tab.', ' 950.00 '),
(43, 'Keppra ', '100 mg', '\r\nGlaxo ', 'Frasco de 300 ml ', '4,862.00 '),
(44, 'Keppra', ' 1000 mg', '\r\nGlaxo ', 'Caja de 30 tab. ', '4,940.00 '),
(45, ' Meldiban ', '500 mg', '\r\nInfaca', ' Caja de 30 tab. ', '1,820.00'),
(46, 'Topamax  ', '25 mg', '\r\nJansse ', 'Caja de 20 tab. ', '1,157.00'),
(47, 'Topamax ', '100 mg', '\r\nJansse ', 'Caja de 20 tab.', ' 3,708.90 '),
(48, 'Lamictal ', '25 mg', '\r\nGlaxo ', 'Caja de 30 tab. ', '1,198.00 '),
(49, 'Lamictal ', '50 mg', '\r\nGlaxo ', 'Caja de 30 tab. ', '2,030.00'),
(50, 'Lamictal ', '100 mg', '\r\nGlaxo', ' Caja de 30 tab.', ' 3,398.80 '),
(51, 'Lamogil ', '25 mg', '\r\nBaliarda ', 'Caja de 30 tab. ', '803.99'),
(52, 'Lamogil ', '50 mg', '\r\nBaliarda ', 'Caja de 30 tab.', ' 1,557.26'),
(53, 'Lamogil ', '100 mg', '\r\nBaliarda', ' Caja de 30 tab. ', '2,202.66'),
(54, ' Lacotem ', '50 mg', '\r\nAsofarma', ' Caja de 28 tab.', ' 2,047.38'),
(55, 'Lacotem ', '200 mg', '\r\nAsofarma ', 'Caja de 28 tab.', ' 6,143.88'),
(56, 'Urbadan', ' 10 mg', '\r\nSanofi ', 'Caja de 100 tab. ', ''),
(57, 'Dormicum', ' 5 ml.', '\r\n Roche', ' Cajas 10 ampollas', ' 1,560.00'),
(58, 'Dormicum  ', '7.5 mg', '\r\nRoche ', 'Caja de 30 tab. ', '1,170.25'),
(59, 'Dormicum ', '15 mg', '\r\n Roche ', 'Caja de 30 tab.', ' 2,540.20 '),
(60, 'Depakene ', '250 mg/5 ml.', '\r\nAbboott', ' Jarabe 120 ml. ', '1,134.25'),
(61, 'Fendramin ', '25 mg. ', 'Laboquidon ', 'Unidad ', '8.00'),
(62, 'Loratadina ', 'Jarabe ', 'Calox ', 'Frasco 60 ml\r\n', ' 338.60'),
(63, 'Loratadina ', '10 mg.', ' Calox ', 'Caja de 30 tab.\r\n', ' 696.03'),
(64, 'Ceterizina ', '10 mg. ', 'Feltrex ', 'Caja 10 tab. ', '160.05'),
(65, 'Ceterizina ', 'Jarabe ', 'Feltrex', ' Frasco 60 ml', ' 190.00'),
(66, 'Prednisona ', '20 mg ', 'Laned', ' Caja 30 Tab.\r\n', ' 1,225.00'),
(67, 'Prednisona', ' 50 mg', ' Laned ', 'Caja 20 Tab. ', '1,200.00'),
(68, 'Acetaminofén ', 'Jarabe ', 'Mamey ', 'Frasco 60 ml.\r\n ', '91.00'),
(69, 'Acetaminofén ', '500 mg', ' MK ', 'Unidad ', '6.45'),
(70, 'Ibuprofeno ', '400 mg. ', 'Mk ', 'Unidad ', '19.25 '),
(71, 'Ibuprofeno ', '600 mg. ', 'La Santé ', 'Unidad ', '13.12'),
(72, 'Ibuprofeno ', '800 mg. ', 'La Santé', ' Unidad ', '17.48 '),
(73, 'Diclofenaco Sódico', ' 50 mg. ', 'Ratio', ' Unidad ', '6.18'),
(74, 'Diclo-K', ' 100 mg. ', 'Rowe ', 'Unidad', ' 34.00'),
(75, 'Meloxican ', '15 mg. ', 'Calox ', 'Unidad ', '35.75'),
(76, 'Valpro ', '500 mg.', ' Euro ', 'Caja 30 tab.', ' 980.00 '),
(77, 'Carbamazepina ', '200 mg. ', 'Iberofármacos', ' Tiras de 10 tab. ', '32.50'),
(78, 'Carbamazepina ', '200 mg. ', 'La Santé ', 'Caja de 30 tab.', ' 357.00 '),
(79, 'Pregabalina', ' 75 mg.', ' Etical ', 'Caja de 30 tab.', ' 1,000.52'),
(80, 'Pregabalina ', '150 mg. ', 'Etical ', 'Caja de 30 tab.\r\n ', '2,000.00'),
(81, 'Levetiracetam ', '500 mg ', 'Iberofármacos', ' Caja de 30 tab.', ' 848.30'),
(82, 'Levetiracetam ', '1000 mg ', 'Iberofármacos ', 'Caja de 30 tab.\r\n ', '1,415.00'),
(83, 'Topiramato', ' 25 mg ', ' Normon ', 'Caja de 60 tab. ', '625.00'),
(84, 'Topiramato', ' 100 mg ', 'Normon ', 'Caja de 60 tab. ', '2,300.00 '),
(85, 'Lamotrigina', ' 100 mg ', 'Normon ', 'Caja de 30 tab. ', '1,800.00'),
(86, 'Fenobarbital', ' 100 m.g ', 'Medifarma ', 'Caja de 50 tab.', ' 747.05'),
(87, 'Fenobarbital ', '60 ml ', 'Alfa ', 'Jarabe ', '197.20'),
(88, 'Ácido Valproico ', '250 mg ', 'Merck ', 'Caja de 40 tab. ', '500.00'),
(89, 'Clonagin ', '0.5 mg', ' Baliarda ', 'Caja de 30 tab. ', '280.80'),
(90, 'Clonagin', ' 2.0 mg ', 'Baliarda', ' Caja de 30 tab.\r\n', ' 725.00'),
(91, 'Ceumid ', '500 mg ', 'Leterago', ' Caja de 30 tab. ', '2,149.94'),
(92, 'Ceumid ', '1000 mg ', 'Roemmers ', 'Caja de 30 tab.', ' 3,599.96'),
(93, 'Amoxicilina + Ácido Clavulánico ', '1000 mg.', ' Calox ', 'Caja de 14 tab.', ' 1,354.42'),
(94, 'Ceftriazona', ' 1 gr', ' Feltrex', ' 1 vial', ' 435.01'),
(95, 'Ciprofloxacina', ' 500 mg. ', 'Calox ', 'Caja de 30 tab. ', '993.0'),
(96, 'Azitromicina ', '500 mg. ', 'Sued ', 'Unidad', ' 130.00'),
(97, 'Claritromicina ', '500 mg. ', 'MK ', 'Unidad ', '112.25'),
(98, 'Trimesul Forte ', 'Combinado ', 'Alfa ', 'Caja 100 tab.', ' 1,725.00'),
(99, 'Aciclovir ', '400 mg.', '\r\nCalox ', 'Unidad ', '27.71'),
(100, 'Aciclovir Crema Tópica ', '5% ', 'Calox ', 'Tubo 10 g ', '279.85');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ID` int(255) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Precio` int(255) NOT NULL,
  `Stock` int(255) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Descuento` int(255) NOT NULL,
  `ITBIS` int(255) NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `ID` int(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
