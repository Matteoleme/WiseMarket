<?php
		//credenziali phpmyadmin
			$username = $_POST["username"];
			$password = $_POST["password"];

			$db = new mysqli("localhost", "mastro", "mastro", "supermercato");

		//check connection
			if($db->connect_error){
				die("connection failed: " . $db->connect_error);
                }
                
            $sql = "Select * From utenti WHERE Nome='$username' AND Password='$password'";
            $result = $db->query($sql);
			
			if($row = $result->fetch_assoc()){
				echo '<script type="text/javascript">
			    alert("Benvenuto ' . $username . ')
			    window.location.href = "index.php"
                </script>';
			}
			
			else
			{
                echo '<script type="text/javascript">
			    alert("Errore! Utente' . $username . ' non valido")
			    window.location.href = "login.html"
                </script>';
			}
	?>