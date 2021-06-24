<?php
   require_once("connexion.php");
	
	   if(isset($_GET['code_compte'])){
   $code_compte = $_GET['code_compte'];
   
    $ps=$pdo->prepare("select * from compte where  code_compte='$code_compte' ");
    $ps->execute();
	$user_data=$ps->fetch();
  
        $type_compte=$user_data['type_compte'];
        $nom_compte=$user_data['nom_compte'];
  
  
	}

  ?>
  
  
  
  
  
<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>GESCOSMART</title>
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
	    
	<script>
function ouvrir() { 
page = window.open("https://www.1formatik.com", "_blank", "width=1200, height=700"); 
} 
function fermer() { 
page.close(); 
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
           
           <span><h1><img style="width:50px; height:70px;" src="img/drapeau.png"/> &nbsp; &nbsp;<strong>PROGRAMME DE GESTION DE COURRIER</strong> &nbsp; &nbsp;<img style="width:50px; height:70px;" src="img/drapeau.png"/> <br/>GESCOSMART</h1></span>
         </div>
      </a>
    </div>
	
	</center>  
   
</nav>
  
  
  <br/> <br/> <br/> <br/> <br/>
    
  <center>
   
  
  
  <div style="margin: 10px" class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">GESTION DE COURRIER</h3>
        
        <a href="gestion/index_user.php?code_compte=<?php echo $code_compte ?>&choix=courriera" class="btn btn-success"> <i class="fas fa-external-link-square-alt"></i></a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body ">
        <h3 class="card-title">SUIVI DE COURRIER</h3>
        
        <a href="suivi/index_user.php?code_compte=<?php echo $code_compte ?>&choix=mon_compte" class="btn btn-success"> <i class="fas fa-external-link-square-alt"></i></a>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body ">
        <h3 class="card-title">DECONNEXION</h3>
        
        <a onclick="return confirm('Voulez vous vraiment vous deconnectez ?')" href="index.php" class="btn btn-danger"><i class="fas fa-power-off"></i></a>
      </div>
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
 
  
  
  
  
 
 