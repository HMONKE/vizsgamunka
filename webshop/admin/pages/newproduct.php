<div class="container col-lg-3">
<form action="" method="post" enctype="multipart/form-data">
    <label for="product_name">Product name:</label>
    <input type="text" name="product_name" id="product_name" maxlength="50">
    <br>
    <label for="product_desc">Product description:</label>
    <input type="text" name="product_desc" id="product_desc">
    <br>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price">
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock">
    <br>
    <label for="image">Image:</label>
    <input type="file" name="image" id="image"  >
    <br>
    <label for="featured">Featured:</label>
    <input type="number" name="featured" id="featured">
    <br>
    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" id="category_id">
    <br>
    <input type="submit" value="Upload new product" name="newproduct" style="color: black !important;">
</form >
</div>
<?php 
    if(isset($_POST["newproduct"])){
        $filen;
if (($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/png")) {
    if ($_FILES["image"]["error"] > 0) {
        $filen = $_FILES["image"]["name"];
    } else {
        if (file_exists("upload/" . $_FILES["image"]["name"])) {
        } else {
            move_uploaded_file($_FILES["image"]["tmp_name"], "../assets/images/products/" . $_FILES["image"]["name"]);
            $filen = $_FILES["image"]["name"];
        }
    }
} else {
    echo "Invalid file";
}
        $data = array($_POST["product_name"], $_POST["product_desc"], $_POST["price"], $_POST["stock"], $filen, $_POST["featured"], $_POST["category_id"]);
        $uj = new Controller;
        $uj->newproductC($data);
    };
?>