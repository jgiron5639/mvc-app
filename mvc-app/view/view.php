<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Viaje</title>
</head>
<body>
    <h1>Información de tu viaje</h1>

    <p>Ciudad seleccionada: <strong><?= $city['name'] ?></strong></p>
    <p>Clima actual: <strong><?= $current_temp ?>°C</strong></p>
    <p>Moneda local: <strong><?= $city['currency_name'] ?> (<?= $city['currency_symbol'] ?>)</strong></p>
    <p>Presupuesto en moneda local: <strong><?= $city['currency_symbol'] ?><?= number_format($local_budget, 2) ?></strong></p>
    <p>Tasa de cambio aplicada: <strong><?= $city['exchange_rate'] ?></strong></p>

    <a href="index.php">Realizar otra consulta</a>
</body>
</html>
