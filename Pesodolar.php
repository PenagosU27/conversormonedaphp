<?php
require_once 'Conversion.php';

class Pesodolar extends Conversion{

    public function pesodolar(){
        return ($this->getNumero1()* 0.00030);
    }
}
?>