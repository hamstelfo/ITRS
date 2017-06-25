<?php

class Menu extends BaseModel{
    public $items;
    
    function Menu()
    {
        parent::BaseModel("menu_item");
    	$this->items= $this->getRows("*", "WHERE (`active`= 1)", "ORDER BY `ord` ASC");        
    }

    function getCurrentIndex()
    {
        // Pending.. it will return the index of the current menu item.
        return 0;
    }
    
}
?>