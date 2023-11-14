<?php include("includes/adminloader.inc.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid  m-0 p-0 h-100">
    <?php
 
    if(isset($_GET["page"])){
        include("includes/session.inc.php");
    }
    else{
        include("pages/login.php");
    }



    ?>
    </div>


    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>