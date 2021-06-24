
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
			  
          
		  
   $req_add_p1=$pdo->prepare('select max(code_courrier) from courrier');
			$req_add_p1->execute();
			$pointer_add_p1=$req_add_p1->fetch();
	
			$code_courrier=$pointer_add_p1['max(code_courrier)']+1;
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
			
			  $code_courrier1 = $code_courrier;
			  $ref_courrier = $_POST['ref_courrier'];
			  $code_compte = $_GET['code_compte'];
			   $concernant_courrier = $_POST['concernant_courrier'];
			    $desc_courrier = $_POST['desc_courrier'];
				
				 
				     
			   
			   
       $req=$pdo->prepare("insert into courrier (code_courrier,ref_courrier,code_compte,concernant_courrier,desc_courrier) values(?,?,?,?,?)");
          $params=array($code_courrier1,$ref_courrier,$code_compte,$concernant_courrier,$desc_courrier);
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
	 echo'<script>window.open("index_user.php?choix=mon_compte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
	
	
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
		  
	       $msg = 'Réception validée avec succès ';
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
	  >
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
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

     

      <!--Grid row-->
      <div class="row wow">

        <!--Grid column-->
        <div class="col-md-14 mb-14">

          <!--Card-->
          <div class="card">

            <!--Card content-->
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
		 
		 
		 
		 	 
		  

            </div>

          </div>
          <!--/.Card-->
		  
		  
	 
		  
		  
		  
		  

        </div>
       
 </div>
    </div>
  </main>
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
