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
            td,th{font-size:10px;font-weight:bold;}
            </style>
	</head>
	<body>
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
							<div class="col-md-12">
										
								<div class="acc-saving-acc" style="margin-top:10px;">
									<h4>Accounts Details :</h4>
								</div>
								
								<div class="horizontal-line"></div>
								
									
							
								<p><i class='fas fa-angle-double-right'></i> Everyone needs a bank account its crucial for the  day-to-day management of your money.So,ensuring You have a savings that meets your needs will;make a bif difference</p>
							
							
								<table class="table table-sm table-bordered ac-table">
								  <thead>
									<tr style="background:red;">
									  <td scope="col" style="border:none;">ACCCOUNT DETAILS</td>
									
									  <td scope="col" style="border:none;">YOUR DETAILS</td>
									</tr>
								  </thead>
								  <tbody>
                                    <?php 
                                    foreach($account_data as $key=>$value)
                                        {
                                            ?>
                                    <tr>
									  <td style="color:black;"><?=$key;?></td>
                                      <?php
                                    if($key == 'GENDER' && $value = 0)
                                            {
                                                echo "<td style= 'color:black'>male</td>";   
                                            }
                                    else if($key == 'GENDER' && $value = 1)
                                            {
                                                echo "<td style= 'color:black;'>female</td>";   
                                            }
                                    else if($key == 'GENDER' && $value = 2)
                                            {
                                                echo "<td style= 'color:black;'>other</td>";   
                                    }
                                    
                                    else if($key == 'MARITAL_STATUS' && $value = 1)
                                            {
                                                echo "<td style= 'color:black'>married</td>";   
                                            }
                                    else if($key == 'MARITAL_STATUS' && $value = 0)
                                            {
                                                echo "<td style= 'color:black'>unmarried</td>";   
                                            }
                                    else if($key == 'ACCOUNT_TYPE' && $value = 1)
                                            {
                                                echo "<td style= 'color:black'>saving account</td>";   
                                            }
                                    else if($key == 'ACCOUNT_TYPE' && $value = 2)
                                            {
                                                echo "<td style= 'color:black'>current account</td>";   
                                            }
                                            
                                    else if($key == 'STATUS' && $value = 1)
                                            {
                                                echo "<td style= 'color:black'>Your account is active</td>";   
                                            }

                                            else if($key == 'DOC')
                                            {
                                                echo "<td style= 'color:black'>Document Not Available</td>";   
                                            }
                                   

                                    else{
                                            echo "<td style= 'color:black'>$value</td>";
                                        }

                                        ?>    
									  
									 
									</tr>
                                        <?php
                                        }
                                    ?>
									
									
									<!-- <tr>
									  <td style="color:black">b.No frills Account /Basic Savings Bank</td>
									  <td style="color:black">4.00%</td>
									  <td style="color:black">4.00%</td>
									  <td></td>
									</tr>

									<tr style="background:red">
									  <td>Non-Resident</td>
									  <td></td>
									  <td></td>
									  <td></td>
									</tr> -->
									
									
									
								  </tbody>
								</table>	

								
							   </div>
						</div>
					
                        <div class="acc-saving-acc" style="margin-top:10px;">
									<h4>Deposits :</h4>
								</div>
								
								<div class="horizontal-line"></div>
								
									
								<ul style="margin-top:5px;">
									<p><i class='fas fa-arrow-alt-circle-right'></i>Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
							
								</ul>
								
								<a href = "desposit.php?type=deposit"><button class="common-button">View Details</button></a>
							

                                <div class="acc-saving-acc" style="margin-top:10px;">
									<h4>Withdrawl :</h4>
								</div>
								
								<div class="horizontal-line"></div>
								
									
								<ul style="margin-top:5px;">
									<p><i class='fas fa-arrow-alt-circle-right'></i>Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
							
								</ul>
								
								<a href = "desposit.php?type=widthdrawl"><button class="common-button">View Details</button></a>
							
						
								<div class="acc-saving-acc" style="margin-top:10px;">
									<h4>Transfer Balance :</h4>
								</div>
								
								<div class="horizontal-line"></div>
								
									
								<ul style="margin-top:5px;">
									<p><i class='fas fa-arrow-alt-circle-right'></i>Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
									<p><i class='fas fa-arrow-alt-circle-right'></i> Everyone needs a bank account its crucial f</p>
							
								</ul>
								
								<a href = "desposit.php?type=transfer"><button class="common-button">View Details</button></a>
							

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
<script>
document.addEventListener('contextmenu', event => event.preventDefault());

$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});

</script>	
</html>			