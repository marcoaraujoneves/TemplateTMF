-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2019 às 14:49
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtmf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE `campanha` (
  `codCampanha` bigint(20) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `assunto` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `campanha`
--

INSERT INTO `campanha` (`codCampanha`, `tag`, `assunto`, `mensagem`, `data`) VALUES
(1, 'PROMOÇÃO', 'Máquina 10% OFF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus vel sem facilisis iaculis sed eu tortor. Vestibulum lobortis nisl non nunc tincidunt pretium et nec turpis. Curabitur commodo, dolor mollis malesuada tristique, felis turpis posuere turpis, id iaculis magna elit eu justo. Duis iaculis velit eros, sit amet dictum ipsum mattis id. Mauris posuere, felis vitae fermentum vehicula, felis dolor pellentesque quam, et finibus urna erat eget ligula. Curabitur bibendum et nibh et fringilla. Aenean nec lobortis turpis. Maecenas imperdiet quam vel est sollicitudin lobortis. Integer et eleifend eros. Curabitur sed aliquam mauris.', '2019-02-13 05:17:23'),
(5, 'NOVIDADE', 'Nova máquina 10% off', '', '2019-04-16 14:16:02'),
(7, 'PROMOÇÃO', 'Nova máquina 10% off', 'Pellentesque consequat convallis orci. Donec eget eleifend erat. Praesent eget pretium ipsum. Sed vitae commodo eros. Nunc bibendum porta lectus, vel aliquet justo hendrerit interdum. Nam iaculis velit in sollicitudin ullamcorper. Vivamus consectetur mi et erat scelerisque dictum. ', '2019-04-17 10:44:35'),
(8, 'AVISO', 'Nova máquina 10% off', 'dasdasdas', '2019-04-23 10:39:31'),
(9, 'PROMOÇÃO', '', '', '2019-05-14 13:03:14'),
(10, 'PROMOÇÃO', '', '', '2019-05-14 13:03:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codCliente`, `nome`, `email`, `status`) VALUES
(1, 'Marco Araujo', 'marcoaraujoneves@gmail.com', b'1'),
(2, 'Duda Machado', 'duda@duda.com', b'1'),
(3, 'Marco Gomes', 'marcogomes@serrajr.eng.br', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clienteempresa`
--

CREATE TABLE `clienteempresa` (
  `codCliente` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `linkCliente` varchar(130) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clienteempresa`
--

INSERT INTO `clienteempresa` (`codCliente`, `nome`, `linkCliente`, `estatus`, `extensao`) VALUES
(14, 'Ambev', 'https://www.ambev.com.br/', 1, 'jpeg'),
(15, 'Serra Jr', 'https://www.serrajr.eng.br/', 1, 'png'),
(16, 'dsdsadsa', 'http://www.serrajr.eng.br', 1, 'png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagemportifolio`
--

CREATE TABLE `imagemportifolio` (
  `codImagem` int(11) NOT NULL,
  `codPortifolio` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagemportifolio`
--

INSERT INTO `imagemportifolio` (`codImagem`, `codPortifolio`, `nome`) VALUES
(1, 10, '10-1.png'),
(2, 10, '10-2.png'),
(3, 12, '12-3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagemproduto`
--

CREATE TABLE `imagemproduto` (
  `codImagem` int(11) NOT NULL,
  `codProduto` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagemproduto`
--

INSERT INTO `imagemproduto` (`codImagem`, `codProduto`, `nome`) VALUES
(1, 35, '35-1.png'),
(2, 35, '35-2.png'),
(9, 38, '38-1.png'),
(10, 39, '39-1.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagemservico`
--

CREATE TABLE `imagemservico` (
  `codImagem` int(11) NOT NULL,
  `codServico` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagemservico`
--

INSERT INTO `imagemservico` (`codImagem`, `codServico`, `nome`) VALUES
(30, 65, '65-1.png'),
(31, 66, '66-1.png'),
(32, 67, '67-1.jpg'),
(38, 73, '73-1.png'),
(39, 73, '73-2.png'),
(40, 73, '73-3.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `codMsg` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `data` datetime NOT NULL,
  `respondido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`codMsg`, `nome`, `telefone`, `email`, `mensagem`, `data`, `respondido`) VALUES
(49, 'Marco', '(31) 23123-1231', 'marco@gmail.cbr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus vel sem facilisis iaculis sed eu tortor. Vestibulum lobortis nisl non nunc tincidunt pretium et nec turpis. Curabitur commodo, dolor mollis malesuada tristique, felis turpis posuere turpis, id iaculis magna elit eu justo. Duis iaculis velit eros, sit amet dictum ipsum mattis id. Mauris posuere, felis vitae fermentum vehicula, felis dolor pellentesque quam, et finibus urna erat eget ligula. Curabitur bibendum et nibh et fringilla. Aenean nec lobortis turpis.\r\n\r\nMaecenas imperdiet quam vel est sollicitudin lobortis. Integer et eleifend eros. Curabitur sed aliquam mauris. Maecenas gravida rutrum sem ut commodo. Maecenas eu ex fringilla, vehicula sem vitae, elementum risus. Nulla aliquam tempus ipsum, ut gravida sapien tristique id. Vestibulum laoreet, magna id varius tempus, mi neque feugiat metus, eu tristique lorem purus ac nulla. Cras lacus libero, tempor sit amet ornare in, lacinia in justo.', '2019-02-13 13:07:26', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `codParceiro` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `linkParceiro` varchar(130) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`codParceiro`, `nome`, `linkParceiro`, `estatus`, `extensao`) VALUES
(48, 'Serra Jr. Engenharia', 'https://www.serrajr.eng.br', 1, 'png'),
(49, 'Ambev', 'https://www.ambev.com.br/', 1, 'jpeg'),
(60, 'Telefonica', 'www.telefonica.com', 0, 'png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `codPortifolio` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `linkYoutube` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`codPortifolio`, `nome`, `descricao`, `linkYoutube`, `status`) VALUES
(10, 'Máquina de empada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta. Mauris eget feugiat magna. Pellentesque mollis eros', 'www.youtube.com/teste', 1),
(12, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta.Lorem ipsum dolor sit amet, consectetur adipiscing e', 'https://www.youtube.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codProduto` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codProduto`, `nome`, `descricao`, `status`) VALUES
(35, 'Produto1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta.', 1),
(38, 'Produto 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta.', 0),
(39, 'Produto 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `codServico` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`codServico`, `nome`, `descricao`, `imagem`, `estatus`) VALUES
(65, 'Manutenção Ferramentáriu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta. Mauris eget feugiat magna. Pellentesque mollis eros sem, a scelerisque magna facilisis sed. Nunc ornare elit bibendum eros auctor, id luctus dolor accumsan. Pellentesque vulputate dignissim risus, tincidunt luctus tellus egestas quis!', '', 1),
(66, 'Projeto de Máquinas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta. Mauris eget feugiat magna. Pellentesque mollis eros sem, a scelerisque magna facilisis sed. Nunc ornare elit bibendum eros auctor, id luctus dolor accumsan. Pellentesque vulputate dignissim risus, tincidunt luctus tellus egestas quis!', '', 1),
(67, 'Tornearia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis ultricies lectus sed porta. Mauris eget feugiat magna. Pellentesque mollis eros sem, a scelerisque magna facilisis sed. Nunc ornare elit bibendum eros auctor, id luctus dolor accumsan. Pellentesque vulputate dignissim risus, tincidunt luctus tellus egestas quis!', '', 1),
(73, 'Vent', 'asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd asdsad asd as das asd das das das das das ads das asd asd ', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `indicador1qt` int(11) NOT NULL,
  `indicador2qt` int(11) NOT NULL,
  `indicador3qt` int(11) NOT NULL,
  `indicador4qt` int(11) NOT NULL,
  `indicador1` varchar(20) NOT NULL,
  `indicador2` varchar(16) NOT NULL,
  `indicador3` varchar(18) NOT NULL,
  `indicador4` varchar(18) NOT NULL,
  `textoSobre` text NOT NULL,
  `textoServicos` text NOT NULL,
  `servico1` int(11) NOT NULL,
  `servico2` int(11) NOT NULL,
  `servico3` int(11) NOT NULL,
  `servico4` int(11) NOT NULL,
  `produto1` int(11) NOT NULL,
  `produto2` int(11) NOT NULL,
  `produto3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`indicador1qt`, `indicador2qt`, `indicador3qt`, `indicador4qt`, `indicador1`, `indicador2`, `indicador3`, `indicador4`, `textoSobre`, `textoServicos`, `servico1`, `servico2`, `servico3`, `servico4`, `produto1`, `produto2`, `produto3`) VALUES
(57, 42, 52, 30, 'máquinas próprias', 'anos no mercado', 'serviços próprios', 'opções de produtos', 'Lorem ipsum dolor sit amet, consecttur adipiscing elit. Donec rutrum feugiat augue. Aenean ac laoreet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, ligula vel sagittis dignissim, odio lectus porta mauris, non sagittis velit arcu nec eros. Etiam non dui eu diam blandit mattis sit amet eu diam!', 'Lorem ipsum dolor sit amet, consecttur adipiscing elit. Done c rutrum feugiat augue. Aenean ac laoreet mi. Cão aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusquinha egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, marcoligula vel sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos!', 66, 65, 68, 67, 35, 38, 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `login`, `senha`, `nome`, `cargo`) VALUES
(1, 'sandro', 'd4fa73a393db574d78e880f0f9b87ddd', 'Sandro Lopes', 'Chefe'),
(2, 'admin', 'ac596daee40a92d6afa930c164953cf7', 'Serra Jr', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`codCampanha`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indexes for table `clienteempresa`
--
ALTER TABLE `clienteempresa`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indexes for table `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codPortifolio` (`codPortifolio`);

--
-- Indexes for table `imagemproduto`
--
ALTER TABLE `imagemproduto`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codProduto` (`codProduto`);

--
-- Indexes for table `imagemservico`
--
ALTER TABLE `imagemservico`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codServico` (`codServico`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`codMsg`);

--
-- Indexes for table `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`codParceiro`);

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`codPortifolio`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProduto`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`codServico`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campanha`
--
ALTER TABLE `campanha`
  MODIFY `codCampanha` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clienteempresa`
--
ALTER TABLE `clienteempresa`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagemproduto`
--
ALTER TABLE `imagemproduto`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `imagemservico`
--
ALTER TABLE `imagemservico`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `codMsg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `codParceiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `codPortifolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `codServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  ADD CONSTRAINT `imagemportifolio_ibfk_1` FOREIGN KEY (`codPortifolio`) REFERENCES `portifolio` (`codPortifolio`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `imagemproduto`
--
ALTER TABLE `imagemproduto`
  ADD CONSTRAINT `imagemproduto_ibfk_1` FOREIGN KEY (`codProduto`) REFERENCES `produto` (`codProduto`);

--
-- Limitadores para a tabela `imagemservico`
--
ALTER TABLE `imagemservico`
  ADD CONSTRAINT `imagemservico_ibfk_1` FOREIGN KEY (`codServico`) REFERENCES `servico` (`codServico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
