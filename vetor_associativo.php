<?php 
$usuario = [
    "nome" => "Thais",
    "idade" => 28,
    "cargo" => "Desenvolvedora"
];

echo $usuario["nome"];
echo $usuario["idade"];

foreach ($usuario as $chave => $valor){
    echo "$chave: $valor <br>";
}
