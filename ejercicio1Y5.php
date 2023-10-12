<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio</title>
</head>

<body>
    <?php
    echo "Tabla del 1 por 1:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "1 * $i = " . (1 * $i) . "\n";
    }
    ?>

    <?php
    echo "Tablas de multiplicar:\n";
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i*$j=" . ($i * $j) . "\t";
        }
        echo "\n";
    }
    ?>
</body>

</html>