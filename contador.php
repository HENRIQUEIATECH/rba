<?php
// Nome do arquivo onde os dados serão salvos
$arquivo = "cliques.txt";

// Pega o tipo de aparelho enviado pelo JavaScript
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'Desconhecido';
$data = date("d/m/Y H:i:s");

// Prepara a linha para salvar
$linha = "[$data] Aparelho: $tipo" . PHP_EOL;

// Salva no arquivo (o FILE_APPEND faz ele não apagar o anterior, apenas somar)
file_put_contents($arquivo, $linha, FILE_APPEND);

// Retorna sucesso para o JavaScript
echo "registrado";
?>
