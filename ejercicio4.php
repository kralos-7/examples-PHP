<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio</title>
</head>

<body>
    <select>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>
</body>

</html>