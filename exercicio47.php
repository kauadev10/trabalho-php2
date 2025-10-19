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
    Data: 08 de Outubro de 2025
    Descritivo: Crie uma função contarVogais que receba uma string e retorne o número de vogais
 *******************************************************************************/

function contarVogais($txt) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $contador = 0;

    for ($i = 0; $i < strlen($txt); $i++) {
        if (in_array($txt[$i], $vogais)) {
            $contador++;
        }
    }

    return $contador;
}

echo contarVogais("Trabalho de PHP");

?>