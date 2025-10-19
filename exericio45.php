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
    Data: 08 de Outubro de 2025
    Descritivo: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento
 *******************************************************************************/

    function obterPrimeiroElemento($array) {
    if (!is_array($array) || empty($array)) {
        return "Erro: é necessário um array com pelo menos um elemento!";
    }
    return $array[0];
}

$nomes = ["Ana", "Bruno", "Carlos", "Diana"];
echo "45. Primeiro elemento do array: " . obterPrimeiroElemento($nomes) . "<br>";

?>