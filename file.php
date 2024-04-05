<?php
    $nome = "jesus";
    $notas = [6.5, 8, 9];

    $media = array_sum($notas) / count($notas);

    echo "Nome do aluno: $nome <br>";
    echo "Notas: ". implode(', ', $notas). "<br>";
    echo "Média: $media <br>";

    if ($media >= 7) {
        echo "Aluno aprovado <br>";
    } elseif ($media >= 5 && $media < 7) {
        echo "Aluno em recuperação <br>";
    } else {
        echo "Aluno reprovado <br>";
    }
?>