<?php
header("Content-Type: application/json; charset=UTF-8");

$cidades = [
    "PR" => ["Curitiba", "Londrina", "Maringá", "Foz do Iguaçu", "Cascavel"],
    "SP" => ["São Paulo", "Campinas", "Santos", "Ribeirão Preto", "Sorocaba"],
    "RJ" => ["Rio de Janeiro", "Niterói", "Petrópolis", "Volta Redonda", "Campos dos Goytacazes"],
    "MG" => ["Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora", "Montes Claros"]
];

$estado = isset($_GET["estado"]) ? $_GET["estado"] : "";

if (array_key_exists($estado, $cidades)) {
    echo json_encode($cidades[$estado], JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode([]);
}
?>
