<?php include_once('./connection/connection.php');?>
<?php 
$err="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$title=$_POST['title'];
	$city=$_POST['city'];
	$first_name=$_POST['first_name'];
	$branch=$_POST['branch'];
	$middle_name=$_POST['middle_name'];
	$gender=$_POST['gender'];
	$last_name=$_POST['last_name'];
	$marital_status=$_POST['marital_status'];
	$address=$_POST['address'];
	$email_id=$_POST['email_id'];
	$pin=$_POST['pin'];
	$adhar_no=$_POST['adhar_no'];
	$state=$_POST['state'];
	$docs="";
	$ac_type = 2;
	$acc_no = date('Ymdhis');

	$date = date('Y-m-d h:i:s');
	
	$sql = "insert into saving_account(TITLE,CITY,FIRST_NAME,NEAREST_BRANCH,MIDDLE_NAME,GENDER,LAST_NAME,MARITAL_STATUS,ADDRESS,EMAIL,PIN,ADHAR_NO,STATE,DOC,ACCOUNT_TYPE,ACCOUNT_NO,STATUS,REG_DATE)
	        VALUES('$title','$city','$first_name','$branch','$middle_name',$gender,'$last_name',$marital_status,'$address','$email_id','$pin','$adhar_no','$state','$docs',$ac_type,'$acc_no',0,'$date')";
	
if($conn->query($sql))
{
	$err = "successfully send";
	
}
else{
	
	$err="something error !!";
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
							<div class="col-md-12">
								<span style="color:red"><?=$err;?></span>
									<form action="" method="POST">
										<table class="table table-borderless table-sm table-register" style="border:2px solid red;">
										
										  <tbody>
										  <tr style="background-color:orange;">
										  <td colspan="4">Thankyou For The Intrest In AAA Bank Saving Account .Please Fill Up the form</td>
										  </tr>
										  <tr>
											<th><span>title : </span></th>
											  <td>
													<select type="text"  name="title">
														<option value="mr">mr</option> 
														<option value="mrs">mrs</option> 
														<option value="shri">shri</option> 
													</select>
											 </td>
										<th>
										<span>city : </span>
										</th>
											  <td><select type="text" name="city">
													<option value="delhi">delhi</option> 
													<option value="punjab">punjab</option> 
													<option value="haryana">haryana</option> 
													
										</select>
										</td>
										</tr>
											<tr>
											  <th><span>First name : </span></th>
											  <td><input type="text"  placeholder="first name" name="first_name"></td>
											  <th><span>nearest branch : </span></th>
											  <td><select type="text" name="branch">
													<option value="dawarka">dawarka</option> 
													<option value="nagloi">nagloi</option> 
													<option value="khayala">khayala</option> 
													
												</select>
												</td>
											  
											
											</tr><tr>
											  <th><span>middle name : </span></th>
											  <td><input type="text"  placeholder="middle name" name="middle_name"></td>
											  <th><span>gender : </span></th>
											  <td><select type="text" name="gender">
													<option value="0">male</option> 
													<option value="1">female</option> 
													<option value="2">others</option> 
													
										</select></td>
											
											</tr><tr>
											  <th><span>last name : </span></th>
											  <td><input type="text"  placeholder="last name" name="last_name"></td>
											  <th><span>marital Status : </span></th>
											  <td><select type="text" name="marital_status">
													<option value="1">married</option> 
													<option value="0">umarried</option> 
													
													
										</select></td>
											
											</tr>
											
											<tr>
											  <th><span>address : </span></th>
												<td><input type="text"  placeholder="address" style="padding:10px 0px 60px 0px;" name="address"></td>
											   
											   <th><span>email id : </span></th>
											  <td><input type="text"  placeholder="email id" name="email_id"></td>
											 </tr> 
											 
											 <tr>
											 <th><span>pin : </span></th>
											  <td><input type="text"  placeholder="pin code" name="pin"></td>
											  <th><span>Adhar No : </span></th>
											  <td><input type="text"  placeholder="adhar no" name="adhar_no"></td>
											 
											  
											 </tr> 
											
											
											<tr>
											  <th><span>state : </span></th>
											  <td><select type="text" name="state">
													<option value="0">select state</option> 
													<option value="delhi">delhi</option> 
													<option value="mumbai">mumbai</option> 
													<option value="haryana">haryana</option> 
													<option value="punjab">punjab</option> 
													<option value="bihar">bihar</option> 
										</select></td>
												<th><span>upload docs : </span></th>
											  <td><input type="file"  placeholder="upload" name="docs"></td>
											  
											</tr>
											<tr>
											 
											  <td></td>
											  <td></td>
											  <td><button type="submit" name="register_btn" class="submit">Verify!</button></td>
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