<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body role="document">
	<div class="container" role="main">
		<div class="row">
			<div class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-fluid" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">XYZ Travel</a>
					</div>
					<div class="collapse navbar-collapse" id="menu-fluid">
						<ul class="nav navbar-nav navbar-right menu-pill">
							<li><a href="#">Depan</a></li>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Layanan</a></li>
							<li><a href="#">Galeri</a></li>
							<li><a href="#">Kontak</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="slide-banner" class="carousel slide">
				<ol class="carousel-indicators">
					<li class="item-1 active"></li>
					<li class="item-2"></li>
					<li class="item-3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="http://placehold.it/350x150" alt="slide-satu">
						<div class="carousel-caption">
							<p>Selamat Datang</p>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/350x150" alt="slide-dua">
						<div class="carousel-caption">
							<p>Layanan Kami</p>
						</div>
					</div>
					<div class="item">
						<img src="http://placehold.it/350x150" alt="slide-tiga">
						<div class="carousel-caption">
							<p>Hubungi Kami</p>
						</div>
					</div>
				</div>
				<a class="carousel-control left" href="#slide-banner" role="button">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="carousel-control right" href="#slide-banner" role="button">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>

			</div>
		</div>
