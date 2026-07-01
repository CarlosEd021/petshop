CREATE DATABASE IF NOT EXISTS psaf;
USE psaf;

CREATE TABLE clientes (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    cpf VARCHAR(20),
    telefone VARCHAR(20),
    email VARCHAR(150),
    endereco VARCHAR(255)
);

CREATE TABLE produtos (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    descricao VARCHAR(255),
    preco DOUBLE,
    estoque INT
);

CREATE TABLE servicos (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    descricao VARCHAR(255),
    valor DOUBLE
);

CREATE TABLE pets (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    especie VARCHAR(80),
    raca VARCHAR(100),
    idade INT,
    cliente_id BIGINT,
    CONSTRAINT fk_pet_cliente
        FOREIGN KEY(cliente_id)
        REFERENCES clientes(id)
);

CREATE TABLE agendamentos (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    data DATE,
    observacao VARCHAR(255),
    pet_id BIGINT,
    servico_id BIGINT,

    CONSTRAINT fk_agendamento_pet
        FOREIGN KEY(pet_id)
        REFERENCES pets(id),

    CONSTRAINT fk_agendamento_servico
        FOREIGN KEY(servico_id)
        REFERENCES servicos(id)
);