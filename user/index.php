<?php
session_start();
$error = "";
$msg = "";
include('includes/config.php');
if (isset($_POST['loginbtn'])) {
    $emailtxt = $_POST['email'];
    $passtxt = $_POST['password'];
    $hashespas = password_hash($passtxt, PASSWORD_BCRYPT);
    $select = mysqli_query($con, "SELECT * FROM receptionist_tbl WHERE email='" . trim($emailtxt) . "' AND status='0'") or die(mysqli_error($con));


    if (mysqli_num_rows($select) == 1) {
        $row = mysqli_fetch_array($select);
        $db_password = $row['password'];
        $email = $row['email'];
        if (password_verify(mysqli_real_escape_string($con, trim($_POST['password'])), $db_password)) {
            // lest set the sessions here!!!
            $_SESSION['rec_id'] = $row['rec_id'];
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
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Receptionist Login - RCMA</title>
<style>
    html{
        min-height: 100%;
        width:100%;
    }
body {
   min-height:100vh;
    font-family: Montserrat;
    margin:unset;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    background-color: #0093E9;
    background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
}

.logo {
    width: 213px;
    height: 36px;
    background: url(' ') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #324341;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #4e6865;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #4e6865;
}

.login-block button{
        border:unset;
		background-color: #010101;
    	background-image: linear-gradient(160deg, #010101 0%, #4e6865 100%);
}
.text-white{
    color: #fff;
}

</style>
</head>

<body>

    <h1 class="text-white">Ruhengeri Cathedrale Menyesha App - Receptionist Side</h1>
    <br>
    <br>
<div class="login-block">
    <h1>Login</h1>
    <form class="form" method="POST" Action="">
    <input type="text" name="email" value="" placeholder="Email" id="username" />
    <input type="password" name="password" value="" placeholder="Password" id="password" />

    <button type="submit" name="loginbtn">Submit</button>
    </form>
</div>
</body>

</html>