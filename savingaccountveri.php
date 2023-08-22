<?php include_once('./connection/connection.php');?>

<?php 


?>
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

					</div>
					
					<div class="col-md-9">
						
						<div class="row">
							<div class="col-md-7">
								<center><h5 style="font-family:arial;font-weight:bold;">Saving Account Verification</h5></center>
								<div style="background:lightgray;width:100%;padding:1px 0px 1px 0px;margin:auto;"></div>
								
							</div>
							
						</div>	
						<div class="row">
							<div class="col-md-12">
								<form action="" method="post">
									<table class="table table-borderless table-sm table-sav">
										
										  <tbody>
											<tr>
											  <th><span>Account no : </span></th>
											  <td><input type="text"  placeholder="account id" name="account_no"></td>
											
											</tr>
											<tr>
											  <th><span>Branch : </span></th>
											  <td><select type="text" value="AS rao nagar" name="branch">
													<option value="AO Rao nagar">AO Rao nagar</option> 
													<option value="harsh vihar">harsh vihar</option> 
													<option value="nagloi">nagloi</option> 
													<option value="khayala">khayala</option> 
													<option value="mangol puri">mangol puri</option> 
													<option value="vikas puri">vikas puri</option> 
										</select></td>
											  
											</tr>
											<tr>
											 
											  <td><button type="submit" name="accveri_btn" class="submit">Verify!</button></td>
											  <td></td>
											</tr>
										  </tbody>
										</table>
								</form>											
							</div>	
															
						</div>
												
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