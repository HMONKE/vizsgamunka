<?php 
if(isset($_POST["login"])){
$login = new Controller;
$login->loginC($_POST["username"], $_POST["pwd"]);
}
?>
<div class="m-auto pt-5">
<h4 class="text-uppercase text-center my-4">Login</h4>
<form method="post" class="col-lg-4 mx-auto">
<label for="username">Username</label>
<input type="text" name="username" id="username" class="form-control" required>
<label for="pwd">Password</label>
<input type="password" name="pwd" id="pwd" class="form-control" required>
<input type="submit" name="login" value="Login" class="btn btn-success mt-2" style="color: white !important;">
<a href="../index.php" class="btn btn-danger mt-2" style="color: white !important;">Back to the front page</a>
</form>
</div>