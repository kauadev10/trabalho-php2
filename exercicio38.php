<?php
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: $media<br>";
    if ($media >= 7) {
        echo "Situação: Aprovado<br>";
    } else {
        echo "Situação: Reprovado<br>";
    }
}
calcularMediaAluno(8.5, 6.0);
?>