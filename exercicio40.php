<?php
function imprimirCarro($carro) {
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"] . "<br>";
}
$meuCarro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
];
imprimirCarro($meuCarro);
?>