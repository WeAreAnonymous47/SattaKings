<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Signup - Satta Kings</title>
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="style.css">
	
<link rel="stylesheet" href="css/create.css">
</head>
<body link="#0005FF" vlink="#0005FF" alink="#0005FF">
<center><p><a href="SattaKings.html"><img src="images/logo.png" width="135" height="142" alt=""/></a></p>
  <p>&nbsp;</p>
</center>
<center>
<div class="register">
	<div class="form">
<form class="register-form" action="" method="post">
	<h1>Signup</h1>
	<p>
	  <input type="text" placeholder="Enter Your name" name="n1" />
	  <input type="text" placeholder="Enter Username" name="u1" />
	  <input type="number" placeholder="Enter Your number" name="n2"/>
	  <input type="email" placeholder="Enter Email" name="e1"/>
	  <input type="Password" placeholder="Enter Password" name="p1"/>
	 </p>
<button background-color="black" name="s1" value="submit">Create</button>
	<h4 class="message">Already have a account?<a href="login page.html">Login</a></h4>
	</form>
	</div>
	</div>
	</center>
	<?php
	include'conn.php';
	if(isset($_POST['s1']))
	{
		$Name=$_POST['n1'];
		$Username=$_POST['u1'];
		$Number=$_POST['n2'];
		$Email=$_POST['e1'];
		$Password=$_POST['p1'];
		$p="killer";

		
		 	if(empty($Name))
			{
				echo"<br>Enter your Name";
			}

			else if(empty($Username))
			{
				echo"<br>Enter your Username";
			}

			else if(empty($Number))
			{
				echo"<br>Enter your Number";
			}

			else if (empty($Email))
			{
				echo"<br>Enter your your Number";
			}


			else if (empty($Password))
			{
				echo"<br>Entre your Password";
			}

			else
			{
				$query="insert into createaccount values('".$Name."', '".$Username."', '".$Number."', '".$Email."', '".$Password."')";
				if(mysqli_query($connect, $query))
				{
					echo "<br>Data inserted";
				}

				else
				{
					echo "<br>Not inserted";
				}
			}
		}	
	
	
?>
</body>
</html>