 <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#" >
          <strong class="blue-text">GESCOSMART</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="index_user.php?choix=courriera&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
			 <!-- Links
			 <li class="nav-item">
              <a class="nav-link waves-effect" href="index_user.php?choix=mon_compte&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>"
                >Boite de reception
                </a>
            </li>
			
			 <li class="nav-item">
              <a class="nav-link waves-effect" href="index_user.php?choix=boite_envoi&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>"
                >Boite d'envoi
                </a>
            </li>
			
             -->
			 
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
		  
		  <li class="nav-item">
            <a   class="nav-link border border-light rounded waves-effect" href="index_user.php?choix=courriera&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" >
               
				<i  class="fas fa-list mr-2" >&nbsp;Courrier d'arrivée</i>
               
              </a>
            </li>
			 <li class="nav-item">
            <a   class="nav-link border border-light rounded waves-effect" href="index_user.php?choix=courrierd&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" >
               
				<i  class="fas fa-list mr-2" >&nbsp;Courrier de depart</i>
               
              </a>
            </li>
		  
		   <?php  if($type_compte=="ADMINISTRATEUR"){ ?> 
		    <!-- Right 
             <li class="nav-item">
              <a   class="nav-link border border-light rounded waves-effect" data-toggle="modal" data-target="#myModalajouterAdmin">
               
				<i  class="fas fa-sign-out-alt mr-2" >&nbsp; Creer compte</i>
               
              </a>
            </li>-->
			
			<li class="nav-item">
            <a   class="nav-link border border-light rounded waves-effect" href="index_user.php?choix=listecompte&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" >
               
				<i  class="fas fa-list mr-2" >&nbsp;Gestion de compte</i>
               
              </a>
            </li>
			
		   <?php  }?>
			
		     
            <li class="nav-item">
              <a onclick="return confirm('Voulez vous vraiment verouiller ?')" href="lock/lock_screen.php?code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" class="nav-link border border-light rounded waves-effect"
                >
				<i class="fas fa-sign-out-alt mr-2"> Verouiller</i>
               
              </a>
            </li>
			
			 <li class="nav-item">
              <a onclick="return confirm('Voulez vous vraiment vous deconnectez ?')" href="../index.php" class="nav-link border border-light rounded waves-effect"
                >
				<i class="fas fa-sign-out-alt mr-2"> Déconnexion</i>
               
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
   
     
      
	  
	  
	<!-- MES MODALLLLLLLLLLLLLLLLLLLLLLLLSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->  
	 
	   <div class="modal fade" id="myModalajouterAdmin"  role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Création de compte</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=mon_compte&saveuser&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
        <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="text" name="nom_compte" id="form8" class="form-control">
          <label for="form8" class="active">NOM COMPTE</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="text"  name="username" id="form9" class="form-control">
          <label for="form9" class="active">NOM UTILISATEUR</label>
        </div>

        
         <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="text" name="password" id="form9" class="form-control">
          <label for="form9" class="active">MOT DE PASSE</label>
        </div>
		
		 <div class="md-form form-sm">
         
            
  <select name="type_compte" class="browser-default custom-select">
       <option selected>Choisir le type de compte</option>
       <option value="UTILISATEUR" >UTILISATEUR</option>
       <option value="ADMINISTRATEUR" >ADMINISTRATEUR</option>
         
  </select>
        </div>
		
		 

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light" type="submit" >Enregistrer <i class="fas fa-send ml-1"></i></button>
        </div>
		
		</form>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>	
	  
	  <!-- MES MODALLLLLLLLLLLLLLLLLLLLLLLLSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
 


<!-- MES MODALLLLLLLLLLLLLLLLLLLLLLLLSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS PRISE ADD -->  
	
	  
	  
	  <!-- MES MODALLLLLLLLLLLLLLLLLLLLLLLLSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->  	
	  
	   
	  

    
    <!-- Sidebar -->

  </header>