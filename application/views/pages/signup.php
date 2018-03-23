<div class="container text-center">
	<div class="card mt-5 w-75 mx-auto text-left mb-5">
		<div class="card-header">
			<h1 class="">Sign up</h1>
		</div>
		<div class="card-body">
			<form action="users/register" method="post" name="userinput">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" required id="name" name="name" placeholder="Enter your name" autofocus>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" required id="email" name="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" required="" id="password" name="password" placeholder="Password">
				</div>
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Sign up</button>
				</div>
			</form>
		</div>
		<div class="card-footer text-muted text-center">
			Already have an account? <a href="<?php echo base_url(); ?>login">Sign in!</a>
		</div>
	</div>
</div>