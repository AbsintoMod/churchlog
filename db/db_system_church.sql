-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2022 às 17:35
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
  `path_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `identity_card` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(00000000001, 'sdcvsbnkb', 'sdvkbcsdb', './upload/img/member-photo/default/avatar_boy.png', '', 'mdcvkbmdsbcvbk', 1, 'Não Possui', '1', 'Alfabetizado', 'Completo', '0', 0, '0', '0', '0000-00-00', 1, 1, 'Não Possui', '0', '', '', '0000-00-00', 1, '2000-02-02', '233.113.348-24', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(64) 26246-4464', '', '1', '2022-05-23 14:23:50', 0),
(00000000002, 'scgnsdhh', 'dcbvjdhyi', './upload/img/member-photo/default/avatar_boy.png', 'sdyi', 'icbmvlvmisdicvs', 1, 'Não Possui', '1', 'Alfabetizado', 'Incompleto', '0', 0, '0', '0', '0000-00-00', 2, 1, 'Não Possui', '0', '', '', '0000-00-00', 1, '1585-06-22', '584.618.113-81', '61921-160', 'Rua 15', 'S/N', 'Não Possui', 'Novo Oriente', 'CE', 'Maracanaú', '(00) 00000-0000', '(64) 24624-6468', '', '1', '2022-05-23 14:38:42', 6),
(00000000014, 'Aisha', 'Roma\nAbreu\n', './upload/img/member-photo/Aisha', 'Lins\nCamões\nDorneles\nBragança\n', 'Bandeira\nAdorno\nAnes\nAzeredo\n', 4, 'Não possui', '2', '5', '0', '0', 0, 'Não possui', '0', '0000-00-00', 3, 5, 'Não possui', '2965531049630', 'SSP-RN', 'RN', '2007-12-14', 4, '1981-08-28', '679.862.511-34', '53272-654', 'Nome da rua', '3271', 'A', 'Fortaleza', 'AC', 'Salvador', '(79) 93718-1404', '(58) 97973-5462', 'Aisha@gmail.com', '1', '2002-04-30 00:00:00', 0),
(00000000015, 'Anita', 'Chaves\nValença\nFigo\n', './upload/img/member-photo/Anita', 'Carvalhal\nEvangelista\n', 'Botelho\nCafé\nGonzaga\n', 3, 'Não possui', '2', '4', '0', 'B', 1, ' Álvares Assis Amigo Bueno', '0', '0000-00-00', 4, 6, 'Adães\nAdães\nAragão\n', '9102819076888', 'SSP-MT', 'MT', '2002-03-15', 6, '1972-06-15', '495.612.217-55', '893-880', 'Nome da rua', '4778', 'Não Possui', 'Boa Vista', 'MT', 'Boa Vista', '(00) 00000-0000', '(27) 99568-7960', 'Anita@gmail.com', '1', '1998-07-20 00:00:00', 0),
(00000000016, 'Hannah', 'Alvarenga\nFaro\nFonseca\n', './upload/img/member-photo/Hannah', 'Magalhães\nFaro\n', 'Aragão\nBorsoi\nCouto\nAlves\n', 4, 'Não possui', '2', '5', '1', 'G', 5, ' Amaral Cotrim,  Bandeira Encarnação,  Faleiros Cruz,  Coelho Batista Alcântara,  Alencar Figueiredo Gusmão', '0', '0000-00-00', 3, 5, 'Não possui', '2807373624889', 'SSP-RO', 'RO', '1974-02-22', 3, '1976-02-25', '725.815.96-20', '75455-669', 'Nome da rua', '3610', 'A', 'Campo Grande', 'RR', 'São Luís', '(00) 00000-0000', '(42) 98701-4323', 'Hannah@gmail.com', '1', '2004-07-13 00:00:00', 0),
(00000000017, 'Agnes', 'Fontes\nBermudes\n', './upload/img/member-photo/Agnes', 'Malta\nAnunciação\n', 'Bueno\nAlvim\nBarros\n', 2, 'Diegues\nFerrolho\nAmorim\n', '2', '5', '1', 'F', 1, ' Henriques Alencar Braga Ferrolho', '0', '0000-00-00', 3, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2003-04-20', '297.881.242-57', '44519-345', 'Nome da rua', '3808', 'A', 'Rio de Janeiro', 'AC', 'Boa Vista', '(00) 00000-0000', '(86) 99895-7526', 'Agnes@gmail.com', '1', '1974-08-23 00:00:00', 0),
(00000000018, 'Esther', 'Amorim\nBicalho\nAntunes\n', './upload/img/member-photo/Esther', 'Andrada\nGama\nBastos\nDorneles\n', 'Brasiliense\nBatista\nBispo\nBispo\n', 2, 'Luz\nFigo\nLocatelli\n', '1', '5', '0', 'C', 2, ' Alcântara Bicalho Gonzaga,  Borba Camacho', '1', '2002-05-04', 2, 6, 'Não possui', '360182341766', 'SSP-MA', 'MA', '1985-05-10', 4, '1981-11-27', '168.461.846-12', '6209-601', 'Nome da rua', '7265', 'Não Possui', 'Macapá', 'AM', 'Macapá', '(00) 00000-0000', '(42) 91289-2969', 'Esther@gmail.com', '1', '1986-08-21 00:00:00', 0),
(00000000019, 'Lis', 'Evangelista\nAlbuquerque\n', './upload/img/member-photo/Lis', 'Figueiroa\nAmor\nBotelho\n', 'Evangelista\nAltamirano\nCouto\n', 1, 'Não possui', '1', '7', '0', '0', 0, 'Não possui', '0', '0000-00-00', 1, 2, 'Não possui', '2029241719391', 'SSP-PA', 'PA', '2010-07-03', 3, '2016-06-14', '368.533.452-62', '2073-228', 'Nome da rua', '9127', 'A', 'Teresina', 'PA', 'Boa Vista', '(00) 00000-0000', '(60) 92957-6313', 'Lis@gmail.com', '1', '2014-12-12 00:00:00', 0),
(00000000020, 'Iara', 'Alvim\nAnes\n', './upload/img/member-photo/Iara', 'Almeida\nAlencar\n', 'Anjos\nTrindade\n', 4, 'Não possui', '2', 'Ensino Médio', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 4, 2, 'Uchoa\nBrandão\n', 'Não possui', '', '', '0000-00-00', 4, '2009-11-04', '770.488.332-98', '66143-801', 'Nome da rua', '3436', 'Não Possui', 'Porto Velho', 'CE', 'Salvador', '(34) 95955-5733', '(66) 93168-8704', 'Iara@gmail.com', '1', '2002-07-28 00:00:00', 0),
(00000000021, 'Lara', 'Gonçalves\nAnunciação\n', './upload/img/member-photo/Lara', 'Alves\nBueno\nCardoso\n', 'Diegues\nAndrade\nLopes\nGonçalves\n', 4, 'Não possui', '1', 'Alfabetizado', 'Incompleto', 'B', 1, ' Gomes Gomes Braga', '1', '1997-12-02', 3, 6, 'Não possui', 'Não possui', '', '', '0000-00-00', 4, '2000-04-22', '237.814.431-38', '91040-626', 'Nome da rua', '677', 'A', 'Belém', 'MT', 'Macapá', '(00) 00000-0000', '(63) 98223-6465', 'Lara@gmail.com', '1', '1973-07-14 00:00:00', 0),
(00000000022, 'Dayane', 'Faro\nEça\n', './upload/img/member-photo/Dayane', 'Castro\nFaria\nBarros\nArruda\n', 'Médici\nBatista\n', 5, 'Não possui', '1', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 2, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2019-05-22', '892.310.905-62', '6173-111', 'Nome da rua', '42', 'A', 'Boa Vista', 'RR', 'Rio Branco', '(00) 00000-0000', '(79) 92046-1829', 'Dayane@gmail.com', '1', '2009-03-18 00:00:00', 0),
(00000000023, 'Lana', 'Coelho\nAlmeida\n', './upload/img/member-photo/Lana', 'Adorno\nAnjos\nAzevedo\nFerrão\n', 'Bastos\nAleluia\nCerejeira\n', 1, 'Não possui', '1', '4ª Série do Ensino Fundamental', 'Incompleto', '0', 0, 'Não possui', '1', '1994-01-28', 5, 2, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '1981-06-13', '447.942.643-29', '80194-367', 'Nome da rua', '923', 'Não Possui', 'Teresina', 'RN', 'Boa Vista', '(00) 00000-0000', '(42) 91271-2341', 'Lana@gmail.com', '1', '1978-10-12 00:00:00', 0),
(00000000024, 'Júlio', 'Álvares\nCoelho\nCruz\n', './upload/img/member-photo/Júlio', 'Botelho\nBueno\nAzeredo\n', 'Magalhães\nAraújo\nDorneles\n', 2, 'Faria\nFortaleza\nAlves\nExaltação\n', '2', 'Ensino Técnico', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 5, 7, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '1970-04-22', '112.977.472-70', '71492-449', 'Nome da rua', '9810', 'Não Possui', 'Macapá', 'SE', 'Recife', '(63) 96890-9736', '(32) 98645-1234', 'Júlio@gmail.com', '1', '2016-12-22 00:00:00', 0),
(00000000025, 'Daniele', 'Aleluia\nBragança\nDias\n', './upload/img/member-photo/Daniele', 'Encarnação\nCoentrão\nHenriques\n', 'Bernardes\nBarroso\nBandeira\nGusmão\n', 4, 'Não possui', '1', 'Ensino Técnico', 'Incompleto', 'G', 2, ' Bastos Coutinho Malafaia Café,  Dias Barroso Amaral Gusmão', '0', '0000-00-00', 4, 8, 'Fioravante\nFigueiroa\nBrasil\n', 'Não possui', '', '', '0000-00-00', 3, '2010-03-16', '845.243.639-73', '68391-606', 'Nome da rua', '9810', 'A', 'Rio Branco', 'MS', 'Palmas', '(00) 00000-0000', '(88) 94496-4878', 'Daniele@gmail.com', '1', '2008-11-24 00:00:00', 0),
(00000000026, 'Maria Helena', 'Nascimento\nAmorim\nGama\n', './upload/img/member-photo/Maria Helena', 'Curado\nBorsoi\nAraújo\nArruda\n', 'Alves\nCotrim\n', 5, 'Não possui', '1', 'Ensino Fundamental', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 5, 6, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2003-09-09', '769.791.821-31', '81667-577', 'Nome da rua', '3053', 'A', 'Manaus', 'TO', 'Aracaju', '(22) 91570-3706', '(97) 92050-7719', 'Maria Helena@gmail.com', '1', '1975-08-15 00:00:00', 0),
(00000000027, 'Manuela', 'Caminha\nFurquim\n', './upload/img/member-photo/Manuela', 'Hungria\nCarnaval\n', 'Aragão\nAlvarenga\nCarmo\nAlencar\n', 4, 'Não possui', '2', 'Ensino Médio', 'Incompleto', '0', 0, 'Não possui', '1', '1994-03-19', 5, 1, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1980-11-13', '889.313.24-27', '16736-682', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'MG', 'João Pessoa', '(41) 91932-9327', '(83) 93350-8186', 'Manuela@gmail.com', '1', '1977-01-31 00:00:00', 0),
(00000000028, 'Carol', 'Cunha\nCarvalhal\nFaleiros\n', './upload/img/member-photo/Carol', 'Bispo\nFioravante\n', 'Aleluia\nJunqueira\n', 3, 'Não possui', '2', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '1', '1970-06-06', 3, 1, 'Não possui', '8073541764320', 'SSP-RR', 'RR', '1994-09-10', 1, '2020-03-20', '140.102.503-46', '62512-706', 'Nome da rua', '7765', 'Não Possui', 'Teresina', 'AC', 'Aracaju', '(28) 91985-2251', '(65) 96382-4867', 'Carol@gmail.com', '1', '1984-02-16 00:00:00', 0),
(00000000029, 'Antonella', 'Couto\nFalópio\nCastilho\n', './upload/img/member-photo/Antonella', 'Paixão\nHernandes\nAlvim\n', 'Brasil\nAraújo\nEça\nCamargo\n', 5, 'Não possui', '2', '4ª Série do Ensino Fundamental', 'Completo', 'A', 5, ' Figueira Melo,  Bandeira Barroso,  Evangelista Morato,  Médici Esteves,  Lins Aragão', '1', '2015-08-04', 3, 2, 'Não possui', '824642287373', 'SSP-PA', 'PA', '1981-03-16', 4, '2008-03-06', '453.374.139-72', '57900-132', 'Nome da rua', '5217', 'Não Possui', 'Palmas', 'SC', 'Aracaju', '(00) 00000-0000', '(75) 96067-5512', 'Antonella@gmail.com', '1', '2015-04-21 00:00:00', 0),
(00000000030, 'Ohana', 'Evangelista\nCarneiro\nFerreira\n', './upload/img/member-photo/Ohana', 'Alvarenga\nAragão\nAmor\nFreire\n', 'Ferraz\nAmigo\nCoelho\n', 3, 'Não possui', '1', 'Ensino Técnico', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 4, 3, 'Santiago\nAleluia\n', 'Não possui', '', '', '0000-00-00', 1, '1977-02-15', '79.262.569-49', '27717-986', 'Nome da rua', '6936', 'Não Possui', 'Macapá', 'AC', 'Macapá', '(77) 91861-2919', '(78) 91435-1934', 'Ohana@gmail.com', '1', '1972-09-03 00:00:00', 0),
(00000000031, 'Mara', 'Barros\nHungria\nMoreira\n', './upload/img/member-photo/Mara', 'Alvarenga\nAntunes\nGonçalves\n', 'Anchieta\nFontes\nFaleiros\n', 4, 'Não possui', '1', 'Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '1', '1977-01-24', 1, 6, 'Não possui', '6708620402495', 'SSP-DF', 'DF', '2022-02-04', 5, '2013-02-09', '639.209.618-19', '52369-801', 'Nome da rua', 'S/N', 'Não Possui', 'Recife', 'BA', 'Palmas', '(00) 00000-0000', '(91) 93814-6125', 'Mara@gmail.com', '1', '1970-03-01 00:00:00', 0),
(00000000032, 'Diane', 'Cordeiro\nFaleiros\nHolanda\n', './upload/img/member-photo/Diane', 'Guimarães\nAnes\nAlencar\n', 'Araújo\nBicalho\nBrandão\nAguiar\n', 3, 'Não possui', '1', 'Alfabetizado', 'Completo', 'A', 2, ' Anchieta Dambros,  Bernardes Amor', '0', '0000-00-00', 5, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '2013-08-06', '975.384.792-19', '73838-765', 'Nome da rua', '8524', 'A', 'João Pessoa', 'ES', 'Belo Horizonte', '(00) 00000-0000', '(56) 99600-8010', 'Diane@gmail.com', '1', '1982-07-26 00:00:00', 0),
(00000000033, 'Mariana', 'Freire\nCarmo\n', './upload/img/member-photo/Mariana', 'Amorim\nCaminha\nMeireles\n', 'Castro\nCotrim\nBernades\n', 3, 'Não possui', '2', 'Ensino Superior', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 4, 1, 'Café\nSeixas\n', 'Não possui', '', '', '0000-00-00', 6, '2019-03-12', '679.122.595-79', '23525-719', 'Nome da rua', '9377', 'Não Possui', 'Manaus', 'AM', 'Porto Velho', '(00) 00000-0000', '(91) 95273-6275', 'Mariana@gmail.com', '1', '1993-06-01 00:00:00', 0),
(00000000034, 'Hannah', 'Coentrão\nSerrano\n', './upload/img/member-photo/Hannah', 'Encarnação\nBorsoi\n', 'Bastos\nSiqueira\n', 1, 'Não possui', '1', 'Ensino Médio', 'Completo', '0', 0, 'Não possui', '1', '1999-07-08', 3, 8, 'Não possui', '3731179604699', 'SSP-PR', 'PR', '1978-04-12', 4, '1990-07-24', '344.79.264-97', '48596-582', 'Nome da rua', 'S/N', 'Não Possui', 'Belém', 'AP', 'Fortaleza', '(00) 00000-0000', '(93) 97399-2332', 'Hannah@gmail.com', '1', '1995-12-26 00:00:00', 0),
(00000000035, 'João', 'Poeta\nChaves\n', './upload/img/member-photo/João', 'Figueiredo\nEça\nBernardes\nAmaral\n', 'Ascensão\nAnjos\n', 4, 'Não possui', '1', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 3, 7, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '2014-10-02', '952.411.378-41', '70909-290', 'Nome da rua', 'S/N', 'Não Possui', 'Manaus', 'SE', 'Campo Grande', '(00) 00000-0000', '(55) 99733-2385', 'João@gmail.com', '1', '2015-05-27 00:00:00', 0),
(00000000036, 'Eva', 'Bocaiuva\nSerra\n', './upload/img/member-photo/Eva', 'Madureira\nPensamento\nCoelho\n', 'Guimarães\nCastro\nLange\n', 4, 'Não possui', '2', 'Ensino Superior', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 3, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2001-09-30', '980.533.148-91', '58916-305', 'Nome da rua', 'S/N', 'Não Possui', 'Belo Horizonte', 'TO', 'Fortaleza', '(00) 00000-0000', '(24) 97530-2686', 'Eva@gmail.com', '1', '2012-01-05 00:00:00', 0),
(00000000037, 'Mara', 'Bernardes\nFrança\n', './upload/img/member-photo/Mara', 'Barbosa\nCarneiro\n', 'Lacerda\nBorges\nMairinque\n', 5, 'Não possui', '2', 'Ensino Técnico', 'Completo', '0', 0, 'Não possui', '1', '2008-04-10', 4, 4, 'Costa\nOliveira\nAlvarenga\n', '1528913465619', 'SSP-RN', 'RN', '1984-05-11', 4, '2009-03-19', '981.372.266-60', '50072-523', 'Nome da rua', '4821', 'A', 'Boa Vista', 'AP', 'Rio Branco', '(00) 00000-0000', '(50) 93986-9042', 'Mara@gmail.com', '1', '1994-09-23 00:00:00', 0),
(00000000038, 'Heloísa', 'Hungria\nAleluia\n', './upload/img/member-photo/Heloísa', 'Fagundes\nBicalho\nAguiar\nFaria\n', 'Gato\nBarros\nMesquita\n', 2, 'Hernandes\nEsteves\nMiranda\nBraga\n', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 2, 3, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '1978-05-22', '707.710.72-63', '7694-873', 'Nome da rua', '8093', 'A', 'Manaus', 'AM', 'Rio Branco', '(00) 00000-0000', '(73) 97788-1369', 'Heloísa@gmail.com', '1', '2015-12-30 00:00:00', 0),
(00000000039, 'Heloísa', 'Rangel\nBarros\n', './upload/img/member-photo/Heloísa', 'Gusmão\nAdorno\nBernardes\n', 'Alcântara\nFontes\nPapanicolau\n', 1, 'Não possui', '1', 'Ensino Técnico', 'Completo', '0', 0, 'Não possui', '1', '2016-08-03', 3, 3, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2016-03-27', '546.599.607-72', '48978-839', 'Nome da rua', 'S/N', 'Não Possui', 'Recife', 'PI', 'Fortaleza', '(00) 00000-0000', '(51) 93919-4511', 'Heloísa@gmail.com', '1', '2021-04-27 00:00:00', 0),
(00000000040, 'Sílvia', 'Pinto\nBolsonaro\nBueno\n', './upload/img/member-photo/Sílvia', 'Constante\nBorba\nCamacho\nBotelho\n', 'Porto\nNavarro\nPires\n', 5, 'Não possui', '1', 'Alfabetizado', 'Incompleto', 'A', 1, ' Aleluia Azevedo Brandão Alves', '1', '1973-02-20', 2, 8, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '2010-02-04', '509.721.976-25', '54304-282', 'Nome da rua', '1730', 'A', 'Goiânia', 'SE', 'Fortaleza', '(57) 98962-5899', '(20) 94952-3654', 'Sílvia@gmail.com', '1', '2020-08-08 00:00:00', 0),
(00000000041, 'Hannah', 'Barros\nFigueiroa\nAleluia\n', './upload/img/member-photo/Hannah', 'Aragão\nEça\n', 'Morato\nBernardes\n', 5, 'Não possui', '1', 'Doutorado', 'Completo', 'M', 3, ' Pascoal Magalhães,  Saraiva Brasiliense,  Chaves Bispo Anjos Machado', '1', '2018-08-12', 3, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2009-07-26', '607.242.94-18', '30729-822', 'Nome da rua', '4645', 'Não Possui', 'Teresina', 'AP', 'Teresina', '(00) 00000-0000', '(26) 93970-2207', 'Hannah@gmail.com', '1', '1996-05-27 00:00:00', 0),
(00000000042, 'Eliana', 'Albuquerque\nMorais\nBarroso\n', './upload/img/member-photo/Eliana', 'Gonçalves\nBicalho\nHomem\nAdães\n', 'Carnaval\nFaria\n', 5, 'Não possui', '2', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 2, 1, 'Não possui', '1066143714177', 'SSP-PB', 'PB', '1976-02-19', 2, '1988-01-25', '188.928.676-71', '60911-319', 'Nome da rua', '2193', 'Não Possui', 'Rio Branco', 'SC', 'Rio Branco', '(13) 98784-3638', '(72) 97176-9425', 'Eliana@gmail.com', '1', '1981-03-30 00:00:00', 0),
(00000000043, 'Natalie', 'Chaves\nFurtado\n', './upload/img/member-photo/Natalie', 'Adães\nBorges\nBispo\nHernandes\n', 'Fioravante\nHolanda\nGato\nÁlvares\n', 1, 'Não possui', '2', 'Ensino Médio', 'Incompleto', '1', 1, ' Massa Galvão', '0', '0000-00-00', 5, 1, 'Não possui', '7602981567934', 'SSP-PE', 'PE', '1995-03-16', 4, '1975-12-11', '815.617.308-18', '78383-607', 'Nome da rua', '9106', 'A', 'Fortaleza', 'PI', 'João Pessoa', '(85) 96323-9374', '(49) 97103-9196', 'Natalie@gmail.com', '1', '1979-03-23 00:00:00', 0),
(00000000044, 'Izabele', 'Andrada\nMendes\nAguiar\n', './upload/img/member-photo/Izabele', 'Anjos\nFerrolho\n', 'Azeredo\nAlcântara\nExaltação\nCafé\n', 4, 'Não possui', '2', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '1', '1978-02-06', 4, 8, 'Bastos\nFaria\nBicalho\n', 'Não possui', '', '', '0000-00-00', 3, '2018-08-20', '90.303.599-15', '9329-883', 'Nome da rua', '5681', 'A', 'Manaus', 'RO', 'Teresina', '(00) 00000-0000', '(74) 99774-5352', 'Izabele@gmail.com', '1', '1995-01-10 00:00:00', 0),
(00000000045, 'Lídia', 'Anes\nAzeredo\nFagundes\n', './upload/img/member-photo/Lídia', 'Ferrão\nGonzaga\n', 'Médici\nAlcântara\n', 3, 'Não possui', '2', 'Doutorado', 'Incompleto', '1', 2, ' Martins Andrada Borges,  Cunha Ferreira Madureira', '0', '0000-00-00', 5, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 6, '2010-04-25', '976.746.866-96', '66692-36', 'Nome da rua', '1704', 'Não Possui', 'João Pessoa', 'RN', 'Porto Velho', '(00) 00000-0000', '(95) 96601-5161', 'Lídia@gmail.com', '1', '1995-12-02 00:00:00', 0),
(00000000046, 'Ana Luiza', 'Cotrim\nGato\n', './upload/img/member-photo/Ana Luiza', 'Camacho\nFalópio\nAlbuquerque\nBotelho\n', 'Bueno\nAlmeida\nNantes\nCarnaval\n', 3, 'Não possui', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 4, 6, 'Holanda\nCarneiro\n', 'Não possui', '', '', '0000-00-00', 6, '1982-06-02', '141.699.493-18', '94684-543', 'Nome da rua', '5966', 'A', 'Goiânia', 'PI', 'Porto Velho', '(00) 00000-0000', '(36) 91261-2107', 'Ana Luiza@gmail.com', '1', '1976-04-21 00:00:00', 0),
(00000000047, 'Emanuelly', 'Eça\nMassa\nAbreu\n', './upload/img/member-photo/Emanuelly', 'Bolsonaro\nMartins\nAlvim\n', 'Anchieta\nMoreira\nBolsonaro\n', 2, 'Dorneles\nCabral\nAnunciação\nGonçalves\n', '2', 'Ensino Médio', 'Completo', '1', 6, ' Andrada Machado Albuquerque Curado,  Aleluia Barbosa Alcântara Cardoso,  Macedo Almeida,  Gouveia Araújo,  Carnaval Assis Antunes Almeida,  Bueno Castro', '0', '0000-00-00', 1, 1, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1989-09-20', '87.718.882-22', '88204-611', 'Nome da rua', '4602', 'A', 'Recife', 'RO', 'Fortaleza', '(00) 00000-0000', '(15) 92943-6363', 'Emanuelly@gmail.com', '1', '2002-09-20 00:00:00', 0),
(00000000048, 'Diane', 'Borges\nCarmo\nRamires\n', './upload/img/member-photo/Diane', 'Bernardes\nDuarte\nAmor\nAguiar\n', 'Faleiros\nCunha\n', 3, 'Não possui', '1', 'Doutorado', 'Completo', '1', 6, ' Castro Bermudes Eça Alencar,  Gato Namorado Alvim,  Carmo Encarnação,  Bandeira Lins Fonseca,  Queirós Gonçales Faro,  Esteves Bernardes Fagundes Ascensão', '1', '2001-12-02', 5, 4, 'Não possui', '7491356941569', 'SSP-AL', 'AL', '1983-02-06', 2, '1992-06-13', '572.448.43-58', '91729-962', 'Nome da rua', '9745', 'Não Possui', 'Porto Velho', 'RR', 'Goiânia', '(00) 00000-0000', '(43) 91217-4877', 'Diane@gmail.com', '1', '2004-05-13 00:00:00', 0),
(00000000049, 'Jade', 'Coutinho\nCamões\nBolsonaro\n', './upload/img/member-photo/Jade', 'Bocaiuva\nAbreu\nFigo\nFerreira\n', 'Azeredo\nAmaral\nBarroso\nCotrim\n', 4, 'Não possui', '2', '4ª Série do Ensino Fundamental', 'Completo', '1', 5, ' Altamirano Figo Amigo Azevedo,  Gusmão Andrade,  Alcântara Gonçales,  Homem Amaral,  Antunes Cabral Exaltação Amigo', '0', '0000-00-00', 2, 6, 'Não possui', '3182124284693', 'SSP-DF', 'DF', '1997-11-08', 6, '2003-03-02', '610.57.591-30', '14505-281', 'Nome da rua', '2812', 'Não Possui', 'Porto Velho', 'GO', 'Palmas', '(00) 00000-0000', '(43) 95136-6466', 'Jade@gmail.com', '1', '1976-10-02 00:00:00', 0),
(00000000050, 'Emmanuelle', 'Martins\nAnchieta\n', './upload/img/member-photo/Emmanuelle', 'Amaral\nPorto\n', 'Bernardes\nFreire\nGalvão\n', 1, 'Não possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 4, 6, 'Alvarenga\nAleluia\nCarvalhal\n', '6911038010453', 'SSP-PI', 'PI', '1975-02-21', 1, '1978-10-02', '78.350.858-42', '53608-439', 'Nome da rua', 'S/N', 'Não Possui', 'Maceió', 'RO', 'Palmas', '(00) 00000-0000', '(41) 94682-4573', 'Emmanuelle@gmail.com', '1', '1983-08-14 00:00:00', 0),
(00000000051, 'Samira', 'Muniz\nAltamirano\nCoutinho\n', './upload/img/member-photo/Samira', 'Figueiredo\nCoimbra\nBermudes\nAnunciação\n', 'Morais\nCotrim\nHomem\n', 2, 'Amor\nCardoso\n', '1', 'Ensino Médio', 'Incompleto', '1', 3, ' Fonseca Coutinho,  Faleiros Alvim,  Azevedo Carnaval', '0', '0000-00-00', 2, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 4, '1971-01-20', '84.414.391-65', '96213-573', 'Nome da rua', '6725', 'Não Possui', 'Maceió', 'PE', 'Porto Velho', '(78) 94016-9448', '(77) 93518-9575', 'Samira@gmail.com', '1', '2010-05-14 00:00:00', 0),
(00000000052, 'Ana Luiza', 'Botelho\nAndrade\nNavarro\n', './upload/img/member-photo/Ana Luiza', 'Marques\nAmigo\n', 'Aleluia\nFaro\nGomes\n', 5, 'Não possui', '2', 'Ensino Técnico', 'Completo', '1', 5, ' Álvares Costa Gonzaga,  Anchieta Barbosa Borsoi Alvarenga,  Adorno Camões Carmo Dambros,  Outeiro Oliva,  Abreu Freitas Bocaiuva Antunes', '1', '1996-04-04', 4, 5, 'Braga\nLeitão\nBernardes\n', '2616093233803', 'SSP-DF', 'DF', '1993-12-16', 5, '2016-05-14', '598.407.662-86', '52891-913', 'Nome da rua', 'S/N', 'Não Possui', 'Cuiabá', 'RR', 'Macapá', '(44) 95855-2658', '(69) 93506-9501', 'Ana Luiza@gmail.com', '1', '2021-03-30 00:00:00', 0),
(00000000053, 'Lia', 'Martins\nCotrim\nFerrão\n', './upload/img/member-photo/Lia', 'Borba\nFagundes\nEça\nAnchieta\n', 'Homem\nMaduro\n', 3, 'Não possui', '1', 'Ensino Médio', 'Completo', '1', 5, ' Bueno Gonçales Braga,  Madureira Freitas,  Ascensão Aguiar Almeida Anjos,  Coutinho Gonzaga Botelho Altamirano,  Alcântara Carneiro Alvarenga Amigo', '1', '1993-02-09', 1, 6, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1978-12-31', '909.433.454-21', '57422-61', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'AP', 'João Pessoa', '(00) 00000-0000', '(63) 92821-1783', 'Lia@gmail.com', '1', '1992-07-07 00:00:00', 0),
(00000000054, 'Antônia', 'Ascensão\nAzevedo\n', './upload/img/member-photo/Antônia', 'Mello\nAragão\nGama\n', 'Figueiredo\nAndrada\nBraga\nAlvim\n', 3, 'Não possui', '1', 'Ensino Superior', 'Completo', '1', 2, ' Ascensão Figueiredo Araújo Barroso,  Assis Azeredo Mairinque', '0', '0000-00-00', 2, 6, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '2013-04-24', '30.351.88-63', '70276-792', 'Nome da rua', 'S/N', 'Não Possui', 'Manaus', 'RR', 'Campo Grande', '(32) 99266-2470', '(99) 97776-9762', 'Antônia@gmail.com', '1', '1987-04-11 00:00:00', 0),
(00000000055, 'Inês', 'Carvalhosa\nCarmo\nConstante\n', './upload/img/member-photo/Inês', 'Albuquerque\nBragança\n', 'Amaral\nAndrada\nBermudes\n', 2, 'Dambros\nBandeira\nCosta\nEsteves\n', '2', 'Doutorado', 'Incompleto', '1', 2, ' Carvalhosa Duarte Bermudes,  Santiago Gama', '0', '0000-00-00', 1, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 4, '1983-07-30', '100.651.460-45', '319-519', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'PI', 'Aracaju', '(44) 98390-3998', '(86) 93322-3160', 'Inês@gmail.com', '1', '1987-02-07 00:00:00', 0),
(00000000056, 'Valentina', 'Álvares\nCastilho\n', './upload/img/member-photo/Valentina', 'Brasiliense\nFerrão\nCerejeira\nCafé\n', 'Botelho\nAguiar\nAltamirano\n', 2, 'Exaltação\nNaves\n', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 1, 3, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '1996-05-07', '990.219.379-72', '64389-692', 'Nome da rua', '2404', 'Não Possui', 'João Pessoa', 'DF', 'São Paulo', '(34) 98618-1885', '(32) 96782-9830', 'Valentina@gmail.com', '1', '1989-11-27 00:00:00', 0),
(00000000057, 'Francisca', 'Cordeiro\nNóbrega\nBorges\n', './upload/img/member-photo/Francisca', 'Paiva\nMendes\n', 'Guimarães\nBermudes\nAssis\n', 5, 'Não possui', '1', 'Alfabetizado', 'Completo', '1', 5, ' Antunes Luz Botelho Azevedo,  Bernardes Farias,  Cordeiro Figo Holanda Coutinho,  Café Dambros Amor Anes,  Altamirano Borges Braga', '1', '2004-07-05', 3, 7, 'Não possui', '2132185550939', 'SSP-PR', 'PR', '2004-09-12', 5, '1978-07-15', '425.619.249-70', '56508-536', 'Nome da rua', '7698', 'A', 'Teresina', 'MG', 'Salvador', '(81) 91687-7873', '(89) 92602-7608', 'Francisca@gmail.com', '1', '1982-08-19 00:00:00', 0),
(00000000058, 'Sílvia', 'Carneiro\nFreitas\nPais\n', './upload/img/member-photo/Sílvia', 'Barroso\nFioravante\nCruz\n', 'Gonçales\nAscensão\nBorba\n', 5, 'Não possui', '2', 'Ensino Superior', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 4, 5, 'Bastos\nGama\nFigueiroa\n', 'Não possui', '', '', '0000-00-00', 5, '2000-08-22', '197.872.605-90', '55553-685', 'Nome da rua', '9206', 'Não Possui', 'Macapá', 'MT', 'Teresina', '(88) 92927-8945', '(50) 97916-8009', 'Sílvia@gmail.com', '1', '1992-07-01 00:00:00', 0),
(00000000059, 'João', 'Fonseca\nFreitas\n', './upload/img/member-photo/João', 'Pereira\nFerrolho\nMassa\n', 'Chaves\nHora\n', 5, 'Não possui', '1', 'Ensino Técnico', 'Incompleto', '1', 0, 'Não possui', '1', '1972-07-13', 4, 7, 'Freitas\nMoraes\n', 'Não possui', '', '', '0000-00-00', 6, '1970-02-25', '700.571.73-23', '74628-696', 'Nome da rua', '8078', 'A', 'Recife', 'BA', 'Manaus', '(00) 00000-0000', '(61) 98472-7132', 'João@gmail.com', '1', '1970-04-19 00:00:00', 0),
(00000000060, 'Franciele', 'Carvalho\nAleluia\nAraújo\n', './upload/img/member-photo/Franciele', 'Malta\nFaria\n', 'Faro\nBorsoi\nAndrade\nAlmeida\n', 4, 'Não possui', '2', 'Ensino Fundamental', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 4, 7, 'Leite\nSoeiro\n', 'Não possui', '', '', '0000-00-00', 6, '1999-01-06', '199.80.595-42', '4462-551', 'Nome da rua', '2819', 'A', 'Belém', 'AL', 'Aracaju', '(28) 94220-7617', '(26) 98288-7361', 'Franciele@gmail.com', '1', '2016-07-08 00:00:00', 0),
(00000000061, 'Ariane', 'Ascensão\nÁlvares\n', './upload/img/member-photo/Ariane', 'Carmo\nAmigo\nFalópio\n', 'Exaltação\nFortaleza\nBarroso\n', 4, 'Não possui', '1', 'Ensino Fundamental', 'Incompleto', '1', 4, ' Barros Dias,  Aguiar Prado Bernades,  Furtado Antunes Barbosa Bicalho,  Couto Alencar', '1', '1976-04-14', 4, 1, 'Gouveia\nAlbuquerque\n', 'Não possui', '', '', '0000-00-00', 1, '2011-06-06', '999.67.259-46', '61872-55', 'Nome da rua', 'S/N', 'Não Possui', 'Recife', 'AP', 'Palmas', '(15) 96161-2504', '(53) 93084-5288', 'Ariane@gmail.com', '1', '1986-07-12 00:00:00', 0),
(00000000062, 'Alice', 'Pinto\nAlbuquerque\nBotelho\n', './upload/img/member-photo/Alice', 'Borges\nLocatelli\n', 'Faria\nCarvalhal\n', 5, 'Não possui', '2', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '2010-06-14', '212.469.83-88', '99175-558', 'Nome da rua', '5212', 'A', 'Rio Branco', 'PE', 'Fortaleza', '(42) 94064-3029', '(23) 96200-2365', 'Alice@gmail.com', '1', '2020-01-15 00:00:00', 0),
(00000000063, 'Alícia', 'França\nAnchieta\nAmorim\n', './upload/img/member-photo/Alícia', 'Martins\nFerreira\nBarbosa\nAmaral\n', 'Bernades\nAnjos\nAnes\nFaro\n', 5, 'Não possui', '1', 'Doutorado', 'Completo', '1', 3, ' Freitas Borges Bermudes,  Duarte Holanda Farias Chaves,  Ferrolho Marques Bastos', '0', '0000-00-00', 1, 7, 'Não possui', '4698691871390', 'SSP-SE', 'SE', '2002-04-05', 4, '2013-07-05', '221.698.684-46', '65665-116', 'Nome da rua', '7524', 'Não Possui', 'São Luís', 'PE', 'Macapá', '(99) 91481-8380', '(65) 98324-3275', 'Alícia@gmail.com', '1', '2012-07-16 00:00:00', 0),
(00000000064, 'Micaela', 'Braga\nAmaral\n', './upload/img/member-photo/Micaela', 'Anunciação\nFaro\nBarroso\n', 'Assis\nAragão\nBermudes\nEsteves\n', 1, 'Não possui', '2', 'Ensino Técnico', 'Completo', '1', 0, 'Não possui', '0', '0000-00-00', 2, 7, 'Não possui', '2745959209464', 'SSP-SE', 'SE', '1998-05-13', 2, '2008-02-25', '619.489.101-68', '33454-309', 'Nome da rua', '5077', 'A', 'Maceió', 'AP', 'Boa Vista', '(00) 00000-0000', '(32) 94696-4720', 'Micaela@gmail.com', '1', '2005-09-11 00:00:00', 0),
(00000000065, 'Anita', 'Menino\nFigueiroa\n', './upload/img/member-photo/Anita', 'Pascoal\nNogueira\nAlmeida\nFreire\n', 'Almeida\nÁlvares\nAdães\n', 3, 'Não possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 2, 7, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1974-03-10', '520.741.512-98', '64019-11', 'Nome da rua', 'S/N', 'Não Possui', 'Porto Velho', 'PA', 'Belém', '(70) 94017-1562', '(75) 97106-2553', 'Anita@gmail.com', '1', '1976-04-13 00:00:00', 0),
(00000000066, 'Betina', 'Fortaleza\nMalafaia\n', './upload/img/member-photo/Betina', 'Garrastazu\nAraújo\n', 'Chaves\nAlencar\nBrasiliense\nCastilho\n', 5, 'Não possui', '2', 'Doutorado', 'Incompleto', '1', 1, ' Dorneles Cardoso Gonzaga', '0', '0000-00-00', 5, 2, 'Não possui', '4032602585371', 'SSP-AC', 'AC', '1993-02-13', 3, '1977-07-11', '727.599.810-63', '47281-432', 'Nome da rua', 'S/N', 'Não Possui', 'Porto Velho', 'AL', 'Rio Branco', '(72) 96755-2881', '(61) 98683-3435', 'Betina@gmail.com', '1', '1976-03-22 00:00:00', 0),
(00000000067, 'Regina', 'Alves\nGama\nCruz\n', './upload/img/member-photo/Regina', 'Madureira\nNegrete\n', 'Botelho\nMarques\nAmigo\n', 5, 'Não possui', '2', 'Ensino Técnico', 'Incompleto', '1', 4, ' Aragão Andrade Ramalho,  Camões Bandeira Aguiar Alvarenga,  Gonzaga Falópio Bandeira,  Faro Anjos Aleluia Borsoi', '1', '1999-10-07', 3, 6, 'Não possui', '1508143726990', 'SSP-RO', 'RO', '1989-06-26', 3, '2005-09-14', '874.361.288-58', '26218-558', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'RO', 'Manaus', '(39) 99527-3715', '(65) 92830-1448', 'Regina@gmail.com', '1', '2005-09-01 00:00:00', 0),
(00000000068, 'Sueli', 'Falqueto\nAlbuquerque\nCamacho\n', './upload/img/member-photo/Sueli', 'Pires\nCerejeira\n', 'Anunciação\nAnjos\nAnjos\nCafé\n', 5, 'Não possui', '2', 'Alfabetizado', 'Completo', '1', 4, ' Bispo Aguiar Alvarenga,  Cardoso Penteado Gato,  Prudente Anchieta Alvarenga Amigo,  Almeida França Faleiros Anes', '0', '0000-00-00', 5, 1, 'Não possui', '4369183772750', 'SSP-BA', 'BA', '2017-10-28', 5, '1984-09-26', '741.431.416-70', '80548-370', 'Nome da rua', 'S/N', 'Não Possui', 'Natal', 'PB', 'Manaus', '(00) 00000-0000', '(26) 91302-8128', 'Sueli@gmail.com', '1', '2014-03-17 00:00:00', 0),
(00000000069, 'Mara', 'Amigo\nPires\n', './upload/img/member-photo/Mara', 'Bispo\nAlmeida\nAntunes\nBicalho\n', 'Alvim\nAlvarenga\nAltamirano\nMariz\n', 4, 'Não possui', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 7, 'Não possui', '5837013249327', 'SSP-MG', 'MG', '1989-01-18', 6, '1990-11-25', '682.888.397-82', '6823-912', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'TO', 'Rio Branco', '(00) 00000-0000', '(11) 93432-5337', 'Mara@gmail.com', '1', '1985-03-10 00:00:00', 0),
(00000000070, 'Eva', 'Reis\nBarroso\nCotrim\n', './upload/img/member-photo/Eva', 'Ferrolho\nDiegues\nJardim\nBastos\n', 'Amorim\nAndrade\nGonzaga\nMairinque\n', 3, 'Não possui', '2', 'Ensino Médio', 'Completo', '1', 6, ' Bermudes Malta Coutinho,  Ascensão Bernades Gonçales,  Cunha Gama Nogueira,  Evangelista Gouveia,  Couto Eça,  Anes Dias Carnaval', '1', '2002-11-08', 3, 2, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '1983-12-26', '557.814.66-93', '95079-654', 'Nome da rua', '7065', 'A', 'Palmas', 'RJ', 'João Pessoa', '(76) 96202-9519', '(10) 97375-3133', 'Eva@gmail.com', '1', '1976-06-30 00:00:00', 0),
(00000000071, 'Ângela', 'Altamirano\nArruda\n', './upload/img/member-photo/Ângela', 'Hora\nBocaiuva\nCarnaval\n', 'Braga\nPaiva\nGouveia\n', 1, 'Não possui', '2', 'Ensino Superior', 'Completo', '1', 6, ' Camacho Lacerda,  Pacheco Arruda,  Morato Guimarães Bandeira Anchieta,  Ferrolho Barbosa Bicalho Pereira,  Faro Lacerda,  Macedo Carnaval', '0', '0000-00-00', 2, 4, 'Não possui', '285283175727', 'SSP-RR', 'RR', '2014-11-19', 3, '1986-11-02', '550.19.523-27', '10048-508', 'Nome da rua', 'S/N', 'Não Possui', 'Salvador', 'AP', 'São Luís', '(23) 97572-1826', '(87) 99784-1337', 'Ângela@gmail.com', '1', '2014-12-14 00:00:00', 0),
(00000000072, 'Beatriz', 'Moreira\nCosta\n', './upload/img/member-photo/Beatriz', 'Borges\nAnjos\nAnchieta\nCoelho\n', 'Amigo\nFigueiroa\n', 2, 'Aragão\nFerrão\nMalta\n', '2', 'Ensino Médio', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 2, 3, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1988-11-24', '784.603.375-37', '60855-893', 'Nome da rua', 'S/N', 'Não Possui', 'João Pessoa', 'CE', 'Macapá', '(00) 00000-0000', '(21) 95865-4134', 'Beatriz@gmail.com', '1', '1995-06-05 00:00:00', 0),
(00000000073, 'Marisa', 'Dambros\nBorges\n', './upload/img/member-photo/Marisa', 'Altamirano\nCafé\nCouto\nBolsonaro\n', 'Esteves\nCarnaval\n', 4, 'Não possui', '2', 'Ensino Fundamental', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 7, 'Não possui', '1474107446971', 'SSP-SP', 'SP', '1973-07-20', 3, '2000-11-16', '434.172.58-81', '52209-882', 'Nome da rua', 'S/N', 'Não Possui', 'Salvador', 'RO', 'Rio Branco', '(71) 97116-2035', '(74) 91177-2510', 'Marisa@gmail.com', '1', '2005-07-05 00:00:00', 0),
(00000000074, 'Fabiana', 'Alvim\nFigueira\nMaduro\n', './upload/img/member-photo/Fabiana', 'Padrão\nFreire\n', 'Fontes\nBrasil\nBarros\nAmor\n', 3, 'Não possui', '2', 'Ensino Técnico', 'Incompleto', '1', 2, ' Exaltação Alvarenga Assis Anes,  Carmo Brandão', '1', '1978-04-21', 4, 2, 'Hora\nMiranda\nNoronha\n', 'Não possui', '', '', '0000-00-00', 2, '2010-06-03', '518.105.240-27', '75256-69', 'Nome da rua', 'S/N', 'Não Possui', 'Belém', 'TO', 'Macapá', '(79) 99209-6014', '(81) 99729-3250', 'Fabiana@gmail.com', '1', '1970-05-30 00:00:00', 0),
(00000000075, 'Catarina', 'Brasiliense\nCarvalhal\nAdorno\n', './upload/img/member-photo/Catarina', 'Dambros\nSanches\n', 'Exaltação\nFaleiros\n', 1, 'Não possui', '2', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 1, 3, 'Não possui', '2759386679541', 'SSP-PB', 'PB', '2005-12-23', 3, '2018-05-06', '163.125.597-64', '55392-780', 'Nome da rua', '164', 'Não Possui', 'Belém', 'PB', 'Macapá', '(00) 00000-0000', '(87) 96797-7778', 'Catarina@gmail.com', '1', '1994-11-11 00:00:00', 0),
(00000000076, 'Michelle', 'Anchieta\nAguiar\nBocaiuva\n', './upload/img/member-photo/Michelle', 'Anunciação\nBispo\nBastos\n', 'Alves\nNoronha\nCoimbra\n', 3, 'Não possui', '2', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 8, 'Não possui', 'Não possui', '', '', '0000-00-00', 3, '2018-07-04', '984.568.997-40', '75414-779', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'RN', 'São Luís', '(10) 94926-8916', '(36) 92579-5847', 'Michelle@gmail.com', '1', '1991-11-16 00:00:00', 0),
(00000000077, 'Ana Luísa', 'Cabral\nCarneiro\n', './upload/img/member-photo/Ana Luísa', 'Braga\nAnjos\nPires\nAntunes\n', 'Borges\nBrandão\nFigueiredo\nBolsonaro\n', 4, 'Não possui', '2', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 2, 7, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '1991-09-28', '930.799.939-44', '37812-133', 'Nome da rua', 'S/N', 'Não Possui', 'Macapá', 'TO', 'Porto Velho', '(17) 98749-1832', '(71) 98157-6524', 'Ana Luísa@gmail.com', '1', '2020-08-12 00:00:00', 0),
(00000000078, 'Ana Júlia', 'Carnaval\nAlencar\nChaves\n', './upload/img/member-photo/Ana Júlia', 'Aleluia\nEncarnação\n', 'Mariz\nGato\nBocaiuva\nAssis\n', 1, 'Não possui', '1', 'Ensino Superior', 'Incompleto', '0', 0, 'Não possui', '1', '1993-05-15', 3, 6, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1993-08-08', '697.559.810-18', '90609-968', 'Nome da rua', '7876', 'A', 'Fortaleza', 'DF', 'Macapá', '(00) 00000-0000', '(77) 91379-6259', 'Ana Júlia@gmail.com', '1', '1992-07-18 00:00:00', 0),
(00000000079, 'Leonardo', 'Eça\nAmorim\n', './upload/img/member-photo/Leonardo', 'Fonseca\nHomem\nBernades\n', 'Aguiar\nAlves\nFrota\n', 5, 'Não possui', '1', 'Ensino Médio', 'Completo', '1', 1, ' Bernades Alvim', '1', '2007-05-05', 5, 6, 'Não possui', '9663208093259', 'SSP-ES', 'ES', '2005-03-29', 2, '1991-04-11', '877.136.563-83', '29004-847', 'Nome da rua', 'S/N', 'Não Possui', 'Palmas', 'AP', 'Teresina', '(00) 00000-0000', '(58) 95567-9286', 'Leonardo@gmail.com', '1', '2004-06-09 00:00:00', 0),
(00000000080, 'Isabella', 'Assis\nEncarnação\n', './upload/img/member-photo/Isabella', 'Moraes\nEça\n', 'Lins\nAmaral\nFrança\n', 5, 'Não possui', '1', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 2, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 6, '2019-04-30', '523.373.101-47', '20348-743', 'Nome da rua', '8741', 'Não Possui', 'João Pessoa', 'BA', 'Manaus', '(98) 95367-4328', '(21) 92650-8945', 'Isabella@gmail.com', '1', '1971-07-06 00:00:00', 0),
(00000000081, 'Kamila', 'Faleiros\nCarvalhal\n', './upload/img/member-photo/Kamila', 'Gonçalves\nCarmo\nAraújo\n', 'Amaral\nMagalhães\n', 1, 'Não possui', '1', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '1', '2009-01-01', 4, 3, 'Amorim\nFarias\nAntunes\n', '3017910526879', 'SSP-AC', 'AC', '2016-08-06', 2, '2006-01-16', '211.876.148-37', '31705-364', 'Nome da rua', '699', 'A', 'Brasília', 'AL', 'Rio Branco', '(00) 00000-0000', '(60) 91119-9946', 'Kamila@gmail.com', '1', '1972-06-17 00:00:00', 0),
(00000000082, 'Andréia', 'Lacerda\nCotrim\n', './upload/img/member-photo/Andréia', 'Andrada\nCastilho\nAndrada\nBicalho\n', 'Pais\nGalvão\nCamões\n', 3, 'Não possui', '2', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não possui', '1', '2003-06-14', 3, 3, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '1993-04-15', '180.256.268-50', '67437-375', 'Nome da rua', '2821', 'Não Possui', 'Fortaleza', 'TO', 'Belo Horizonte', '(11) 96136-1673', '(27) 95734-7443', 'Andréia@gmail.com', '1', '1992-05-21 00:00:00', 0),
(00000000083, 'Michelle', 'Gato\nJardim\n', './upload/img/member-photo/Michelle', 'Ascensão\nCaminha\nAmorim\nMoro\n', 'Mendes\nConstante\n', 2, 'Carneiro\nGuimarães\n', '1', 'Ensino Técnico', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 2, 3, 'Não possui', '6079910196842', 'SSP-RJ', 'RJ', '1985-12-28', 3, '1984-03-06', '18.447.899-38', '36959-166', 'Nome da rua', '6763', 'A', 'Boa Vista', 'AP', 'Fortaleza', '(48) 93640-8507', '(55) 94212-2013', 'Michelle@gmail.com', '1', '2006-03-23 00:00:00', 0),
(00000000084, 'Kiara', 'Freitas\nHomem\n', './upload/img/member-photo/Kiara', 'Aragão\nGarrastazu\nBraga\nMesquita\n', 'Dorneles\nFagundes\nBarbosa\n', 4, 'Não possui', '2', 'Ensino Superior', 'Incompleto', '0', 0, 'Não possui', '1', '1993-07-28', 2, 2, 'Não possui', 'Não possui', '', '', '0000-00-00', 4, '2019-12-06', '985.225.967-32', '47069-975', 'Nome da rua', '281', 'A', 'Porto Velho', 'BA', 'Belém', '(00) 00000-0000', '(32) 95804-2592', 'Kiara@gmail.com', '1', '2020-05-03 00:00:00', 0),
(00000000085, 'Carol', 'Anchieta\nBolsonaro\n', './upload/img/member-photo/Carol', 'Gomes\nBicalho\n', 'Figueiroa\nHungria\nBernades\n', 3, 'Não possui', '2', 'Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 4, 2, 'Aragão\nEncarnação\n', '6664855027119', 'SSP-AM', 'AM', '1999-08-21', 1, '1991-12-17', '942.527.572-40', '36258-872', 'Nome da rua', 'S/N', 'Não Possui', 'Manaus', 'RR', 'Rio Branco', '(59) 97558-3127', '(49) 99599-6021', 'Carol@gmail.com', '1', '1994-09-16 00:00:00', 0),
(00000000086, 'Isabella', 'Pedroso\nAltamirano\n', './upload/img/member-photo/Isabella', 'Borba\nLeite\nJardim\n', 'Azevedo\nDuarte\n', 5, 'Não possui', '1', 'Ensino Superior', 'Completo', '1', 6, ' Homem Amor,  Alvarenga Cotrim Altamirano Altamirano,  Barros Gouveia Bernardes Carneiro,  Nóbrega Figo Carmo,  Ferraz Eça,  Fernandes Castilho Amorim', '0', '0000-00-00', 4, 6, 'Ferraz\nBraga\n', 'Não possui', '', '', '0000-00-00', 3, '2013-01-25', '47.910.966-23', '29101-940', 'Nome da rua', 'S/N', 'Não Possui', 'Aracaju', 'PI', 'João Pessoa', '(60) 92389-3257', '(83) 96237-5500', 'Isabella@gmail.com', '1', '1979-06-08 00:00:00', 0),
(00000000087, 'Ludmila', 'Caminha\nAguiar\nGama\n', './upload/img/member-photo/Ludmila', 'Malafaia\nAnjos\nBraga\nBueno\n', 'Chaves\nCarvalhosa\nFigueira\nAraújo\n', 2, 'Moro\nAnjos\n', '1', 'Ensino Superior', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 1, 2, 'Não possui', '7494492185256', 'SSP-MG', 'MG', '1997-02-17', 2, '2011-12-10', '903.82.390-53', '10422-865', 'Nome da rua', '2606', 'Não Possui', 'Porto Velho', 'SC', 'Recife', '(00) 00000-0000', '(28) 92834-1261', 'Ludmila@gmail.com', '1', '2012-01-02 00:00:00', 0),
(00000000088, 'Jenifer', 'Carvalho\nAmor\nCarnaval\n', './upload/img/member-photo/Jenifer', 'Monteiro\nFortaleza\nAguiar\n', 'Bandeira\nAntunes\n', 2, 'Bastos\nAdães\nCamões\n', '1', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não possui', '1', '1977-02-28', 1, 8, 'Não possui', '6931523884471', 'SSP-RJ', 'RJ', '1983-08-25', 4, '1993-11-14', '659.205.648-27', '81088-143', 'Nome da rua', 'S/N', 'Não Possui', 'Fortaleza', 'BA', 'Macapá', '(34) 99239-8411', '(97) 98883-8826', 'Jenifer@gmail.com', '1', '2004-06-25 00:00:00', 0),
(00000000089, 'Cristiana', 'Anjos\nBastos\nCamargo\n', './upload/img/member-photo/Cristiana', 'Araújo\nBernardes\nCamões\nCamões\n', 'Carvalho\nAlmeida\nCarmo\nCoimbra\n', 2, 'Borba\nMacedo\nBandeira\n', '1', 'Ensino Médio', 'Incompleto', '1', 6, ' Melo Gonzaga,  Ferraz Brasiliense,  Carnaval Ferraz,  Leme Brasiliense Bermudes,  Pensamento Castilho,  Furtado Hernandes', '1', '1994-06-12', 4, 2, 'Lacerda\nBernades\n', '6263289488950', 'SSP-ES', 'ES', '1983-04-27', 4, '2014-07-15', '32.54.903-29', '19114-936', 'Nome da rua', '5559', 'Não Possui', 'Porto Velho', 'PA', 'Maceió', '(86) 97320-8505', '(89) 96588-9217', 'Cristiana@gmail.com', '1', '1971-06-20 00:00:00', 0),
(00000000090, 'Diane', 'Bernardes\nAlvarenga\nCerejeira\n', './upload/img/member-photo/Diane', 'Pereira\nFaro\n', 'Brasiliense\nCafé\nFalqueto\nFerrão\n', 4, 'Não possui', '2', 'Alfabetizado', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 1, 'Não possui', '9979525970915', 'SSP-RN', 'RN', '2019-10-30', 1, '2017-05-09', '548.786.408-78', '93034-904', 'Nome da rua', '5363', 'Não Possui', 'Fortaleza', 'TO', 'Rio Branco', '(00) 00000-0000', '(14) 99370-5882', 'Diane@gmail.com', '1', '2002-02-24 00:00:00', 0),
(00000000091, 'Cecília', 'Anchieta\nRibeiro\nBorsoi\n', './upload/img/member-photo/Cecília', 'Anunciação\nBrandão\nBragança\n', 'Amor\nBotelho\nBorges\nFreitas\n', 5, 'Não possui', '2', 'Ensino Superior', 'Incompleto', '1', 5, ' Azeredo Carmo Caminha Albuquerque,  Antunes Brasil Brandão,  Matos Altamirano,  Ferrão Andrade Aleluia Abreu,  Aleluia Ferraz Anes Fernandes', '1', '1992-02-24', 4, 6, 'Amor\nBarros\nAmaral\n', '3974708997964', 'SSP-RJ', 'RJ', '1971-09-11', 6, '2011-11-02', '232.748.538-41', '63356-186', 'Nome da rua', 'S/N', 'Não Possui', 'Macapá', 'RO', 'Macapá', '(68) 93161-7556', '(65) 99991-2676', 'Cecília@gmail.com', '1', '1981-04-18 00:00:00', 0),
(00000000092, 'Karine', 'Marques\nNeves\n', './upload/img/member-photo/Karine', 'Albuquerque\nDias\nCamacho\nAguiar\n', 'Anjos\nAlbuquerque\nCarneiro\nAzeredo\n', 3, 'Não possui', '1', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 2, 2, 'Não possui', '2893536106603', 'SSP-CE', 'CE', '2015-04-14', 6, '2002-08-11', '4.185.443-58', '86826-955', 'Nome da rua', 'S/N', 'Não Possui', 'Teresina', 'AC', 'São Luís', '(32) 99698-6860', '(18) 92823-1360', 'Karine@gmail.com', '1', '1999-05-08 00:00:00', 0),
(00000000093, 'Eva', 'Cunha\nGama\n', './upload/img/member-photo/Eva', 'Amigo\nAssis\nCarnaval\nAndrada\n', 'Amigo\nBispo\nAmaral\nAlcântara\n', 2, 'Arruda\nFigo\n', '1', 'Ensino Superior', 'Incompleto', '0', 0, 'Não possui', '1', '1985-03-22', 5, 5, 'Não possui', '7163037613442', 'SSP-SC', 'SC', '1988-05-10', 1, '1994-07-01', '563.104.361-50', '7861-770', 'Nome da rua', 'S/N', 'Não Possui', 'Palmas', 'SE', 'Recife', '(00) 00000-0000', '(89) 95536-9743', 'Eva@gmail.com', '1', '1978-03-29 00:00:00', 0),
(00000000094, 'Karine', 'Castilho\nHomem\nMiranda\n', './upload/img/member-photo/Karine', 'Coutinho\nAlmeida\n', 'Mairinque\nPeçanha\n', 1, 'Não possui', '2', 'Alfabetizado', 'Completo', '1', 2, ' Fontes Alencar,  Furquim Leite', '1', '2000-04-19', 3, 3, 'Não possui', '6676717972402', 'SSP-AM', 'AM', '1990-11-22', 2, '2013-11-17', '900.247.848-72', '25318-787', 'Nome da rua', '8870', 'A', 'Goiânia', 'MG', 'São Luís', '(29) 91143-8872', '(71) 94983-3277', 'Karine@gmail.com', '1', '2004-06-22 00:00:00', 0),
(00000000095, 'Lúcia', 'Guimarães\nFurtado\n', './upload/img/member-photo/Lúcia', 'Almeida\nAleluia\nAntunes\n', 'Barroso\nAssis\nAmorim\nBrandão\n', 3, 'Não possui', '1', 'Ensino Técnico', 'Completo', '1', 6, ' Santarrosa Alcântara Café,  Alvarenga Brandão Coimbra Anes,  Machado Amaral,  Anes Gomes Junqueira,  Dambros Leitão Batista,  Gato Arruda Abreu', '1', '2002-02-21', 1, 1, 'Não possui', 'Não possui', '', '', '0000-00-00', 6, '2016-12-25', '792.49.649-16', '14530-853', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'BA', 'Manaus', '(00) 00000-0000', '(24) 99116-4469', 'Lúcia@gmail.com', '1', '1999-12-19 00:00:00', 0),
(00000000096, 'Natasha', 'Bolsonaro\nBorsoi\nPinto\n', './upload/img/member-photo/Natasha', 'Leitão\nAlcântara\n', 'Dorneles\nBraga\nMarques\nAleluia\n', 5, 'Não possui', '2', '4ª Série do Ensino Fundamental', 'Completo', '1', 1, ' Bragança Luz', '0', '0000-00-00', 1, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 2, '1988-11-22', '142.611.890-27', '47297-576', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'PB', 'Manaus', '(00) 00000-0000', '(65) 95325-8045', 'Natasha@gmail.com', '1', '2006-12-06 00:00:00', 0),
(00000000097, 'Marta', 'Coutinho\nAndrada\n', './upload/img/member-photo/Marta', 'Anunciação\nAssis\n', 'Antunes\nBocaiuva\n', 3, 'Não possui', '2', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não possui', '0', '0000-00-00', 3, 5, 'Não possui', 'Não possui', '', '', '0000-00-00', 6, '2002-10-06', '226.522.507-48', '65128-249', 'Nome da rua', '7050', 'Não Possui', 'Teresina', 'AP', 'Aracaju', '(93) 93227-5057', '(85) 94171-4362', 'Marta@gmail.com', '1', '1993-05-25 00:00:00', 0),
(00000000098, 'Daniele', 'Anunciação\nCarvalhosa\nPimenta\n', './upload/img/member-photo/Daniele', 'Alencar\nAlencar\nÁlvares\n', 'Holanda\nAguiar\nEça\n', 2, 'Encarnação\nBarbosa\nAnchieta\nGusmão\n', '2', 'Alfabetizado', 'Incompleto', '1', 0, 'Não possui', '0', '0000-00-00', 1, 6, 'Não possui', '9109184687902', 'SSP-RO', 'RO', '1971-02-12', 6, '2003-04-25', '231.629.175-15', '46869-966', 'Nome da rua', '7712', 'A', 'Rio Branco', 'AC', 'João Pessoa', '(00) 00000-0000', '(17) 96580-2857', 'Daniele@gmail.com', '1', '2021-09-21 00:00:00', 0),
(00000000099, 'Rosângela', 'Cerejeira\nConstante\n', './upload/img/member-photo/Rosângela', 'Aragão\nBarroso\nCaminha\n', 'Aleluia\nAlbuquerque\nAmor\nBarros\n', 3, 'Não possui', '1', 'Ensino Superior', 'Completo', '1', 0, 'Não possui', '1', '2000-09-23', 5, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 2, '1970-07-20', '479.912.794-90', '3772-241', 'Nome da rua', '3696', 'Não Possui', 'Rio Branco', 'DF', 'São Luís', '(00) 00000-0000', '(82) 95041-7023', 'Rosângela@gmail.com', '1', '1995-10-28 00:00:00', 0),
(00000000100, 'Luiza', 'Adorno\nArruda\nAlcântara\n', './upload/img/member-photo/Luiza', 'Lacerda\nAntunes\nCardoso\n', 'Bragança\nDambros\nFerrão\nGalvão\n', 2, 'Adães\nAragão\n', '1', 'Ensino Fundamental', 'Completo', '0', 0, 'Não possui', '1', '1973-04-16', 3, 4, 'Não possui', 'Não possui', '', '', '0000-00-00', 1, '2020-12-02', '286.712.380-64', '25984-393', 'Nome da rua', 'S/N', 'Não Possui', 'Rio Branco', 'CE', 'Belém', '(00) 00000-0000', '(70) 97862-4679', 'Luiza@gmail.com', '1', '2002-04-08 00:00:00', 0),
(00000000101, 'Gabriela', 'Jardim\nAlmeida\n', './upload/img/member-photo/Gabriela', 'Amigo\nBrasiliense\n', 'Barbosa\nBermudes\nFaro\nAnes\n', 2, 'Alencar\nEsteves\n', '1', 'Ensino Médio', 'Incompleto', '0', 0, 'Não possui', '1', '1982-08-31', 5, 4, 'Não possui', '26905595074', 'SSP-MG', 'MG', '2016-01-25', 3, '1970-01-03', '293.316.290-87', '9838-27', 'Nome da rua', '7109', 'Não Possui', 'Boa Vista', 'MS', 'Belém', '(91) 92607-9800', '(75) 95996-7860', 'Gabriela@gmail.com', '1', '2019-03-25 00:00:00', 0),
(00000000102, 'Samantha', 'Cabral\nAlmeida\nBernardes\n', './upload/img/member-photo/Samantha', 'Marques\nCoentrão\n', 'Marques\nGarrastazu\n', 2, 'Gomes\nAdães\nAguiar\n', '1', 'Ensino Técnico', 'Incompleto', '1', 5, ' Amaral Freire Barros Alencar,  Brasiliense Lopes Amorim Braga,  Amor Nóbrega Jardim,  Ferraz Brandão Álvares Bragança,  Fernandes Lange', '0', '0000-00-00', 1, 8, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '1985-02-04', '631.126.668-27', '31645-635', 'Nome da rua', 'S/N', 'Não Possui', 'Boa Vista', 'MA', 'Manaus', '(00) 00000-0000', '(50) 95393-2251', 'Samantha@gmail.com', '1', '2021-11-06 00:00:00', 0),
(00000000103, 'Andréia', 'Coelho\nMuniz\n', './upload/img/member-photo/Andréia', 'Amorim\nArruda\n', 'Amor\nAltamirano\nCarneiro\n', 4, 'Não possui', '1', 'Alfabetizado', 'Completo', '0', 0, 'Não possui', '0', '0000-00-00', 3, 8, 'Não possui', 'Não possui', '', '', '0000-00-00', 5, '2010-10-30', '652.98.185-73', '24637-411', 'Nome da rua', 'S/N', 'Não Possui', 'Rio Branco', 'AC', 'Macapá', '(00) 00000-0000', '(65) 98302-1606', 'Andréia@gmail.com', '1', '2006-01-08 00:00:00', 0);
INSERT INTO `members` (`id`, `first_name`, `second_name`, `path_image`, `name_father`, `name_mother`, `marital_status`, `conjuge_name`, `sex`, `schooling`, `status_schooling`, `son`, `amount_son`, `name_son`, `comungante`, `baptism_date`, `type_admission`, `id_select_ministerial_function`, `previous_church`, `identity_card`, `identity_emitter`, `state_emitter`, `date_expedition`, `id_select_city_of_birth`, `date_birth`, `c_p_f`, `cep`, `street`, `number_house`, `complement`, `neighborhood`, `uf_cep`, `city_cep`, `telephone`, `cellphone`, `email`, `status`, `date_register`, `id_user`) VALUES
(00000000104, 'Lídia', 'Café\nCamões\n', './upload/img/member-photo/Lídia', 'Adães\nAlencar\nBarroso\nAndrada\n', 'Cerejeira\nCouto\nAmaral\nDias\n', 2, 'Bispo\nCamões\nAndrada\nAmor\n', '1', 'Ensino Superior', 'Incompleto', '1', 4, ' Malta Cotrim Castro,  Jardim Esteves Borsoi Anjos,  Fernandes Andrade Brasil Barbosa,  Batista Chaves Falqueto Alvarenga', '1', '1994-05-03', 2, 4, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '1975-12-02', '483.697.114-25', '85400-773', 'Nome da rua', 'S/N', 'Não Possui', 'Cuiabá', 'RO', 'Macapá', '(94) 94322-1250', '(86) 95971-4979', 'Lídia@gmail.com', '1', '1982-12-18 00:00:00', 0),
(00000000105, 'Emanuel', 'Cotrim\nPinto\nAndrada\n', './upload/img/member-photo/Emanuel', 'Anunciação\nAmorim\n', 'Fioravante\nAscensão\nAzevedo\nAlvim\n', 2, 'Amigo\nBarroso\nBorges\nAnchieta\n', '1', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '1', '1971-10-19', 5, 6, 'Não Possui', '1280249904241', 'SSP-RR', 'RR', '1989-01-11', 3, '1992-05-17', '474.509.431-70', '39946-843', 'Nome da rua', '3098', 'A', 'Natal', 'CE', 'Teresina', '(00) 00000-0000', '(40) 96352-5978', 'Emanuel@gmail.com', '1', '2016-02-07 00:00:00', 0),
(00000000106, 'Iara', 'Junqueira\nAmorim\nAnes\n', './upload/img/member-photo/Iara', 'Furquim\nFrança\nCamacho\n', 'Jardim\nAlcântara\nMarques\n', 3, 'Não Possui', '2', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 2, 5, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '1997-03-24', '714.535.74-70', '79406-945', 'Nome da rua', 'S/N', 'Não Possui', 'Belém', 'BA', 'Goiânia', '(00) 00000-0000', '(24) 94140-3254', 'Iara@gmail.com', '1', '1970-06-06 00:00:00', 0),
(00000000107, 'Hannah', 'Amorim\nAssis\n', './upload/img/member-photo/Hannah', 'Brandão\nCoelho\nBragança\nCarvalho\n', 'Barbosa\nPensamento\nChaves\nBandeira\n', 4, 'Não Possui', '2', 'Ensino Fundamental', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 3, 2, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '1974-11-11', '909.177.940-95', '70399-380', 'Nome da rua', '9509', 'A', 'Porto Velho', 'SE', 'Brasília', '(58) 92351-8897', '(73) 94072-6508', 'Hannah@gmail.com', '1', '1986-10-08 00:00:00', 0),
(00000000108, 'Anderson', 'Penteado\nBastos\nCarnaval\n', './upload/img/member-photo/Anderson', 'Bragança\nAbreu\nCamões\n', 'Azeredo\nBorba\nBotelho\nCarneiro\n', 2, 'Adorno\nCunha\n', '1', 'Ensino Superior', 'Incompleto', '0', 0, 'Não Possui', '1', '2015-08-20', 3, 6, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '2009-09-04', '84.589.243-33', '39884-309', 'Nome da rua', 'S/N', 'Não Possui', 'Natal', 'PA', 'Goiânia', '(54) 99594-7759', '(72) 93232-6030', 'Anderson@gmail.com', '1', '2000-04-10 00:00:00', 0);

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
(27, 6, '2022-05-19', '01:10:11'),
(28, 6, '2022-05-23', '14:18:15'),
(29, 6, '2022-05-23', '14:53:56'),
(30, 6, '2022-05-30', '15:45:44'),
(31, 6, '2022-05-30', '18:34:25'),
(32, 6, '2022-05-30', '18:46:08');

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
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de tabela `report_login`
--
ALTER TABLE `report_login`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
