<?php
require 'includes/header.php';
require 'includes/produtos.php';
for ($i = 0; $i < count($produtos); $i++) {
echo '<div class="product">';
echo '<img src="' . $produtos[$i]['foto'] . '" alt="' .  $produtos[$i]['nome'] . '">'; 
echo '<h2>' . $produtos[$i]['nome'] . '</h2>';
echo '<p>' . $produtos[$i]['descricao'] . '</p>';
echo '<p>Preço: R$ ' . number_format($produtos[$i]['preco'], 2, ',', '.') . '</p>';
echo '</div>';
} 
require 'includes/footer.php';
?>