-- Criação do banco de dados
CREATE DATABASE hcc_database;

USE hcc_database;

-- Tabela de Usuários
CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL,
    data_nasc DATE NOT NULL,
    sexo ENUM('Masculino', 'Feminino') NOT NULL,
    email VARCHAR(30) UNIQUE NOT NULL,
    senha VARCHAR(20) NOT NULL,
    tipo_usuario ENUM('Paciente', 'Prestador', 'Administrador') NOT NULL,
    categoria VARCHAR(60) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    estado VARCHAR(60) NOT NULL,
    celular INT NOT NULL,
    foto VARCHAR(255) DEFAULT NULL
);

-- Tabela de Avaliações
CREATE TABLE Avaliacao (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    id_avaliador INT,
    id_avaliado INT,
    nota FLOAT,
    comentario VARCHAR(240),
    FOREIGN KEY (id_avaliador) REFERENCES Usuario(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (id_avaliado) REFERENCES Usuario(id_usuario) ON DELETE CASCADE
);

-- Tabela de Agendamentos
CREATE TABLE Agenda (
    id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
    fk_id_prestador INT,
    fk_id_paciente INT,
    status VARCHAR(30),
    data_inicio DATE,
    data_fim DATE,
    periodo VARCHAR(30),
    FOREIGN KEY (fk_id_prestador) REFERENCES Usuario(id_usuario) ON DELETE CASCADE,
    FOREIGN KEY (fk_id_paciente) REFERENCES Usuario(id_usuario) ON DELETE CASCADE
);