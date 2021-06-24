


   

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
            <a href="#" >Liste des courriers envoyés</a>
            
           
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
                               <th scope="col">No D'ORDRE</th>
      <th scope="col">REFERNCE</th>
      <th scope="col">OBJET</th>
      <th scope="col">EXPEDITEUR EXTERNE</th>
	   <th scope="col">DESTINATION</th>
	   <th scope="col">DATE ENTREE</th>
	   <th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th>
	    
		  
            </tr>
        </thead>
        <tbody>
            
          <?php
              require'connexion.php';
  
                     $code_compte1 = $_GET['code_compte'];
                     $sql =  "select * from courrier_sortant where code_compte_exp='$code_compte1' ;";
	                 $reponse2 = $pdo->prepare("$sql");
                      $reponse2->execute();
                       $data_reponse2=$reponse2->fetchAll();
                      
					   foreach ($data_reponse2 as $data2) 
    
	                 
  
                     {
                             
                        
						 $code_courrier = $data2['code_courrier'];
				     
	                $sql =  "select * from courrier where code_courrier='$code_courrier';";
	                  $reponse1 = $pdo->prepare("$sql");
                      $reponse1->execute();
                      $data_reponse1=$reponse1->fetchAll();

                       foreach ($data_reponse1 as $data ) 
					   
					   
					   
					    $code_compte_dest = $data2['code_compte_dest'];
					 
		          ?>
          <tr>
               <td><strong><?php echo $data['numero_ordre_ar'];?></strong></td>
      <td><strong><?php echo $data['ref_courrier'];?></strong></td>
       
	  <td><strong><?php echo $data['obj_courrier'];?></strong></td>
	  <td><strong><?php echo $data['expediteur'];?></strong></td>
	     <?php
   
                       
					
					   $code_compte2 = $data2['code_compte_dest'];
					   
				       $sql =  "SELECT * FROM compte  where code_compte='$code_compte2' ;";
	                   $reponse3 = $pdo->prepare("$sql");
                       $reponse3->execute();
                       $data_reponse3=$reponse3->fetchAll();
                      
					   foreach ($data_reponse3 as $data3 ) 
					   
					   {
		?>
	  
	  <td><strong><?php echo $data3['nom_compte'];?></strong></td>
      
	  
					   <?php }  ?>
					    <?php
   
                       
					
					   
					   
				       $sql =  "SELECT * FROM courrier_compte  where code_compte='$code_compte1' and code_courrier='$code_courrier' ;";
	                   $reponse4 = $pdo->prepare("$sql");
                       $reponse4->execute();
                       $data_reponse4=$reponse4->fetchAll();
                      
					   foreach ($data_reponse4 as $data4) 
					   
					   {
		?>
      
	         <td><strong><?php echo $data4['date_entre'];?></strong></td>
	         <td><strong><?php echo $data4['date_sortie'];?></strong></td>
			 
		 <?php }  ?>
		 
		 
		      <?php
    
					    
				       $sql =  "SELECT * FROM courrier_compte  where code_courrier = '$code_courrier' and code_compte = '$code_compte_dest' ;";
	                   $reponse4 = $pdo->prepare("$sql");
                       $reponse4->execute();
                       $data_reponse4=$reponse4->fetchAll();
                      
					   
					   foreach ($data_reponse4 as $data5 )  
					   {   
						$etat = $data5['etat_courrier'];   
		         ?>
				 
	         
			 
			 
			  <?php  if($etat =='VALIDE'){  ?>
				  
	         <td class="blue white-text" ><strong><?php echo $etat;?></strong></td>
			  <?php  }else {?>
			  
			   <td class="red white-text" ><strong><?php echo $etat;?></strong></td>
	   	    <?php  }  ?>
			 
			 
			 
			 
			 
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
	   <th scope="col">DESTINATION</th>
	   <th scope="col">DATE ENTRE</th>
	   <th scope="col">DATE SORTIE</th>
	   <th scope="col">ETAT</th>
		 
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