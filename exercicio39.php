<?php
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}
contagemRegressiva(10);
?>