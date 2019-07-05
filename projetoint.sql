-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Fev-2019 às 02:24
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoint`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcliente`
--

CREATE TABLE `cadcliente` (
  `idcliente` int(11) NOT NULL,
  `nomecli` varchar(50) NOT NULL,
  `sexocli` enum('F','M') NOT NULL,
  `cpfcli` varchar(20) NOT NULL,
  `emailcli` varchar(30) NOT NULL,
  `idadecli` date NOT NULL,
  `enderecocli` varchar(60) NOT NULL,
  `cepcli` varchar(9) NOT NULL,
  `cidadecli` tinytext NOT NULL,
  `estadocli` varchar(20) NOT NULL,
  `paiscli` varchar(20) NOT NULL,
  `rescli` varchar(20) NOT NULL,
  `celcli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadcliente`
--

INSERT INTO `cadcliente` (`idcliente`, `nomecli`, `sexocli`, `cpfcli`, `emailcli`, `idadecli`, `enderecocli`, `cepcli`, `cidadecli`, `estadocli`, `paiscli`, `rescli`, `celcli`) VALUES
(1, 'Lena Sawamura', 'F', '978452674058', 'lenasawamura@gmail.com', '1988-11-21', 'Hidden Lake Village, 32', '739483845', 'Buffalo', 'Illinois', 'Estados Unidos', '0128335684567', '0128986757934'),
(3, 'Thiago Almeida', 'M', '04156843097', 'thiagoalmeida@gmail.com', '1990-09-19', 'Rua Graciliano Ramos, 87', '22287956', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', '552138458732', '21996743410'),
(5, 'Allen Schneider', 'M', '82649236427', 'allen_schneider@gmail.com', '1990-10-26', 'Cascade Street, 75', '65490674', 'Munique', 'BavÃ¡ria', 'Alemanha', '+4940187498734', '4940176348276');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadfuncionario`
--

CREATE TABLE `cadfuncionario` (
  `idfuncionario` int(11) NOT NULL,
  `nomefunc` varchar(50) NOT NULL,
  `sexofunc` enum('F','M') NOT NULL,
  `cpffunc` varchar(13) NOT NULL,
  `emailfunc` varchar(30) NOT NULL,
  `idadefunc` date NOT NULL,
  `enderecofunc` varchar(60) NOT NULL,
  `cepfunc` varchar(9) NOT NULL,
  `cidadefunc` tinytext NOT NULL,
  `estadofunc` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `cargofunc` varchar(20) NOT NULL,
  `resfunc` varchar(12) NOT NULL,
  `celfunc` varchar(13) NOT NULL,
  `senhafunc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadfuncionario`
--

INSERT INTO `cadfuncionario` (`idfuncionario`, `nomefunc`, `sexofunc`, `cpffunc`, `emailfunc`, `idadefunc`, `enderecofunc`, `cepfunc`, `cidadefunc`, `estadofunc`, `cargofunc`, `resfunc`, `celfunc`, `senhafunc`) VALUES
(1, 'Priscilla Menezes', 'F', '06145376961', 'menezes_priscilla@gmail.com', '1988-04-13', 'Rua JosÃ© Saramago, 47', '03234865', 'Ouro Preto', 'MG', 'Gerente Geral', '+55313421876', '31998675432', '12345678'),
(2, 'Gabriel Carvalho', 'M', '06175645613', 'gabriel_cn@gmail.com', '1992-07-17', 'Rua Anita Garibaldi, 13', '22965008', 'Santa Catarina', 'SC', 'Recepcionista', '+55473045873', '(47)99864298', '12345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `assunto` enum('elogio','reclamacao','duvida','sugestao','depoimento','requisicao') DEFAULT NULL,
  `mensagem` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `extrato`
--

CREATE TABLE `extrato` (
  `idextrato` int(11) NOT NULL,
  `quarto` enum('lopesmendes','parnaioca','lagoaazul','apto') NOT NULL,
  `dias` int(100) NOT NULL,
  `diaria` enum('300','350','400','200') NOT NULL,
  `restaurante` float(10,2) NOT NULL,
  `bar` float(10,2) NOT NULL,
  `spa` float(10,2) NOT NULL,
  `despesas` float(10,2) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE `newsletter` (
  `idnewsletter` int(11) NOT NULL,
  `emailnews` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`idnewsletter`, `emailnews`) VALUES
(1, 'lenasawamura@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `chegadacli` date NOT NULL,
  `saidacli` date NOT NULL,
  `adultocli` int(11) NOT NULL,
  `criancacli` int(11) NOT NULL,
  `quarto` enum('lopesmendes','parnaioca','lagoaazul','apto') NOT NULL,
  `obscli` varchar(300) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadcliente`
--
ALTER TABLE `cadcliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `cpfcli` (`cpfcli`),
  ADD UNIQUE KEY `emailcli` (`emailcli`);

--
-- Indexes for table `cadfuncionario`
--
ALTER TABLE `cadfuncionario`
  ADD PRIMARY KEY (`idfuncionario`),
  ADD UNIQUE KEY `cpffunc` (`cpffunc`),
  ADD UNIQUE KEY `emailfunc` (`emailfunc`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Indexes for table `extrato`
--
ALTER TABLE `extrato`
  ADD PRIMARY KEY (`idextrato`),
  ADD UNIQUE KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`idnewsletter`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadcliente`
--
ALTER TABLE `cadcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cadfuncionario`
--
ALTER TABLE `cadfuncionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extrato`
--
ALTER TABLE `extrato`
  MODIFY `idextrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `idnewsletter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `extrato`
--
ALTER TABLE `extrato`
  ADD CONSTRAINT `extrato_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cadcliente` (`idcliente`);

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cadcliente` (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
