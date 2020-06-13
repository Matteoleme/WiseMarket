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
		//admin mostra la dashboard completa
		if ($username=='admin') {
			echo '<script type="text/javascript">
	    	alert("Benvenuto ' . $username . '")
	    	window.location.href = "index.php"
        	</script>';
		}
		//mostra la pagina temperature
		else if ($username=='temperatura') {
			echo '<script type="text/javascript">
	    	alert("Benvenuto ' . $username . '")
	    	window.location.href = "charts.html"
        	</script>';
		}
		//mostra la pagina prodotti
		else{
			echo '<script type="text/javascript">
	    	alert("Benvenuto ' . $username . '")
	    	window.location.href = "tables.html"
        	</script>';
		}
		
	}
	//altrimenti se sono sbagliate
	else
	{
        echo '<script type="text/javascript">
	    alert("Errore! Utente ' . $username . ' non valido")
	    window.location.href = "login.html"
        </script>';
	}