<!DOCTYPE html>
<html>
<head>
    <title>Travel App</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Selecciona tu destino y presupuesto</h1>
    <form method="POST" action="index.php">
        <label for="city">Ciudad:</label>
        <select name="city" id="city" required>
            <?php foreach ($cities as $city): ?>
                <option value="<?= $city['id'] ?>"><?= $city['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label for="budget">Presupuesto (COP):</label>
        <input type="number" name="budget" id="budget" required>
        <br><br>

        <input type="submit" value="Consultar">
    </form>
</body>
</html>
