<?php

// muutujate defineerimine;
// $muutujanimi = väärtus;
    echo '<h4>Matemaatilised operaatorid</h4>';
    $arv1 = 7;
    $arv2 = 24;

        echo $arv1.' + '.$arv2.' = '.($arv1 + $arv2).'<br>';
        echo $arv1.' - '.$arv2.' = '.($arv1 - $arv2).'<br>';
        echo $arv1.' * '.$arv2.' = '.($arv1 * $arv2).'<br>';
        echo $arv1.' / '.$arv2.' = '.($arv1 / $arv2).'<br>';
        echo $arv1.' % '.$arv2.' = '.($arv1 % $arv2).'<br>';
        echo '<hr>';
        echo '<h4>Võrdlusoperaatorid</h4>';
        echo $arv1.' < '.$arv2.' see on '.($arv1 < $arv2).'<br>';
        echo $arv1.' > '.$arv2.' see on '.($arv1 > $arv2).'<br>';
        echo $arv1.' <= '.$arv2.' see on '.($arv1 <= $arv2).'<br>';
        echo $arv1.' >= '.$arv2.' see on '.($arv1 >= $arv2).'<br>';
        echo $arv1.' == '.$arv2.' see on '.($arv1 == $arv2).'<br>';
        echo $arv1.' != '.$arv2.' see on '.($arv1 != $arv2).'<br>';

?>