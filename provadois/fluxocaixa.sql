create database provadois;

use provadois;

-- DROP TABLE IF EXISTS fluxo_caixa;
create table fluxo_caixa
(
	id	integer not null auto_increment,
    dataa DATE NOT NULL,
    tipo varchar(10) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    historico VARCHAR(150) NOT NULL,
    cheque VARCHAR(3) NOT NULL,
    PRIMARY KEY(id)   

);