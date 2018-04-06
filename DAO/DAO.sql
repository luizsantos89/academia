
CREATE DATABASE academia;

USE academia;

CREATE TABLE funcionario(
    idFuncionario INT PRIMARY KEY NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL
);

CREATE TABLE endereco(
    idEndereco INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    rua VARCHAR(100) NOT NULL,
    numero INT,
    complemento VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    uf VARCHAR(2)
);

ALTER TABLE endereco ADD CONSTRAINT 'FK_Funcionario' FOREIGN KEY(idFuncionario) REFERENCES 'funcionario' ('idFuncionario');

CREATE TABLE aluno(
    idAluno INT PRIMARY KEY NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL
    
);

CREATE TABLE pagamento(
    idPagamento INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    idAluno INT NOT NULL,
    valor REAL NOT NULL,
    dataPagamento DATE NOT NULL
);

CREATE TABLE aparelho(
    idAparelho INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    descricao VARCHAR(500)
);

CREATE TABLE atividade(
    idAtividade INT PRIMARY KEY NOT NULL UNIQUE,
    idFuncionario INT NOT NULL,
    idAparelho INT NOT NULL,
    descricao VARCHAR(100)
}