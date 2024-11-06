<?php 
						$emptyemail="";
						$emptypass="";
						if(isset($_POST["Submit"])){
							$emailvalue = $_POST ['email'];
							$passvalue = $_POST ['password'];
							if(empty($emailvalue)){
									$emptyemail = "email erreur";
							}else if(empty($passvalue)){
									$emptypass = "mot de pass erreur";
									
							}else if(preg_match("/\w+@emsi.ma{1}$/",$emailvalue)==0){
									$emptyemail = "email erreur";
							}else{
								session_start();
								$_SESSION["emailuser"] = $emailvalue;
								$_SESSION["passuser"] = $passvalue;
								header("Location:home.php");	
							}
						}
						
						?>