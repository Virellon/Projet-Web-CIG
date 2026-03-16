<?php

class PanierAchats {

    private $id;
    private $userId;
    private $productId;
    private $quantity;
}

public function __construct($id = null, $userId, $productId, $quantity)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->productId = $productId;
        $this->quantity = $quantity;
    }

    
    public function getId() { return $this->id; }
    public function getUserId() { return $this->userId; }
    public function getProductId() { return $this->productId; }
    public function getQuantity() { return $this->quantity; }

    
    public function setId($id) { $this->id = $id; }
    public function setUserId($userId) { $this->userId = $userId; }
    public function setProductId($productId) { $this->productId = $productId; }
    public function setQuantity($quantity) { $this->quantity = $quantity; }


