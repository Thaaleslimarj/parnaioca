CREATE TABLE clientes (  
    id INT(11) AUTO_INCREMENT PRIMARY KEY,  
    nome VARCHAR(100) NOT NULL,  
    data_nascimento DATE NOT NULL,  
    cpf VARCHAR(11) NOT NULL UNIQUE,  
    email VARCHAR(100) NOT NULL,  
    telefone VARCHAR(15),  
    estado VARCHAR(50),  
    cidade VARCHAR(50)  
);  

CREATE TABLE funcionario (
id int auto_increment PRIMARY KEY,
nome varchar(255),
login varchar(255),
senha varchar(255),
tipo enum('admin','usuario'),
status enum('ativo','inativo')
);

CREATE TABLE acomodacoes (
id int auto_increment PRIMARY KEY,
nome varchar(255),
valor decimal(10,2),
capacidade int,
tipo enum('suite','apartamento'),
status enum('ativo','inativo')
);

CREATE TABLE frigobrar (
id int auto_increment PRIMARY KEY,
nome varchar(255),
valor decimal(10,2),
capacidade int,
manuntencao date
);

CREATE TABLE itens_frigobar (
id int auto_increment PRIMARY KEY,
idprodutos int,
idfrigobar int,
FOREIGN KEY(idfrigobar) REFERENCES frigobrar (id)
);

CREATE TABLE estoque (
id int auto_increment PRIMARY KEY,
nome varchar(255),
entradas int,
saidas int,
estoque int,
valor decimal(10,2)
);

ALTER TABLE itens_frigobar ADD FOREIGN KEY(idprodutos) REFERENCES estoque (id);

