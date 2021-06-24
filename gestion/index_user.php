
<?php
   require_once('connexion.php');
    if(isset($_GET['code_compte'])){
   $code_compte = $_GET['code_compte'];
   
    $ps=$pdo->prepare("select * from compte where  code_compte='$code_compte' ");
    $ps->execute();
	$user_data=$ps->fetch();
  
        $type_compte=$user_data['type_compte'];
        $nom_compte=$user_data['nom_compte'];
  
  
	}
//                                        UPLOAAAAAAAAAAADDDDDDDDDDDDDDDDDDDDDDDDDDDD
      if(isset($_GET['print'])){









 if(!empty($_FILES['uploaded_file']))
  {
	  
	   mkdir('uploads');
	   $dossier='uploads';
	   
	   $uploaded_file= basename( $_FILES['uploaded_file']['name']);
	  
	 // $uploaded_file = "uploaded_file";
	   
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
	  
	  
	    $code_doc= '0000k01';
		$code_courrier = '000001';
	   $req=$pdo->prepare("insert into document (code_doc,code_courrier,nom_doc) values(?,?,?)");
          $params=array($code_doc,$code_courrier,$uploaded_file);
          $req->execute($params);
		  
		  
		  
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
 


















		  }
	 
  if(isset($_GET['saveuser'])){
			  
          
		  
 $req_add_p=$pdo->prepare('select max(code_compte) from compte');
			$req_add_p->execute();
			$pointer_add_p=$req_add_p->fetch();
	
			$code_compte_user=$pointer_add_p['max(code_compte)']+1;
			if($code_compte_user<=9){
				$code_compte_user='00000'.$code_compte_user;
			}else if($code_compte_user<=99){
				$code_compte_user='0000'.$code_compte_user;
			}else if($code_compte_user<=999){
				$code_compte_user='000'.$code_compte_user;
			}else if($code_compte_user<=9999){
				$code_compte_user='00'.$code_compte_user;
			}else if($code_compte_user<=99999){
				$code_compte_user='0'.$code_compte_user;
			}
			
			  $code_compte_user=$code_compte_user;
			  $nom_compte=strtoupper($_POST['nom_compte']);
			  $username=$_POST['username'];
			   $password=$_POST['password'];
			    $type_compte=$_POST['type_compte'];
			   
			   
       $req=$pdo->prepare("insert into compte (code_compte,nom_compte,username,password,type_compte) values(?,?,?,?,?)");
          $params=array($code_compte_user,$nom_compte,$username,$password,$type_compte);
          $req->execute($params);
		  
		  $msg = 'Compte ajouté avec succès ';
	 echo'<script>window.open("index_user.php?choix=listecompte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
	
	
	 }

	 if(isset($_GET['savecourrier'])){
			  
           
			  
        function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
      }  
		  
   $req_add_p1=$pdo->prepare('select max(numero_ordre_ar) from courrier');
			$req_add_p1->execute();
			$pointer_add_p1=$req_add_p1->fetch();
	
			$code_courrier=$pointer_add_p1['max(numero_ordre_ar)']+1;
			if($code_courrier<=9){
				$code_courrier='00000'.$code_courrier;
			}else if($code_courrier<=99){
				$code_courrier='0000'.$code_courrier;
			}else if($code_courrier<=999){
				$code_courrier='000'.$code_courrier;
			}else if($code_courrier<=9999){
				$code_courrier='00'.$code_courrier;
			}else if($code_courrier<=99999){
				$code_courrier='0'.$code_courrier;
			}
			
			  $numero_ordre = $code_courrier;
			   $code_courrier1 = guidv4();
			  $ref_courrier = $_POST['ref_courrier'];
			  $code_compte = $_GET['code_compte'];
			   $obj_courrier = $_POST['obj_courrier'];
			    $date_courrier = $_POST['date_courrier'];
			    
				
				 
			  $expediteur  = $_POST['expediteur'];
			  
			   
			    
				$annotation  = $_POST['annotation'];
				
				$checksuivi_1 = isset($_POST['DIFFUSION1']) ? $_POST['DIFFUSION1'] : '';
                $checksuivi_2 = isset($_POST['DIFFUSION2']) ? $_POST['DIFFUSION2'] : '';  
				$suivi_courrier = $checksuivi_1.$checksuivi_2;
				
				
				$checkimp_1 = isset($_POST['IMP1']) ? $_POST['IMP1'] : '';
                $checkimp_2 = isset($_POST['IMP2']) ? $_POST['IMP2'] : '';  
				$checkimp_3 = isset($_POST['IMP3']) ? $_POST['IMP3'] : '';  
				$checkimp_4 = isset($_POST['IMP4']) ? $_POST['IMP4'] : '';  
				$checkimp_5 = isset($_POST['IMP5']) ? $_POST['IMP5'] : '';  
				$checkimp_6 = isset($_POST['IMP6']) ? $_POST['IMP6'] : '';  
				$checkimp_7 = isset($_POST['IMP7']) ? $_POST['IMP7'] : '';  
				 
				
				$imputation = $checkimp_1.$checkimp_2.$checkimp_3.$checkimp_4.$checkimp_5.$checkimp_6.$checkimp_7;

				
				$check_1 = isset($_POST['T1']) ? $_POST['T1'] : '';
                $check_2 = isset($_POST['T2']) ? $_POST['T2'] : '';  
                $check_3 = isset($_POST['T3']) ? $_POST['T3'] : '';
                $check_4 = isset($_POST['T4']) ? $_POST['T4'] : '';
                $check_5 = isset($_POST['T5']) ? $_POST['T5'] : '';
                $check_6 = isset($_POST['T6']) ? $_POST['T6'] : '';  
                $check_7 = isset($_POST['T7']) ? $_POST['T7'] : '';
                $check_8 = isset($_POST['T8']) ? $_POST['T8'] : '';
                $check_9 = isset($_POST['T9']) ? $_POST['T9'] : '';
                $check_10 = isset($_POST['T10']) ? $_POST['T10'] : '';  
                $check_11 = isset($_POST['T11']) ? $_POST['T11'] : '';
                $check_12 = isset($_POST['T12']) ? $_POST['T12'] : '';
                $check_13 = isset($_POST['T13']) ? $_POST['T13'] : '';
                $check_14 = isset($_POST['T14']) ? $_POST['T14'] : '';  
                $check_15 = isset($_POST['T15']) ? $_POST['T15'] : '';
                $check_16 = isset($_POST['T16']) ? $_POST['T16'] : '';
                 
                 		
			    $type_document = $check_1.$check_2.$check_3.$check_4. $check_5.$check_6.$check_7.$check_8.$check_9.$check_10.$check_11.$check_12.$check_13.$check_14.$check_15.$check_16;
			   
       $req=$pdo->prepare("insert into courrier (numero_ordre_ar,code_courrier,ref_courrier,code_compte,obj_courrier,expediteur,type_document,suivi_courrier,imputation,annotation,date_courrier) values(?,?,?,?,?,?,?,?,?,?,?)");
          $params=array($numero_ordre,$code_courrier1,$ref_courrier,$code_compte,$obj_courrier,$expediteur,$type_document,$suivi_courrier,$imputation,$annotation,$date_courrier);
          $req->execute($params);
		


		  
 $req_add_p=$pdo->prepare('select max(code_courrier_compte) from courrier_compte');
			$req_add_p->execute();
			$pointer_add_p=$req_add_p->fetch();
	
			$code_courrier_compte=$pointer_add_p['max(code_courrier_compte)']+1;
			
			if($code_courrier_compte<=9){
				$code_courrier_compte='00000'.$code_courrier_compte;
			}else if($code_courrier_compte<=99){
				$code_courrier_compte='0000'.$code_courrier_compte;
			}else if($code_courrier_compte<=999){
				$code_courrier_compte='000'.$code_courrier_compte;
			}else if($code_courrier_compte<=9999){
				$code_courrier_compte='00'.$code_courrier_compte;
			}else if($code_courrier_compte<=99999){
				$code_courrier_compte='0'.$code_courrier_compte;
			}
			
			  $code_courrier_compte = $code_courrier_compte;
                  $date_entre = date('Y-m-d');
				   
				  $date_sortie = 'NON DEFINI';
				   $etat_courrier = 'VALIDE';
				   $etat_envoi = 'non';
				    $req=$pdo->prepare("insert into courrier_compte (code_courrier_compte,date_entre,date_sortie,etat_courrier,code_compte,code_courrier,etat_envoi) values(?,?,?,?,?,?,?)");
          $params=array($code_courrier_compte,$date_entre,$date_sortie,$etat_courrier,$code_compte,$code_courrier1,$etat_envoi);
          $req->execute($params);
		  
		  
		  $msg = 'Courrier enrégistré avec succès ';
	 echo'<script>window.open("index_user.php?choix=courriera&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
	
	
	 }
	
	  if(isset($_GET['save_c_depart'])){
			  
        function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
      }  
	  
	 
      
		  
   $req_add_p1=$pdo->prepare('select max(numero_ordre_dp) from courrier_depart');
			$req_add_p1->execute();
			$pointer_add_p1=$req_add_p1->fetch();
	
			$code_courrier=$pointer_add_p1['max(numero_ordre_dp)']+1;
			if($code_courrier<=9){
				$code_courrier='00000'.$code_courrier;
			}else if($code_courrier<=99){
				$code_courrier='0000'.$code_courrier;
			}else if($code_courrier<=999){
				$code_courrier='000'.$code_courrier;
			}else if($code_courrier<=9999){
				$code_courrier='00'.$code_courrier;
			}else if($code_courrier<=99999){
				$code_courrier='0'.$code_courrier;
			}
			  $numero_ordre = $code_courrier;
			  $code_c_depart = guidv4();
			  $ref_c_depart = $_POST['ref_c_depart'];
			  $code_compte = $_GET['code_compte'];
			   $objet_c_depart  = $_POST['objet_c_depart'];
			    $date_c_depart = $_POST['date_c_depart'];
			    $destinat_c_depart  = $_POST['destinat_c_depart'];
				 
			    
				 
			  
			     
				 
				
				$check_1 = isset($_POST['T1']) ? $_POST['T1'] : '';
                $check_2 = isset($_POST['T2']) ? $_POST['T2'] : '';  
                $check_3 = isset($_POST['T3']) ? $_POST['T3'] : '';
                $check_4 = isset($_POST['T4']) ? $_POST['T4'] : '';
                $check_5 = isset($_POST['T5']) ? $_POST['T5'] : '';
                $check_6 = isset($_POST['T6']) ? $_POST['T6'] : '';  
                $check_7 = isset($_POST['T7']) ? $_POST['T7'] : '';
                $check_8 = isset($_POST['T8']) ? $_POST['T8'] : '';
                $check_9 = isset($_POST['T9']) ? $_POST['T9'] : '';
                $check_10 = isset($_POST['T10']) ? $_POST['T10'] : '';  
                $check_11 = isset($_POST['T11']) ? $_POST['T11'] : '';
                $check_12 = isset($_POST['T12']) ? $_POST['T12'] : '';
                $check_13 = isset($_POST['T13']) ? $_POST['T13'] : '';
                $check_14 = isset($_POST['T14']) ? $_POST['T14'] : '';  
                $check_15 = isset($_POST['T15']) ? $_POST['T15'] : '';
                $check_16 = isset($_POST['T16']) ? $_POST['T16'] : '';
                 
                 		
			    $type_doc_depart  = $check_1.$check_2.$check_3.$check_4. $check_5.$check_6.$check_7.$check_8.$check_9.$check_10.$check_11.$check_12.$check_13.$check_14.$check_15.$check_16;
			   
       $req=$pdo->prepare("insert into courrier_depart (numero_ordre_dp,code_c_depart,ref_c_depart,code_compte,objet_c_depart,destinat_c_depart,type_doc_depart,date_c_depart) values(?,?,?,?,?,?,?,?)");
          $params=array($numero_ordre,$code_c_depart,$ref_c_depart,$code_compte,$objet_c_depart,$destinat_c_depart,$type_doc_depart,$date_c_depart);
          $req->execute($params);
		

 
		  
		  $msg = 'Courrier enrégistré avec succès ';
	 echo'<script>window.open("index_user.php?choix=courrierd&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
	
	
	 }
	  if(isset($_GET['envoicourrier'])){
			  
          
    $code_courrier1 = $_POST['code_courrier'];
	 $code_compte = $_GET['code_compte'];
   

       $sql =  "select * from courrier where code_courrier='$code_courrier1' ;";
	                 $reponse2 = $pdo->prepare("$sql");
                      $reponse2->execute();
                       $data_reponse2=$reponse2->fetchAll();
                      
					   foreach ($data_reponse2 as $data2) 
		  
 $req_add_p=$pdo->prepare('select max(code_courrier_compte) from courrier_compte');
			$req_add_p->execute();
			$pointer_add_p=$req_add_p->fetch();
	
			$code_courrier_compte=$pointer_add_p['max(code_courrier_compte)']+1;
			
			if($code_courrier_compte<=9){
				$code_courrier_compte='00000'.$code_courrier_compte;
			}else if($code_courrier_compte<=99){
				$code_courrier_compte='0000'.$code_courrier_compte;
			}else if($code_courrier_compte<=999){
				$code_courrier_compte='000'.$code_courrier_compte;
			}else if($code_courrier_compte<=9999){
				$code_courrier_compte='00'.$code_courrier_compte;
			}else if($code_courrier_compte<=99999){
				$code_courrier_compte='0'.$code_courrier_compte;
			}
			
			 $code_compte_post = $_POST['code_compte'];
			  $code_courrier_compte = $code_courrier_compte;
                  $date_entre = 'NON DEFINI';
				  $date_sortie = 'NON DEFINI';
				  
				//  $date_entre_post = $_POST['date_entre'];
				  
				   $date_sortie_post = date('Y-m-d');
				   $etat_courrier_envoye = 'NON VALIDE';
				   $etat_courrier_base = 'VALIDE';
				   $etat_envoi_base = 'non';
				   $etat_envoi = 'oui';
				   
				   
	$sql =  "select * from courrier_compte  where code_compte='$code_compte_post' and code_courrier='$code_courrier1';";
	$reponse3 = $pdo->prepare("$sql");
    $reponse3->execute();
    $data_reponse3=$reponse3->fetch();
	
	if(!empty($data_reponse3['code_compte'])){
		
     $msgAlert = 'Attention le courrier a été déja envoyé dans ce compte !!!';
	 
	 echo'<script>window.open("index_user.php?choix=mon_compte&code_compte='.$code_compte.'&msgAlert='.$msgAlert.'", "_self")</script>';
	}else{
	
	
				    
	$req=$pdo->prepare("insert into courrier_compte (code_courrier_compte,date_entre,date_sortie,etat_courrier,code_compte,code_courrier,etat_envoi) values(?,?,?,?,?,?,?)");
    $params=array($code_courrier_compte,$date_entre,$date_sortie,$etat_courrier_envoye,$code_compte_post,$code_courrier1,$etat_envoi_base);
       $req->execute($params);
	   
	   
	   $req_add_p=$pdo->prepare('select max(code_courrier_sortant) from courrier_sortant');
			$req_add_p->execute();
			$pointer_add_p=$req_add_p->fetch();
	
			$code_courrier_sortant=$pointer_add_p['max(code_courrier_sortant)']+1;
			
			if($code_courrier_sortant<=9){
				$code_courrier_sortant='00000'.$code_courrier_sortant;
			}else if($code_courrier_sortant<=99){
				$code_courrier_sortant='0000'.$code_courrier_sortant;
			}else if($code_courrier_sortant<=999){
				$code_courrier_sortant='000'.$code_courrier_sortant;
			}else if($code_courrier_sortant<=9999){
				$code_courrier_sortant='00'.$code_courrier_sortant;
			}else if($code_courrier_sortant<=99999){
				$code_courrier_sortant='0'.$code_courrier_sortant;
			}
			
			 
	   
	   
	 $req=$pdo->prepare("insert into courrier_sortant (code_courrier_sortant,code_compte_exp,code_compte_dest,code_courrier) values(?,?,?,?)");
    $params=array($code_courrier_sortant,$code_compte,$code_compte_post,$code_courrier1);
       $req->execute($params);
		  
	      $rq1=$pdo->prepare("update courrier set code_compte='$code_compte' where code_courrier='$code_courrier1' ");
	      $rq1->execute();
		  
		   $rq1=$pdo->prepare("update courrier_compte set etat_courrier='$etat_courrier_base',etat_envoi='$etat_envoi',date_sortie='$date_sortie_post' where code_courrier='$code_courrier1' and code_compte='$code_compte' ");
	      $rq1->execute();
		  
		  
		  $msg = 'Courrier envoyé  avec succès ';
	 echo'<script>window.open("index_user.php?choix=mon_compte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
	
	}
	 }
	 
	   if(isset($_GET['validation'])){
		   
		   $code_compte_get = $_GET['code_compte'];
		    $code_courrier_get = $_GET['code_courrier'];
			$etat_courrier_base1 = 'VALIDE';
			 $date_entre = date('Y-m-d');
		   
		   $rq1=$pdo->prepare("update courrier set code_compte='$code_compte_get' where code_courrier='$code_courrier_get' ");
	      $rq1->execute();
		   
		   $rq2=$pdo->prepare("update courrier_compte set etat_courrier='$etat_courrier_base1',date_entre='$date_entre' where code_courrier='$code_courrier_get' and code_compte='$code_compte_get' ");
	      $rq2->execute();
		  
	       $msg = 'Réception validée avec succès...';
		   echo'<script>window.open("index_user.php?choix=mon_compte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
		    }
			
			 if(isset($_GET['modifcompte'])){
				 
		   $code_compte_edit = $_POST['code_compte'];
		   $nom_compte = $_POST['nom_compte'];
		   $username = $_POST['username'];
			$password = $_POST['password'];
		   
		   $rq1=$pdo->prepare("update compte set nom_compte='$nom_compte',username='$username',password='$password' where code_compte='$code_compte_edit' ");
	      $rq1->execute();
		   
		   
	       $msg = 'Compte modifié avec succès ';
		   echo'<script>window.open("index_user.php?choix=listecompte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
		    }
	  
	  if(isset($_GET['modifproduit'])){
			  
          
		  
 
			 $code_produit=$_POST["code_produit"];
			  
			  $designation_produit=$_POST["designation_produit"];
			  $prix_unitaire_expre=$_POST['prix_unitaire_expre'];
			   $prix_unitaire_classi=$_POST['prix_unitaire_classi'];
			   
      
		  
	$rq1=$pdo->prepare('update produit_pressing SET designation_produit=?,prix_unitaire_expre=?,prix_unitaire_classi=?WHERE(code_produit=?)');
	$params=array($designation_produit,$prix_unitaire_expre,$prix_unitaire_classi,$code_produit);
	$rq1->execute($params);
	
	 }
	 
	 
		?>  


		

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>SUIVI COURRIER</title>
   <!-- Font Awesome -->
    <link rel="stylesheet" href="css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome/fontawesomeweb/css/all.css">
 
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="css/mdb.min.css" rel="stylesheet">
   <!-- Your custom styles (optional) -->
   <link href="css/style.min.css" rel="stylesheet">
   
   
    <link href="bootstrap/table/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
    
      <link href="bootstrap/tableau/css/dataTables.bootstrap.min.css.css" rel="stylesheet">
      <script src="bootstrap/tableau/js/jquery-1.11.3.min.js"></script> 
	  <script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>
<script language="Javascript">
function verif_nombre(champ)
  {
	var chiffres = new RegExp("[0-9]");
	var verif;
	var points = 0;
 
	for(x = 0; x < champ.value.length; x++)
	{
            verif = chiffres.test(champ.value.charAt(x));
	    if(champ.value.charAt(x) == "."){points++;}
            if(points > 1){verif = false; points = 1;}
  	    if(verif == false){champ.value = champ.value.substr(0,x) + champ.value.substr(x+1,champ.value.length-x+1); x--;}
	}
  }
</script>
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
   <?php include 'header.php'; ?>
  <!--Main Navigation-->

  <!--Main layout-->
  <center><br/><br/><br/>
   <div style="margin: 20px" class="center">
     
 <div class="card">
      <div class="card-body">
			 
             
			<?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="mon_compte"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/compte.php';?>
		
		 <?php } ?>
		  
		  <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="boite_envoi"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/boite_envoi.php';?>
		
		 <?php } ?>
		 
	 <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="recherche"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/recherche.php';?>
		
		 <?php } ?>
		  <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="listecompte"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/admin.php';?>
		
		 <?php } ?>
		 
		  <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="courriera"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/courriera.php';?>
		
		 <?php } ?>
		 
		 
		  <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="espace"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/espace.php';?>
		
		 <?php } ?>
		 
		  <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="editecourrier"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/editecourrier.php';?>
		
		 <?php } ?>
		 
		  
		 
		 <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="deletecourrier"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/deletecourrier.php';?>
		
		 <?php } ?>
		 
		 <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="courrierd"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/courrierd.php';?>
		
		 <?php } ?> 
		 
		 <?php

			if(isset($_GET['choix']))
	  $choix=$_GET['choix'];
  
  
	  if($choix=="espace_depart"){  
	  
	  
	  
	  ?> 
		 
 	  <?php include 'include/espace_depart.php';?>
		
		 <?php } ?>
	 </div>
      </div>
	      </div>
		         </center>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      
      
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" >
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-google-plus mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="#">
        <i class="fab fa-github mr-3"></i>
      </a>

    <a href="#">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="#" > SmarTech</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
 <!-- MES SCRIPTS-->
      
	 <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>


<script src="bootstrap/tableau/js/dataTables.bootstrap.min.js"></script>
<script src="bootstrap/tableau/js/jquery.dataTables.min.js"></script> 




  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>


  <!--FIN MES SCRIPTS-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  
  
  
  
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  

  
  
</body>

</html>
