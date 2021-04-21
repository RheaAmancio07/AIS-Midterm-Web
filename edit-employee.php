<?php include_once('config.php');

if (isset($_POST['submit'])){
    //get variable from the form
    $id = $_POST['userid'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $age =$_POST['age'];
    $gender = $_POST['gender'];

    //write sql query
    $sql = "UPDATE `employee` SET `firstname`='".$firstname."',`middlename`='".$middlename."',`lastname`='".$lastname."',`employeeAddress`='".$address."',`age`='".$age."',`gender`='".$gender."' WHERE  `id` ='" .$id. "'";
    //execute the query
    $result = $conn->query($sql);

    if ($result == TRUE){
        header("location:browse-employee.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$result = mysqli_query($conn,"SELECT * FROM employee WHERE id='" . $_GET['editId'] . "'");
$row = mysqli_fetch_array($result);

?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PHP CRUD in Bootstrap with search and pagination</title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
	
   	<div class="container">
		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/">PHP CRUD in Bootstrap with search and pagination</a></h1>
		<?php
		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ue"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){
			echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';
		}
		?>
		<div class="card">
			<div class="card-header">
            
                <i class="fa fa-fw fa-plus-circle"></i> <strong>Update User</strong> <a href="browse-employee.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>
			    <div class="card-body">
				
                    <div class="">

                        <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                            <form method="post">
                                
                                <div class="row">
                                    <div class="col-4">
                                        
                                        <input type="hidden" name="userid" value = "<?php echo $row['id'];?>">
                                        <div class="form-group">

                                            <label>Firstname <span class="text-danger">*</span></label>

                                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter firstname" value = "<?php echo $row['firstname'];?>" required>

                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <div class="form-group">

                                            <label>Middlename <span class="text-danger">*</span></label>

                                            <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Enter middlename" value = "<?php echo $row['middlename'];?>" required>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">

                                            <label>Lastname <span class="text-danger">*</span></label>

                                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter lastname" value = "<?php echo $row['lastname'];?>" required>

                                        </div>
                                    </div>

                                </div>



                                <div class="form-group">

                                    <label>Address <span class="text-danger">*</span></label>

                                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter address"  value = "<?php echo $row['employeeAddress'];?>"required>

                                </div>

                                <div class="form-group">

                                    <label>Age <span class="text-danger">*</span></label>

                                    <input type="number" name="age" id="age" class="form-control" placeholder="Enter age"value = "<?php echo $row['age'];?>"  required>

                                </div>

                                <div class="form-group">

                                    <label>Gender <span class="text-danger">*</span></label>

                                    <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender" value = "<?php echo $row['gender'];?>" required>

                                </div>
                                

                                <div class="form-group">

                                    <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Update User</button>

                                </div>

                            </form>

                        </div>
                   </div>
			</div>
		</div>
	</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>