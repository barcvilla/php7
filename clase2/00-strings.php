<?php
    $sNombreProductoCss = "Polo CSS";
    var_dump($sNombreProductoCss);

    // Concatenacion 1
    $sPrimero = "Quiero un $sNombreProductoCss";
    var_dump($sPrimero);

    // Concatenacion 2
    $sNombreProductosJs = "Polo JS";
    $sSegundo = "Quiero un {$sNombreProductosJs}";
    var_dump($sSegundo);
?>