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
    Descritivo: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev()
 *******************************************************************************/

function inverterString($str) {
    $inverted = "";
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i--) {
        $inverted .= $str[$i];
    }
    return $inverted;
}

echo inverterString("Ola, boa noite!");

?>