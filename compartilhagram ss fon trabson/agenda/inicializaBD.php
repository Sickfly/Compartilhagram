<?php

$bd = new PDO('mysql:host=172.16.61.16;dbname=agendacontatos;charset=utf8','AgendaContatos','123456');


$bd -> setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);

$sql = 'CREATE TABLE Contatos(
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     nome VARCHAR(255) NOT NULL,
     tel VARCHAR(50),
     email VARCHAR(255),
     dataNasc DATE

)';

$bd ->exec($sql);


echo "Concluido";

?>
