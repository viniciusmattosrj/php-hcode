USE dbphp7;

CREATE TABLE tb_usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha  VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

SELECT * FROM tb_usuarios;

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('root','123456');
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('vinicius','123456');

UPDATE tb_usuarios SET dessenha = '123Mudar' WHERE id_usuario = 1;   

DELETE FROM tb_usuarios WHERE id_usuario = 1;

TRUNCATE TABLE tb_usuarios;