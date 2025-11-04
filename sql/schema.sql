-- ===========================
-- Banco de Dados DIREC
-- ===========================
CREATE DATABASE IF NOT EXISTS direc_db DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE direc_db;

-- ===========================
-- Tabela de usuários
-- ===========================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ===========================
-- Tabela de permissões
-- ===========================
CREATE TABLE permissoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE,
    descricao VARCHAR(255)
);

-- ===========================
-- Relacionamento usuários x permissões
-- ===========================
CREATE TABLE user_permissoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    permissao_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (permissao_id) REFERENCES permissoes(id) ON DELETE CASCADE
);

-- ===========================
-- Tipos de projeto
-- ===========================
CREATE TABLE tipo_projeto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);

-- ===========================
-- Projetos
-- ===========================
CREATE TABLE projetos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tipo_id INT NOT NULL,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (tipo_id) REFERENCES tipo_projeto(id) ON DELETE CASCADE
);

-- ===========================
-- Conteúdos dinâmicos de projetos
-- ===========================
CREATE TABLE blocos_conteudo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT NOT NULL,
    tipo VARCHAR(50) NOT NULL, -- noticia, conquista, premio
    titulo VARCHAR(150),
    texto TEXT,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (projeto_id) REFERENCES projetos(id) ON DELETE CASCADE
);

-- ===========================
-- Notícias
-- ===========================
CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    resumo TEXT,
    conteudo TEXT,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ===========================
-- Eventos
-- ===========================
CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT,
    data_inicio DATETIME,
    data_fim DATETIME,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ===========================
-- Editais
-- ===========================
CREATE TABLE editais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT,
    data_inicio DATETIME,
    data_fim DATETIME,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ===========================
-- Inserindo tipos de projeto iniciais
-- ===========================
INSERT INTO tipo_projeto (nome) VALUES 
('Extensão'), 
('Inovação'), 
('Pesquisa');

-- ===========================
-- Inserindo permissões padrão
-- ===========================
INSERT INTO permissoes (nome, descricao) VALUES
('admin', 'Acesso total ao sistema'),
('professor', 'Pode gerenciar projetos e conteúdos'),
('bolsista', 'Pode adicionar conteúdos aos projetos vinculados');
