
CREATE TABLE IF NOT EXISTS jogadores_champions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    nacionalidade VARCHAR(50),
    idade INT,
    posicao VARCHAR(50),
    time_atual VARCHAR(100),
    numero_camisa INT,
    gols_champions INT,
    assistencias INT,
    foto VARCHAR(255)
);

INSERT INTO jogadores_champions
(nome, nacionalidade, idade, posicao, time_atual, numero_camisa, gols_champions, assistencias, foto)
VALUES
('Lionel Messi', 'Argentina', 36, 'Atacante', 'Inter Miami', 10, 129, 42, 'img/messi.jpg'),
('Cristiano Ronaldo', 'Portugal', 39, 'Atacante', 'Al Nassr', 7, 140, 38, 'img/ronaldo.jpg'),
('Kylian Mbappé', 'França', 25, 'Atacante', 'PSG', 7, 40, 20, 'img/mbappe.jpg'),
('Kevin De Bruyne', 'Bélgica', 33, 'Meio-campo', 'Manchester City', 17, 15, 25, 'img/debruyne.jpg'),
('Mohamed Salah', 'Egito', 32, 'Atacante', 'Liverpool', 11, 40, 18, 'img/salah.jpg'),
('Vinícius Jr.', 'Brasil', 24, 'Atacante', 'Real Madrid', 7, 18, 15, 'img/vinicius.jpg'),
('Erling Haaland', 'Noruega', 24, 'Atacante', 'Manchester City', 9, 35, 10, 'img/haaland.jpg'),
('Robert Lewandowski', 'Polônia', 36, 'Atacante', 'Barcelona', 9, 92, 20, 'img/lewa.jpg'),
('Luka Modrić', 'Croácia', 38, 'Meio-campo', 'Real Madrid', 10, 8, 17, 'img/modric.jpg'),
('Jude Bellingham', 'Inglaterra', 21, 'Meio-campo', 'Real Madrid', 5, 10, 12, 'img/bellingham.jpg');
