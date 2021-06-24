


   

	 <!-- Heading -->
      <div class="card mb-4 wow ">
     <h4 class="mb-2 mb-sm-0 pt-1">
	     <center>
            <a href="#"><?php  echo $nom_compte; ?> </a>
            
          </center> 
          </h4>
        <!--Card content-->
        <div class="card-body d-sm-flex  ">

          <h4 class="mb-2 mb-sm-0 pt-1">
		  
            <a href="#" >Liste des courriers recus</a>
             
          </h4>
		    <!--
			  <button class="btn btn-primary btn-sm my-0 p" data-toggle="modal" data-target="#myModalajouterPersonnel">
			  NOUVEAU COURRIER
            </button>
			-->
			
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
   
   <?php if(isset($_GET['msg'])){   ?>
		<div    id='msg' style='width: 90%; font-family:Tahoma; font-size:14px; margin: auto;' role='alert' > </div> 
					 <script type="text/javascript">
					 $(document).ready(function() {
        document.getElementById('msg').innerHTML = "<div class='alert alert-success'><center style=font-size:20px><?php echo $_GET['msg']; ?><center></div>";
    } );
	setTimeout(function() {
  document.getElementById('msg').innerHTML = "";},5000);
	
    
  </script>
 	   
		
		<?php }?>
		 <?php if(isset($_GET['msgAlert'])){   ?>
		<div    id='msgAlert' style='width: 90%; font-family:Tahoma; font-size:14px; margin: auto;' role='alert' > </div> 
					 <script type="text/javascript">
					 $(document).ready(function() {
        document.getElementById('msgAlert').innerHTML = "<div class='alert alert-danger'><center style=font-size:20px><?php echo $_GET['msgAlert']; ?><center></div>";
    } );
	setTimeout(function() {
  document.getElementById('msgAlert').innerHTML = "";},10000);
	
    
  </script>
 	   
		
		<?php }?>
 
 
<div class="row col-md-12 col-md-offset-0">  


<table id="example" class="table table-bordered table-hover" style="width:100%">
        <thead class="green white-text">
            <tr>
                <th scope="col">No D'ORDRE</th>
      <th scope="col">REFERNCE</th>
      <th scope="col">OBJET</th>
      <th scope="col">EXPEDITEUR</th>
	   <th scope="col">POSITION</th>
	   <th scope="col">DATE ENTREE</th>
	   <th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th>
	    <th scope="col">VALIDER</th>
		 <th scope="col">ENVOYER</th>
            </tr>
        </thead>
        <tbody>
            
          <?php
  require'connexion.php';
  
                  $code_compte1 = $_GET['code_compte'];
                    $sql =  "select * from courrier_compte where code_compte='$code_compte1' and  etat_envoi='non' ;";
	                 $reponse2 = $pdo->prepare("$sql");
                      $reponse2->execute();
                       $data_reponse2=$reponse2->fetchAll();
                      
					   foreach ($data_reponse2 as $data2) 
    
	                 
  
                     {
                        $etat =  $data2['etat_courrier']; 
						
                        $code_courrier_tri = $data2['code_courrier'];
				     
	                $sql =  "select * from courrier where code_courrier='$code_courrier_tri';";
	                  $reponse1 = $pdo->prepare("$sql");
                      $reponse1->execute();
                      $data_reponse1=$reponse1->fetchAll();

                       foreach ($data_reponse1 as $data ) 
					 
		       ?>
          <tr>
               <td><strong><?php echo $data['numero_ordre_ar'];?></strong></td>
      <td><strong><?php echo $data['ref_courrier'];?></strong></td>
       
	  <td><strong><?php echo $data['obj_courrier'];?></strong></td>
	  <td><strong><?php echo $data['expediteur'];?></strong></td>
	     <?php
   
                       
					
					   $code_compte1 = $data2['code_compte'];
					   
				       $sql =  "SELECT * FROM compte  where code_compte='$code_compte1' ;";
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
	    <td><strong><?php echo $etat;?></strong></td>
	   	<td>
		      
		   <a onclick="return confirm('Voulez vous vraiment valider ?')" href="index_user.php?choix=mon_compte&code_compte=<?php echo $code_compte1 ?>&code_courrier=<?php echo $data['code_courrier'] ?>&validation" >  <button type="button" class="btn btn-success btn-xs">
		   <i class="fas fa-download"></i>
              </button>
			  </a>
                  
		 </td>
		 
		  <?php  if($etat=='VALIDE'){  ?>
		  
	    <td> 
		<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModaledit<?php echo $data['code_courrier'];  ?>"  >
                    <i class="fas fa-send"></i>
          </button>
		  
		  
		  
		  
		  
<div class="modal fade" id="myModaledit<?php echo $data['code_courrier']; ?>"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
   <?php
  require'connexion.php'; 
	  
	  $code_courrier = $data['code_courrier'];
    $sql =  "select * from courrier where code_courrier='$code_courrier' ;";
	
	 $reponse1 = $pdo->prepare("$sql");
                      $reponse1->execute();
                       $data_reponse1=$reponse1->fetch();

   
                              
		?>	
  
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i>Envoi de courrier</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=mon_compte&envoicourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
	   <div class="modal-header light-green darken-3 white-text">
        <h4 class="title">Courrier : <?php echo $data['ref_courrier']; ?></h4>
        
      </div><BR/>
	  
       <div class="md-form form-sm">
           <label for="form9" class="active"><strong> DESTINATION :</strong></label>
          
         
        </div><br/>
		
		 

        <div class="md-form form-sm">
         
          
        <?php
				
	            $reqniveau=$pdo->prepare("select * from compte where type_compte!='ADMINISTRATEUR' ");
			   	$reqniveau->execute();
				$etreqniveau=$reqniveau->fetchAll(PDO::FETCH_ASSOC);
												
													 
												
	  ?>   
		   <input type="hidden"  name="code_courrier" value="<?php echo $data_reponse1['code_courrier']; ?>" id="form8" class="form-control">
         
	 <select  class="browser-default custom-select" name="code_compte" required  class="form-control" autofocus >
                			<?php   ?> 
											
													<option  value="" selected>Veillez choisir la destination</option>
													
											<?php  ?>
											
											
											<?php foreach($etreqniveau as $etreqniveau1){ 
														 
											?>
											
											
		<option style="font-family:Tahoma;font-size:15px;font-weight:bold;"   value="<?php echo $etreqniveau1['code_compte']  ?>" <?php if(isset($_POST['code_compte'])){ if($_POST['code_compte']==$etreqniveau1['code_compte']){ ?> selected <?php }} ?> >     <?php echo $etreqniveau1['nom_compte']; ?>  </option>
												
												
												
											<?php  } ?>
										
										</select>

	
		  
        </div> 
		
		 

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light" type="submit" >Envoyer <i class="fas fa-send ml-1"></i></button>
        </div>
		
		</form>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>		  
		  
		  
		  
		  
		  
		  
		  
			   </td>
	  <?php  }else {?>

	 <td class="danger red-text" ><strong><?php echo 'Attente de validation...';?></strong></td>  
			   
	  <?php  }  ?>   
                </tr>  
            
    <?php  }  ?>
                 
               
        </tbody>
        <tfoot class="green white-text">
            <tr>
                <th scope="col">No D'ORDRE</th>
      <th scope="col">REFERNCE</th>
      <th scope="col">OBJET</th>
      <th scope="col">EXPEDITEUR EXTERNE</th>
	   <th scope="col">POSITION</th>
	   <th scope="col">DATE ENTREE</th>
	   <th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th>
	    <th scope="col">VALIDER</th>
		 <th scope="col">ENVOYER</th>
            </tr>
        </tfoot>
    </table>
      
    <?php 
    if(!empty($_POST['deleteData'])){
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
 try{
     $id=$_POST['id_patient'];
   
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM patient WHERE id_patient='$id'";
    // use exec() because no results are returned
                /* @var $conn type */
    $ok= $conn->exec($sql);
    echo'<script>window.open("patient.php","_self")</script>';
 } catch (PDOException $e){
     echo $e;
     
 }
    
       }
    ?>
    
    <br/>
    <br/>
    <br/>
	
	
	
	

</div>  