<?php
require_once 'Peso.php';
require_once 'Pesodolar.php';

sleep(1);

$objdolar = new Peso();
$objpeso = new Pesodolar();

$numero1=$_POST["txtnumero1"];


if (isset($_POST["btnmuldolar"])){
    $objdolar->setNumero1($numero1);
    echo $objdolar->peso();
}

if (isset($_POST["btnmulpeso"])){
    $objpeso->setNumero1($numero1);
    echo $objpeso->pesodolar();
}
?>