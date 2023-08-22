<?php
session_start();
include_once('./connection/connection.php');
$account_data = $_SESSION['account_data'][0];
$err="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['register_btn']))
	{
    $date = date('Y-m-d h:i:s');
    $acc_no = $account_data['ACCOUNT_NO'];
    $dep_bal = $_POST['depo_bal'];
    $id = $account_data['ID'];
    $type = 1;
    $SQL ="INSERT INTO deposit(ACCOUNT_ID,ACCOUNT_NO,DEPOSIT,`TYPE`,DATE) 
           VALUES($id,'$acc_no',$dep_bal,$type,'$date')";
	if($conn->query($SQL))
        {
            $err = "Deposit Successfull";
            $SQL ="UPDATE  saving_account SET BALANCE = BALANCE+$dep_bal WHERE ID = $id";
            $conn->query($SQL);
            
        }
        else{
            
            $err="Something Error !";
		}
	}

	else if(isset($_POST['withdrawl_btn']))
	{
    $date = date('Y-m-d h:i:s');
    $acc_no = $account_data['ACCOUNT_NO'];
    $dep_bal = $_POST['with_bal'];
    $id = $account_data['ID'];
    $type = 0;
    $SQL ="INSERT INTO deposit(ACCOUNT_ID,ACCOUNT_NO,DEPOSIT,`TYPE`,DATE) 
           VALUES($id,'$acc_no',$dep_bal,$type,'$date')";
	if($conn->query($SQL))
        {
            $err = "Withdrawl Successfull";
            $SQL ="UPDATE  saving_account SET BALANCE = BALANCE-$dep_bal WHERE ID = $id";
            $conn->query($SQL);
            
        }
        else{
            
            $err="Something Error !";
		}
	}
	if(isset($_POST['transfer']))
	{
		$date =   date('Y-m-d h:i:s');
		$acc_no = $account_data['ACCOUNT_NO'];
		$t_bal = $_POST['t_bal'];
		$t_acc = $_POST['t_acc'];
		$init_bal = $_POST['init_bal'];
		$ifsc = $_POST['ifsc'];
		$branch = $_POST['branch'];
		$currency = $_POST['currency'];
		$bank = $_POST['bank'];
		$address = $_POST['address'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$id = $account_data['ID'];
		$type =   0;
	if($init_bal>$t_bal){
    $SQL ="INSERT INTO deposit(ACCOUNT_ID,ACCOUNT_NO,DEPOSIT,`TYPE`,T_ACCOUNT_NO,IFSC,CURRENCY,NAME,BRANCH,BANK,ADDRESS,PHONE_NO,EMAIL,DATE) 
           VALUES($id,'$acc_no',$t_bal,$type,'$t_acc','$ifsc','$currency','$name','$branch','$bank','$address','$phone','$email','$date')";
	if($conn->query($SQL))
        {
            $err = "Transfer Successfully";
            $SQL ="UPDATE  saving_account SET BALANCE = BALANCE-$t_bal  WHERE ID = $id";
			$conn->query($SQL);
			$SQL ="UPDATE  saving_account SET BALANCE = BALANCE+$t_bal  WHERE ACCOUNT_NO = '$t_acc'";
			$conn->query($SQL);
			header('Location:success.php?amount='.$t_bal.'&currency='.$currency);
            
        }
        else{
            
            $err="Something Error !";
		}
	}
	else{
		$err="Insuffcient Balanace !";
	}
	}
			
$SQL ="SELECT * FROM saving_account WHERE ACCOUNT_NO = '$acc_no' AND STATUS =1";
$row = $conn->query($SQL);
if($row->num_rows>0){
    $arr = array();
    while($result = $row->fetch_assoc())
        $arr[] = $result;
    $_SESSION['account_data'] = $arr;
    $account_data = $_SESSION['account_data'][0];	
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
            <style>
            td,th{font-size:15px;font-weight:bold;}
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
						<?php
						if($_GET['type'] == 'deposit')
						{
						?>

	
                        <form action="" method="POST">
                        <span style="color:red;"><?=$err?></span>
										<table class="table table-borderless table-sm table-register" style="border:2px solid red;width:100%;">
										
										  <tbody>
										<tr style="background-color:orange;">
										  <td colspan="4">Deposit Balance</td>
										  </tr>
										  <tr>
											
										<th>
									
										</tr>
											
											 
										
											
											
											 
											 <tr>
                                            
											 <th><span>initial Balance : </span></th>
											  <td><input type="text"  placeholder="Initial Balance" readonly value="<?=$account_data['BALANCE']?>" name="init_bal"></td>
											  <th><span>Enter Deposit Balance : </span></th>
											  <td><input type="text"  placeholder="Enter Deposit Balance" name="depo_bal"></td>
											 
											  
											 </tr> 
											
											
											
											<tr>
											 
											  <td></td>
											  <td></td>
											  <td><button type="submit" name="register_btn" class="submit" name="deposit">Deposit</button></td>
											  <td></td>
											</tr>
											
											
										  </tbody>
										 
										</table>
								</form>	
						<?php
						}
						else if($_GET['type'] == 'widthdrawl')
						{
							?>



								<form action="" method="POST">
                        <span style="color:red;"><?=$err?></span>
										<table class="table table-borderless table-sm table-register" style="border:2px solid red;width:100%;">
										
										  <tbody>
										<tr style="background-color:orange;">
										  <td colspan="4">Withdraw Balance</td>
										  </tr>
										  <tr>
											
										<th>
									
										</tr>
											
											 
										
											
											
											 
											 <tr>
                                            
											 <th><span>initial Balance : </span></th>
											  <td><input type="text"  placeholder="Initial Balance" readonly value="<?=$account_data['BALANCE']?>" name="init_bal"></td>
											  <th><span>Enter Withdrawl Balance : </span></th>
											  <td><input type="text"  placeholder="Enter Withdrawl Balance" name="with_bal"></td>
											  <th><span>Account number: </span></th>
											  <td><input type="text"  placeholder="Enter Withdrawl Balance" name="with_bal"></td>
											 
											  
											 </tr> 
											
											
											
											<tr>
											 
											  <td></td>
											  <td></td>
											  <td><button type="submit" name="withdrawl_btn" class="submit" name="deposit">Withdraw</button></td>
											  <td></td>
											</tr>
											
											
										  </tbody>
										 
										</table>
								</form>	

								<?php
						}
						else if($_GET['type'] == 'transfer')
						{
							?>
							<form action="" method="POST">
                        <span style="color:red;"><?=$err?></span>
							<table class="table table-borderless table-sm table-register" style="border:2px solid red;width:100%;">
										
								<tbody>
									<tr style="background-color:orange;">
										<td colspan="4">Transfer Balance</td>
									</tr>
									<tr>
									</tr>
									<tr>
                                    <th><span>Enter Currency : </span></th>
										<td>
										<select  name="currency">
											<option value="usd">USD</option>
											<option value="inr">INR</option>
											<option value="euro">EURO</option>
											<option value="pound">POUND</option>
										</select>
										</td>
										<td></td>
									</tr> 

									<tr>
                                    <th><span>Phone No : </span></th>
										<td><input type="text"  placeholder="Phone No"  name="phone"></td>
										<th><span>Email : </span></th>
										<td><input type="text"  placeholder="Email" name="email"></td>
									
									</tr> 
									<tr>
                                    <th><span>Name Of Bank : </span></th>
										<td><input type="text"  placeholder="Name Of bank"  name="bank"></td>
										<th><span>Bank Branch : </span></th>
										<td><input type="text"  placeholder="Branch Of Bank" name="branch"></td>
									
									</tr> 
								<tr>
                                    <th><span>Name : </span></th>
										<td><input type="text"  placeholder="Name"  name="name"></td>
										<th><span>Address : </span></th>
										<td><input type="text"  placeholder="Address" name="address"></td>
									</tr> 

									<tr>
                                    <th><span>initial Balance : </span></th>
										<td><input type="text"  placeholder="Initial Balance" readonly value="<?=$account_data['BALANCE']?>" name="init_bal"></td>
										<th><span>Enter Account No: </span></th>
										<td><input type="text"  placeholder="Enter Transfer Account No" name="t_acc"></td>
									</tr> 

									<tr>
									
									
									<th><span>IFSC Code : </span></th>
									<td><input type="text"  placeholder="IFSC Code"  name="ifsc"></td>
										<th><span>Enter  Balance : </span></th>
										<td><input type="text"  placeholder="Enter  Balance" name="t_bal"></td>
									</tr>
				
									<tr>
										<td></td>
										<td></td>
										<td><button type="submit" name="transfer" class="submit">Transfer</button></td>
										<td></td>
									</tr>
								</tbody>
							</table>
								</form>	


						<?php
						}

						?>
                        </div>


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