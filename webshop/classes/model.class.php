<?php

class Model extends Db{
    protected function categoriesM(){
        $sql = "SELECT * FROM categories ORDER BY category_name";
        $stmt = $this->con()->query($sql);
        return $stmt;
    }

    protected function featuredProductsM(){
        $sql = "SELECT * FROM products WHERE featured = 1";
        $stmt = $this->con()->query($sql);
        return $stmt;
    }

    protected function contactsM(){
        $sql = "SELECT * FROM contacts";
        $stmt = $this->con()->query($sql);
        return $stmt;
    }

    protected function productsByCategoryM($id){
        $sql = "SELECT * FROM products WHERE category_id = ?";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt;
    }

    protected function productByIdM($id){
        $sql = "SELECT * FROM products WHERE id=?";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt;
    }
    protected function orderIdM($order_id){
        $sql="SELECT * FROM orders WHERE order_id=?";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute([$order_id]);
        if($stmt->rowCount()>0 ){
            return false;
        }
        else{
            return true;
        }
    }
    protected function ordersM($data){
        $sql="INSERT INTO orders(order_id,product_id,product_quantity) VALUES(?,?,?)";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute($data);
    }

    protected function productViewM($id){
        $sql = "SELECT * FROM products WHERE id=?";
        $stmt = $this->con()->prepare($sql);
        $stmt ->execute([$id]);
        return $stmt;
    }
} 

?>
