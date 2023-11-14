<?php
session_start();
if(!$_SESSION["be"]){
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
    session_destroy();
}
else{
    include("includes/menu.inc.php");
    include("pages/" . $_GET["page"]. ".php");
}
?>