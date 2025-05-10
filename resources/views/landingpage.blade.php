<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel Website</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
	* {
	margin: 0;
	padding: 0;
}

.header {
	height: 578px;
	background-image: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.8)), url(images/banner1.jpg);
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;

}

.navbar-brand {
	color: #fff !important;
	font-size: 30px !important;
}

.navbar-nav li a{
	color: #fff !important;
	font-size: 20px;
	padding-left: 20px !important;
	float: right;
	text-align: left;
}

.navbar-nav li a:hover {
	color: lightskyblue !important;
}

.login-btn {
	border-radius: 10px;
	border: 2px solid #fff;
	width: 100px;
	outline: none !important;
	padding: 8px 0;
	background: transparent;
	color: #fff;
	transition: .5s;
	float: right;
}

.fa-bars {
	color: #fff !important;
	font-size: 30px !important;
}

.login-btn:hover {
	background: lightskyblue;
	transition: .5s;
}

.header h1 {
	padding-top: 100px;
	padding-bottom: 0;
	color: #fff;
	font-size: 55px;
	text-align: center;
}

.header p {
	color: #fff;
	text-align: center;
}

.input-group {
	width: 90% !important;
	max-width: 500px;
	border-radius: 30px;
	background: #fff;
	margin:auto;
	padding: 2px;
}

.form-control {
	border: 0 !important;
	border-radius: 30px !important;
	margin: 2px;
	box-shadow: none !important;
}

.input-group-append {
	text-align: center !important;
	padding: 2px;

}

.input-group-text {
	background-image: linear-gradient(#00ff7e,#1f3d90);
	border: 0 !important;
	color: #fff !important;
	padding: 0 25px !important;
	border-radius: 30px !important;
	box-shadow: none!important;
}

/*-----------Features-----------*/
.features {
	padding: 100px 0;
}

.features h1, .gallery h1, .user-feedback h1 {
	text-align: center;
	padding-bottom: 30px;
}

.feature-img img {
	width: 100%;

}

.price {
	width: 50px;
	height: 50px;
	background: #ff5722;
	color: #fff;
	border-radius: 50%;
	font-weight: 600;
	padding: 10px;
	box-shadow: 0 0 10px 1px rgba(37,73,214,0.18);
	position: absolute;
	left: 20px;
	bottom: -25px;
}

.feature-img {
	position: relative;
}

.rating {
	padding: 3px;
	float: right;
	background: #fff;
	bottom:-1px;
	right: 0;
	position: absolute;
}

.features .fa {
	font-size: 15px;
	color: #ff5722;
}

.feature-details {
	padding: 20px;
	text-align: justify;
}

.feature-details h4 {
	font-weight: 600;
	margin-top: 20px;
}

.feature-details .fa {
	margin-right: 5px;
}

.feature-box {
	box-shadow: 0 0 10px 1px rgba(37,73,214,0.18);
	margin-bottom: 30px;
}


/*Gallery*/

.gallery {
	background: #efefef;
	padding: 100px 0;
}

.gallery-box img {
	width: 100%;
	border-radius: 10px;
	cursor: pointer;
	transition: 1s;
}

.gallery-box img:hover {
	transform: scale(1.1);
}

.gallery-box h4 {
	display: block;
	text-align: center;
	color: #fff;
	text-shadow: -2px 2px 2px #000;
	font-weight: 600;
	font-size: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.gallery-box{
	position: relative;
	margin-bottom: 30px;
}

/*Banner*/

.banner {
	height: 400px;
	background-image: url(images/banner1.jpg);
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
}

.banner-highlights {
	padding: 70px 0;
	background: rgba(0,0,0,.7);
	text-align: center;
	color: #fff;
}

.booking-btn {
	border-radius: 10px;
	border: 2px solid #fff;
	width: 100px;
	outline: none !important;
	padding: 8px 0;
	background: transparent;
	color: #fff;
	margin-top: 20px;
}

/*User*/
.user-feedback {
	padding: 100px 0;
}

.user-review {
	text-align: center;
	box-shadow: 0 0 10px 0 rgba(0,0,100,0.2);
	padding-bottom: 50px;
}

.user-review p {
	padding: 50px 10px 10px 10px;
}

.user-feedback img {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	margin: -30px 0 20px 40%;
	position: relative;
}

.user-review p::before {
	content: '\201d';
	display: block;
	position: absolute;
	font-size: 100px;
	color: #6495ed;
	font-family: sans-serif;
	left: 44%;
	top: -20px;
}

/*--------------Foooter--------------*/
.footer {
	padding: 100px 20px 20px;
	background-image: linear-gradient(#2d557d, #9610fb);
	color: #fff;
}

.footer-logo {
	width: 150px;
	margin-top: 15px;
	margin-bottom: 15px;
}

.footer h4 {
	text-align: left;
	margin-top: 15px;
	margin-bottom: 25px;
}

.footer p {
	font-size: 12px;
	text-align: justify;
	padding-right: 35px;
}

.footer .row .fa {
	padding-right: 20px;
	font-size: 15px;
}

.footer hr {
	margin-top: 10px;
	background: #efefef;
}

.fa-heart {
	margin: 0 5px;
	color: #f44336;
}

.footer .copyright {
	text-align: center;
}
</style>
<body>

<section class="header">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
	  <a class="navbar-brand" href="#">Travel Web</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <i class="fa fa-bars"></i>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contact</a>
	      </li>
	      <li class="nav-item">
            <a href="{{ route('login') }}">
                <button type="button" class="login-btn">Login</button>
            </a>
        </li>
	    </ul>
	  </div>
	  </div>
</nav>
<h1>Travel Across The Globe</h1>
<p>Subscribe By SuryaPero</p>
<div class="input-group">
	<input type="text" class="form-control" placeholder="Search Coountry or City">
	<button type="submit" class="input-group-text btn">Search</button>
</div>
<div class="input-group-append">
	
</div>
</section>

<!-- -----------------Features-------------- -->
<section class="features">
	<h1>Featured Destinations</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="feature-box">
					<div class="feature-img">
						<img src="{{ asset('images/feature1.jpg') }}">
						<div class="price">
							<p>78$</p>
						</div>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
					<div class="feature-details">
						<h4>Los Angeles</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae atque nobis laboriosam voluptates consectetur tempore quo, iste suscipit ea culpa.</p>
						<span><i class="fa fa-map-marker"></i>Los Angeles</span>
						<span><i class="fa fa-sun-o"></i>4 Days</span>
						<span><i class="fa fa-moon-o"></i>3 Nights</span>
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="feature-box">
					<div class="feature-img">
						<img src="{{ asset('images/feature1.jpg') }}">
						<div class="price">
							<p>78$</p>
						</div>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
					<div class="feature-details">
						<h4>Los Angeles</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae atque nobis laboriosam voluptates consectetur tempore quo, iste suscipit ea culpa.</p>
						<span><i class="fa fa-map-marker"></i>Los Angeles</span>
						<span><i class="fa fa-sun-o"></i>4 Days</span>
						<span><i class="fa fa-moon-o"></i>3 Nights</span>
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="feature-box">
					<div class="feature-img">
						<img src="{{ asset('images/feature1.jpg') }}">
						<!-- Buat Harga -->
						<div class="price">
							<p>78$</p>
						</div>
						<!-- Akhir Buat Harga -->
						<!-- Buat Rating -->
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<!-- Akhir Buat Rating -->
					</div>
					<!-- Deskripsi -->
					<div class="feature-details">
						<h4>Los Angeles</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae atque nobis laboriosam voluptates consectetur tempore quo, iste suscipit ea culpa.</p>
						<span><i class="fa fa-map-marker"></i>Los Angeles</span>
						<span><i class="fa fa-sun-o"></i>4 Days</span>
						<span><i class="fa fa-moon-o"></i>3 Nights</span>
					</div>
					<!-- Akhir Deskripsi -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- -----------------Akhir Features-------------- -->


<!-- ------------------Gallery------------------- -->
<section class="gallery">
	<h1>Travelling Gallery</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gallery-box">
				<img src="{{ asset('images/travel-1.jpg') }}">
				<h4>Los Angeles</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="gallery-box">
				<img src="{{ asset('images/travel-1.jpg') }}">
				<h4>Los Angeles</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="gallery-box">
				<img src="{{ asset('images/travel-1.jpg') }}">
				<h4>Los Angeles</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="gallery-box">
				<img src="{{ asset('images/travel-1.jpg') }}">
				<h4>Los Angeles</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ------------------Akhir Gallery------------------- -->

<!-- ------------------Banner------------ -->
<section class="banner">
	<div class="banner-highlights">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Get 30% on top destination</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, provident!</p>
				</div>
				<div class="col-md-4">
					<button type="button" class="booking-btn">Book Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Akhir Banner -->

<!-- ----------------User-------------- -->
<section class="user-feedback">
	<h1>User Review</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="user-review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!</p>
					<h5>Pravel Sharma</h5>
					<small>Log Angel</small>
				</div>
				<img src="{{ asset('images/user1.jpg') }}">
			</div>
			<div class="col-md-4">
				<div class="user-review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!</p>
					<h5>Pravel Sharma</h5>
					<small>Log Angel</small>
				</div>
				<img src="{{ asset('images/user2.jpg') }}">
			</div>
			<div class="col-md-4">
				<div class="user-review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!</p>
					<h5>Pravel Sharma</h5>
					<small>Log Angel</small>
				</div>
				<img src="{{ asset('images/user3.jpg') }}" class="user-img">
			</div>
		</div>
	</div>
</section>
<!-- Akhir Users -->

<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="{{ asset('images/triptok.png') }}" class="footer-logo">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos aliquam veniam quibusdam totam.</p>
			</div>
			<div class="col-md-3">
				<h4>Features</h4>
				<p>Deals & Offers</p>
				<p>Customer Reviews</p>
				<p>Cancelatio Policy</p>
			</div>
			<div class="col-md-3">
				<h4>Quick Contact</h4>
				<p><i class="fa fa-moon-o"></i> +62 87675645365</p>
				<p><i class="fa fa-envelope"></i> hello@example.com</p>
				<p><i class="fa fa-home"></i> xyz Road, ABC City</p>
			</div>
			<div class="col-md-3">
				<h4>Follow Us on</h4>
				<p><i class="fa fa-facebook-official"></i> Facebook</p>
				<p><i class="fa fa-youtube-play"></i> Youtube</p>
				<p><i class="fa fa-twitter"></i> Twitter</p>
			</div>
		</div>
		<hr>
		<p class="copyright"> Made with<i class="fa fa-heart"></i> by Ridho Surya</p>
	</div>
</section>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>