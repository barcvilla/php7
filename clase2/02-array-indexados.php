<?php
    /**
     * Arrays Indexados
     * Declaracio de un Array Forma # 1
     */
    $sLenguajes = array('HTML', 'CSS', 'JS');

    // Declaracion de Array Forma # 2
    $sLenguajes = ['Java', 'Php', 'Python'];
    var_dump($sLenguajes);

    // Array de enteros
    $iEnteros = [3, 6, 9, 12];
    var_dump($iEnteros);

    // Array de floats
    $fNotas = [14, 15.5, 17.8, 20];
    var_dump($fNotas);

    // Declaracion de Array Forma # 3
    $iEdad1 = 15;
    $iEdad2 = 25;
    $iEdad3 = 30;

    $iEdades = [$iEdad1, $iEdad2, $iEdad3];
    var_dump($iEdades);

    // Array que contiene multiples tipos de datos
    $variosTiposArray = [$sLenguajes, $iEnteros, 15.5, true];
    var_dump($variosTiposArray);
?>