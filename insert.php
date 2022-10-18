<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body class="bg-col2">
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => formdb
		$conn = mysqli_connect("localhost", "root", "", "formdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
        $first_name = specialchar($first_name);
		$last_name = $_REQUEST['last_name'];
		$last_name = specialchar($last_name);
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$address = specialchar($address);
		$email = $_REQUEST['email'];
		$email = specialchar($email);

		function specialchar($data) {
			$data = str_replace(
				array('!','"','#','$','%','&',"'",'(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[','\\',']','^','_','{','|','}','~'),
				array('\!','\"','\#','\$','\%','\&',"\'",'\(','\)','\*','\+','\,','\-','\.','\/','\:','\;','\<','\=','\>','\?','\@','\[','\\','\]','\^','\_','\{','\|','\}','\~'),
				$data);
				return $data;
		}		
		// Performing insert query execution
		// here our table name is forminfo
		$sql = "INSERT INTO forminfo VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
