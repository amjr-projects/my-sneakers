CREATE DATABASE mysneakers;

CREATE TABLE tb_usuario(
	CD_USUARIO INT(11) AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(40),
    EMAIL VARCHAR(50),
    SENHA VARCHAR (10)
);

CREATE TABLE tb_tenis (
	CD_TENIS INT(11) AUTO_INCREMENT,
    TENIS VARCHAR(25),
    MARCA VARCHAR(20),
    IMG_TENIS VARCHAR(250),
    DESC_TENIS VARCHAR(255)
    CD_USUARIO INT(11),
    PRIMARY KEY (CD_TENIS),
    FOREIGN KEY (CD_USUARIO) REFERENCES tb_usuario(CD_USUARIO)
);