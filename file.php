<?php
$aluno = array("nome" => "Jesus Roberto");

$notas = array(
    "1bim" => 7,
    "2bim" => 4,
    "3bim" => 5,
    "4bim" => 9
);

$media = array_sum($notas) / count($notas);

$aluno["media"] = $media;

if ($media >= 6) {
    $aluno["situacao"] = "Aprovado";
} else if ($media >= 4) {
    $aluno["situacao"] = "Recuperação";
} else {
    $aluno["situacao"] = "Reprovado";
}

echo "Nome: ". $aluno["nome"]. "\n";
echo "Notas: ". implode(", ", $notas). "\n";
echo "Média: ". $aluno["media"]. "\n";
echo "Situação: ". $aluno["situacao"]. "\n";
?>