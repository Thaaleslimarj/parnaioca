CREATE TABLE frigobar (
id int auto_increment PRIMARY KEY,
acomodacao int,
nome varchar(255),
valor decimal(10,2),
capacidade int,
manutencao date,
status enum('ativo','inativo')
)

CREATE TABLE funcionario (
id int auto_increment PRIMARY KEY,
nome varchar(255),
login varchar(255),
senha varchar(255),
tipo enum('admin','usuario'),
status enum('ativo','inativo')
)

CREATE TABLE estoque (
id int auto_increment PRIMARY KEY,
nome varchar(255),
entradas int,
saidas int,
estoque int,
valor decimal(10,2)
)

CREATE TABLE itens_frigobar (
id int auto_increment PRIMARY KEY,
idprodutos int,
idfrigobar int,
FOREIGN KEY(idprodutos) REFERENCES estoque (id),
FOREIGN KEY(idfrigobar) REFERENCES frigobar (id)
)

CREATE TABLE acomodacoes (
id int auto_increment PRIMARY KEY,
nome varchar(255),
valor decimal(10,2),
capacidade int,
tipo enum('suite','apartamento'),
status enum('ativo','inativo')
)

CREATE TABLE cliente (
id int auto_increment PRIMARY KEY,
nome varchar(255),
data_nascimento date,
cpf int unique,
email varchar(255),
telefone int,
estado varchar(255),
cidade varchar(255),
status enum('ativo','inativo')
)

CREATE TABLE Estacionamento (
id int PRIMARY KEY,
nome int,
acomodacao int,
placa varchar(255),
FOREIGN KEY(nome) REFERENCES cliente (id),
FOREIGN KEY(acomodacao) REFERENCES acomodacoes (id)
)

ALTER TABLE frigobar ADD FOREIGN KEY(acomodacao) REFERENCES acomodacoes (id)



-- -- INSERE DADOS NA TABELA
-- INSERT INTO funcionario ( nome, login, senha, tipo, status 
-- 			)VALUES ( 'Vitor', 'vitor', '123', 'usuario', 'ativo');
            
-- INSERT INTO funcionario ( nome, login, senha, tipo, status ) VALUES ( 'Thales', 'thales', '123', 'admin', 'ativo');


-- -- BUSCA TODOS OS DADOS DA TABELA
-- SELECT * FROM funcionario;
-- -- BUSCA DADOS SELECIONADOS DA TABELA
-- SELECT login, senha FROM funcionario;

-- -- BUSCA DADOS SELECIONADOS DA TABELA COM PARAMETRIZAÇÃO
-- SELECT login, senha FROM funcionario WHERE login = 'thales' and senha = '1234';




