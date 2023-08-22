<?php
include_once('./connection/connection.php');
$err="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$acc_no=$_POST['account_no'];
	$SQL ="SELECT * FROM saving_account WHERE ACCOUNT_NO = '$acc_no' AND STATUS =1";
	$row = $conn->query($SQL);
	if($row->num_rows>0){
		$arr = array();
		while($result = $row->fetch_assoc())
			$arr[] = $result;
		session_start();	
		$_SESSION['account_data'] = $arr;
		header('Location:dashboard.php');
			
	}
	else{
		$err = "Your Account Is Not Active Or Invalid Account No";
	}
}
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
							<div class="col-md-8">
							<h4>Apply for net bankimg</h4>
								
								<div class="horizontal-line"></div>
								
								<ul>
								<p><i class='fas fa-arrow-alt-circle-right'></i>Everyone needs a bank account its crucial f</p>
								<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
								<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
							
								</ul>
								<form action="" method="POST">
								
								<div style="background:lightgray;width:100%;padding:1px 0px 1px 0px;margin:auto;margin-top:10px;"></div>
								<span style="color:red;"><?=$err;?></span>
										<table class="table table-borderless table-sm table-register">
										
										  <tbody>
											<tr>
											  <th><span>your  account no: </span></th>
											  <td><input type="text" name="account_no"></td>
											
											</tr>
											<tr>
											  
											  <th>	<a href="#"><button class="submit" name="apply_netbanking">submit</button></a></th>
											
											</tr>
											
										  </tbody>
										</table>
									
							</div>
							<div class="col-md-3">

								<img src="image/lock.png" height="200px" width="100%">
								<center><a href=""><button class="button1">Log in</button></a></center>
							</div>
							</form>
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