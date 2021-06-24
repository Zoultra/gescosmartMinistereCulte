


   

	 <!-- Heading -->
      <div class="card mb-4 wow ">
 <h4 class="mb-2 mb-sm-0 pt-1">
	     <center>
            <a href="#"> <?php  echo $nom_compte; ?> </a>
            
          </center> 
          </h4>
        <!--Card content-->
        <div class="card-body d-sm-flex  ">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Liste de tous les courriers </a>
            
           
          </h4>
		  
		   
			
			  
			
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=recherche&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			   LISTE DE TOUS LES COURRIERS
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
          <i class="fas fa-user prefix active"></i>
          <input type="text" name="ref_courrier" id="form8" class="form-control">
		  <input type="hidden" name="code_compte" value="<?php echo $code_compte;?>" id="form8" class="form-control">
          <label for="form8" class="active">REFERNCE</label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="text"  name="desc_courrier" id="form9" class="form-control">
          <label for="form9" class="active">DESCRIPTION</label>
        </div>
		
		<div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="text" name="concernant_courrier" id="form9" class="form-control">
          <label for="form9" class="active">CONCERNANT</label>
        </div><br/>
		<!-- 
	 <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
          <input type="date" name="date_entre" id="form9" class="form-control">
          <label for="form9" class="active">DATE ENTREE</label>
        </div><br/>
		
		  <div class="md-form form-sm">
          <i class="fas fa-user prefix active"></i>
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
											
													<option  value="" selected>Veillez choisir le destination</option>
													
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
      <th scope="col">REFERNCE</th>
      <th scope="col">OBJET</th>
      
	   <th scope="col">POSITION</th> 
	   <th scope="col">DATE ENTREE</th> 
	   <th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th> 
	    <?php  if($type_compte=="ADMINISTRATEUR"){ ?> 
		  <th scope="col">SUPPRIMER</th> 
		<?php  } ?> 
	  
            </tr>
        </thead>
        <tbody>
            
          <?php
  require'connexion.php';
  
            $sql =  "select * from courrier ;";
	                  $reponse1 = $pdo->prepare("$sql");
                      $reponse1->execute();
                      $data_reponse1=$reponse1->fetchAll();

                       foreach ($data_reponse1 as $data ) 
					   
    
                   {
	                 
  
                  
                             
                          $code_compte1 = $data['code_compte'];
                    $sql =  "select * from courrier_compte where code_compte='$code_compte1' ;";
	                 $reponse2 = $pdo->prepare("$sql");
                      $reponse2->execute();
                       $data_reponse2=$reponse2->fetchAll();
                      
					   foreach ($data_reponse2 as $data2)
					   
						  
				     
	               
					 
		       ?>
          <tr>
               <td><strong><?php echo $data['code_courrier'];?></strong></td>
      <td><strong><?php echo $data['ref_courrier'];?></strong></td>
       
	  <td><strong><?php echo $data['obj_courrier'];?></strong></td>
	  
	     <?php
   
                       
					
					   $code_compte2 = $data['code_compte'];
					   
				       $sql =  "SELECT * FROM compte  where code_compte='$code_compte2' ;";
	                   $reponse3 = $pdo->prepare("$sql");
                       $reponse3->execute();
                       $data_reponse3=$reponse3->fetchAll();
                      
					   foreach ($data_reponse3 as $data3 ) 
					   
					   {
		?>
	  
	  <td><strong><?php echo $data3['nom_compte'];?></strong></td>
      
	  
					   <?php }  ?>
		
		       <td><strong><?php echo $data2['date_entre'];?></strong></td>
			    <td><strong><?php echo $data2['date_sortie'];?></strong></td>
				
				 <?php  if($data2['etat_courrier'] =='VALIDE'){  ?>
				  
	         <td class="blue white-text" ><strong><?php echo  $data2['etat_courrier'];?></strong></td>
			  <?php  }else {?>
			  
			   <td class="red white-text" ><strong><?php echo  $data2['etat_courrier'];?></strong></td>
	   	    <?php  }  ?>
			
			 
			 
	   	    <?php  if($type_compte=="ADMINISTRATEUR"){ ?> 
		 	<td>
		      
		   <a onclick="return confirm('Voulez vous vraiment supprimer ?')"  href="index_user.php?choix=recherche&code_courrier=<?php echo $data["code_courrier"];?>&action=deletecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" >  <button type="button" class="btn btn-success btn-xs">
		   <i class="fas fa-trash"></i>
              </button>
			  </a>
                  
		 </td>
		<?php  } ?> 
	    
                </tr>  
            
    <?php  }  ?>
                 
               
        </tbody>
        <tfoot class="green white-text">
            <tr>
 <th scope="col">ID</th>
      <th scope="col">REFERNCE</th>
      <th scope="col">OBJET</th>
      
	   <th scope="col">POSITION</th>
	    <th scope="col">DATE ENTREE</th>
		<th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th>
		  <?php  if($type_compte=="ADMINISTRATEUR"){ ?> 
		  <th scope="col">SUPPRIMER</th> 
		<?php  } ?> 
            </tr>
        </tfoot>
    </table>
      
   <?php 
        if(isset($_GET['action'])){
	     $action=$_GET['action'];
	       if($action=="deletecourrier"){  
   
     require('connexion.php');
  
 try{
         $code_courrier=$_GET['code_courrier']; 
          $sql = "delete from courrier where code_courrier='$code_courrier'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
					 $sql = "delete from courrier_compte where code_courrier='$code_courrier'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
					 $sql = "delete from courrier_sortant where code_courrier='$code_courrier'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
		 $msg = 'Courrier supprimé avec succès ';		 	  
    echo'<script>window.open("index_user.php?choix=recherche&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
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