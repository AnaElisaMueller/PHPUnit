<?php 

class ShoppingList {

    public array $lista;

    public function addItem($item) {
        $this->lista[] = $item;
    }

    public function getItems() {
        return $this->lista;
    }

    public function removeItem($index) {
        unset($this->lista[$index]);
    }


}
?>