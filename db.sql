USe db_name;

CREATE TABLE tb_users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(100),
    senha VARCHAR(255)
);

INSERT INTO tb_users (nome, email, senha)
VALUES ("Chiquim", 'chiquim@email.com', '123'); 


INSERT INTO tb_users (nome, email, senha)
VALUES ("Maria", 'maria@email.com', '123');