-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/07/2025 às 03:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `champions_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores_champions`
--

CREATE TABLE `jogadores_champions` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `posicao` varchar(50) DEFAULT NULL,
  `time_atual` varchar(100) DEFAULT NULL,
  `numero_camisa` int(11) DEFAULT NULL,
  `gols_champions` int(11) DEFAULT NULL,
  `assistencias` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `historia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogadores_champions`
--

INSERT INTO `jogadores_champions` (`id`, `nome`, `nacionalidade`, `idade`, `posicao`, `time_atual`, `numero_camisa`, `gols_champions`, `assistencias`, `foto`, `historia`) VALUES
(1, 'Lionel Messi', 'Argentina', 36, 'Atacante', 'Inter Miami', 10, 129, 42, 'https://i.pinimg.com/736x/c1/06/34/c106342dd689c17fa3fc57111f78e37b.jpg', 'Revelado pelo Barcelona, Messi é considerado um dos maiores da história, com carreira brilhante e muitos títulos.'),
(2, 'Cristiano Ronaldo', 'Portugal', 39, 'Atacante', 'Al Nassr', 7, 140, 38, 'https://i.pinimg.com/736x/f7/8e/2d/f78e2dd7f2fc826ae689d2f4926f73ef.jpg', 'Destaque no Manchester United, Real Madrid e Juventus, CR7 é recordista de gols na Champions e ídolo mundial.'),
(3, 'Kylian Mbappé', 'França', 25, 'Atacante', 'PSG', 7, 40, 20, 'https://i.pinimg.com/736x/a7/9e/3d/a79e3d26e34fe4dd20945ac0c19d4cbc.jpg', 'Mbappé se destacou na Copa de 2018 com a França e se tornou estrela do PSG com sua velocidade e habilidade.'),
(4, 'Kevin De Bruyne', 'Bélgica', 33, 'Meio-campo', 'Manchester City', 17, 15, 25, 'https://i.pinimg.com/736x/5b/97/d1/5b97d1314acb51869e53a05700a9f3ff.jpg', 'Cérebro do meio-campo do City, De Bruyne é conhecido por sua visão de jogo e passes precisos.'),
(5, 'Mohamed Salah', 'Egito', 32, 'Atacante', 'Liverpool', 11, 40, 18, 'https://i.pinimg.com/736x/cc/7c/1b/cc7c1b25e3d7c2e3157a99af5911370d.jpg', 'Salah brilhou na Roma e se tornou ídolo no Liverpool, onde conquistou a Champions League em 2019.'),
(6, 'Vinícius Jr.', 'Brasil', 24, 'Atacante', 'Real Madrid', 7, 18, 15, 'https://i.pinimg.com/736x/77/0d/c8/770dc83a854c71d9fe0aad895d55cb49.jpg', 'Revelado pelo Flamengo, Vinícius ganhou destaque no Real Madrid com velocidade e gols decisivos.'),
(7, 'Erling Haaland', 'Noruega', 24, 'Atacante', 'Manchester City', 9, 35, 10, 'https://i.pinimg.com/736x/f6/75/2c/f6752cf967e3002aa60f175759f6bc77.jpg', 'Haaland impressionou pelo Dortmund e tornou-se uma máquina de gols no Manchester City.'),
(8, 'Robert Lewandowski', 'Polônia', 36, 'Atacante', 'Barcelona', 9, 92, 20, 'https://i.pinimg.com/736x/3b/f4/16/3bf416c77d64e1903035fa3b5d636af8.jpg', 'Ídolo do Bayern de Munique, Lewa é um dos maiores artilheiros da Champions League.'),
(9, 'Luka Modrić', 'Croácia', 38, 'Meio-campo', 'Real Madrid', 10, 8, 17, 'https://i.pinimg.com/736x/27/1d/a8/271da87c6194d56129edb01affb3f257.jpg', 'Maestro do meio-campo do Real Madrid, Modrić venceu a Champions várias vezes e uma Bola de Ouro.'),
(10, 'Jude Bellingham', 'Inglaterra', 21, 'Meio-campo', 'Real Madrid', 5, 10, 12, 'https://i.pinimg.com/736x/5f/0c/f3/5f0cf3f9e8710b43c73906bc2d4526e3.jpg', 'Joia inglesa revelada pelo Dortmund, Bellingham chegou ao Real Madrid como grande promessa.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogadores_champions`
--
ALTER TABLE `jogadores_champions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogadores_champions`
--
ALTER TABLE `jogadores_champions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
