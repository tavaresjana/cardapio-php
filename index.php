<?php 

require("./data/data/conexao.php");
require("./model/Produto.php");

$horario = date('H:i');

$hora = 13;

$mensagem = ($hora < 12) ? "Bom dia" : (($hora >= 12) ? "Boa tarde" : "Boa noite");

$sql = "SELECT * FROM produtos";
$resultado = $pdo->query($sql);
$dados= $resultado->fetchAll(PDO::FETCH_ASSOC);

$produtos = array_map(function ($produtos){
    return new Produto(
        $produtos["id"],
        $produtos["nome"],
        $produtos["descricao"],
        $produtos["preco"],
        $produtos["imagem"]
    );
}, $dados);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Epic Food</title>
</head>

<body>

    <nav>
        <h1>Epic Food</h1>
        <ul>
            <li class="active"><a href="/index.html">cardápio</a></li>
            <li><a href="/admin.html">produtos</a></li>
            <li><a href="/new.html">cadastrar</a></li>
        </ul>
        <div>
            <p>
                <?= $mensagem ?>,  <?= $horario ?>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor"
                class="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>

    </nav>

    <main>
        <h3>Nosso Cardápio</h3>
        <p>Cada prato que servimos é uma obra de arte gastronômica cuidadosamente elaborada por nossos talentosos chefs. Nossa culinária é uma fusão de tradição e inovação, com uma paleta de sabores que abraça influências de todo o mundo. Desde pratos clássicos até criações contemporâneas, o nosso cardápio oferece uma variedade de opções para atender a todos os gostos e preferências.</p>

        <div id="link-category">
            <a href="#lanches" class="pill">lanches</a>
            <a href="#massas" class="pill">massas</a>
            <a href="#" class="pill">sobremessas</a>
            <a href="#" class="pill">bebidas</a>
        </div>

        <h4 id="lanches">🍔 lanches</h4>
        <section>
            <div class="card">
                <img src="./assets/images/lanche1.jpg" alt="food">
                <div class="card-body">
                    <h5>hamburguer</h5>
                    <p>hamburguer de carne bovina, queijo, alface, tomate e molho especial</p>
                    <p class="price">R$ 15,00</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/lanche1.jpg" alt="food">
                <div class="card-body">
                    <h5>hamburguer</h5>
                    <p>hamburguer de carne bovina, queijo, alface, tomate e molho especial</p>
                    <p class="price">R$ 15,00</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/lanche1.jpg" alt="food">
                <div class="card-body">
                    <h5>hamburguer</h5>
                    <p>hamburguer de carne bovina, queijo, alface, tomate e molho especial</p>
                    <p class="price">R$ 15,00</p>
                </div>
            </div>
        </section>

        <h4 id="massas">🍝 massas</h4>
        <section>
            <?php foreach ($produtos as $produtos) : ?>
                <div class="card">
                    <img src="<?= $produtos->getImagem() ?>" alt="food">
                    <div class="card-body">
                        <h5><?= $produtos->getNome() ?></h5>
                        <p><?= $produtos->getDescricao() ?></p>
                        <p class="price"> <?= $produtos->getPrecoFormatado() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <div>
            <h3>Epic Food</h3>
            <p>projeto de exemplo da disciplina de Linguagens de Servidor do EAD do C.E. Senac</p>
            <p>feito com 🖤 e com PHP</p>
        </div>
        
    </footer>

</body>

</html>