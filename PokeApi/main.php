<?php
if (isset($_POST["pokemon"])) {
    $nome = strtolower(trim($_POST["pokemon"]));
    // trim: remove espaços do input
    $url = "https://pokeapi.co/api/v2/pokemon/$nome";

    $resposta = @file_get_contents($url);

    if ($resposta !== false) {
        $dados = json_decode($resposta, true);
        $nomeFormatado = ucfirst($dados["name"]);
        echo "<p style='color:green;'>Nome do Pokémon: $nomeFormatado</p>";
    } else {
        echo "<p style='color:red;'>Pokémon não encontrado.</p>";
    }
} else {
    echo "<p>Nenhum dado enviado.</p>";
}
?>
