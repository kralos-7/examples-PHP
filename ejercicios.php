<?php

/**
 * 1. Muestra los números del 1 al 10
 */
echo "1. Muestra los números del 1 al 10";
echo "/n";
echo "Tabla del 1 por 1:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "1 * $i = " . (1 * $i) . "\n";
}
echo "/n";
/**
 * 2. Poner un hola mundo dentro de un html.
 */
echo "2. Poner un hola mundo dentro de un html";
echo "/n";
echo "<h1>Hola Mundo desde PHP</h1>";
echo "/n";
/**
 * 3. POner una imagen en un img con la ruta de la imagen.
 */

/**
 * 4. Crear un select en HTML y poner los números del 1 al 10 como opciones.
 */

/**
 * 5. Muestra los números del 1 al 10
 * 
 */
echo "5. Muestra los números del 1 al 10";
echo "/n";
echo "Tablas de multiplicar:\n";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i*$j=" . ($i * $j) . "\t";
    }
    echo "\n";
}
