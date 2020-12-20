<?php session_start(); /* Starts the session */
$error = "";
	/* Check Login form submitted */
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

		/* Check Username and Password existence in defined array */
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:websiteko.html");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$error= "Invalid Login Details!!";
		}
	}
?>
<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>BigBuilders' Account</title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<center>
    <body class="bgimg">
        <div class="log_account">
            <h1>Account</h1>
            <br>


            <form class="reg" action="" method="post" name="Login_Form">
                <b>
                    Email: <input name="Username" type="text" placeholder="        abcd@email.com" name="awan" required>
                    <br>
                    <br>
                    Password:<input name="Password" type="password" placeholder="        as12ad3AW" size="17" required>
                    <br> <br>
                    Not yet a member?&emsp;<a href="C:/Users/Asus/Documents/webdev/registration%20form.html">Register</a>

                    <br><br>
                    <div class="search">

                        <button name="Submit" type="submit" value="Login">Login</button>
                    </div>
                </b>

            </form>
        </div>
    </body>
</center>
</html>
