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
    Descritivo: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
 *******************************************************************************/

  do {
      echo "1. Iniciar\n";
      echo "2. Parar\n";
      echo "3. Sair\n";

      $opcao = readline("Escolha uma opção: ");

      if ($opcao == 1) {
          echo "Iniciando...\n";
      } elseif ($opcao == 2) {
          echo "Parando...\n";
      } elseif ($opcao == 3) {
          echo "Saindo...\n";
          break;
      } else {
          echo "Opção inválida!\n";
      }

  } while ($opcao != 3);
?>