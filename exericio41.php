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
        22001126-2 - Eric Ruthes
    Data: 22 de outubro de 2025
    Descritivo:  Crie uma função chamada somar que receba dois números e retorne a soma deles
 *******************************************************************************/

function somar($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Erro: os valores devem ser números!";
    }
    return $a + $b;
}

echo "41. Soma: " . somar(10, 5) . "<br>";

?>