<?php
require_once 'Conversion.php';

class Peso extends Conversion{

    public function peso(){
       return ($this ->getNumero1() * 3.365);
    }
}
?>