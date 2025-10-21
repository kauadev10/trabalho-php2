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
    Descritivo: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
 *******************************************************************************/

  for ($i = 2; $i <= 50; $i++) {
      $Primo = true;

      for ($j = 2; $j < $i; $j++) {
          if ($i % $j == 0) {
              $Primo = false;
              break;
          }
      }

      if ($Primo) {
          echo "$i \n";
      }
  }
?>
