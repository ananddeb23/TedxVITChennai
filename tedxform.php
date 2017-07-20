<?php
 $con=mysqli_connect('localhost','tedxvitc_uncleSh','AIzaSyBQGdXk6BAcB3fza3wXluXTIU1KrfBDDOA','tedxvitc_tedx');
 if(isset($_POST['submit']))
 {
 	if(isset($_POST['Fname'])&&isset($_POST['Lname'])&&isset($_POST['Phone'])&&isset($_POST['Email'])&&isset($_POST['Institution'])&&isset($_POST['DOB'])&&isset($_POST['PreviousEvents'])&&isset($_POST['Quotes'])&&isset($_POST['Learn']))
 	{
 		$Fname=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Fname'])));
 		$Lname=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Lname'])));
 		$Phone=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Phone'])));
 		$Email=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Email'])));
 		$Institution=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Institution'])));
 		$DOB=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['DOB'])));
 		$PreviousEvents=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['PreviousEvents'])));
 		$Quotes=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Quotes'])));
 		$Learn=mysqli_real_escape_string($con,htmlspecialchars(htmlentities($_POST['Learn'])));

 		if(!(filter_var($Email,FILTER_VALIDATE_EMAIL)))
		{
			echo 'Invalid email format';
		}
		elseif(!(preg_match("/^[0-9]{10}$/", $Phone)))
		{
			echo 'Invalid phone number format';
 		}
		else
		{

	 		$query="INSERT INTO main_info VALUES('','{$Fname}','{$Lname}')";
	 		$query1="INSERT INTO other_info VALUES('','{$Phone}','{$Email}','{$Institution}','{$DOB}')";
	 		$query2="INSERT INTO other_info2 VALUES('','{$PreviousEvents}','{$Quotes}','{$Learn}')";
	 		mysqli_query($con,$query);
	 		mysqli_query($con,$query1);
	 		mysqli_query($con,$query2);
		}		
 	}
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<!--To make the webpage responsive-->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- w3.css for the cascading style sheets-->
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

		<!--To use Animate.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

		<!--font awesome cdn-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>

		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
 		 <script>
 			$(document).ready(function() {
    		$("#datepicker").datepicker();
  			});
  		</script>

		<style type="text/css">
			
			.ted {
				font-family: 'helvetica';
				color:red;
				padding-left: 40px;
				font-size: 50px;

			}

			.vitc {
				font-family: 'helvetica';
				color: white;
				font-size: 40px;
				padding-left: 10px;
			}

			.shadows {
				box-shadow: 3px 3px 5px red;
			}

			.cells {
				padding-top: 10px;
				padding-bottom: 10px;
				width: 300px;
				height: 50px;
			}

			.supes:hover {
				color:black !important;
				background-color: red !important;
			}

			.supes {
				color:red !important;
				background-color: black !important;
				border-style: solid;
				border-color: red;
			}


		</style>
	</head>

	<body class="w3-black">
		<div class="shadows w3-black">
			<div class="row">
				<div class="col-sm-4">
					<h1><strong class="ted">TEDx</strong><span class="vitc">VITChennai</span></h1>
				</div>
				<div class="col-sm-8">
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
				</div>
				<div class="col-sm-10 w3-center">
					<form method="post" action="tedxform.php">
						<div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-4">
								<input type="text" name="Fname" placeholder="First Name" class="cells w3-center w3-black w3-round-xlarge w3-border-red animated slideInLeft " required>
							</div>
							<div class="col-lg-4">
								<input type="text" name="Lname" placeholder="Last Name" class="w3-center cells w3-round-xlarge w3-black w3-border-red animated slideInRight" required>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-4">
								<input type="text" name="Phone" placeholder="Phone Number" class="w3-center w3-round-xlarge w3-black w3-border-red cells animated slideInLeft" required>
							</div>
							<div class="col-lg-4">
								<input type="text" name="Email" placeholder="e-mail Address" class="animated slideInRight w3-center w3-round-xlarge w3-black w3-border-red cells" required>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-4">
								<input type="text" name="Institution" placeholder="Institution" class="w3-center w3-round-xlarge w3-black w3-border-red cells animated slideInLeft" required>
							</div>
							<div class="col-lg-4">
								<input type="text" id="datepicker" name="DOB" placeholder="Date of birth" class="animated slideInRight w3-center w3-round-xlarge w3-black w3-border-red cells" required>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
						<br>
						<hr>
						<div class="row">
							<div class="col-lg-4">
								<textarea name="PreviousEvents" placeholder="Previous events attended" class="animated fadeInUp w3-center w3-round-xlarge w3-black w3-border-red" cols="35" rows="3" required></textarea>
							</div>
							<div class="col-lg-4">
								<textarea name="Quotes" placeholder="Favourite quote" class="w3-center w3-round-xlarge animated fadeInUp w3-black w3-border-red" cols="35" rows="3" required></textarea>
							</div>
							<div class="col-lg-4">
								<textarea name="Learn" placeholder="What do you hope to learn from TEDx?" class="w3-center w3-round-xlarge animated fadeInUp w3-black w3-border-red" cols="35" rows="3" required></textarea>
							</div>
						</div>
						<br>
						<input type="submit" name="submit" value="Submit" class="supes btn w3-ripple w3-red w3-xlarge">
					</form>
					<br>
					<br>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</body>
</html>