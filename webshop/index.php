<?php include("includes/loader.inc.php"); ?>
<?php include("includes/addtocart.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container-fluid g-0">
    <?php 
        include("includes/menu.inc.php"); 
        
        if(isset($_GET["page"])){
            include("pages/" . $_GET["page"] . ".php");
        }
        else{
            include("pages/home.php");
        }

        include("includes/footer.inc.php"); 
    ?>   
    </div>
    <script src="includes/menu.inc.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>