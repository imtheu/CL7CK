<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.css">
	<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> -->
	<style type="text/css">
		body{
			background: #fafafa;
		}
		.navbar{
			height: 60px;
		}
		.jumbotron.with-bg{
			background: url(<?php echo base_url() ?>assets/img/bg-clock.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: 0px -120px;
			filter: blur(5%);
			top: 0;
			left: 0;
		}
	</style>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/regular.js" integrity="sha384-t7yHmUlwFrLxHXNLstawVRBMeSLcXTbQ5hsd0ifzwGtN7ZF7RZ8ppM7Ldinuoiif" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Cl7ck" width="150"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url() ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Github</a>
						</li>
					</ul>
					<form class="my-2 my-lg-0">
						<a class="btn btn-outline-light" href="#" role="button">Get started</a>
					</form>
				</div>
			</div>
		</nav>
	</header>