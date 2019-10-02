<?php $this->layout = "views/frontend/layout.php"; ?>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="index.php?area=backend&controller=login&action=login" method="post">
			<input type="text" class="ggg" name="account" placeholder="Account" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="#">Create an account</a></p>
</div>
</div>