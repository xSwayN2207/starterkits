<?php
require_once __DIR__ . '/Calculatrice.php';
echo "programme principale \n";
$calculatrice = new Calculatrice();
$res = $calculatrice->additionner(1, 2);
echo "resultat = $res";
