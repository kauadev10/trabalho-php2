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
    Data: 20 de Outubro de 2025
    Descritivo: WHILE: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
*******************************************************************************/

    $i = readline("Digite um número: ");
    $i = abs($i);
    $j = 0;

    while ($i > 0 || $j == 0) {
        $i = (int)($i / 10);
        $j++;
    }

    echo "O número tem $j dígitos \n";

?>