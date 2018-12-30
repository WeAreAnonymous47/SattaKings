<?php

		$Name=$_POST['n1'];
		$Username=$_POST['u1'];
		$Number=$_POST['n2'];
		$Email=$_POST['e1'];
		$pass=$_POST['p1'];
		$p="killer";
		$Hostname="localhost";
		$Username="root";
		$Password="";
		$db_name="satta";
		$connect= mysqli_connect($Hostname, $Username, $Password, $db_name);
				
				if($p==$pass)
				{

					$connect;

						if($connect)
						{	
							
						}

						else{
							
						}		
				}
?>