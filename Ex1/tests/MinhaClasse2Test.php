<?php 

use PHPUnit\Framework\TestCase;

require_once 'src/MinhaClasse.php';

class MinhaClasse2Test extends TestCase {

    public function testMaisSoma() {//se retorna 
        $minhaClasse = new MinhaClasse();
        $soma1 = $minhaClasse->somar(-1, -5);
        $soma2 = $minhaClasse->somar(5, 0);
        $resultado = $soma1 + $soma2;
        $this->assertEquals(-1, $resultado);
    } 

}
?>