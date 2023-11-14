<?php
class Model extends Db{
    protected function loginM($username, $pwd){
        $codedpwd = sha1($pwd);
        $sql = "SELECT * FROM `admin` WHERE username=? AND pwd=?";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute([$username,$codedpwd]);
        if($stmt->rowCount()>0){
            session_start();
            $_SESSION["be"] = true;
            header("location: index.php?page=admin");
            
        }
        else{
            return false;
        }
    }
    protected function torlesM($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute([$id]);
    }

    protected function termekekM(){
        $sql = "SELECT * FROM products ORDER BY category_id";
        $stmt = $this->con()->query($sql);
        return $stmt;
    }

    protected function ordersM(){
        $sql = "SELECT * FROM orders ORDER BY order_id ASC";
        $stmt = $this->con()->query($sql);
        return $stmt;
    }

    protected function newproductM($data){
        $sql = "INSERT INTO products(product_name, product_desc, price, stock, `image`, featured, category_id) VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute($data);
    }
}


?>