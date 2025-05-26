<?php
if (isset($_GET["nome"])) {
    $nome = strtolower(trim($_GET["nome"]));

    if (@file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome")) {
        echo "Buscou por: $nome";
    } else {
        echo "O nome '$nome' não existe";
    }
} else {
    echo "Nenhum nome enviado";
}
?>
