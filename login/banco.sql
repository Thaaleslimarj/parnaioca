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