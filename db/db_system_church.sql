-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Jul-2022 às 03:14
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
-- Estrutura da tabela `departament`
--

CREATE TABLE `departament` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_members` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `members`
--

CREATE TABLE `members` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `uf_cep` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Isabella', 'Moro Aguiar Dorneles', './upload/img/member-photo/Isabella.jpg', 'Brasil Costa Santacruz Aleluia', 'Borba Azevedo', 1, 'Não Possui', '1', 'Ensino Fundamental', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 5, 8, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 2, '1990-03-04', '55.204.292-35', '7119-847', 'Nome da rua', '227', 'A', 'Boa Vista', 'TO', 'Recife', '(00) 00000-0000', '(26) 92448-4405', 'Isabella@gmail.com', '1', '2016-09-21 00:00:00', 0),
(2, 'Carol', 'Brasiliense Meireles', './upload/img/member-photo/Carol.jpg', 'Gonçalves Fontes Bispo Brandão', 'Naves Moreira', 1, 'Não Possui', '1', 'Ensino Superior', 'Completo', '0', 0, 'Não Possui', '1', '1991-04-01', 4, 4, 'Mendes Brandão', '458227873525', 'SSP-SP', 'SP', '1993-05-29', 4, '1993-01-16', '921.780.311-90', '21684-189', 'Nome da rua', '1404', 'A', 'Salvador', 'MT', 'Brasília', '(75) 99343-5853', '(28) 97227-8436', 'Carol@gmail.com', '1', '1991-01-02 00:00:00', 0),
(3, 'Giovanna', 'Barroso Costa Paiva', './upload/img/member-photo/Giovanna.jpg', 'Cunha Bolsonaro Carvalho', 'Eça Carmo Azevedo', 1, 'Não Possui', '2', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 3, 4, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '1985-07-12', '207.293.176-80', '90917-742', 'Nome da rua', '343', 'A', 'Campo Grande', 'AC', 'Macapá', '(00) 00000-0000', '(36) 98996-4525', 'Giovanna@gmail.com', '1', '1994-06-19 00:00:00', 0),
(4, 'Lavínia', 'Alvarenga Siqueira', './upload/img/member-photo/Lavínia.jpg', 'Fioravante Ferreira', 'Albuquerque Aragão Azevedo Bolsonaro', 2, 'Assis Aleluia Evangelista Barros', '2', 'Ensino Superior', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 4, 1, 'Freitas Adorno Borges', 'Não Possui', '', '', '0000-00-00', 1, '1991-02-14', '536.503.75-84', '49889-901', 'Nome da rua', 'S/N', 'Não Possui', 'Cuiabá', 'MS', 'Belém', '(31) 94073-4853', '(87) 91468-9868', 'Lavínia@gmail.com', '1', '1995-06-09 00:00:00', 0),
(5, 'Alexia', 'Cerejeira Dambros', './upload/img/member-photo/Alexia.jpg', 'Figueiredo Leite Coutinho', 'Amorim Bastos Carmo', 4, 'Não Possui', '2', 'Ensino Técnico', 'Incompleto', '0', 0, 'Não Possui', '1', '1970-05-26', 1, 7, 'Não Possui', '4487242631792', 'SSP-PR', 'PR', '1999-05-10', 4, '2013-11-28', '339.550.877-92', '41011-652', 'Nome da rua', 'S/N', 'Não Possui', 'Teresina', 'MA', 'Boa Vista', '(77) 97265-6150', '(88) 98836-2269', 'Alexia@gmail.com', '1', '2017-12-07 00:00:00', 0),
(6, 'Cibele', 'Figo Bolsonaro', './upload/img/member-photo/Cibele.jpg', 'Carvalhal Cabral Amor Bermudes', 'Dorneles Camões Locatelli', 3, 'Não Possui', '1', 'Ensino Superior', 'Completo', '1', 3, ' Batista Alvarenga Bolsonaro Coentrão,  Batista Álvares Jardim,  Gama Arruda Anunciação', '1', '1994-06-01', 4, 3, 'Cunha Faro', 'Não Possui', '', '', '0000-00-00', 4, '1988-05-24', '360.802.886-69', '90408-298', 'Nome da rua', 'S/N', 'Não Possui', 'Macapá', 'AC', 'Natal', '(89) 98207-7661', '(79) 99301-5518', 'Cibele@gmail.com', '1', '1996-01-22 00:00:00', 0),
(7, 'Cecília', 'Bueno Álvares Álvares', './upload/img/member-photo/Cecília.jpg', 'Lange Penteado', 'Abreu Chaves Dias', 5, 'Não Possui', '1', 'Ensino Médio', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 4, 7, 'Alcântara Coimbra Anjos', '642409321162', 'SSP-AC', 'AC', '2017-02-06', 5, '1984-09-24', '92.362.130-64', '39350-655', 'Nome da rua', '8160', 'Não Possui', 'Manaus', 'RR', 'Maceió', '(00) 00000-0000', '(91) 92036-3521', 'Cecília@gmail.com', '1', '1981-11-13 00:00:00', 0),
(8, 'Betina', 'Faro Alvim Bastos', './upload/img/member-photo/Betina.jpg', 'Azevedo Couto Bragança', 'Dambros Duarte Encarnação', 1, 'Não Possui', '2', 'Ensino Superior', 'Incompleto', '1', 0, 'Não Possui', '0', '0000-00-00', 4, 8, 'Borsoi Anunciação', '5985126852632', 'SSP-RO', 'RO', '1989-10-01', 6, '1980-04-12', '619.232.256-69', '73303-691', 'Nome da rua', '8070', 'A', 'Belém', 'AP', 'Manaus', '(99) 99382-5939', '(34) 98624-3586', 'Betina@gmail.com', '1', '1989-11-10 00:00:00', 0),
(9, 'Esther', 'Mendonça Castilho Falópio', './upload/img/member-photo/Esther.jpg', 'Carvalhosa Brasiliense Barroso Figueira', 'Barros Cabral Altamirano Eça', 3, 'Não Possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 2, 'Não Possui', '1737648353870', 'SSP-TO', 'TO', '1971-10-07', 6, '2010-05-02', '183.116.185-11', '95278-222', 'Nome da rua', '122', 'A', 'Macapá', 'RN', 'Belém', '(47) 98833-6129', '(11) 91569-8738', 'Esther@gmail.com', '1', '2007-11-13 00:00:00', 0),
(10, 'Rayssa', 'Amigo Anunciação', './upload/img/member-photo/Rayssa.jpg', 'Alvim Bermudes Castilho', 'Azeredo Furquim Amor Amor', 2, 'Bragança Arruda Coentrão', '2', 'Ensino Médio', 'Completo', '0', 0, 'Não Possui', '1', '2002-07-25', 5, 1, 'Não Possui', '6352758674073', 'SSP-BA', 'BA', '1972-03-22', 6, '1994-05-11', '929.829.600-35', '26936-408', 'Nome da rua', '8206', 'A', 'Boa Vista', 'DF', 'Rio Branco', '(00) 00000-0000', '(43) 95651-1526', 'Rayssa@gmail.com', '1', '1980-08-28 00:00:00', 0),
(11, 'Inês', 'Borsoi Borges', './upload/img/member-photo/Inês.jpg', 'Ascensão Anes Carmo Bernades', 'Garrastazu Andrada', 5, 'Não Possui', '1', 'Ensino Médio', 'Incompleto', '0', 0, 'Não Possui', '1', '1988-11-02', 1, 6, 'Não Possui', '8305221198009', 'SSP-MT', 'MT', '1992-06-17', 2, '1984-11-05', '438.88.547-25', '8495-663', 'Nome da rua', 'S/N', 'Não Possui', 'Salvador', 'TO', 'Rio de Janeiro', '(25) 99519-5218', '(50) 91293-6041', 'Inês@gmail.com', '1', '2002-02-05 00:00:00', 0),
(12, 'Lilian', 'Alvim Botelho Aleluia', './upload/img/member-photo/Lilian.jpg', 'Bermudes Camargo', 'Andrade Borges Carvalhosa', 1, 'Não Possui', '2', 'Ensino Técnico', 'Incompleto', '1', 0, 'Não Possui', '0', '0000-00-00', 4, 8, 'Bocaiuva Abreu Anunciação', 'Não Possui', '', '', '0000-00-00', 6, '2021-02-22', '499.611.583-93', '38989-500', 'Nome da rua', '4413', 'A', 'Salvador', 'PA', 'Rio Branco', '(00) 00000-0000', '(22) 98922-1047', 'Lilian@gmail.com', '1', '1989-12-22 00:00:00', 0),
(13, 'Antônia', 'Álvares Esteves', './upload/img/member-photo/Antônia.jpg', 'Eça Arruda', 'Alvim Bocaiuva Albuquerque Altamirano', 2, 'Leitão Caminha Barbosa Bastos', '2', 'Ensino Técnico', 'Completo', '1', 6, ' Freire Alvim Chaves Freire,  Curado Encarnação Bolsonaro,  Carvalhosa Carnaval,  Aragão Azeredo,  Altamirano Adães Assis,  Duarte Araújo Cardoso Brasiliense', '0', '0000-00-00', 2, 8, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '2002-11-08', '243.511.3-50', '46158-264', 'Nome da rua', '6476', 'A', 'Belém', 'AC', 'Teresina', '(86) 99191-8654', '(48) 91345-6914', 'Antônia@gmail.com', '1', '2010-12-25 00:00:00', 0),
(14, 'Diane', 'Santarrosa Bocaiuva', './upload/img/member-photo/Diane.jpg', 'Barroso Anchieta Brandão Carnaval', 'Borsoi Batista Albuquerque Anjos', 3, 'Não Possui', '1', 'Alfabetizado', 'Completo', '1', 6, ' Botelho Carneiro Bragança Amor,  Coutinho França Barroso,  Gomes Albuquerque Altamirano,  Alvarenga Figueiredo Fonseca Almeida,  Bueno Carnaval Andrade Matos,  Altamirano Alvarenga Amorim', '1', '1998-11-14', 2, 3, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '1972-04-21', '300.371.482-61', '70275-904', 'Nome da rua', 'S/N', 'Não Possui', 'Teresina', 'RO', 'Palmas', '(00) 00000-0000', '(27) 97956-5905', 'Diane@gmail.com', '1', '1999-05-25 00:00:00', 0),
(15, 'Ana Laura', 'Sampaulo Pasquim Lins', './upload/img/member-photo/Ana Laura.jpg', 'Diegues Anchieta Parga', 'Almeida Cordeiro Andrade Adorno', 4, 'Não Possui', '1', 'Ensino Fundamental', 'Completo', '1', 4, ' Albuquerque Álvares Bernardes Anjos,  Araújo Adães Gouveia Carvalhal,  Figueiredo Lange Aguiar,  Anunciação Ferrão Bermudes', '1', '2018-01-18', 1, 2, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '1997-02-02', '21.474.210-41', '34800-595', 'Nome da rua', '3205', 'A', 'Rio Branco', 'PA', 'Belo Horizonte', '(60) 94642-4576', '(97) 94710-8301', 'Ana Laura@gmail.com', '1', '1980-07-13 00:00:00', 0),
(16, 'Anita', 'Bernades Carvalhal', './upload/img/member-photo/Anita.jpg', 'Barbosa Botelho Alvarenga', 'Alves Constante', 4, 'Não Possui', '1', 'Ensino Médio', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 6, 'Não Possui', '3904299457376', 'SSP-RR', 'RR', '1976-10-28', 6, '2002-12-15', '170.59.943-77', '91470-708', 'Nome da rua', '3043', 'Não Possui', 'Boa Vista', 'SE', 'Fortaleza', '(00) 00000-0000', '(81) 99932-7134', 'Anita@gmail.com', '1', '1984-02-20 00:00:00', 0),
(17, 'Silvana', 'Carmo Abreu', './upload/img/member-photo/Silvana.jpg', 'Anjos Costa', 'Bicalho Prado Matos', 4, 'Não Possui', '1', 'Ensino Fundamental', 'Completo', '1', 5, ' Araújo Barroso,  Bueno Meireles,  Altamirano Assis Batista Cerejeira,  Antunes Borsoi,  Brasil Amaral Lange', '0', '0000-00-00', 4, 7, 'Porto Aragão', 'Não Possui', '', '', '0000-00-00', 6, '2012-10-29', '606.765.893-75', '70744-237', 'Nome da rua', '76', 'A', 'Recife', 'MG', 'Macapá', '(00) 00000-0000', '(16) 94138-6182', 'Silvana@gmail.com', '1', '1973-05-20 00:00:00', 0),
(18, 'David', 'Cardoso Coelho', './upload/img/member-photo/David.jpg', 'Arruda Vaz Carvalho', 'Ferrolho Amor Hernandes', 4, 'Não Possui', '2', 'Ensino Fundamental', 'Incompleto', '1', 5, ' Falópio Brandão,  Massa Assis Carnaval,  Lacerda Ferrão,  Carnaval Chaves Evangelista,  Barros Frota', '1', '1979-03-25', 1, 3, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '2009-08-07', '845.503.722-93', '5254-223', 'Nome da rua', 'S/N', 'Não Possui', 'Rio Branco', 'RR', 'São Paulo', '(00) 00000-0000', '(63) 98979-1489', 'David@gmail.com', '1', '2001-12-18 00:00:00', 0),
(19, 'Kátia', 'Ferreira Carvalhosa', './upload/img/member-photo/Kátia.jpg', 'Evangelista Coentrão Bernardes', 'Albuquerque Bicalho Barros Andrade', 2, 'Mairinque Assis Lacerda', '1', '4ª Série do Ensino Fundamental', 'Completo', '1', 5, ' Alcântara Carnaval Bueno,  Fagundes Gonçales Luz Dorneles,  Abreu Carvalhal Caminha Ferraz,  Adães Santarrosa,  Eça Lins Pires', '0', '0000-00-00', 3, 1, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '2016-06-13', '917.32.268-28', '55641-737', 'Nome da rua', 'S/N', 'Não Possui', 'Brasília', 'MG', 'Aracaju', '(15) 98420-5215', '(15) 99909-9654', 'Kátia@gmail.com', '1', '2009-11-10 00:00:00', 0),
(20, 'Lavínia', 'Amor Barbosa', './upload/img/member-photo/Lavínia.jpg', 'Alvim Pessoa Duarte Carvalhal', 'Alves Faro Anjos Arruda', 5, 'Não Possui', '1', 'Alfabetizado', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 5, 6, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 4, '2014-03-16', '703.709.261-17', '76060-32', 'Nome da rua', '6393', 'A', 'Belém', 'PA', 'Campo Grande', '(00) 00000-0000', '(57) 97961-8022', 'Lavínia@gmail.com', '1', '1978-04-17 00:00:00', 0),
(21, 'Rita', 'Barroso Amorim', './upload/img/member-photo/Rita.jpg', 'Massa Freitas', 'Alves Bastos', 1, 'Não Possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 5, 5, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 4, '2019-01-17', '393.362.978-65', '38919-844', 'Nome da rua', '5347', 'Não Possui', 'Goiânia', 'MT', 'Boa Vista', '(12) 97415-6314', '(79) 95392-3830', 'Rita@gmail.com', '1', '2002-10-04 00:00:00', 0),
(22, 'Rosa', 'Altamirano Altamirano', './upload/img/member-photo/Rosa.jpg', 'Aragão Homem', 'Massa Mariz', 3, 'Não Possui', '2', 'Alfabetizado', 'Incompleto', '0', 0, 'Não Possui', '1', '1976-02-11', 3, 7, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 6, '2007-06-07', '960.794.420-18', '83541-721', 'Nome da rua', 'S/N', 'Não Possui', 'Manaus', 'TO', 'Manaus', '(47) 96093-2436', '(71) 99534-9733', 'Rosa@gmail.com', '1', '1984-03-02 00:00:00', 0),
(23, 'Íris', 'Antunes Curado Furquim', './upload/img/member-photo/Íris.jpg', 'Duarte Álvares Abreu', 'Outeiro Farias', 5, 'Não Possui', '2', 'Ensino Fundamental', 'Completo', '1', 5, ' Lopes Gama,  Almeida Bernardes Barros,  Antunes Anchieta Borsoi Borba,  Adorno Bastos Azeredo Amaral,  Fontes Constante Galvão', '0', '0000-00-00', 2, 1, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 2, '1978-03-31', '116.154.3-80', '37392-63', 'Nome da rua', 'S/N', 'Não Possui', 'Aracaju', 'GO', 'Porto Velho', '(78) 94864-7278', '(81) 91572-2866', 'Íris@gmail.com', '1', '1974-05-08 00:00:00', 0),
(24, 'Micaela', 'Bastos Anjos Batista', './upload/img/member-photo/Micaela.jpg', 'Arruda Alvim Bermudes Bernardes', 'Alves Braga Cunha Camargo', 1, 'Não Possui', '2', 'Ensino Médio', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 1, 'Não Possui', '9171873282668', 'SSP-RN', 'RN', '2004-09-12', 5, '2006-10-15', '673.659.985-80', '52890-395', 'Nome da rua', 'S/N', 'Não Possui', 'Brasília', 'PI', 'Natal', '(00) 00000-0000', '(45) 92437-5223', 'Micaela@gmail.com', '1', '1976-12-07 00:00:00', 0),
(25, 'Agnes', 'Hernandes Morais', './upload/img/member-photo/Agnes.jpg', 'Anjos Antunes Amaral', 'Falópio Brandão', 3, 'Não Possui', '2', '4ª Série do Ensino Fundamental', 'Completo', '1', 5, ' Castro Esteves Bicalho,  Bernardes Nascimento,  Castilho Freitas Lopes,  Evangelista Barros Constante,  Eça Anchieta', '0', '0000-00-00', 4, 7, 'Batista Café Arruda', 'Não Possui', '', '', '0000-00-00', 6, '1976-08-12', '973.434.844-43', '7488-839', 'Nome da rua', 'S/N', 'Não Possui', 'São Luís', 'SP', 'Boa Vista', '(00) 00000-0000', '(39) 99482-1829', 'Agnes@gmail.com', '1', '2015-03-17 00:00:00', 0),
(26, 'Alice', 'Almeida Duarte Aleluia', './upload/img/member-photo/Alice.jpg', 'Bastos Bueno', 'Barros Fontes', 5, 'Não Possui', '1', 'Ensino Superior', 'Completo', '1', 5, ' Poeta Pedrosa,  Alencar Caminha,  Navarro Falqueto Anes,  Dias Constante Cordeiro Adães,  Anchieta Anjos', '1', '2016-12-12', 1, 5, 'Não Possui', '9124841984336', 'SSP-MA', 'MA', '2010-04-23', 3, '1989-06-20', '887.323.365-40', '67108-19', 'Nome da rua', '2118', 'A', 'Recife', 'RN', 'Brasília', '(84) 92015-7444', '(36) 91429-7687', 'Alice@gmail.com', '1', '1996-09-18 00:00:00', 0),
(27, 'Isabele', 'Alencar Bolsonaro', './upload/img/member-photo/Isabele.jpg', 'Médici Mesquita', 'Andrade Henriques Cruz', 4, 'Não Possui', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 6, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '1989-02-09', '243.662.503-85', '32423-343', 'Nome da rua', '2862', 'Não Possui', 'Fortaleza', 'AM', 'Palmas', '(00) 00000-0000', '(55) 97887-9205', 'Isabele@gmail.com', '1', '1986-03-21 00:00:00', 0),
(28, 'Lorena', 'Azevedo Alves', './upload/img/member-photo/Lorena.jpg', 'Gama Galvão', 'Café Ascensão', 1, 'Não Possui', '2', 'Alfabetizado', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 2, 7, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '2016-08-24', '929.801.992-52', '52942-667', 'Nome da rua', '2143', 'Não Possui', 'Maceió', 'MA', 'São Luís', '(64) 99370-3472', '(58) 98409-7193', 'Lorena@gmail.com', '1', '2007-10-21 00:00:00', 0),
(29, 'Paloma', 'Alcântara Alencar', './upload/img/member-photo/Paloma.jpg', 'Coutinho Policarpo', 'Adorno Gomes', 2, 'Carmo Ascensão Brasil', '1', 'Ensino Técnico', 'Completo', '0', 0, 'Não Possui', '1', '2013-02-01', 3, 8, 'Não Possui', '7490030924510', 'SSP-RN', 'RN', '2001-07-31', 1, '1997-10-29', '390.15.276-97', '70661-641', 'Nome da rua', '808', 'A', 'Recife', 'MA', 'Manaus', '(55) 92354-5171', '(80) 95590-9927', 'Paloma@gmail.com', '1', '2015-05-30 00:00:00', 0),
(30, 'César', 'Camões Guimarães', './upload/img/member-photo/César.jpg', 'Falópio Porto Carvalhosa', 'Cerejeira Borba Albuquerque', 4, 'Não Possui', '1', 'Doutorado', 'Completo', '1', 6, ' Café Adães Braga,  Cabral Amorim Café,  Alencar Álvares Álvares Adorno,  Carvalhosa Monteiro,  Bastos Amigo Azevedo Anchieta,  Aguiar Bandeira Alvarenga', '1', '1985-01-10', 1, 8, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '2019-10-08', '393.122.96-16', '24960-516', 'Nome da rua', '9880', 'Não Possui', 'Salvador', 'MA', 'São Luís', '(35) 99998-1834', '(14) 95384-8568', 'César@gmail.com', '1', '1973-07-02 00:00:00', 0),
(31, 'Arthur', 'Aleluia Coelho Azeredo', './upload/img/member-photo/Arthur.jpg', 'Ascensão Falópio Bocaiuva', 'Álvares Hernandes Aragão Coelho', 4, 'Não Possui', '2', 'Ensino Superior', 'Completo', '0', 0, 'Não Possui', '1', '2013-04-15', 1, 1, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '2003-03-30', '138.176.437-21', '3181-507', 'Nome da rua', '270', 'A', 'Porto Velho', 'AM', 'São Luís', '(00) 00000-0000', '(28) 91350-5039', 'Arthur@gmail.com', '1', '2000-03-03 00:00:00', 0),
(32, 'Isabelly', 'Pires Albuquerque', './upload/img/member-photo/Isabelly.jpg', 'Coutinho Coentrão Bernades Furquim', 'Álvares Carvalho', 2, 'Faria Mairinque Freire', '2', 'Ensino Médio', 'Incompleto', '1', 5, ' Figueira Ferreira,  Alves Alencar Barroso,  Anes Alcântara,  Couto Alvim Bispo,  Gonzaga Hungria Camacho', '0', '0000-00-00', 2, 1, 'Não Possui', '7580807720090', 'SSP-RR', 'RR', '1994-03-12', 5, '2011-09-30', '806.225.688-66', '4661-475', 'Nome da rua', '1667', 'Não Possui', 'Natal', 'PE', 'Palmas', '(90) 93116-8934', '(94) 98732-9417', 'Isabelly@gmail.com', '1', '1988-07-05 00:00:00', 0),
(33, 'Ana Clara', 'Carneiro Alencar Castilho', './upload/img/member-photo/Ana Clara.jpg', 'Costa Gouveia', 'Roma Arruda', 4, 'Não Possui', '1', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 5, 8, 'Não Possui', '4603330464268', 'SSP-AP', 'AP', '1980-06-16', 6, '1979-03-10', '976.430.390-16', '86807-195', 'Nome da rua', 'S/N', 'Não Possui', 'Maceió', 'AM', 'Salvador', '(00) 00000-0000', '(99) 92919-6328', 'Ana Clara@gmail.com', '1', '2019-03-13 00:00:00', 0),
(34, 'Nayara', 'Moro Ferrão Bandeira', './upload/img/member-photo/Nayara.jpg', 'Jardim Adães Brandão Chaves', 'Álvares Homem Gusmão Fonseca', 4, 'Não Possui', '2', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 4, 7, 'Carnaval Batista Cotrim', 'Não Possui', '', '', '0000-00-00', 1, '1979-04-09', '351.357.527-29', '60787-462', 'Nome da rua', '973', 'A', 'Vitória', 'DF', 'Recife', '(00) 00000-0000', '(98) 97259-2265', 'Nayara@gmail.com', '1', '1990-02-26 00:00:00', 0),
(35, 'Felipe', 'Borba Holanda', './upload/img/member-photo/Felipe.jpg', 'Braga Cruz Bragança Amorim', 'Bolsonaro Adães Bocaiuva Gato', 2, 'Botelho Galvão Antunes Bolsonaro', '2', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 1, 'Não Possui', '3260050217890', 'SSP-MG', 'MG', '1982-09-19', 4, '1972-06-11', '742.317.331-93', '7235-890', 'Nome da rua', 'S/N', 'Não Possui', 'Aracaju', 'TO', 'Aracaju', '(90) 95717-2308', '(87) 92740-1534', 'Felipe@gmail.com', '1', '2009-01-25 00:00:00', 0),
(36, 'Júlia', 'Borsoi Aguiar', './upload/img/member-photo/Júlia.jpg', 'Bolsonaro Camargo Bernades Dambros', 'Cruz Cerejeira Chaves', 3, 'Não Possui', '1', 'Ensino Superior', 'Completo', '1', 1, ' Amor Álvares Araújo Bastos', '1', '1980-07-26', 5, 6, 'Não Possui', '5383129078126', 'SSP-PE', 'PE', '2011-11-02', 3, '1983-02-16', '662.466.379-24', '26012-320', 'Nome da rua', '7085', 'A', 'Manaus', 'PI', 'Campo Grande', '(27) 97210-1285', '(38) 91001-5718', 'Júlia@gmail.com', '1', '2000-05-03 00:00:00', 0),
(37, 'Gabriele', 'Carvalho Gusmão Prado', './upload/img/member-photo/Gabriele.jpg', 'Alcântara Ferraz Freitas', 'Dambros Ferraz', 2, 'Albuquerque Alvim', '1', 'Ensino Fundamental', 'Completo', '1', 4, ' Borsoi Arruda Coelho Carmo,  Araújo Faria Bicalho,  Anjos Falqueto Curado,  Andrada Albuquerque Alves Bueno', '1', '2021-05-30', 2, 5, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '1976-11-17', '770.957.895-22', '58555-952', 'Nome da rua', '5284', 'Não Possui', 'Brasília', 'AP', 'Porto Velho', '(62) 95268-2046', '(53) 92330-6767', 'Gabriele@gmail.com', '1', '1997-01-22 00:00:00', 0),
(38, 'Ana Luísa', 'Assis Cabral Coelho', './upload/img/member-photo/Ana Luísa.jpg', 'Borba Barroso Adães Castro', 'Ferreira Amaral Gato', 4, 'Não Possui', '2', 'Ensino Superior', 'Completo', '1', 5, ' Carvalhal Andrada Bolsonaro,  Borges Gato Fontes,  Gouveia Barros,  Antunes Cunha Marques Adães,  Malafaia Bastos Paiva', '1', '1995-12-27', 1, 6, 'Não Possui', '3382070581980', 'SSP-RS', 'RS', '1984-10-29', 5, '2004-01-06', '285.180.26-74', '74077-29', 'Nome da rua', 'S/N', 'Não Possui', 'Natal', 'RO', 'Boa Vista', '(00) 00000-0000', '(64) 95015-5642', 'Ana Luísa@gmail.com', '1', '1993-05-08 00:00:00', 0),
(39, 'Giovanna', 'Botelho Antunes Camargo', './upload/img/member-photo/Giovanna.jpg', 'Aleluia Curado Andrade Arruda', 'Borba Batista Gato Adães', 4, 'Não Possui', '1', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '1', '1990-09-13', 5, 7, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 4, '2000-04-04', '59.260.665-53', '3075-85', 'Nome da rua', '9809', 'A', 'Maceió', 'MS', 'Cuiabá', '(00) 00000-0000', '(52) 95905-8864', 'Giovanna@gmail.com', '1', '1987-11-20 00:00:00', 0),
(40, 'Lúcia', 'Bermudes Amigo', './upload/img/member-photo/Lúcia.jpg', 'Café Lange', 'Aleluia Alencar Cordeiro Barroso', 2, 'Aleluia Ascensão Bernardes Carvalhal', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não Possui', '1', '1990-05-26', 4, 4, 'Freitas Costa Namorado', '7986624209826', 'SSP-RO', 'RO', '1982-07-05', 2, '1989-11-19', '10.255.606-93', '79772-929', 'Nome da rua', '4792', 'A', 'Belém', 'MA', 'Salvador', '(56) 93138-7688', '(99) 91559-2920', 'Lúcia@gmail.com', '1', '2004-06-22 00:00:00', 0),
(41, 'Karoline', 'Coentrão Adorno', './upload/img/member-photo/Karoline.jpg', 'Bicalho Adorno Ferrão Fortaleza', 'Pereira Vilhena', 2, 'Diegues Almeida Constante', '2', 'Ensino Médio', 'Incompleto', '1', 4, ' Carnaval Freire,  Andrade Dorneles Aleluia Azeredo,  Bicalho Gonçales Camacho,  Maduro Brasiliense Almeida', '1', '2016-12-21', 2, 8, 'Não Possui', '5877484484920', 'SSP-PI', 'PI', '2008-09-23', 5, '1985-12-21', '813.48.741-97', '31155-127', 'Nome da rua', '8531', 'Não Possui', 'Curitiba', 'RR', 'Rio Branco', '(72) 97775-8029', '(29) 93237-6963', 'Karoline@gmail.com', '1', '1987-10-11 00:00:00', 0),
(42, 'Lucca', 'Padrão Leitão', './upload/img/member-photo/Lucca.jpg', 'Bicalho Oliveira Borges', 'Cruz Albuquerque Reis', 4, 'Não Possui', '2', 'Alfabetizado', 'Completo', '1', 0, 'Não Possui', '0', '0000-00-00', 4, 8, 'Negreiros Luz', '9521977851156', 'SSP-SP', 'SP', '2002-09-24', 1, '2001-06-26', '461.730.356-85', '10972-727', 'Nome da rua', '1840', 'A', 'Macapá', 'MT', 'Salvador', '(00) 00000-0000', '(85) 95774-9476', 'Lucca@gmail.com', '1', '2007-01-08 00:00:00', 0),
(43, 'Davi Lucca', 'Bocaiuva Bernades', './upload/img/member-photo/Davi Lucca.jpg', 'Alencar Cerejeira Falópio', 'Borges Lins', 1, 'Não Possui', '1', 'Alfabetizado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 1, 7, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 1, '1989-09-23', '769.211.237-82', '13820-131', 'Nome da rua', '5555', 'Não Possui', 'Belém', 'AM', 'Aracaju', '(00) 00000-0000', '(21) 92440-1978', 'Davi Lucca@gmail.com', '1', '2000-01-11 00:00:00', 0),
(44, 'Lívia', 'Adães Gouveia', './upload/img/member-photo/Lívia.jpg', 'Nogueira Camargo Freire Amaral', 'Ribeiro Alcântara Falópio', 4, 'Não Possui', '1', '4ª Série do Ensino Fundamental', 'Completo', '0', 0, 'Não Possui', '1', '1979-02-22', 5, 4, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 2, '1986-12-18', '748.298.14-28', '66396-802', 'Nome da rua', 'S/N', 'Não Possui', 'Palmas', 'GO', 'São Luís', '(43) 96868-4307', '(41) 93844-3737', 'Lívia@gmail.com', '1', '2005-08-19 00:00:00', 0),
(45, 'Manuela', 'Noronha Antunes', './upload/img/member-photo/Manuela.jpg', 'Fernandes Anunciação Araújo', 'Alvim Pascoal', 3, 'Não Possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 3, 1, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '1971-02-08', '998.364.115-92', '28810-426', 'Nome da rua', '5133', 'A', 'Belém', 'TO', 'São Luís', '(00) 00000-0000', '(13) 91714-7174', 'Manuela@gmail.com', '1', '2016-06-04 00:00:00', 0),
(46, 'Sueli', 'Freire Bocaiuva', './upload/img/member-photo/Sueli.jpg', 'Amorim Coutinho Camargo Anjos', 'Alves Abreu Bispo Mello', 4, 'Não Possui', '2', 'Alfabetizado', 'Completo', '0', 0, 'Não Possui', '1', '2020-03-29', 3, 2, 'Não Possui', '927172991425', 'SSP-PI', 'PI', '1998-02-07', 4, '2020-02-07', '219.973.702-11', '80777-85', 'Nome da rua', '4101', 'A', 'Natal', 'PB', 'Natal', '(00) 00000-0000', '(68) 93536-5740', 'Sueli@gmail.com', '1', '1997-08-10 00:00:00', 0),
(47, 'Andréia', 'Borsoi Camargo', './upload/img/member-photo/Andréia.jpg', 'Bandeira Brasil Andrade Alvim', 'Ascensão Eça Bermudes Caminha', 4, 'Não Possui', '1', 'Ensino Fundamental', 'Completo', '0', 0, 'Não Possui', '1', '2013-12-07', 4, 4, 'Moro Caminha', 'Não Possui', '', '', '0000-00-00', 6, '1983-10-25', '33.52.904-83', '16316-939', 'Nome da rua', 'S/N', 'Não Possui', 'Maceió', 'PA', 'Macapá', '(00) 00000-0000', '(63) 97991-4231', 'Andréia@gmail.com', '1', '1994-10-23 00:00:00', 0),
(48, 'Tainara', 'Botelho Cabral Ascensão', './upload/img/member-photo/Tainara.jpg', 'Alcântara Camões Adorno Amigo', 'Faro Braga Jardim', 2, 'Aguiar Amorim Faria', '1', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '1', '1995-02-14', 1, 1, 'Não Possui', '6619949378592', 'SSP-MT', 'MT', '2021-10-02', 3, '1975-04-25', '15.736.664-22', '19022-224', 'Nome da rua', '3443', 'A', 'Belém', 'RO', 'Macapá', '(00) 00000-0000', '(84) 94954-1981', 'Tainara@gmail.com', '1', '2015-11-29 00:00:00', 0),
(49, 'Maitê', 'Antunes Dambros', './upload/img/member-photo/Maitê.jpg', 'Alencar Barroso', 'Faria Guimarães Alcântara', 3, 'Não Possui', '2', 'Doutorado', 'Completo', '1', 3, ' Constante Hernandes,  Albuquerque Arruda Aragão,  Batista Moro', '1', '2010-02-12', 4, 2, 'Camacho Machado Diegues', 'Não Possui', '', '', '0000-00-00', 1, '1972-05-05', '495.125.943-48', '50145-635', 'Nome da rua', 'S/N', 'Não Possui', 'Boa Vista', 'BA', 'Macapá', '(00) 00000-0000', '(61) 95849-4379', 'Maitê@gmail.com', '1', '2009-03-11 00:00:00', 0),
(50, 'Ana Luiza', 'Altamirano Barroso', './upload/img/member-photo/Ana Luiza.jpg', 'Café Madureira', 'Botelho Furtado Bocaiuva Carvalhosa', 2, 'Barros Ferreira Azeredo Andrade', '1', 'Ensino Fundamental', 'Completo', '1', 3, ' Couto Pais,  Anjos Cerejeira Brandão,  Locatelli Magalhães', '1', '2021-05-15', 2, 6, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 5, '2002-10-23', '36.929.602-54', '58164-92', 'Nome da rua', 'S/N', 'Não Possui', 'Campo Grande', 'MA', 'Manaus', '(00) 00000-0000', '(20) 98983-6390', 'Ana Luiza@gmail.com', '1', '2019-04-22 00:00:00', 0),
(51, 'Maísa', 'Mairinque Assis Adorno', './upload/img/member-photo/Maísa.jpg', 'Policarpo Antunes Álvares', 'Alvarenga Batista', 4, 'Não Possui', '2', 'Doutorado', 'Completo', '0', 0, 'Não Possui', '1', '1991-07-03', 2, 3, 'Não Possui', 'Não Possui', '', '', '0000-00-00', 3, '2000-08-16', '776.178.740-29', '41708-610', 'Nome da rua', 'S/N', 'Não Possui', 'Macapá', 'GO', 'Teresina', '(00) 00000-0000', '(44) 97943-3650', 'Maísa@gmail.com', '1', '1987-03-22 00:00:00', 0),
(52, 'Eva', 'Bandeira Cordeiro', './upload/img/member-photo/Eva.jpg', 'Melo Ferrolho', 'Bandeira Frota Navarro', 5, 'Não Possui', '1', 'Ensino Técnico', 'Completo', '1', 5, ' Monteiro Furquim,  Bernardes Faro Magalhães,  Antunes Anjos Encarnação,  Andrada Azeredo,  Figueira Padrão Figo', '1', '1973-04-02', 1, 7, 'Não Possui', '9973838919176', 'SSP-SE', 'SE', '1979-09-12', 3, '1975-02-17', '469.938.791-30', '29165-956', 'Nome da rua', '1727', 'A', 'Palmas', 'PE', 'Fortaleza', '(00) 00000-0000', '(62) 95990-7266', 'Eva@gmail.com', '1', '1975-06-04 00:00:00', 0),
(53, 'Alícia', 'Fonseca França Coelho', './upload/img/member-photo/Alícia.jpg', 'Caminha Borba', 'Barroso Hora Barbosa', 2, 'Holanda Amor Amorim Alvarenga', '2', 'Doutorado', 'Completo', '1', 0, 'Não Possui', '0', '0000-00-00', 2, 5, 'Não Possui', '9519338566828', 'SSP-RS', 'RS', '1997-04-13', 6, '2002-04-09', '996.990.552-74', '20569-114', 'Nome da rua', '46', 'Não Possui', 'Macapá', 'AL', 'Palmas', '(00) 00000-0000', '(66) 99225-5806', 'Alícia@gmail.com', '1', '1995-07-26 00:00:00', 0),
(54, 'Jade', 'Figueira Amigo', './upload/img/member-photo/Jade.jpg', 'Batista Ferrão', 'Cabral Amigo Fernandes', 4, 'Não Possui', '2', 'Ensino Superior', 'Incompleto', '1', 0, 'Não Possui', '0', '0000-00-00', 4, 7, 'Hernandes Almeida', 'Não Possui', '', '', '0000-00-00', 1, '1970-07-03', '463.370.359-16', '25435-660', 'Nome da rua', 'S/N', 'Não Possui', 'Maceió', 'RR', 'Maceió', '(94) 93989-5275', '(96) 97869-7764', 'Jade@gmail.com', '1', '2016-07-15 00:00:00', 0),
(55, 'João Miguel', 'Bispo Braga', './upload/img/member-photo/João Miguel.jpg', 'Figo Farias', 'Carnaval Fontes Bastos', 1, 'Não Possui', '2', 'Ensino Fundamental', 'Incompleto', '1', 0, 'Não Possui', '0', '0000-00-00', 5, 4, 'Não Possui', '9246771691815', 'SSP-MA', 'MA', '2016-07-13', 6, '1974-06-14', '621.839.814-44', '85741-196', 'Nome da rua', '3537', 'Não Possui', 'Palmas', 'RR', 'Fortaleza', '(68) 99042-9544', '(97) 98745-9013', 'João Miguel@gmail.com', '1', '1984-05-13 00:00:00', 0),
(56, 'Maíra', 'Ferreira Moraes', './upload/img/member-photo/Maíra.jpg', 'Almeida Alvarenga Botelho', 'Batista Cruz Brasil', 4, 'Não Possui', '1', 'Doutorado', 'Incompleto', '0', 0, 'Não Possui', '0', '0000-00-00', 4, 2, 'Bocaiuva Farias', 'Não Possui', '', '', '0000-00-00', 1, '2011-04-10', '584.136.9-58', '22195-144', 'Nome da rua', '7518', 'Não Possui', 'Manaus', 'AM', 'Maceió', '(80) 98796-7266', '(17) 91328-9754', 'Maíra@gmail.com', '1', '1983-08-24 00:00:00', 0);

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
(1, 6, '2022-07-29', '13:26:33'),
(2, 6, '2022-07-30', '20:04:51');

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
-- Índices para tabela `departament`
--
ALTER TABLE `departament`
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
-- AUTO_INCREMENT de tabela `departament`
--
ALTER TABLE `departament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `report_login`
--
ALTER TABLE `report_login`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
