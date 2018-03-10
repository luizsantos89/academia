
CREATE DATABASE academia;

USE academia;

CREATE TABLE funcionario(
    idFuncionario INT PRIMARY KEY NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    ADD CONSTRAINT PK_IdFuncionario PRIMARY KEY REFERENCES idFuncionario
);

CREATE TABLE endereco(
    idEndereco INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero INT,
    complemento VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    uf VARCHAR(2),
    ADD CONSTRAINT FK_IdFuncionario FOREIGN KEY REFERENCES funcionario(idFuncionario),
    ADD CONSTRAINT PK_IdEndereco PRIMARY KEY REFERENCES idEndereco
);

CREATE TABLE aluno(
    idAluno INT PRIMARY KEY NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL
    
);

CREATE TABLE pagamento(
    idPagamento INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    idAluno INT NOT NULL,
    valor REAL NOT NULL,
    dataPagamento DATE NOT NULL,
    CONSTRAINT ADD PK_IdPagamento PRIMARY KEY REFERENCES idPagamento,
    CONSTRAINT ADD FK_IdFuncionario FOREIGN KEY REFERENCES funcionario(idFuncionario),
    CONSTRAINT ADD FK_IdAluno FOREIGN KEY REFERENCES aluno(idAluno)
);

CREATE TABLE aparelho(
    idAparelho INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    descricao VARCHAR(500),
    CONSTRAINT ADD PK_IdAparelho PRIMARY KEY REFERENCES idAparelho,
    CONSTRAINT ADD FK_IdFuncionario FOREIGN KEY REFERENCES funcionario(idFuncionario)
);

CREATE TABLE atividade(
    idAtividade INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    idAparelho INT NOT NULL,
    descricao VARCHAR(100),
    CONSTRAINT ADD PK_IdAtividade PRIMARY KEY REFERENCES idAtividade,
    CONSTRAINT ADD FK_IdFuncionario FOREIGN KEY REFERENCES funcionario(idFuncionario),
    CONSTRAINT ADD FK)IdAparelho FOREIGN KEY REFERENCES aparelho(idAparelho)
);