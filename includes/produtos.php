<?php

$produtos = array (
     [
        "nome" => "Camiseta Básica",
        "descricao" => "Camiseta de algodão 100% com corte básico e cores variadas.",
        "preco" => 39.90,
        "foto" => "assets/camiseta.jpg"
    ],
    [
        "nome" => "Calça Jeans",
        "descricao" => "Calça jeans slim fit, confortável e resistente.",
        "preco" => 89.90,
        "foto" => "assets/calca-jeans.jpg"
    ],
    [
        "nome" => "Tênis Esportivo",
        "descricao" => "Tênis leve com amortecimento ideal para corridas e caminhadas.",
        "preco" => 149.90,
        "foto" => "assets/tenis-esportivo.jpg"
    ],
    [
        "nome" => "Jaqueta de Couro",
        "descricao" => "Jaqueta de couro sintético, estilo moderno e durável.",
        "preco" => 199.90,
        "foto" => "assets/jaqueta_de_couro.jpg"
    ],
    [
        "nome" => "Relógio Digital",
        "descricao" => "Relógio digital com cronômetro e resistência à água.",
        "preco" => 79.90,
        "foto" => "assets/relogio-digital.jpg"
    ],
    [
        "nome" => "Mochila Escolar",
        "descricao" => "Mochila resistente com compartimento para laptop.",
        "preco" => 99.90,
        "foto" => "assets/mochila_escolar.jpg"
    ],
    [
        "nome" => "Óculos de Sol",
        "descricao" => "Óculos de sol polarizado com proteção UV.",
        "preco" => 59.90,
        "foto" => "assets/oculos_de_sol.jpg"
    ],
    [
        "nome" => "Carteira de Couro",
        "descricao" => "Carteira de couro legítimo com diversos compartimentos.",
        "preco" => 49.90,
        "foto" => "assets/carteira-de-couro.jpg"
    ],
    [
        "nome" => "Fone de Ouvido Bluetooth",
        "descricao" => "Fone de ouvido sem fio com alta qualidade de som e bateria duradoura.",
        "preco" => 129.90,
        "foto" => "assets/fone-bluetooth.jpg"
    ],
    [
        "nome" => "Smartphone Android",
        "descricao" => "Smartphone com tela de 6.5 polegadas e câmera tripla de alta resolução.",
        "preco" => 999.90,
        "foto" => "assets/smartphone-android.jpg"
    ],
    [
        "nome" => "Carregador Portátil",
        "descricao" => "Carregador portátil com capacidade de 10.000 mAh.",
        "preco" => 79.90,
        "foto" => "assets/carregador-portatil.jpg"
    ],
    [
        "nome" => "Livro de Ficção",
        "descricao" => "Livro de ficção best-seller com narrativa envolvente.",
        "preco" => 29.90,
        "foto" => "assets/livro-de-ficcao.jpg"
    ]
    );

    for ($i = 0; $i > count($produtos); $i++) {
    echo '<div class="product">';
    echo '<img src="' . $produtos[$i]['foto'] . '" alt="' .  $produtos[$i]['nome'] . '">'; 
    echo '<h2>' . $produtos[$i]['nome'] . '</h2>';
    echo '<p>' . $produtos[$i]['descricao'] . '</p>';
    echo '<p>Preço: R$ ' . number_format($produtos[$i]['preco'], 2, ',', '.') . '</p>';
    echo '</div>';
    } 

?>
