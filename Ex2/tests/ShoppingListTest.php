<?php 

use PHPUnit\Framework\TestCase;

require_once 'src/ShoppingList.php';

class ShoppingListTest extends TestCase {
    public function testAddItem() {//verificar se item foi adicionado na lista
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('pera');
        $shoppingList->addItem('uva');
        $resultado = $shoppingList->getItems();
        $this->assertEquals($resultado=["pera", "uva"], $resultado);
    }

    // public function testRemoveItem() {//verifica se o item foi removido da lista
    //     $shoppingList = new ShoppingList();
    //     $shoppingList->addItem('pera');
    //     $shoppingList->removeItem(1);
    //     $resultado = $shoppingList->getItems();
    //     $this->assertEquals(null, $resultado);
    // }

    // public function testItemDuplicado() {//verifica se há itens dublicados na lista
    //     $shoppingList = new ShoppingList();
    //     $shoppingList->addItem('pera');
    //     $shoppingList->addItem('uva');
    //     $resultado = $shoppingList->getItems();
    //     $this->assertContainsOnly($resultado, $resultado, false);
    // }
}
?>