<?php
   require_once("connexion.php");
	
	if(isset($_GET['choix'])){
		
	  $choix=$_GET['choix'];
  
  
	  if($choix=="testmdp"){  
	  
	  

    $login=trim(strtoupper($_POST['username']));
    $password=strtoupper($_POST['password']);
	 
    $ps=$pdo->prepare("select * from compte where username='$login' and password='$password' ");
    $ps->execute();
	$user_data=$ps->fetch();
	
    if(!empty($user_data['password'])){
		
		$login=$user_data['code_compte'];
          
         header("location:choix.php?code_compte=$login&choix=mon_compte"); 	
	
 }else{
	 
	 $msg="Echec de connexion";
	  header("location:index.php?msg=$msg");
	  
 }

}
	}

  ?>
  
  
  
  
  
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>SUIVI DE COURRIER</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="css/mdb.min.css" rel="stylesheet">
   <!-- Your custom styles (optional) -->
   <link href="css/style.min.css" rel="stylesheet">
   
   
    <link href="bootstrap/table/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  
    
    <!-- Bootstrap theme -->
   
     
	 
      <link href="bootstrap/tableau/css/dataTables.bootstrap.min.css.css" rel="stylesheet">
      <script src="bootstrap/tableau/js/jquery-1.11.3.min.js"></script>
	  
	   <!--Mon  Bootstrap -->
	   <script type="text/javascript" language="javascript">
<!-- Début
function twFermer() {
  window.close();
}
</script>
	    
	   
	   
	   <!--Mon  Bootstrap -->
	  
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

<body >

  <!--Main Navigation-->
  
  <nav class="navbar navbar-dark default-color justify-content-between">
   
  <center>

    <div class="col-md-12">
      <a style="color:white;" href="#">
          <div class="link">
           
           <span><h1><img style="width:50px; height:70px;" src="img/drapeau.png"/> &nbsp; &nbsp; &nbsp; &nbsp; <strong> Présidence de la République du Mali</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img style="width:50px; height:70px;" src="img/drapeau.png"/> <br/> SUIVI DE COURRIER</h1></span>
         </div>
      </a>
    </div>
	
	</center>  
   
</nav>
  
  
  
    
  <center>
   <div class="col-md-4">
  <div class="container main" style="margin-top: 90px;">
  
  <div>
  
  <!-- Default form login -->
     <form class="text-center border border-light p-5" action="index.php?choix=testmdp" method="POST">

    <p class="h4 mb-4">Authentifiez-Vous</p>

    <!-- Email -->
    <input type="text" name="username" class="form-control mb-4" placeholder="Nom d'utilisateur">

    <!-- Password -->
    <input type="password" name="password" class="form-control mb-4" placeholder="Mot de passe">

    

    
    <button class="btn btn-info btn-block my-4" type="submit" >Connexion</button>

    

    

</form>
 


</div>
  </div>
   </div>
  </center><br/> 
                <?php  
	
                  if (isset($_GET['msg'])){?><div class='alert alert-danger center' style='width: 70%; font-family:Tahoma; font-size:15px; margin: auto;'><center><p><?php  echo $msg=$_GET['msg'];?>
				  
	       </p></center></div> <?php }?>
  
  
   <br/> <br/>  <br/> 
  
  
  
  
  
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
 
  
  
  
  
 
 