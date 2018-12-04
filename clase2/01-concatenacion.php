<?php
    $sPrimero = "Yo quiero ";
    $sSegundo = "aprender PHP";

    //Concatenacion usando signo (.)
    var_dump($sPrimero . $sSegundo);

    //Concatenacion de varios valores
    $sTercero = " 7 a fondo";
    var_dump($sPrimero . $sSegundo . $sTercero . " en");

    $iDias = 20;
    $sTiempo = " dias";

    var_dump($sPrimero . $sSegundo . $sTercero . " en " . $iDias . $sTiempo);
?>