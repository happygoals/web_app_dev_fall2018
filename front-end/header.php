<?php
 
 echo "test";
 ?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="home.html"><img alt="Logo" src="resource/logo.png" style="width:171px; height:47px;"></a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="home.html">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="survey.html">Surveys</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="analytics.html">Analytics</a>
			</li>
		</ul><button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle"><i class="fas fa-bars"></i></button> <!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input aria-describedby="basic-addon2" aria-label="Search" class="form-control" placeholder="Search for..." type="text">
				<div class="input-group-append">
					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
				</div>
			</div>
		</form>
			<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="userDropdown" role="button"><i class="fas fa-user-circle fa-fw">Admin</i></a>
				<div aria-labelledby="userDropdown" class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Settings</a>
					<div class="dropdown-divider"></div><a class="dropdown-item" data-target=".log-sign" data-toggle="modal" href="#signup">Login</a>
				</div>
			</li>
		</ul>
	</nav>