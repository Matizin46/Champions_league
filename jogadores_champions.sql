-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2025 às 03:24
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
-- Banco de dados: `bd_champions`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores_champions`
--

CREATE TABLE `jogadores_champions` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `posicao` varchar(50) DEFAULT NULL,
  `time_atual` varchar(100) DEFAULT NULL,
  `numero_camisa` int(11) DEFAULT NULL,
  `gols_champions` int(11) DEFAULT NULL,
  `assistencias` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogadores_champions`
--

INSERT INTO `jogadores_champions` (`id`, `nome`, `nacionalidade`, `idade`, `posicao`, `time_atual`, `numero_camisa`, `gols_champions`, `assistencias`, `foto`) VALUES
(1, 'Lionel Messi', 'Argentina', 36, 'Atacante', 'Inter Miami', 10, 129, 42, 'img/messi.jpg'),
(2, 'Cristiano Ronaldo', 'Portugal', 39, 'Atacante', 'Al Nassr', 7, 140, 38, 'img/ronaldo.jpg'),
(3, 'Kylian Mbappé', 'França', 25, 'Atacante', 'PSG', 7, 40, 20, 'img/mbappe.jpg'),
(4, 'Kevin De Bruyne', 'Bélgica', 33, 'Meio-campo', 'Manchester City', 17, 15, 25, 'img/debruyne.jpg'),
(5, 'Mohamed Salah', 'Egito', 32, 'Atacante', 'Liverpool', 11, 40, 18, 'img/salah.jpg'),
(6, 'Vinícius Jr.', 'Brasil', 24, 'Atacante', 'Real Madrid', 7, 18, 15, 'img/vinicius.jpg'),
(7, 'Erling Haaland', 'Noruega', 24, 'Atacante', 'Manchester City', 9, 35, 10, 'img/haaland.jpg'),
(8, 'Robert Lewandowski', 'Polônia', 36, 'Atacante', 'Barcelona', 9, 92, 20, 'img/lewa.jpg'),
(9, 'Luka Modrić', 'Croácia', 38, 'Meio-campo', 'Real Madrid', 10, 8, 17, 'img/modric.jpg'),
(10, 'Jude Bellingham', 'Inglaterra', 21, 'Meio-campo', 'Real Madrid', 5, 10, 12, 'img/bellingham.jpg');

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
