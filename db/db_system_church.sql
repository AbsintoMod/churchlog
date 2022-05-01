-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2022 às 05:54
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
  `id` int(11) NOT NULL,
  `first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_father` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_mother` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_select_marital_status` int(11) NOT NULL,
  `conjuge_name` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_select_sex` int(11) NOT NULL,
  `id_select_schooling` int(11) NOT NULL,
  `id_select_answer` int(11) NOT NULL,
  `son` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_son` int(2) NOT NULL,
  `comungante` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baptism_date` date DEFAULT NULL,
  `id_select_type_admission` int(11) NOT NULL,
  `id_select_ministerial_function` int(11) NOT NULL,
  `identity_card` int(15) NOT NULL,
  `identity_emitter` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_emitter` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_expedition` date NOT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf_birth` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naturalness` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `c_p_f` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_house` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complement` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_select_city` int(11) NOT NULL,
  `telephone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 6, '2022-04-30', '04:00:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_answer`
--

CREATE TABLE `select_answer` (
  `id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_answer`
--

INSERT INTO `select_answer` (`id`, `status`) VALUES
(1, 'Completo'),
(2, 'Incompleto'),
(3, 'Aprovado'),
(4, 'Reprovado'),
(5, 'Permitido'),
(6, 'Negado'),
(7, 'Pendente'),
(8, 'Concluído');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_city`
--

CREATE TABLE `select_city` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `id_select_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_marital_status`
--

CREATE TABLE `select_marital_status` (
  `id` int(11) NOT NULL,
  `status` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_marital_status`
--

INSERT INTO `select_marital_status` (`id`, `status`) VALUES
(1, 'Solteiro (a)'),
(2, 'Casado (a)'),
(3, 'Viúvo (a)'),
(4, 'Separado (a) Judicialmente'),
(5, 'Divorciado (a)');

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
(7, 'Missionário (a)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_schooling`
--

CREATE TABLE `select_schooling` (
  `id` int(11) NOT NULL,
  `schooling` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_schooling`
--

INSERT INTO `select_schooling` (`id`, `schooling`) VALUES
(1, 'Alfabetizado'),
(2, '4ª Série do Ensino Fundamental'),
(3, 'Ensino Fundamental'),
(4, 'Ensino Médio'),
(5, 'Ensino Técnico'),
(6, 'Ensino Superior'),
(7, 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_sex`
--

CREATE TABLE `select_sex` (
  `id` int(11) NOT NULL,
  `sex` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_sex`
--

INSERT INTO `select_sex` (`id`, `sex`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_state`
--

CREATE TABLE `select_state` (
  `id` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_state`
--

INSERT INTO `select_state` (`id`, `estado`, `uf`, `capital`, `region`) VALUES
(1, 'Acre', 'AC', 'Rio Branco', 'Norte'),
(2, 'Alagoas', 'AL', 'Maceió', 'Nordeste'),
(3, 'Amazonas', 'AM', 'Manaus', 'Norte'),
(4, 'Amapá', 'AP', 'Macapá', 'Norte'),
(5, 'Bahia', 'BA', 'Salvador', 'Nordeste'),
(6, 'Ceará', 'CE', 'Fortaleza', 'Nordeste'),
(7, 'Distrito Federal', 'DF', 'Brasília', 'Centro-Oeste'),
(8, 'Espírito Santo', 'ES', 'Vitória', 'Sudeste'),
(9, 'Goiás', 'GO', 'Goiânia', 'Centro-Oeste'),
(10, 'Maranhão', 'MA', 'São Luís', 'Nordeste'),
(11, 'Minas Gerais', 'MG', 'Belo Horizonte', 'Sudeste'),
(12, 'Mato Grosso do Sul', 'MS', 'Campo Grande', 'Centro-Oeste'),
(13, 'Mato Grosso', 'MT', 'Cuiabá', 'Centro-Oeste'),
(14, 'Pará', 'PA', 'Belém', 'Norte'),
(15, 'Paraíba', 'PB', 'João Pessoa', 'Nordeste'),
(16, 'Pernambuco', 'PE', 'Recife', 'Nordeste'),
(17, 'Piauí', 'PI', 'Teresina', 'Nordeste'),
(18, 'Paraná', 'PR', 'Curitiba', 'Sul'),
(19, 'Rio de Janeiro', 'RJ', 'Rio de Janeiro', 'Sudeste'),
(20, 'Rio Grande do Norte', 'RN', 'Natal', 'Nordeste'),
(21, 'Rondônia', 'RO', 'Porto Velho', 'Norte'),
(22, 'Roraima', 'RR', 'Boa Vista', 'Norte'),
(23, 'Rio Grande do Sul', 'RS', 'Porto Alegre', 'Sul'),
(24, 'Santa Catarina', 'SC', 'Florianópolis', 'Sul'),
(25, 'Sergipe', 'SE', 'Aracaju', 'Nordeste'),
(26, 'São Paulo', 'SP', 'São Paulo', 'Sudeste'),
(27, 'Tocantins', 'TO', 'Palmas', 'Norte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `select_type_admission`
--

CREATE TABLE `select_type_admission` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `select_type_admission`
--

INSERT INTO `select_type_admission` (`id`, `type`) VALUES
(1, 'Conversão e Batismo'),
(2, 'Batismo'),
(3, 'Transferência'),
(4, 'Troca de Ministério'),
(5, 'Reconciliação');

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
-- Índices para tabela `select_answer`
--
ALTER TABLE `select_answer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_city`
--
ALTER TABLE `select_city`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_marital_status`
--
ALTER TABLE `select_marital_status`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_ministerial_function`
--
ALTER TABLE `select_ministerial_function`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_schooling`
--
ALTER TABLE `select_schooling`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_sex`
--
ALTER TABLE `select_sex`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_state`
--
ALTER TABLE `select_state`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `select_type_admission`
--
ALTER TABLE `select_type_admission`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `report_login`
--
ALTER TABLE `report_login`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `select_answer`
--
ALTER TABLE `select_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `select_city`
--
ALTER TABLE `select_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `select_marital_status`
--
ALTER TABLE `select_marital_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `select_ministerial_function`
--
ALTER TABLE `select_ministerial_function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `select_schooling`
--
ALTER TABLE `select_schooling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `select_sex`
--
ALTER TABLE `select_sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `select_state`
--
ALTER TABLE `select_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `select_type_admission`
--
ALTER TABLE `select_type_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
