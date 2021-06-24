  
<?php
	try{
		$dns='mysql:host=localhost:3308;dbname=db_suivi_courrier'; 
		$pdo=new PDO($dns,'root','');	
		
	}catch(PDOException $e){
		 
				printf("echec de la connexion ...", $e->getMessage());
				exit();
	}


?>



