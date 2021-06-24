<?php
    require_once("connexion.php");
	

	  

    $code_compte=$_POST['code_compte'];
    $password=$_POST['password'];
	 
    $ps=$pdo->prepare("select * from compte where code_compte='$code_compte' and password='$password' ");
    $ps->execute();
	$user_data=$ps->fetch();
	
    if(!empty($user_data['password'])){
		$login=$user_data['code_compte'];
         
        
         header("location:choix.php?code_compte=$login&choix=mon_compte"); 	
	
 }else{
	 $msg="Echec de connexion";
	  header("location:index.php?msg=$msg");
	  
 }
 

  ?>