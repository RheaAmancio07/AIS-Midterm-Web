<?php include_once('config.php');

if (isset($_POST['submit'])){
    //get variable from the form
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $age =$_POST['age'];
    $gender = $_POST['gender'];

    //write sql query
    $sql = "INSERT INTO employee(id,firstname,middlename,lastname,employeeAddress,age,gender) VALUES (Null,'$firstname','$middlename','$lastname','$address','$age','$gender')";
    //execute the query
    $result = $conn->query($sql);

    if ($result == TRUE){
        // echo "New record created successfully";
        header("location:browse-employee.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Midterm CRUD</title>

	

	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
<style>
body{
	font-family: 'Nova Flat';
	/* font-size: 22px; */
	background-image: url(image4.gif);
}
</style>

</head>



<body>

	

   	<div class="container">

		<h1 class="text-center pt-4 h1">Employee CRUD</a></h1>

		<div class="card pt-4">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add User</strong> <a href="browse-employee.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>

			<div class="card-body">

				<div class="">

					<h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>

					<form method="post">
						<div class="row">
                            <div class="col-4">

								<div class="form-group">

									<label>Firstname <span class="text-danger">*</span></label>

									<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter firstname" required>

								</div>
							</div>
							<div class="col-4">

								<div class="form-group">

									<label>Middlename <span class="text-danger">*</span></label>

									<input type="text" name="middlename" id="middlename" class="form-control" placeholder="Enter middlename" required>

								</div>
							</div>
                            <div class="col-4">
								<div class="form-group">

									<label>Lastname <span class="text-danger">*</span></label>

									<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter lastname" required>

								</div>
							</div>

						</div>



						<div class="form-group">

							<label>Address <span class="text-danger">*</span></label>

							<input type="text" name="address" id="address" class="form-control" placeholder="Enter address" required>

						</div>

						<div class="form-group">

							<label>Age <span class="text-danger">*</span></label>

							<input type="number" name="age" id="age" class="form-control" placeholder="Enter age" required>

						</div>

						<div class="form-group">

							<label>Gender <span class="text-danger">*</span></label>

							<input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender" required>

						</div>
						

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script>
		$(document).ready(function() {
		jQuery(function($){
			  var input = $('[type=tel]')
			  input.mobilePhoneNumber({allowPhoneWithoutPrefix: '+1'});
			  input.bind('country.mobilePhoneNumber', function(e, country) {
				$('.country').text(country || '')
			  })
			 });
		});
	</script>

    

</body>

</html>