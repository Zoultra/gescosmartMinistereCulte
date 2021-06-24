 


   

	 <!-- Heading -->
      <div class="card mb-4 wow ">
     <h4 class="mb-2 mb-sm-0 pt-1">
	     <center>
            <a href="#"  >  <?php  echo $nom_compte; ?> </a>
            
          </center> 
          </h4>
        <!--Card content-->
        <div class="card-body d-sm-flex  ">

          <h4 class="mb-2 mb-sm-0 pt-1">
		  
            <a href="#" >Liste des comptes  </a>
             
          </h4>
		   
			  <button class="btn btn-primary btn-sm my-0 p" data-toggle="modal" data-target="#myModalajouterPersonnel">
			  NOUVEAU COURRIER
            </button>
			
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=recherche&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			   RECHERCHELISTE DE TOUS LES COURRIERS
            </button>
			
			 
			
		   
	 
	  <!--/ debut modallll-->	
	  
  <div class="modal fade" id="myModalajouterPersonnel"  role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Ajout de courrier</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=mon_compte&savecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="ref_courrier" id="form8" required class="form-control">
		  <input type="hidden" name="code_compte" value="<?php echo $code_compte;?>" id="form8" class="form-control">
          <label for="form8" class="active">REFERNCE</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text"  name="desc_courrier" id="form9" required class="form-control">
          <label for="form9" class="active">DESCRIPTION</label>
        </div>
		
		<div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="concernant_courrier" id="form9" class="form-control">
          <label for="form9" class="active">CONCERNANT</label>
        </div><br/>
	 <!--	 
	 <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="date" name="date_entre" id="form9" class="form-control">
          <label for="form9" class="active">DATE ENTREE</label>
        </div><br/>
		
		  <div class="md-form form-sm">
		  <i class="fas fa-pencil-alt prefix active"></i>
          
          <input type="date" name="date_sortie" id="form9" class="form-control">
          <label for="form9" class="active">DATE SORTIE</label>
        </div>
		
		
        
    <div class="md-form form-sm">
         
          
        <?php
				
	            $reqniveau=$pdo->prepare("select * from compte where type_compte!='ADMINISTRATEUR' ");
			   	$reqniveau->execute();
				$etreqniveau=$reqniveau->fetchAll(PDO::FETCH_ASSOC);
												
													 
												
	  ?>   
		  
	 <select  class="browser-default custom-select" name="code_compte"   class="form-control" autofocus >
                			<?php   ?> 
											
													<option  value="" selected>Veillez choisir la destination</option>
													
											<?php  ?>
											
											
											<?php foreach($etreqniveau as $etreqniveau1){ 
														 
											?>
											
											
		<option style="font-family:Tahoma;font-size:15px;font-weight:bold;"   value="<?php echo $etreqniveau1['code_compte']  ?>" <?php if(isset($_POST['code_compte'])){ if($_POST['code_compte']==$etreqniveau1['code_compte']){ ?> selected <?php }} ?> >     <?php echo $etreqniveau1['nom_compte']; ?>  </option>
												
												
												
											<?php  } ?>
										
										</select>

	
		  
        </div> 
		
		-->

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light" type="submit" >Enregistrer <i class="fas fa-send ml-1"></i></button>
        </div>
		
		</form>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
 		  			
			
 <!--/ fin modallll-->	  
			

          
           
            

        </div>

      </div>
      <!-- Heading -->

 
<div class="row col-md-12 col-md-offset-0">  


<table id="example" class="table table-bordered table-hover" style="width:100%">
        <thead class="green white-text">
            <tr>
                <th scope="col">ID</th>
      <th scope="col">NOM COMPTE</th>
      <th scope="col">NOM D'UTILISATEUR</th>
      <th scope="col">MOT DE PASSE</th>
	   <th scope="col">TYPE DE COMPTE</th>
	   
	    <th scope="col">MODIFIER</th>
		 <th scope="col">SUPPRIMER</th>
            </tr>
        </thead>
        <tbody>
            
          <?php
             require'connexion.php';
  
                  
                    $sql =  "select * from compte   ;";
	                 $reponse = $pdo->prepare("$sql");
                      $reponse->execute();
                       $data_reponse=$reponse->fetchAll();
                      
					   foreach ($data_reponse as $data) 
    
	                 
  
                     {
                             
                      
					 
		       ?>
          <tr>
               <td><strong><?php echo $data['code_compte'];?></strong></td>
      <td><strong><?php echo $data['nom_compte'];?></strong></td>
       
	  <td><strong><?php echo $data['username'];?></strong></td>
	  <td><strong><?php echo $data['password'];?></strong></td>
	   <td><strong><?php echo $data['type_compte'];?></strong></td>
	     
	   	<td>
		      
	<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModaledit<?php echo $data['code_compte'];  ?>"  >
                    <i class="fas fa-edit"></i>
          </button>
		  
		  
		  
		  
		  
 <div class="modal fade" id="myModaledit<?php echo $data['code_compte']; ?>"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
   
  
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i>Modification de compte</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=listecompte&modifcompte&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
	   <div class="modal-header light-green darken-3 white-text">
        <h4 class="title"><u>Compte :</u> <?php echo $data['nom_compte']; ?></h4>
        
      </div><BR/>
	  
       <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
		   <input type="hidden" value="<?php echo $data['code_compte']; ?>" name="code_compte" id="form9" required class="form-control">
          <input type="text" value="<?php echo $data['nom_compte']; ?>" name="nom_compte" id="form9" required class="form-control">
          <label for="form9" class="active">NOM DE COMPTE</label>
        </div><br/>
		
		  <div class="md-form form-sm">
		  <i class="fas fa-pencil-alt prefix active"></i>
          
          <input type="text" name="username" value="<?php echo $data['username']; ?>" id="form9" required class="form-control">
          <label for="form9" class="active">NOM D'UTILISATEUR</label>
        </div>

         <div class="md-form form-sm">
		  <i class="fas fa-pencil-alt prefix active"></i>
          
          <input type="text" name="password" value="<?php echo $data['password']; ?>" id="form9" required class="form-control">
          <label for="form9" class="active">MOT DE PASSE</label>
        </div>
		
		 

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light" type="submit" >Modifier <i class="fas fa-send ml-1"></i></button>
        </div>
		
		</form>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>		  
		  
		  	  
                  
		 </td>
	       
     <td>	
	 <a onclick="return confirm('Voulez vous vraiment supprimer ?')"  href="index_user.php?choix=listecompte&code_compte_del=<?php echo $data["code_compte"];?>&action=deletecompte&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" > 
	 <button type="button" class="btn btn-danger btn-xs">
		   <i class="fas fa-trash"></i>
              </button>
			  </a>   
	 </td>
                </tr>  
            
    <?php  }  ?>
                 
               
        </tbody>
        <tfoot class="green white-text">
            <tr>
    <th scope="col">ID</th>
      <th scope="col">NOM COMPTE</th>
      <th scope="col">NOM D'UTILISATEUR</th>
      <th scope="col">MOT DE PASSE</th>
	   <th scope="col">TYPE DE COMPTE</th> 
	    <th scope="col">MODIFIER</th>
		 <th scope="col">SUPPRIMER</th>
       </tr>
        </tfoot>
    </table>
      
    <?php 
        if(isset($_GET['action'])){
	     $action=$_GET['action'];
	       if($action=="deletecompte"){  
   
     require('connexion.php');
  
 try{
         $code_compte_del=$_GET['code_compte_del']; 
          $sql = "delete from compte where code_compte='$code_compte_del'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
					 
					
		 $msg = 'Compte supprimé avec succès ';		 	  
    echo'<script>window.open("index_user.php?choix=listecompte&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
 } catch (PDOException $e){
     echo $e;
     
 }
    
       }
		}
    ?>
    
    <br/>
    <br/>
    <br/>
	
	
	
	

</div>  