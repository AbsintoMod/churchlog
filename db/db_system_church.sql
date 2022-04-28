-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Abr-2022 às 03:09
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_system_church`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `access_nivel`
--

CREATE TABLE `access_nivel` (
  `id_nivel` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `access_nivel`
--

INSERT INTO `access_nivel` (`id_nivel`, `name`) VALUES
(1, 'Usuario'),
(2, 'Master'),
(3, 'Senior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `report_login`
--

CREATE TABLE `report_login` (
  `id_report` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `report_login`
--

INSERT INTO `report_login` (`id_report`, `id_user`, `date`, `hour`) VALUES
(1, 6, '2022-04-25', '11:00:15'),
(2, 6, '2022-04-25', '11:15:42'),
(3, 6, '2022-04-25', '11:52:50'),
(4, 6, '2022-04-25', '12:10:30'),
(5, 6, '2022-04-25', '12:56:55'),
(6, 6, '2022-04-25', '17:19:34'),
(7, 6, '2022-04-26', '02:30:00'),
(8, 6, '2022-04-26', '03:28:12'),
(9, 6, '2022-04-26', '14:22:15'),
(10, 6, '2022-04-26', '18:47:46'),
(11, 6, '2022-04-27', '02:02:50'),
(12, 6, '2022-04-27', '03:15:10'),
(13, 6, '2022-04-27', '04:22:16'),
(14, 6, '2022-04-27', '04:42:16'),
(15, 6, '2022-04-27', '04:51:44'),
(16, 6, '2022-04-27', '14:02:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date_create` date NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `lang` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `user`, `pass`, `date_create`, `id_nivel`, `lang`) VALUES
(6, 'Rodrigo', 'teste@teste.com', 'usuario', '$2y$10$6/AchxY5M.sObvhZqsqGV.2CjD1id1rH73h9VF.ASb9zyDTUycJgi', '2022-02-28', 1, 'pt-br'),
(13, 'vdsvcbsdjvbcjsb', 'djbxjsdbfjybv@jbsdybxsjey.com', 'sdbjxvtdjf', '$2y$10$ZfujubDyo8p0czL1sKt5T.lgCX3cuc3uvVPDS4QqlBEc4eVmwXMhq', '2022-04-20', 1, 'us'),
(14, 'svxjcdvvvshv', 'jbsjxfbsdjxfbjsjb@bzdfjdyjh.com', 'xjbdvjdsjf', '$2y$10$7FE7ok1M1aFWrFVr.cpKIOYt65pP2puBy0ZPnhZNii5RuogwUmhIS', '2022-04-20', 2, 'pt-br'),
(15, 'Testando', 'novo@novo.com', 'usuarioq', '$2y$10$Knl27yVrG2VpSEU3i5JQwudnaY.FTyG.U8BB3XNbtxI8RNgQJTgS.', '2022-04-28', 1, 'pt-br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `access_nivel`
--
ALTER TABLE `access_nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Índices para tabela `report_login`
--
ALTER TABLE `report_login`
  ADD PRIMARY KEY (`id_report`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `access_nivel`
--
ALTER TABLE `access_nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `report_login`
--
ALTER TABLE `report_login`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
