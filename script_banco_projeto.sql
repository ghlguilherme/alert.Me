DROP DATABASE IF EXISTS ALERTMEBD;
CREATE DATABASE IF NOT EXISTS ALERTMEBD;
USE ALERTMEBD;

CREATE TABLE PESSOA(
	PESSOA_ID INT AUTO_INCREMENT,
    PESSOA_NOME VARCHAR(100) NOT NULL,
    PESSOA_NASCIMENTO DATE NOT NULL,
    PESSOA_USUARIO VARCHAR(50) UNIQUE NOT NULL,
    PESSOA_SENHA VARCHAR(50) NOT NULL,
    PESSOA_EMAIL VARCHAR(100) NOT NULL,
    PESSOA_FOTO VARCHAR(150) NULL,
    PRIMARY KEY(PESSOA_ID)
);

CREATE TABLE PESSOAENDERECO(
	PESSOAENDERECO_ID INT AUTO_INCREMENT,
    PESSOAENDERECO_CEP VARCHAR(8),
    PESSOAENDERECO_RUA VARCHAR(100),
    PESSOAENDERECO_NUMERO INT,
    PESSOAENDERECO_BAIRRO VARCHAR(100),
    PESSOAENDERECO_CIDADE VARCHAR(100),
    PESSOAENDERECO_ESTADO VARCHAR(50),
    PRIMARY KEY(PESSOAENDERECO_ID)
);

CREATE TABLE PESSOACONTATO(
	PESSOACONTATO_ID INT AUTO_INCREMENT,
    PESSOACONTATO_TIPO VARCHAR(1),
    PESSOACONTATO_CONTATO VARCHAR(50),
    PRIMARY KEY(PESSOACONTATO_ID)
);
