<?php
	//credenziali passate dall'utente che intende loggarsi
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//instaurare una connessione al database
	$db = new mysqli("localhost", "mastro", "mastro", "supermercato");
	
	//controllare la connessione
	if($db->connect_error){
		//messaggio nel caso di errore di connessione
		die("connection failed: " . $db->connect_error);
	}
	
	//interrogazione al database per controllare se 
	//effettivamente esistono utenti con queste credenziali
	$sql = "Select * From utenti WHERE Nome='$username' AND Password='$password'";
	$result = $db->query($sql);
	
	//se le credenziali sono giuste
	if($row = $result->fetch_assoc()){
		echo '<script type="text/javascript">
	    alert("Benvenuto ' . $username . ')
	    window.location.href = "index.php"
        </script>';
	}
	//altrimenti se sono sbagliate
	else
	{
        echo '<script type="text/javascript">
	    alert("Errore! Utente' . $username . ' non valido")
	    window.location.href = "login.html"
        </script>';
	}