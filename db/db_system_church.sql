-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2022 às 03:13
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
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `access_nivel`
--

INSERT INTO `access_nivel` (`id`, `name`) VALUES
(1, 'Usuario'),
(2, 'Master'),
(3, 'Senior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `members`
--

CREATE TABLE `members` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_father` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_mother` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` int(1) NOT NULL,
  `conjuge_name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schooling` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_schooling` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `son` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_son` int(1) NOT NULL DEFAULT 0,
  `name_son` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comungante` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baptism_date` date DEFAULT NULL,
  `type_admission` int(1) NOT NULL,
  `id_select_ministerial_function` int(11) NOT NULL,
  `previous_church` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity_card` int(15) DEFAULT NULL,
  `identity_emitter` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_emitter` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_expedition` date DEFAULT NULL,
  `id_select_city_of_birth` int(11) NOT NULL,
  `date_birth` date NOT NULL,
  `c_p_f` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_house` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complement` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf_cep` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_cep` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `date_register` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `members`
--

INSERT INTO `members` (`id`, `first_name`, `second_name`, `path_image`, `name_father`, `name_mother`, `marital_status`, `conjuge_name`, `sex`, `schooling`, `status_schooling`, `son`, `amount_son`, `name_son`, `comungante`, `baptism_date`, `type_admission`, `id_select_ministerial_function`, `previous_church`, `identity_card`, `identity_emitter`, `state_emitter`, `date_expedition`, `id_select_city_of_birth`, `date_birth`, `c_p_f`, `cep`, `street`, `number_house`, `complement`, `neighborhood`, `uf_cep`, `city_cep`, `telephone`, `cellphone`, `email`, `status`, `date_register`, `id_user`) VALUES
(00000000001, '', '', '', '', '', 0, 'Não Possui', '', '', '', '0', 0, '0', '0', '0000-00-00', 0, 0, 'Não Possui', 0, '', '', '0000-00-00', 0, '0000-00-00', '', '', '', 'S/N', 'Não Possui', '', '', '', '(00) 00000-0000', '(51) 31351-3131', '', '1', '2022-05-23 02:42:49', 0),
(00000000002, '', 'd', '', NULL, '', 0, NULL, '', '', '', '', 0, NULL, '', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00', '', NULL, '', '', NULL, '', '', '', NULL, NULL, NULL, '1', '2022-05-23 02:42:49', 0),
(00000000003, '', '', 'C:fakepath20200307_112208.jpg', '', '', 0, 'Não Possui', '', '', '', '0', 0, '0', '0', '0000-00-00', 0, 0, 'Não Possui', 0, '', '', '0000-00-00', 0, '0000-00-00', '', '', '', 'S/N', 'Não Possui', '', '', '', '(00) 00000-0000', '(12) 31813-8138', '', '1', '2022-05-23 02:42:49', 0),
(00000000004, '', '', 'C:fakepath20200307_112208.jpg', '', '', 0, 'Não Possui', '', '', '', '0', 0, '0', '0', '0000-00-00', 0, 0, 'Não Possui', 0, '', '', '0000-00-00', 0, '0000-00-00', '', '', '', 'S/N', 'Não Possui', '', '', '', '(00) 00000-0000', '(12) 31813-8138', '', '1', '2022-05-23 02:42:49', 0),
(00000000005, 'dbkfbkbkn', 'lcgn lfnl gflngbl fglfnl', '', 'lnlnlnl', 'nlnnliu', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2002-02-02', '20-20', '61921-160', 'Rua 15', 'S/N', '1531', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(11) 35135', '', '1', '2022-05-23 02:42:49', 0),
(00000000006, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000007, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000008, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000009, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000010, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000011, '522', '135135', '', '', '52', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2000-02-02', '5', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000012, 'rhrt', 'hrthr', '', 'thrthrth', 'rthrth', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2222-02-02', '5-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000013, 'rhrt', 'hrthr', '', 'thrthrth', 'rthrth', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2222-02-02', '5-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(52', '', '1', '2022-05-23 02:42:49', 0),
(00000000014, 'fnbfgn', 'ghngh', '', '', 'nghng', 1, 'Não Possui', 'Feminino', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '0222-02-02', '05.050-50', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(13) 6815', '', '1', '2022-05-23 02:42:49', 0),
(00000000015, 'ghngt', 'hnghng', '', 'ghng', 'nghngh', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Incompleto', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '0222-02-02', '256-13', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(25) 25', '', '1', '2022-05-23 02:42:49', 0),
(00000000016, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000017, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000018, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000019, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000020, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000021, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000022, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000023, 'fgbfg', 'bfgbfg', 'C:fakepath20200307_112208.jpg', '', 'bfgbfgbf', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 2, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-04', '515.151.515-15', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(16) 115', '', '1', '2022-05-23 02:42:49', 0),
(00000000024, 'f nf', 'ngfng', '', 'hngv', 'gnhghn', 1, 'Não Possui', 'Masculino', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', 0, '', '', '0000-00-00', 1, '2023-01-03', '551-36', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(11) 514', '', '1', '2022-05-23 02:44:40', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocol`
--

CREATE TABLE `protocol` (
  `id` int(11) NOT NULL,
  `applicant` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_target_sector` int(11) NOT NULL,
  `name_item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_select_answer` int(11) NOT NULL,
  `id_member_aproved` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_aproved` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 6, '2022-04-30', '03:03:08'),
(2, 6, '2022-04-30', '03:31:58'),
(3, 6, '2022-04-30', '04:00:28'),
(4, 6, '2022-05-02', '18:57:40'),
(5, 6, '2022-05-03', '04:47:06'),
(6, 6, '2022-05-04', '03:07:53'),
(7, 6, '2022-05-07', '02:31:53'),
(8, 6, '2022-05-07', '02:59:32'),
(9, 6, '2022-05-07', '03:30:14'),
(10, 6, '2022-05-07', '03:55:01'),
(11, 6, '2022-05-07', '04:21:59'),
(12, 6, '2022-05-07', '04:58:39'),
(13, 6, '2022-05-07', '05:02:16'),
(14, 6, '2022-05-07', '05:03:52'),
(15, 6, '2022-05-07', '05:04:17'),
(16, 6, '2022-05-07', '05:06:40'),
(17, 6, '2022-05-07', '05:07:12'),
(18, 6, '2022-05-07', '05:07:41'),
(19, 6, '2022-05-07', '05:14:23'),
(20, 6, '2022-05-07', '05:41:02'),
(21, 6, '2022-05-08', '22:27:04'),
(22, 6, '2022-05-09', '20:23:12'),
(23, 6, '2022-05-09', '20:40:35'),
(24, 6, '2022-05-09', '21:24:48'),
(25, 6, '2022-05-09', '22:10:51'),
(26, 6, '2022-05-18', '23:31:52'),
(27, 6, '2022-05-19', '01:10:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_city`
--

CREATE TABLE `select_city` (
  `id` int(11) NOT NULL,
  `city` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_select_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_city`
--

INSERT INTO `select_city` (`id`, `city`, `id_select_state`) VALUES
(1, 'Maracanaú', 6),
(2, 'Pajuçara', 6),
(3, 'Acrelândia', 1),
(4, 'Assis Brasil', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_country`
--

CREATE TABLE `select_country` (
  `id` int(11) NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_ISO` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_country`
--

INSERT INTO `select_country` (`id`, `country`, `cod_ISO`) VALUES
(1, 'Brazil', 'BR'),
(2, 'United States', 'US'),
(3, 'Portugal', 'PT'),
(4, 'Japan', 'JP'),
(5, 'Israel', 'IL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_ministerial_function`
--

CREATE TABLE `select_ministerial_function` (
  `id` int(11) NOT NULL,
  `function` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_ministerial_function`
--

INSERT INTO `select_ministerial_function` (`id`, `function`) VALUES
(1, 'Membro'),
(2, 'Auxiliar'),
(3, 'Diácono (iza)'),
(4, 'Presbítero'),
(5, 'Evangelista'),
(6, 'Pastor'),
(7, 'Missionário (a)'),
(8, 'Profeta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_state`
--

CREATE TABLE `select_state` (
  `id` int(11) NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_select_country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_state`
--

INSERT INTO `select_state` (`id`, `state`, `uf`, `capital`, `region`, `id_select_country`) VALUES
(1, 'Acre', 'AC', 'Rio Branco', 'Norte', 1),
(2, 'Alagoas', 'AL', 'Maceió', 'Nordeste', 1),
(3, 'Amazonas', 'AM', 'Manaus', 'Norte', 1),
(4, 'Amapá', 'AP', 'Macapá', 'Norte', 1),
(5, 'Bahia', 'BA', 'Salvador', 'Nordeste', 1),
(6, 'Ceará', 'CE', 'Fortaleza', 'Nordeste', 1),
(7, 'Distrito Federal', 'DF', 'Brasília', 'Centro-Oeste', 1),
(8, 'Espírito Santo', 'ES', 'Vitória', 'Sudeste', 1),
(9, 'Goiás', 'GO', 'Goiânia', 'Centro-Oeste', 1),
(10, 'Maranhão', 'MA', 'São Luís', 'Nordeste', 1),
(11, 'Minas Gerais', 'MG', 'Belo Horizonte', 'Sudeste', 1),
(12, 'Mato Grosso do Sul', 'MS', 'Campo Grande', 'Centro-Oeste', 1),
(13, 'Mato Grosso', 'MT', 'Cuiabá', 'Centro-Oeste', 1),
(14, 'Pará', 'PA', 'Belém', 'Norte', 1),
(15, 'Paraíba', 'PB', 'João Pessoa', 'Nordeste', 1),
(16, 'Pernambuco', 'PE', 'Recife', 'Nordeste', 1),
(17, 'Piauí', 'PI', 'Teresina', 'Nordeste', 1),
(18, 'Paraná', 'PR', 'Curitiba', 'Sul', 1),
(19, 'Rio de Janeiro', 'RJ', 'Rio de Janeiro', 'Sudeste', 1),
(20, 'Rio Grande do Norte', 'RN', 'Natal', 'Nordeste', 1),
(21, 'Rondônia', 'RO', 'Porto Velho', 'Norte', 1),
(22, 'Roraima', 'RR', 'Boa Vista', 'Norte', 1),
(23, 'Rio Grande do Sul', 'RS', 'Porto Alegre', 'Sul', 1),
(24, 'Santa Catarina', 'SC', 'Florianópolis', 'Sul', 1),
(25, 'Sergipe', 'SE', 'Aracaju', 'Nordeste', 1),
(26, 'São Paulo', 'SP', 'São Paulo', 'Sudeste', 1),
(27, 'Tocantins', 'TO', 'Palmas', 'Norte', 1);

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
(6, 'Rodrigo', 'teste@teste.com', 'usuario', '$2y$10$6/AchxY5M.sObvhZqsqGV.2CjD1id1rH73h9VF.ASb9zyDTUycJgi', '2022-02-28', 2, 'pt-br'),
(13, 'vdsvcbsdjvbcjsb', 'djbxjsdbfjybv@jbsdybxsjey.com', 'sdbjxvtdjf', '$2y$10$ZfujubDyo8p0czL1sKt5T.lgCX3cuc3uvVPDS4QqlBEc4eVmwXMhq', '2022-04-20', 1, 'en'),
(14, 'svxjcdvvvshv', 'jbsjxfbsdjxfbjsjb@bzdfjdyjh.com', 'xjbdvjdsjf', '$2y$10$7FE7ok1M1aFWrFVr.cpKIOYt65pP2puBy0ZPnhZNii5RuogwUmhIS', '2022-04-20', 2, 'pt-br'),
(15, 'Testando', 'novo@novo.com', 'usuarioq', '$2y$10$Knl27yVrG2VpSEU3i5JQwudnaY.FTyG.U8BB3XNbtxI8RNgQJTgS.', '2022-04-28', 1, 'pt-br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `access_nivel`
--
ALTER TABLE `access_nivel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `report_login`
--
ALTER TABLE `report_login`
  ADD PRIMARY KEY (`id_report`);

--
-- Índices para tabela `select_city`
--
ALTER TABLE `select_city`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_country`
--
ALTER TABLE `select_country`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_ministerial_function`
--
ALTER TABLE `select_ministerial_function`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_state`
--
ALTER TABLE `select_state`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `report_login`
--
ALTER TABLE `report_login`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `select_city`
--
ALTER TABLE `select_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `select_country`
--
ALTER TABLE `select_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `select_ministerial_function`
--
ALTER TABLE `select_ministerial_function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `select_state`
--
ALTER TABLE `select_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
