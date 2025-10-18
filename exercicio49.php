<?php

/******************************************************************************
    Curso: Engenharia de Software
    Disciplina: Linguagem e Técnicas de Programacão
    Professor: Flores
    Turma: ESOFT-2B
    Componentes:
        25061077-2 - Kauã Ricardo Gomes Fagundes
        25010975-2 - Bruno Petroli
        25004001-3 - Rafael Diesel
        25229846-2 - Wendel Souza Cardoso
        25228676-2 - Marlon Willian Silva Barros
        25357682-2 - Eduardo Rupp da Luz
        25165088-2 - Vinicius Bastos Rodrigues
        25178065-2 - Marcos Barcelar
        22001126-3 - Eric Ruthes
    Data: 29 de Agosto de 2025
    Descritivo: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n
 *******************************************************************************/

function gerarArrayPares($n) {
    $pares = [];
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }
    return $pares;
}

echo implode(", ", gerarArrayPares(10));

?>