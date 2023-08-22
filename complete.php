<?php
session_start();
include_once('./connection/connection.php');
$account_data = $_SESSION['account_data'][0];
?>
<!doctype html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="./css/bootstrap.min.css">
			<link rel="stylesheet" href="./css/bootstrap.css">
			<link rel="stylesheet" href="./css/prime.css">
			<link rel="stylesheet" href="./font/css/all.css">
            <style>
            td,th{font-size:15px;font-weight:bold;}
            <style>
		td,th{font-size:10px;font-weight:bold;}
		.loader {
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid red;
		width: 120px;
		position:absolute;
		z-index:99999;
		left:50%;
		top:40%;
		background:lightgray;
		height: 120px;
		-webkit-animation: spin 2s linear infinite; /* Safari */
		animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
		}
</style>

	</head>
	<body>
    <div class="loader"></div>
    <section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<img src="image/aaa.png" height="200px" width="100%" style="margin-top:8px;">
					</div>
					
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
							
							<!-- <div class="dropdown" style="float:left;">
							  <button class="btn btn-secondary dropdown-toggle button1" style="border-radius:0px;margin-right:5px;background:red;color:orange;outline:none;box-shadow:none;border:none;padding-bottom:12px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Products
							  </button>
							   <div class="dropdown-menu drop" aria-labelledby="dropdownMenuButton">
							  
								<a class="dropdown-item" href="accounts.php">Deposit</a>
								<a class="dropdown-item" href="loan.php">Loans</a>
								<a class="dropdown-item" href="cards.php">Cards</a>
								<a class="dropdown-item" href="insurance.php">Insurance</a>
							  </div> 
							</div> -->
                            <a href="dashboard.php"><button class="button1">Dashboard</button></a>
                               <a href="transaction.php"><button class="button1">Transaction</button></a>
						        <a href="#"><button class="button1">Contact us</button></a>
						        <a href="#"><button class="button1">Hi <?=$_SESSION['account_data'][0]['FIRST_NAME']?></button></a>	
                                <a href="logout.php"><button class="button1">Logout </button></a>
						
						</div>
					</div>
						
				</div>		
			</div>
	</section>
	


	
	<section>
			<div class="container">
				<div class="row main-div">
					<div class="col-md-3">
					</div>
					
					<div class="col-md-9">

                        <div class="row">
                        <p style="color:#000;font-size:20px;">
                        <?php
						$currency = strtoupper($_GET['currency']);
						$amount = $_GET['amount'];
                            echo $currency ." ".$amount." Transaction Successful Transaction Id "."TRAN".date("dmYhis");
                            
                        ?>
                        <br><a href="transaction.php">View Transaction</a>
                        </p>
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
<script>setTimeout(function(){
document.getElementsByClassName('loader')[0].style.visibility="hidden";
},1000);
</script>
</html>			