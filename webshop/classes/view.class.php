<?php

class View extends Model{
    public function categoriesV(){
        $stmt = $this->categoriesM();
        while($row = $stmt->fetch()){
            echo '<li><a class="dropdown-item" href="index.php?page=products&category='.$row["id"].'">'.$row["category_name"].'</a></li>
            ';
        }
    }

    public function featuredProductsV(){
        $stmt = $this->featuredProductsM();
        while($row = $stmt->fetch()){
            echo'
            <div class="col-md-4 text-center mb-3 px-3">
            
                <div class="productcard">
                <a href="index.php?page=productview&id='.$row["id"].'">
                    <div class="productimg">
                    
                        <img src="assets/images/products/'. $row["image"] . '" alt="'.$row["product_name"].'">
                        
                    </div>
                    </a>
                    <hr>
                    <h5>'.$row["product_name"].'</h5>
                    
                    <h5>'.$row["price"].' Souls</h5>
                    <a class="btn btn-primary" href="index.php?pro_id='.$row["id"].'">ADD TO CART</a>
                </div>
                
            </div>
            ';
        }
    }

    public function contactsV(){
        $stmt = $this->contactsM();
        while($row = $stmt->fetch()){
            echo'
            <h5 class="ps-3">Address</h5>
            <p class="ps-5">'.$row["addres"].'</p>
            <h5 class="ps-3">Phone</h5>
            <p class="ps-5">'.$row["phone"].'</p>
            <h5 class="ps-3">Email</h5>
            <p class="ps-5">'.$row["email"].'</p>
            ';
        }
    }

    public function productsByCategoryV($id){
        $stmt = $this->productsByCategoryM($id);

        while($row = $stmt->fetch()){
            echo'
            <div class="col-md-4 text-center p-4">
                <div class="productcard">
                <a href="index.php?page=productview&id='.$row["id"].'">
                    <div class="productimg">
                    
                        <img src="assets/images/products/'.$row["image"].'">
                    </div>
                    </a>
                    <hr>
                    <h5>'.$row["product_name"].'</h5>
                    
                    <h5>'.$row["price"].' Souls</h5>
                    <a class="btn btn-primary" href="index.php?page=products&category='.$id.'&pro_id='.$row["id"].'">ADD TO CART</a>
                </div>
            </div>
            ';
        }
    }

    public function productByIdV($id, $table_col){
        $stmt = $this->productByIdM($id);

        $row = $stmt->fetch();

        return $row[$table_col];
    }

    public function productsViewV($id){
        $stmt = $this->productViewM($id);
        $row = $stmt->fetch();
        echo'        
        <div class="container d-flex justify-content-center">
        <div class="productview-card my-4 p-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-5">
            <img src="assets/images/products/'.$row["image"].'" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <h5 class="card-title">'.$row["product_name"].'</h5>
                <p class="card-text"><p>'.$row["product_desc"].'</p></p>
                <p class="card-text"> <h5>'.$row["price"].' Souls</h5>
                <a class="btn btn-primary" href="index.php?page=cart&category='.$id.'&pro_id='.$row["id"].'">ADD TO CART</a>
                </p>
            </div>
            </div>
        </div>
        </div>

        </div>
            
            ';
    }

    


}

?>