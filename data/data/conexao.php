<?php
//PDO
//$pdo = new PDO("sqlite:cardapio.db"); -> quando nao tiver db instalado

$pdo = new PDO("mysql:host=localhost;dbname=cardapio", "root", "");
