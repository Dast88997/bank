<!doctype html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="./css/bootstrap.min.css">
			<link rel="stylesheet" href="./css/bootstrap.css">
			<link rel="stylesheet" href="./css/prime.css">
			<link rel="stylesheet" href="./font/css/all.css">
	</head>
	<body>
	
	
	<?php include_once('./header.php');?>
	
	
	<section>
			<div class="container-fluid">
				<div class="row main-div">
					<div class="col-md-3">
					<p>line1</p>
					<p>line2</p>
					<p>line3</p>
					<p>line4</p>
					<p>line5</p>
					<p>line6</p>

					</div>
					
					<div class="col-md-9">
						
						<div class="row">
							<div class="col-md-7">
								<div id="demo" class="carousel slide" data-ride="carousel">
								  <ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
								  </ul>
								  <div class="carousel-inner">
									<div class="carousel-item active">
									  <img src="image/trader.jpg" alt="Los Angeles" width="1100" height="300">
									  <div class="carousel-caption">
										
									  </div>   
									</div>
									<div class="carousel-item">
									  <img src="image/s3.jpg" alt="Chicago" width="1100" height="300">
									  <div class="carousel-caption">
										
									  </div>   
									</div>
									<div class="carousel-item">
									  <img src="image/s3.jpg" alt="New York" width="1100" height="300">
									  <div class="carousel-caption">

									  </div>   
									</div>
								  </div>
								  <a class="carousel-control-prev" href="#demo" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								  </a>
								  <a class="carousel-control-next" href="#demo" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								  </a>
								</div>
								
							</div>
							<div class="col-md-3">

								<img src="image/lock.png" height="200px" width="100%">
								<center><a href="customerveri.php"><button class="button1" name="customerlogin_btn">Log in </button></a><center>
							</div>
						</div>	
						
					</div>
					
						
				</div>		
			</div>
	</section>
	<section>
			<div class="container-fluid foot">
				<div class="row">
					<div class="col-md-6">
						<span style="font-family:arial;font-weight:bold">AAA Bank</span>
					</div>
					<div class="col-md-6">
						<span style="font-family:arial;font-weight:bold"></span>
					</div>
				</div>		
			</div>
	</section>
	
	</body>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>			