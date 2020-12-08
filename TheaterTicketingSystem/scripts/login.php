<?php 

//--------------------  Get username and password inputs at index.html  --------------------//

		$username_login = $_GET['username'];
		$password_login = $_GET['password'];

if($username_login == "" or $password_login == "")
{
	echo "Please Enter Username or Password <a href='../../index.html'><button>Retry</button></a>";
}
else
{
//------------------  Class Account ------------------------------------------//       
		class account
		{
			public $uname = "";
			public $pass = "";
			public $fulln = "";
			function __construct($username, $password, $fullname)
			{
				$this->uname = $username;
				$this->pass = $password;
				$this->fulln = $fullname;
			}
		}

			function document_login( String $activeU) {
			extract($_REQUEST);
	        $file = fopen("documentation_log.txt", "a");

	        fwrite($file,"User: '" . $activeU. "' ");
	        fwrite($file," Date: '" . date("Y/m/d"). "' ");
	        fwrite($file," Time: '" . date("h:i:sa"). "'\n");

	        fclose($file);
			} 
//------------------  Pre-Created Accounts ------------------------------------------//

		$rocelBatara = new account("rocelbatara@gmail.com", "12345678", "Rocel Batara");
		$kyraVergara = new account("kyravergara@gmail.com", "12345678", "Kyra Vergara");
		$mikeVinoya = new account("mikevinoya@gmail.com", "12345678", "Mike Vinoya");
		$danicaCastillo = new account("danicacastillo@gmail.com", "12345678", "Danica Castillo");
		$kzUgot = new account("kzugot@gmail.com", "12345678", "KZ Ugot");
		$iveeViloria = new account("iveeviloria@gmail.com", "12345678", "Ivee Viloria");

	
//-----------------  Verify username and password inputs from index.html ---------------------------//

		$loggedIn = false;
		$activeUser = "";

		if($username_login == $rocelBatara->uname && $password_login == $rocelBatara->pass)
		{
			$activeUser = $rocelBatara->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);
		}
		else if($username_login == $kyraVergara->uname && $password_login == $kyraVergara->pass)
		{
			$activeUser = $kyraVergara->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);
		}
		else if($username_login == $mikeVinoya->uname && $password_login == $mikeVinoya->pass)
		{
			$activeUser = $mikeVinoya->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);
		}
		else if($username_login == $danicaCastillo->uname && $password_login == $danicaCastillo->pass)
		{
			$activeUser = $danicaCastillo->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);
		}
		else if($username_login == $kzUgot->uname && $password_login == $kzUgot->pass)
		{
			$activeUser = $kzUgot->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);
		}
		else if($username_login == $iveeViloria->uname && $password_login == $iveeViloria->pass)
		{
			$activeUser = $iveeViloria->fulln;
			$loggedIn = true;
			echo "<script> localStorage.setItem('user', '$activeUser'); </script>";
			echo "<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>";
			echo "you are logged in as " .$activeUser;
			echo "<a href='../pages/home.html'><button>Proceed to Home</button></a>";
			document_login($activeUser);	
		}
		else 
		{
			$loggedIn = false;
			echo "<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<script> localStorage.setItem('loggedIn', '$loggedIn'); </script>
				<a href='/index.html'><button>Try Again</button></a>
			</body>
			</html>";
		}


	    }
		


?>
