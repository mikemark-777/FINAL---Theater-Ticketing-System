<?php 

//--------------------  Get username and password inputs at index.html  --------------------//

$username_login = $_GET['username'];
$password_login = $_GET['password'];


//------------------------------------  Database Query  ---------------------------------//

$con = mysqli_connect("localhost", "root", "rookie");
if(!$con) {
	die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con , "theater-ticketing-system-db"); 
$result = mysqli_query($con, "SELECT fullName FROM user WHERE email='$username_login' AND password='$password_login'");

//------------------------- Function for Login Documentation -----------------------------//

			function document_login( String $activeU) {
				extract($_REQUEST);
				$file = fopen("documentation_log.txt", "a");

				fwrite($file,"User: '" . $activeU. "' ");
				fwrite($file," Date: '" . date("Y/m/d"). "' ");
				fwrite($file," Time: '" . date("h:i:sa"). "'\n");

				fclose($file);
			} 


//------------------------------------ Validate Login  ---------------------------------//

$loggedIn = false;

if (mysqli_num_rows($result)==0) {
	$loggedIn = false;
	echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
	echo "Invalid Login";
	echo "<a href='/index.html'><button>Try Again</button></a>";
	
} 
else {
	$row = mysqli_fetch_row($result);
	$activeUser =  $row[0];	
	$loggedIn = true;
	echo "You are Logged In as " .$activeUser. "  ";
	echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
	echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
	echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
	document_login($activeUser);
}


?>
