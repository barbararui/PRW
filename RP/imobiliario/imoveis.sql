create database imobiliario;

use imobiliario;

	create table imoveis
    (
		id_movel INTEGER NOT NULL AUTO_INCREMENT,
        tipo_movel VARCHAR (10) NOT NULL,
        endereco VARCHAR (20) NOT NULL,
        cidade VARCHAR (10) NOT NULL,
        estado VARCHAR(2) NOT NULL,
        valor DECIMAL (10, 2) NOT NULL,
        dt_cadastro DATE NOT NULL,
        PRIMARY KEY (id_movel)
    );