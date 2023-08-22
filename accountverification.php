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
			<div class="container">
				<div class="row main-div">
					<div class="col-md-12">
						<center><span style="font-family:arial;font-weight:bold">ADMIN LOGIN</span></center>
						<div style="background-color:lightgray;width:70%;padding:1px 0px 1px 0px;margin:auto;">
						</div>
					</div>
					<div class="col-md-12">
						
							<form>
								<table class="table table-borderless table-sm table-sav">
										
										  <tbody>
											<tr>
											  <th><span>Account no : </span></th>
											  <td><input type="text"  placeholder="account id" name="account_no"></td>
											
											</tr>
											<tr>
											  <th><span>Password : </span></th>
											  <td><input type="text"  placeholder="password" name="password_no"></td>
											  
											</tr>
											
											<tr>
											 
											  <td><button type="submit" name="accountveri_btn" class="submit">Verify!</button></td>
											  <td></td>
											</tr>
										  
										
										  </tbody>
										</table>	
							</form>
						
					</div>
					
				</div>		
			</div>
	</section>
	<footer>
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
	</footer>
	
	</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</html>			