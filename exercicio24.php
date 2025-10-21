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
    Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto
*******************************************************************************/

$produtos = array(
    array("nome" => "Refrigerante", "preço" => 10.50),
    array("nome" => "Marmita G", "preço" => 20.00),
    array("nome" => "Marmita P", "preço" => 15.75)
);

foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . ", Preço: R$ " . number_format($produto["preço"], 2, ',', '.') . "\n";
}

?>          