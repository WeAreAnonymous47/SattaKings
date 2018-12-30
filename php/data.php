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
					
				}

				else
				{
				
				}
			}
		}	
	
	
?>