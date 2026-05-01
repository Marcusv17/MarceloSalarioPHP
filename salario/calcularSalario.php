<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $horas = $_POST['horas'] ?? null;
    $valor_hora = $_POST['valor_hora'] ?? null;

    if (!is_numeric($horas) || !is_numeric($valor_hora) || $horas < 0 || $valor_hora < 0) {
        $erro = "Por favor, insira valores válidos e não negativos.";
    } else {
        $salario = (float)$horas * (float)$valor_hora;
        $salario_formatado = number_format($salario, 2, ',', '.');
    }
} else {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if (isset($erro)): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php else: ?>
            <h1>Resultado do Cálculo</h1>
            <p class="resultado">O salário do funcionário é: <strong>R$ <?php echo $salario_formatado; ?></strong></p>
        <?php endif; ?>
        <a href="index.php" class="btn voltar">Voltar</a>
    </div>
</body>
</html>
