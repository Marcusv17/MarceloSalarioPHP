<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Salário</h1>
        <form action="calcularSalario.php" method="POST">
            <div class="form-group">
                <label for="horas">Horas Trabalhadas</label>
                <input type="number" id="horas" name="horas" step="0.01" min="0" required>
            </div>
            <div class="form-group">
                <label for="valor_hora">Salário por Hora (R$)</label>
                <input type="number" id="valor_hora" name="valor_hora" step="0.01" min="0" required>
            </div>
            <button type="submit" class="btn">Calcular Salário</button>
        </form>
    </div>
</body>
</html>
