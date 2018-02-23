
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/magnific-popup.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/cs-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/cs-skin-border.css">

<link rel="stylesheet" href="<?php echo base_url();?>/gudang/front/css/style.css">


<!-- Modernizr JS -->
<script src="<?php echo base_url();?>/gudang/front/js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="<?php echo base_url();?>login">LOGIN</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
<div class="offset-top-40">
	<ul class="list-tickets">
		<?php foreach ($tb_rute as $r) { ?>
			<?php

			$depart_at = $r->depart_at;
			$tanggal = substr($depart_at, 0,10);
			$tanggalformat = explode("-", $tanggal);
			$tanggal ="$tanggalformat[2]-$tanggalformat[1]-$tanggalformat[0]";
			$jam = substr($depart_at, 11);
			$depart_arrive = $r->depart_arrive;
			$tanggal_arrive = substr($depart_arrive, 0,10);
			$tanggal_arriveformat = explode("-", $tanggal_arrive);
			$tanggal_arrive ="$tanggal_arriveformat[2]-$tanggal_arriveformat[1]-$tanggal_arriveformat[0]";
			$jam_arrive = substr($depart_arrive, 11);

			?>
			<li class="list-item">
				<div class="list-item-inner">
					<div class="list-item-main">
						<div class="list-item-top">
						
							<div class="list-item-content">
								<div class="list-item-content-left">
									<div class="text-bold text-base"><?php echo $jam;?></div>
									<span class="small reveal-block"><?php echo $r->rute_from;?></span>
									<span class="small reveal-block"><?php echo $tanggal;?></span>
								</div>
								<div class="list-item-content-line-wrapper small">

									<?php 
									$waktu1 = new DateTime($r->depart_at);
									$waktu2 = new DateTime($r->depart_arrive);
									$lamanya = $waktu1->diff($waktu2);
									?>
									<div class="list-item-content-line-top"><?php echo $lamanya->format('%d hari %h jam %i menit');?></div>
									<div class="list-item-content-line"></div>
									<!-- <div class="list-item-content-line-bottom text-info-dr">Direct</div> -->
								</div>
								<div class="list-item-content-right">
									<div class="text-bold text-base"><?php echo $jam_arrive;?></div>
									<span class="small reveal-block"><?php echo $r->rute_to;?></span>
									<span class="small reveal-block"><?php echo $tanggal_arrive;?></span>
								</div>
							</div>
						</div>

					</div>
					<div class="list-item-footer">
						<span class="small">Harga</span>
						<h5 class="text-bold list-item-price">
							<?php 
							echo "Rp " . strrev(implode('.', str_split(strrev(strval($r->price)), 3)));
							?>
						</h5>
						<!-- <a href="#" class="btn btn-primary btn-xs btn-no-shadow">Beli</a> -->
						<form action="<?php echo base_url() ?>cari_pesawat/mau_booking" method="POST">
							<input name="rute_id" value="<?php echo $r->id ?>" type="hidden">
							<input name="seat" value="<?php echo $this->input->get('seat') ?>" type="hidden">
							<button class="btn btn-primary btn-xs btn-no-shadow">Booking</button>
						</form>
					</div>
				</div>
				<?php } ?>