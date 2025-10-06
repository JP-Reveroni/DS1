<?php 
// Usando switch e if-elseif para calcular o preço de roupas com base no tipo e tamanho
echo "<h1>1. Escreva um script que leia o nome de uma peça de roupa e o tamanho (P, M ou G). 
Use switch para definir o preço base e if para aplicar um acréscimo de 10% se for tamanho G. 
Mostre o preço final concatenando uma frase descritiva.</h1>";

//Definindo roupa e tamanho
$roupa = 'Blusa'; // Opções: Camisa, Calça, Blusa
$tamanho = 'G'; // Opções: P, M, G
$preco = 0; // Inicializa o Preço

// Calculando o preço com base na roupa e tamanho
// Usando switch para determinar o preço base da roupa
switch ($roupa) {
    case "Camisa":
        $preco = 49.90;
        break;
    case "Calça":
        $preco = 89.90;
        break;
    case "Blusa":
        $preco = 79.90;
        break;
    default:
        echo "Nenhuma peça selecionada.";
        exit;
}

// Ajustando o preço com base no tamanho usando if-elseif
if ($tamanho == 'P') {
    $preco = $preco;
} elseif ($tamanho == 'M') {
    $preco = $preco + ($preco * 0.05);
} elseif ($tamanho == 'G') {
    $preco = $preco + ($preco * 0.10);
}

echo "O preço da $roupa tamanho $tamanho é R$ " . number_format($preco, 2, ',', '.'); 
// number_format() formata o preço para o padrão brasileiro, com vírgula como separador decimal e ponto como separador de milhares.
echo "<hr>";

// --------------------------------------------------------------

echo "<h1>2.- Crie um array de notas de alunos (ex.: 4 notas). Calcule a média de cada um usando 
foreach. Mostre se foi aprovado (>= 6) ou reprovado usando if/else. </h1>";

// Array com notas dos alunos
$notas = [[7, 8, 7.8, 9.5], [6, 7.5, 8, 9], [9, 8.5, 7, 5], [5, 6.5, 7.8, 4]];
$contador = 0;

// Calclulando a média de cada aluno
foreach ($notas as $nota) {
    $contador++;
    $media = array_sum($nota) / count($nota);
    // count() retorna o número de elementos no array
    // array_sum() retorna a soma dos valores do array

    // Verificando se o aluno está aprovado ou reprovado
    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }
    echo "A média do aluno " . $contador . " é: " . number_format($media, 2, ',', '.') . " - " . $situacao . "<br>";
}
echo "<hr>";

// --------------------------------------------------------------

echo "<h1>3. Some todos os números pares entre 1 e 50 com while e armazene os pares em um 
array. Mostre a soma final e a lista de pares. </h1>";
$soma = 0;
// Percorrendo números de 1 a 50
for ($i = 1; $i <= 50; $i ++) {
    // verifica se o número é par
    if ($i % 2 == 0) {
        $pares[] = $i; // armazena os números pares em um array
        $soma += $i; // Soma os números pares 
    }
}
// Exibindo os números pares e a soma
echo "Números pares de 1 a 50: ";
foreach($pares as $par) {
    echo $par . " ";
}

echo "<br>A soma dos números pares de 1 a 50 é: " . $soma;
echo "<hr>";

// --------------------------------------------------------------

echo "<h1>4.Faça um simulador de caixa eletrônico: escolha a opção de saque (20, 50, 100) com 
switch e while para contar notas.</h1>";
// Valor do saque (pode alterar aqui)
$opcao = 3; // 1 = R$20, 2 = R$50, 3 = R$100

// Define o valor com base na opção escolhida
switch ($opcao) {
    case 1:
        $valor = 20;
        break;
    case 2:
        $valor = 50;
        break;
    case 3:
        $valor = 100;
        break;
    default:
        echo "Opção inválida!";
        exit;
}

// Exibe o valor escolhido
echo "Valor do saque: R$$valor<br><br>";

// Notas disponíveis (50, 20, 10)
$nota = 50;
$totalNotas = 0;
$valorRestante = $valor;

// Contador de notas
while ($valorRestante > 0) {
    if ($valorRestante >= $nota) {
        $valorRestante -= $nota;
        $totalNotas++;
    } else {
        // Exibe quantas notas dessa foram usadas
        echo "Total de notas de R$$nota: $totalNotas<br>";
        
        // Passa para a próxima nota menor
        if ($nota == 50) {
            $nota = 20;
        } elseif ($nota == 20) {
            $nota = 10;
        }
        
        $totalNotas = 0; // Reinicia o contador para a próxima nota
    }
}

// Exibe a última nota usada
echo "Total de notas de R$$nota: $totalNotas<br>";
echo "<br>Saque de R$$valor realizado com sucesso!";
echo "<hr>";

// --------------------------------------------------------------

echo "<h1>5. Monte um carrinho de compras com produtos e preços, use array, calcule total e 
mostre um recibo formatado. </h1>";
// Array de produtos disponíveis
$produtos = [
    ['nome' => 'Abóbora', 'preco' => 29.90],
    ['nome' => 'Mamão', 'preco' => 19.90],
    ['nome' => 'Café', 'preco' => 49.90],
    ['nome' => 'Picanha', 'preco' => 20.00],
    ['nome' => 'Ovo de Ema', 'preco' => 10.00]
];
$precoTotal = 0;

foreach ($produtos as $produto) {
    echo "<strong>Produto:</strong> " . $produto['nome'] . " - <strong>Preço:</strong> R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    $precoTotal += $produto['preco'];
}
echo "<br><strong>Nota Fiscal da Compra:</strong> R$ " . number_format($precoTotal, 2, ',', '.');
echo "<hr>";

// --------------------------------------------------------------

echo "<h1>6. De um array de salários, dê um aumento de 10% a quem ganha abaixo de 2000.</h1>";
$salarios = [1500.00, 3200.50, 1800.75, 4000.00, 1500.25, 2200.00, 4530.55];
$contador = 0;

// percorrendo o array de salários
foreach ($salarios as $salario) {
    $contador++;
    echo "Salário do funcionário $contador: R$ " . number_format($salario, 2, ',', '.') . "<br>";
    if ($salario < 2000) {
        $novoSalario = $salario + ($salario * 0.10);
        echo "O funcionário $contador teve um aumento de 10% no salario e agora ele recebe R$ " . number_format($novoSalario, 2, ',', '.') . ".<br>";
    }
}