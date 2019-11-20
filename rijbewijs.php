<?php
echo "Hoe oud ben je?" . PHP_EOL;
$A = readline(">");
if ($A < "16.5") {
    echo "Helaas, je mag nog niet je rijbewijs halen.";
} else {
    echo "Je bent de goede leeftijd om je rijbewijs te halen!";
}
