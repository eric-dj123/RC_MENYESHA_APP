<?php
session_start();
$error = "";
$msg = "";
include('includes/config.php');
if (isset($_POST['loginbtn'])) {
    $emailtxt = $_POST['email'];
    $passtxt = $_POST['password'];
    $hashespas = password_hash($passtxt, PASSWORD_BCRYPT);
    $select = mysqli_query($con, "SELECT * FROM father_tbl WHERE email='" . trim($emailtxt) . "' AND status='0'") or die(mysqli_error($con));


    if (mysqli_num_rows($select) == 1) {
        $row = mysqli_fetch_array($select);
        $db_password = $row['password'];
        $email = $row['email'];
        if (password_verify(mysqli_real_escape_string($con, trim($_POST['password'])), $db_password)) {
            // lest set the sessions here!!!
            $_SESSION['fath_id'] = $row['fath_id'];
            $_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['ImageName'] = $row['ImageName'];
            header("location: home.php");
            } 
			
            else {
            // password does not match
            $error = "Password does not match with any of account , Please try again later!!";
        }
    } else {
        // password does not match
        $error = "Invalid user credintials , Please try again later!!";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login Page - RCMA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<style>
	html{
		min-height: calc(100%);
		width:calc(100%);
	}
	body, .main-wthree{
		width:calc(100%);
		min-height: 100vh;
	}
	.main-wthree{
		padding-bottom:2em;
		display:flex;
		flex-direction: column;
		align-items:center;
		justify-content:center;
	}
	.footer{
		width:100%;
		position:fixed;
		bottom:0;
		left:0
	}
	.sin-w3-agile{
		padding:0;
	}
	.login{
		background-color: #010101;
    	background-image: linear-gradient(160deg, #010101 0%, #4e6865 100%);
	}
	.login-w3 {
		width: 100%;
		float: unset;
		text-align: center;
	}
	.main-wthree input[type="submit"]:hover {
		background: #3e5250;
	}
</style>
</head> 
<body>
	<div class="main-wthree">
		<div class="container">
			<h1 class="text-center text-white">Ruhengeri Cathedrale Menyesha App</h1>
		<div class="sin-w3-agile">
			<h2>Admin/Father Login</h2>
			<form action="" method="post">
				<div class="email">
					<span class="email">Email:</span>
					<input type="Email" name="email" class="name"  placeholder="Enter Email Address">
					<div class="clearfix"></div>
				</div>
				<div class="password-agileits">
					<span class="username">Password: <i class="fa fa-eye-slash" aria-hidden="false" style="padding-left: 20px;" onclick="passwordeyes(this);"></i></span>
					<input type="password" name="password" id="Psw" class="password"  placeholder="Enter Password">
					<div class="clearfix"></div>
				</div>
				
				<div class="login-w3">
					<input type="submit" name="loginbtn" class="login" value="Sign In">
				</div>
				<div class="clearfix"></div>
				<h5 class="text-center"><a href="./user" class="text-white" >Login as an Receptionist</a></h5>
				<div class="clearfix"></div>
			</form>
					<!-- <div class="back">
						<a href="index.php">Back to home</a>
					</div> -->
					<div class="footer">
						<p>Ruhengeri Cathedrale Menyesha App. All Rights Reserved &copy; <?= date("Y") ?> </p>
					</div>
		</div>
		</div>
	</div>
	<script>
function passwordeyes(_this) {
    var x = document.getElementById("Psw").type;
    if(x=="password"){
      document.getElementById("Psw").type="text";
	  _this.setAttribute('class', "fa fa-eye")
    }else{
      document.getElementById("Psw").type="password";
	  _this.setAttribute('class', "fa fa-eye-slash")
	}
}
</script>
</body>
</html>

<?php
	/*current computer name get */
	//$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	//echo $hostname;

		/*check to which op system*/
		/*if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    		echo 'This is a server using Windows!';
		} else {
   			 echo 'This is a server not using Windows!';
		}*/

		/*get to mac Address in windows system*/
		//--ob_start();
		//Get the ipconfig details using system commond
		//--system('ipconfig /all');
		 
		// Capture the output into a variable
		//--$mycom=ob_get_contents();
		// Clean (erase) the output buffer
		//--ob_clean();
		 
		//--$findme = "Physical";
		//Search the "Physical" | Find the position of Physical text
		//--$pmac = strpos($mycom, $findme);
		 
		// Get Physical Address
		//--$mac=substr($mycom,($pmac+36),17);
		//Display Mac Address
		//--echo $mac;

		/* End mac system code*/

	/* get current computer mac address */
	//echo substr(exec('getmac'),0,17);
	
	//echo substr("<br>40-8D-5C-B1-B7-7D \Device\Tcpip_{BF6495D7-04E6-4599-99B0-FA6656B57D35}", 0,17)
?>