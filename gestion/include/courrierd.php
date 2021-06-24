  


   

	 <!-- Heading -->
      <div class="card mb-4 wow ">
     <h4 class="mb-2 mb-sm-0 pt-1">
	     <center>
            <a href="#"><?php  echo $nom_compte;?> </a>
            
          </center> 
          </h4>
        <!--Card content-->
        <div class="card-body d-sm-flex  ">

          <h4 class="mb-2 mb-sm-0 pt-1">
		  
            <a href="#" >Gestion courrier de depart</a>
             
          </h4>
		   
			  <button class="btn btn-primary btn-sm my-0 p" data-toggle="modal" data-target="#myModalajouterPersonnel">
			  NOUVEAU COURRIER DE DEPART
            </button> 
			 
			  
			 
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=courrierd&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			  LISTE DES COURRIERS DE DEPART
            </button>
			
			 
			<br/>
		   
	 
	  <!--/ debut modallll-->	
	  
  <div class="modal fade" id="myModalajouterPersonnel"  role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  
  
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Ajout de courrier depart</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=mon_compte&save_c_depart&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
	   <div class="md-form form-sm">
     <label for="form8" class="active">DATE DU COURRIER DEPART</label>
          <input type="date" name="date_c_depart" id="form8" required class="form-control">
		  <input type="hidden" name="code_compte" value="<?php echo $code_compte;?>" id="form8" class="form-control">
         
        </div> 
		 <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="ref_c_depart" id="form8" required class="form-control">
		  
          <label for="form8" class="active">REFERNCE</label>
        </div>
		<div class="md-form form-sm">
		<i class="fas fa-pencil-alt prefix active"></i>
  
          <input type="text" name="destinat_c_depart" id="form8"  required class="form-control">
		  <label for="form8"  class="active">DESTINATAIRE</label>
         
        </div>
        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="objet_c_depart" id="form8" required class="form-control">
		  
          <label for="form8" class="active">OBJET</label>
        </div> <!--Body-->
		
		 
		
		 
    
         <div style="width: 700px" class="md-form form-sm">
           <!--  DEBUT TAB TYP DOC -->
	   
 <table  style="width:100%;border: 1px solid #333;">
          <thead class="green white-text">
		   <div class="col-sm">
    TYPE DE DOCUMENT
    </div>
		    </thead>
        <tbody  style="border: 1px solid #333;">
          <tr style="border: 1px solid #333;"> 
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;" ><strong>ARRETE </strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="ARRETE, "  name="T1" id="form8"  class="form-control"></strong></td>
             </tr>  
           <tr style="border: 1px solid #333;"> 
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>AVIS DE REUNION</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="AVIS DE REUNION, "  name="T2" id="form8"  class="form-control"></strong></td>
             </tr>
   <tr style="border: 1px solid #333;"> 
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>B E</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="B E"  name="T3" id="form8"  class="form-control"></strong></td>
             </tr> 
        <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>COMPTE RENDU</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="COMPTE RENDU, "  name="T4" id="form8"  class="form-control"></strong></td>
             </tr> 
 <tr style="border: 1px solid #333;">   
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> DECRET</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DECRET, "  name="T5" id="form8"  class="form-control"></strong></td>
             </tr> 
 <tr style="border: 1px solid #333;"> 
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> DECISION</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DECISION, "  name="T6" id="form8"  class="form-control"></strong></td>
             </tr> 
        <tr style="border: 1px solid #333;"> 
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DOSSIER DU CONSEIL DES MINISTRES</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DOSSIER DU CONSEIL DES MINISTRES, "  name="7" id="form8"  class="form-control"></strong></td>
             </tr> 
			 <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> FACTURE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="FACTURE, "  name="T8" id="form8"  class="form-control"></strong></td>
             </tr> 
    <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> INSTRUMENT</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="INSTRUMENT, "  name="T9" id="form8"  class="form-control"></strong></td>
             </tr> 
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> LETTRE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="LETTRE, "  name="T10" id="form8"  class="form-control"></strong></td>
             </tr> 
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> LETTRE CIRCULAIRE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="LETTRE CIRCULAIRE, "  name="T11" id="form8"  class="form-control"></strong></td>
             </tr> 
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> LOI</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="LOI, "  name="T12" id="form8"  class="form-control"></strong></td>
             </tr> 
    <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> NOTE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="NOTE, "  name="T13" id="form8"  class="form-control"></strong></td>
             </tr> 
 <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> NOTE TECHNIQUE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="NOTE TECHNIQUE, "  name="T14" id="form8"  class="form-control"></strong></td>
             </tr> 
 <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> NOTE DE SERVICE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="NOTE DE SERVICE, "  name="T15" id="form8"  class="form-control"></strong></td>
             </tr> 
 <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong> ORDONNANCE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="ORDONNANCE, "  name="T16" id="form8"  class="form-control"></strong></td>
             </tr> 
  			 
        </tbody>
        
    </table>
   <!-- FIN TAB TYP DOC -->
        </div> 
		 
		 <br/>
	 

        <div class="text-center mt-1-half">
          <button class="btn btn-info mb-2 waves-effect waves-light" type="submit" >Enregistrer <i class="fas fa-send ml-1"></i></button>
        </div>
		
		</form>

       
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
      <th scope="col">DATE COURRIER</th>
       <th scope="col">DESTINATAIRE</th>
      <th scope="col">REFERNCE</th>
	   <th scope="col">OBJET</th>
	   <th scope="col">TYPE DOCUMENT</th>
	  <th scope="col">FICHIER</th> 
	  <!--   <th scope="col">MODIFIER</th>-->
		 <th scope="col">SUPPRIMER</th>
	    
		   
	    
            </tr>
        </thead>
        <tbody>
            
          <?php
  require'connexion.php';
  
                  $code_compte1 = $_GET['code_compte'];
                    $sql =  "select * from courrier_depart where code_compte='$code_compte1'  ;";
	                 $reponse2 = $pdo->prepare("$sql");
                      $reponse2->execute();
                       $data_reponse2=$reponse2->fetchAll();
                      
					   foreach ($data_reponse2 as $data2) 
    
	                 
  
                     {
                        
						
                       $code_courrier_tri = $data2['code_c_depart'];  
                      
					   $req_fichier=$pdo->prepare("select * from document where code_courrier='$code_courrier_tri' and type_courrier='dp'");
                       $req_fichier->execute();
					 
		       ?>
          <tr>
               <td><strong><?php echo $data2['numero_ordre_dp'];?></strong></td>
      <td><strong><?php echo $data2['date_c_depart'];?></strong></td>
       
	  <td><strong><?php echo $data2['destinat_c_depart'];?></strong></td>
	  <td><strong><?php echo $data2['ref_c_depart'];?></strong></td>
	      <td><strong><?php echo $data2['objet_c_depart'];?></strong></td>
		   <td><strong><?php echo $data2['type_doc_depart'];?></strong></td>
		<td> 
		   <?php while($req_fichier_data=$req_fichier->fetch()){
                            $dossier = 'include/fichier';
			   ?>
		  <button   type="submit" onclick='window.location.href="index_user.php?choix=courrierd&action=supImg&code_compte=<?php echo $data2['code_compte']; ?>&code_doc=<?php echo $req_fichier_data['code_doc']; ?>&nom_doc=<?php echo $req_fichier_data['nom_doc']; ?>";' name="supImg" style="position:absolute;color:red"><i class="fas fa-trash"></i> </button>
						
 					<a href="<?php echo   $dossier.'/'.$code_courrier_tri.'/'.$req_fichier_data['nom_doc']?>" target='fenlmage' onClick='creerFenImage()' /> <?php echo "<img class=i alt=copi  style='width: 100px; height: 100px;'   src='".$dossier.'/'.$code_courrier_tri.'/'.$req_fichier_data['nom_doc']."'/>";  ?></a>
					 
					
					<br> <br>
					
					<?php } ?>
  <button type="button" onclick='window.location.href="index_user.php?choix=espace_depart&code_compte=<?php echo $data2['code_compte']; ?>&code_c_depart=<?php echo $data2['code_c_depart']; ?> ";' type="button" class="btn btn-success btn-xs"><i class="fas fa-plus"></i></button>
				
      <!-- DEBUT MODAL -->
	  
	  
	  
<div class="modal fade" id="myModaledit<?php echo $data2['code_c_depart']; ?>"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
   <?php
  require'connexion.php'; 
	  
	  $code_c_depart = $data2['code_c_depart'];
    $sql =  "select * from courrier where code_c_depart='$code_c_depart' ;";
	
	 $reponse1 = $pdo->prepare("$sql");
                      $reponse1->execute();
                       $data_reponse1=$reponse1->fetch();

   
                              
		?>	
  
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header light-blue darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i>Ajout de fichier</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form method="POST" action="index_user.php?choix=mon_compte&print&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>&code_c_depart=<?php echo $data2['code_c_depart'];  ?>"  >
	   
      <div class="modal-body mb-0">
	   <div class="modal-header light-green darken-3 white-text">
        <h4 class="title">Courrier : <?php echo $data2['ref_c_depart']; ?></h4>
        
      </div><BR/>
	  
       <div class="md-form form-sm">
           <label for="form9" class="active"><strong> Fichier :</strong></label>
          
         
        </div><br/>
		
		 

        <div class="md-form form-sm">
          
		 
            <input type="file"  class="form-control" name="uploaded_file"></input>
		  
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
	  
	   
      <!-- FIN MODAL -->            
		 </td>
	<!--
	<td>
	<button type="button" onclick='window.location.href="index_user.php?choix=espace_depart&code_compte=<?php echo $data2['code_compte']; ?>&code_c_depart=<?php echo $data2['code_c_depart']; ?> ";' type="button" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></button>

	       </td>
		<td>
	--> 
	  <a onclick="return confirm('Voulez vous vraiment supprimer ?')"  href="index_user.php?choix=courrierd&code_courrier_tri=<?php echo $data2['code_c_depart'];?>&action=deleteCourrierD&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" > 
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
       <th scope="col">No D'ORDRE</th>
      <th scope="col">DATE COURRIER</th>
       <th scope="col">DESTINATAIRE</th>
      <th scope="col">REFERNCE</th>
	   <th scope="col">OBJET</th>
	   <th scope="col">TYPE DOCUMENT</th>
	   <th scope="col">FICHIER</th>
	   <!-- <th scope="col">MODIFIER</th> -->
		 <th scope="col">SUPPRIMER</th>
            </tr>
        </tfoot>
    </table>
      
     <?php 
        if(isset($_GET['action'])){
	     $action=$_GET['action'];
	       if($action=="deleteCourrierD"){  
   
     require('connexion.php');
  
 try{
         $code_courrier_tri=$_GET['code_courrier_tri']; 
          $sql = "delete from courrier_depart where code_c_depart='$code_courrier_tri'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
		  
					
		 $sql = "delete  from document where code_courrier='$code_courrier_tri'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
		 // Suppression du dossier et fichiers
		 
		  $dir = 'C:\wamp64\www\sites\courrier\gestion\include\fichier'."/".$code_courrier_tri;
		  //$dir = $path."/".$code_courrier_tri;
         function rrmdir($dir) {
         if (is_dir($dir)) { // si le paramètre est un dossier
        $objects = scandir($dir); // on scan le dossier pour récupérer ses objets
            foreach ($objects as $object) { // pour chaque objet
          if ($object != "." && $object != "..") { // si l'objet n'est pas . ou ..
               if (filetype($dir."/".$object) == "dir") rmdir($dir."/".$object);else unlink($dir."/".$object); // on supprime l'objet
              }
     }
     reset($objects); // on remet à 0 les objets
     rmdir($dir); // on supprime le dossier
     }
 }  rrmdir($dir);

    // Fin de l'algo Suppression du dossier et fichiers
					
		 $msg = 'Courrier supprimé avec succès ';		 	  
    echo'<script>window.open("index_user.php?choix=courrierd&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
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