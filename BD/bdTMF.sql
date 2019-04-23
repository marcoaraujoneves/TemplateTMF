-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/04/2019 às 20:36
-- Versão do servidor: 5.7.21-1
-- Versão do PHP: 5.6.26-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdTMF`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `campanha`
--

CREATE TABLE `campanha` (
  `codCampanha` bigint(20) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `assunto` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `campanha`
--

INSERT INTO `campanha` (`codCampanha`, `tag`, `assunto`, `mensagem`, `data`) VALUES
(1, 'PROMOÇÃO', 'Máquina 10% OFF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus vel sem facilisis iaculis sed eu tortor. Vestibulum lobortis nisl non nunc tincidunt pretium et nec turpis. Curabitur commodo, dolor mollis malesuada tristique, felis turpis posuere turpis, id iaculis magna elit eu justo. Duis iaculis velit eros, sit amet dictum ipsum mattis id. Mauris posuere, felis vitae fermentum vehicula, felis dolor pellentesque quam, et finibus urna erat eget ligula. Curabitur bibendum et nibh et fringilla. Aenean nec lobortis turpis. Maecenas imperdiet quam vel est sollicitudin lobortis. Integer et eleifend eros. Curabitur sed aliquam mauris.', '2019-02-13 05:17:23'),
(5, 'NOVIDADE', 'Nova máquina 10% off', '', '2019-04-16 14:16:02'),
(7, 'PROMOÇÃO', 'Nova máquina 10% off', 'Pellentesque consequat convallis orci. Donec eget eleifend erat. Praesent eget pretium ipsum. Sed vitae commodo eros. Nunc bibendum porta lectus, vel aliquet justo hendrerit interdum. Nam iaculis velit in sollicitudin ullamcorper. Vivamus consectetur mi et erat scelerisque dictum. ', '2019-04-17 10:44:35'),
(8, 'AVISO', 'Nova máquina 10% off', 'dasdasdas', '2019-04-23 10:39:31');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `codCliente` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`codCliente`, `nome`, `email`, `status`) VALUES
(1, 'Marco Araujo', 'marcoaraujoneves@gmail.com', b'1'),
(2, 'Duda Machado', 'duda@duda.com', b'1'),
(3, 'Marco Gomes', 'marcogomes@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clienteempresa`
--

CREATE TABLE `clienteempresa` (
  `codCliente` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `linkCliente` varchar(130) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `clienteempresa`
--

INSERT INTO `clienteempresa` (`codCliente`, `nome`, `linkCliente`, `estatus`, `extensao`) VALUES
(8, 'Ambev', 'Ambev', 1, 'jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagemportifolio`
--

CREATE TABLE `imagemportifolio` (
  `codImagem` int(11) NOT NULL,
  `codPortifolio` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagemportifolio`
--

INSERT INTO `imagemportifolio` (`codImagem`, `codPortifolio`, `nome`) VALUES
(6, 5, '99-1.jpg'),
(7, 5, '99-2.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagemproduto`
--

CREATE TABLE `imagemproduto` (
  `codImagem` int(11) NOT NULL,
  `codProduto` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagemproduto`
--

INSERT INTO `imagemproduto` (`codImagem`, `codProduto`, `nome`) VALUES
(3, 2, '99-2.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
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
-- Fazendo dump de dados para tabela `mensagem`
--

INSERT INTO `mensagem` (`codMsg`, `nome`, `telefone`, `email`, `mensagem`, `data`, `respondido`) VALUES
(49, 'Marco', '(31) 23123-1231', 'marco@gmail.cbr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus vel sem facilisis iaculis sed eu tortor. Vestibulum lobortis nisl non nunc tincidunt pretium et nec turpis. Curabitur commodo, dolor mollis malesuada tristique, felis turpis posuere turpis, id iaculis magna elit eu justo. Duis iaculis velit eros, sit amet dictum ipsum mattis id. Mauris posuere, felis vitae fermentum vehicula, felis dolor pellentesque quam, et finibus urna erat eget ligula. Curabitur bibendum et nibh et fringilla. Aenean nec lobortis turpis.\r\n\r\nMaecenas imperdiet quam vel est sollicitudin lobortis. Integer et eleifend eros. Curabitur sed aliquam mauris. Maecenas gravida rutrum sem ut commodo. Maecenas eu ex fringilla, vehicula sem vitae, elementum risus. Nulla aliquam tempus ipsum, ut gravida sapien tristique id. Vestibulum laoreet, magna id varius tempus, mi neque feugiat metus, eu tristique lorem purus ac nulla. Cras lacus libero, tempor sit amet ornare in, lacinia in justo.', '2019-02-13 13:07:26', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `codParceiro` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `linkParceiro` varchar(130) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `parceiros`
--

INSERT INTO `parceiros` (`codParceiro`, `nome`, `linkParceiro`, `estatus`, `extensao`) VALUES
(44, 'Ambev', 'https://www.ambev.com.br/', 0, ''),
(45, 'Ambev', 'https://www.ambev.com.br/', 1, 'jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `codPortifolio` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `linkYoutube` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `portifolio`
--

INSERT INTO `portifolio` (`codPortifolio`, `nome`, `descricao`, `linkYoutube`) VALUES
(5, 'Torneira', 'Lorem ipsim asdpasdlkas  pkdaspid apsi asn dasn diapo dqpod pqowd kasdk asp daspd pasdsa', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `codProduto` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`codProduto`, `nome`, `descricao`) VALUES
(2, 'Prensa Hidráulica', 'Lorem ipsum dolor ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servico`
--

CREATE TABLE `servico` (
  `codServico` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `servico`
--

INSERT INTO `servico` (`codServico`, `nome`, `descricao`, `imagem`, `estatus`) VALUES
(43, 'Lorem ipsum', 'Lorem ipsim asdpasdlkas  pkdaspid apsi asn dasn diapo dqpod pqowd kasdk asp daspd pasdsa', '', 1),
(44, 'Ipsum', 'Lorem ipsim asdpasdlkas  pkdaspid apsi asn dasn diapo dqpod pqowd kasdk asp daspd pasdsa', '', 1),
(45, 'Lorem', 'Lorem ipsim asdpasdlkas  pkdaspid apsi asn dasn diapo dqpod pqowd kasdk asp daspd pasdsa', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sobre`
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
  `servico4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sobre`
--

INSERT INTO `sobre` (`indicador1qt`, `indicador2qt`, `indicador3qt`, `indicador4qt`, `indicador1`, `indicador2`, `indicador3`, `indicador4`, `textoSobre`, `textoServicos`, `servico1`, `servico2`, `servico3`, `servico4`) VALUES
(57, 42, 52, 30, 'máquinas próprias', 'anos no mercado', 'serviços próprios', 'opções de produtos', 'Lorem ipsum dolores sit amet, consecttur adipiscing elit. Donec rutrum feugiat augue. Aenean ac laoreet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, ligula vel sagittis dignissim, odio lectus porta mauris, non sagittis velit arcu nec eros. Etiam non dui eu diam blandit mattis sit amet eu diam!', 'Lorem ipsum dolor sit amet, consecttur adipiscing elit. Done c rutrum feugiat augue. Aenean ac laoreet mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusquinha egestas augue sit amet posuere volutpat. Ut a leo ut risus accumsan luctus id eu velit. Curabitur sodales pharetra lectus sit amet luctus. Integer dignissim laoreet velit non cursus. Suspendisse sit amet neque scelerisque, vehicula libero ac, fermentum neque. Integer lacinia pulvinar massa, sit amet egestas turpis pulvinar a. Suspendisse hendrerit, marcoligula vel sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos!', 43, 44, 45, 43);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `login`, `senha`, `nome`, `cargo`) VALUES
(1, 'sandro', 'd4fa73a393db574d78e880f0f9b87ddd', 'Sandro Lopes', 'Chefe'),
(2, 'admin', 'ac596daee40a92d6afa930c164953cf7', 'Serra Jr', 'Admin');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`codCampanha`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices de tabela `clienteempresa`
--
ALTER TABLE `clienteempresa`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices de tabela `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codPortifolio` (`codPortifolio`);

--
-- Índices de tabela `imagemproduto`
--
ALTER TABLE `imagemproduto`
  ADD PRIMARY KEY (`codImagem`),
  ADD KEY `codProduto` (`codProduto`);

--
-- Índices de tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`codMsg`);

--
-- Índices de tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`codParceiro`);

--
-- Índices de tabela `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`codPortifolio`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProduto`);

--
-- Índices de tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`codServico`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `campanha`
--
ALTER TABLE `campanha`
  MODIFY `codCampanha` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `clienteempresa`
--
ALTER TABLE `clienteempresa`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `imagemproduto`
--
ALTER TABLE `imagemproduto`
  MODIFY `codImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `codMsg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `codParceiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de tabela `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `codPortifolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `codProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `codServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `imagemportifolio`
--
ALTER TABLE `imagemportifolio`
  ADD CONSTRAINT `imagemportifolio_ibfk_1` FOREIGN KEY (`codPortifolio`) REFERENCES `portifolio` (`codPortifolio`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `imagemproduto`
--
ALTER TABLE `imagemproduto`
  ADD CONSTRAINT `imagemproduto_ibfk_1` FOREIGN KEY (`codProduto`) REFERENCES `produto` (`codProduto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
