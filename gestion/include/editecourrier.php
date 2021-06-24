  


   

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
		  
            <a href="#" >Gestion courrier d'arrivée</a>
             
          </h4>
		   
			  <button class="btn btn-primary btn-sm my-0 p" data-toggle="modal" data-target="#myModalajouterPersonnel">
			  NOUVEAU COURRIER
            </button> 
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=editecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			 FICHIER 
            </button>
			 <button class="btn btn-danger btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=deletecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			  SUPPRIMER COURRIER 
            </button>
			 
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=courriera&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			  APPERCU / IMPRESSION 
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
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Ajout de courrier</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form action="index_user.php?choix=mon_compte&savecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>" method="post">
	  
      <div class="modal-body mb-0">
	   <div class="md-form form-sm">
     <label for="form8" class="active">DATE DU COURRIER</label>
          <input type="date" name="date_courrier" id="form8" required class="form-control">
		  <input type="hidden" name="code_compte" value="<?php echo $code_compte;?>" id="form8" class="form-control">
         
        </div> 
		<div class="md-form form-sm">
   <label for="form8"  class="active">DATE D'ARRIVEE DU COURRIER</label>
          <input type="date" name="date_arriver" id="form8" value="<?php echo date('Y-m-d'); ?>" required class="form-control">
		 
         
        </div>
        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="ref_courrier" id="form8" required class="form-control">
		  
          <label for="form8" class="active">REFERNCE</label>
        </div> <!--Body-->
		
		 <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="obj_courrier" id="form8" required class="form-control">
		 
          <label for="form8" class="active">OBJET</label>
        </div>
		
		 <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix active"></i>
          <input type="text" name="expediteur" id="form8" required class="form-control">
		 
          <label for="form8" class="active">EXPIDITEUR</label>
        </div>
    
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
		
		 <div style="width: 700px" class="md-form form-sm">
         <table  style="width:100%;border: 1px solid #333;">
          <thead class="green white-text">
		                   <div class="col-sm">
                              SUIVI
                            </div>
		    </thead>
        <tbody  style="border: 1px solid #333;">
          <tr style="border: 1px solid #333;">  
          
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;" ><strong>DIFFUSION INTERNE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DIFFUSION INTERNE, "  name="DIFFUSION1" id="form8"  class="form-control"></strong></td>
             </tr>  
           <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DIFFUSION EXTERNE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DIFFUSION EXTERNE, "  name="DIFFUSION2" id="form8"  class="form-control"></strong></td>
             </tr>  			 
        </tbody>
        
    </table>
        </div>
		
		  
  
         <div style="width: 700px" class="md-form form-sm">
          
	     <table  style="width:100%;border: 1px solid #333;">
          <thead class="green white-text">
		   <div class="col-sm">
  IMPUTATION
    </div>
		    </thead>
        <tbody  style="border: 1px solid #333;">
          <tr style="border: 1px solid #333;">  
          
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;" ><strong>DFM</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DFM, "  name="IMP1" id="form8"  class="form-control"></strong></td>
             </tr>  
           <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DFM / ADJOINT</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DFM / ADJOINT, "  name="IMP2" id="form8"  class="form-control"></strong></td>
             </tr>
        <tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DIFFUSION_FINANCE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DIFFUSION_FINANCE, "  name="IMP3" id="form8"  class="form-control"></strong></td>
             </tr>
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DIFFUSION_APPRO_MARCHE_PUBLIC</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DIFFUSION_APPRO_MARCHE_PUBLIC, "  name="IMP4" id="form8"  class="form-control"></strong></td>
             </tr>
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>DIFFUSION_COMPTA_MATIERE</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="DIFFUSION_COMPTA_MATIERE, "  name="IMP5" id="form8"  class="form-control"></strong></td>
             </tr>
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>SP / DFM</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="SP / DFM / ADJOINT, "  name="IMP6" id="form8"  class="form-control"></strong></td>
             </tr>
<tr style="border: 1px solid #333;">  
              <td style="font-family:Tahoma;font-size:15px;font-weight:bold;"><strong>AUTRES</strong></td>
              <td><strong>  <input style="width:15px;height:15px;" type="checkbox" value="AUTRES, "  name="IMP7" id="form8"  class="form-control"></strong></td>
             </tr>
   			 
        </tbody>
        
    </table>
		  
        </div> 
		
 
         <div style="width: 700px" class="md-form form-sm">
          <table  style="width:100%;border: 1px solid #333;">
          <thead class="green white-text">
		   <div class="col-sm">
  ANNOTATION
    </div>
		    </thead>
        <tbody  style="border: 1px solid #333;">
          <tr style="border: 1px solid #333;">  
                 <select name="annotation" style="width:100%" id="cars"    >
				   <option  selected value="NEANT" >Selectionner l'annotation</option>
                  <option   value="POUR ATTRIBUT" >POUR ATTRIBUT</option>
                    <option  value="POUR SUIVI" >POUR SUIVI</option>
                   <option value="POUR EXPLOITATION" >POUR EXPLOITATION</option>
                   <option value="POUR ETUDE ET AVIS"> POUR ETUDE ET AVIS</option>
				     <option value="POUR ELEMENT DE REPONSE"> POUR ELEMENT DE REPONSE </option>
					   <option value="POUR SYNTHESE"> POUR SYNTHESE </option>
					     <option value="POUR INFORMATION"> POUR INFORMATION </option>
						   <option value="P / NOUS PRESENTER"> P / NOUS PRESENTER </option>
						     <option value="P / DISPOSITION A PRENDRE">P / DISPOSITION A PRENDRE </option>
							   <option value="A CLASSER">A CLASSER </option>
							   <option value="P / TRANSMISSION"> P / TRANSMISSION </option>
							   <option value="M'EN PARLER"> M'EN PARLER</option>
							   <option value="P / LARGE DIFFUSION"> P / LARGE DIFFUSION </option>
							   <option value="P / NOTIFICATION"> P / NOTIFICATION</option>
							   
							   
				     
                 </select>
		   </tr>  
             			 
        </tbody>
        
    </table>
  
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
       <th scope="col">DATE ARRIVEE</th>
      <th scope="col">REFERNCE</th>
	   <th scope="col">OBJET</th>
	   <th scope="col">EXPIDITEUR</th>
	   <th scope="col">TYPE DOCUMENT</th>
	   <th scope="col">SUIVI</th> 
		 <th scope="col">IMPUTATION</th>
		  <th scope="col">ANNOTATION</th>
		   <th scope="col">FICHIER</th>
		   <!--  <th scope="col">MODIFIER</th>  -->
	    
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
					   
					   $req_fichier=$pdo->prepare("select * from document where code_courrier='$code_courrier_tri'");
                       $req_fichier->execute();
					 
		       ?>
          <tr>
               <td><strong><?php echo $data['numero_ordre_ar'];?></strong></td>
      <td><strong><?php echo $data['date_courrier'];?></strong></td>
       
	  <td><strong><?php echo $data2['date_entre'];?></strong></td>
	  <td><strong><?php echo $data['ref_courrier'];?></strong></td>
	      <td><strong><?php echo $data['obj_courrier'];?></strong></td>
		
	  <td><strong><?php echo $data['expediteur'];?></strong></td>
	   <td><strong><?php echo $data['type_document'];?></strong></td>
	    <td><strong><?php echo $data['suivi_courrier'];?></strong></td>
			
	   <td><strong><?php echo $data['imputation'];?></strong></td>
	    <td><strong><?php echo $data['annotation'];?></strong></td>
		<td>
		   <?php while($req_fichier_data=$req_fichier->fetch()){
                            $dossier = 'include/fichier';
			   ?>
			    
			    <button   type="submit" onclick='window.location.href="index_user.php?choix=editecourrier&action=supImg&code_compte=<?php echo $data['code_compte']; ?>&code_doc=<?php echo $req_fichier_data['code_doc']; ?>&nom_doc=<?php echo $req_fichier_data['nom_doc']; ?>";' name="supImg" style="position:absolute;color:red"><i class="fas fa-trash"></i> </button>
				
			 
 					<a href="<?php echo   $dossier.'/'.$code_courrier_tri.'/'.$req_fichier_data['nom_doc']?>" target='fenlmage' onClick='creerFenImage()' /> <?php echo "<img class=i alt=copi  style='width: 100px; height: 100px;'   src='".$dossier.'/'.$code_courrier_tri.'/'.$req_fichier_data['nom_doc']."'/>";  ?></a>
					
					
					<br> <br>
					
					<?php } ?>
<button type="button" onclick='window.location.href="index_user.php?choix=espace&code_compte=<?php echo $data['code_compte']; ?>&code_courrier=<?php echo $data['code_courrier']; ?> ";' type="button" class="btn btn-success btn-xs"><i class="fas fa-plus"></i></button>
				
      <!-- DEBUT MODAL -->
	  
	  
	  
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
        <h4 class="title"><i class="fas fa-pencil-alt"></i>Ajout de fichier</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
	  
	  <form method="POST" action="index_user.php?choix=mon_compte&print&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>&code_courrier=<?php echo $data['code_courrier'];  ?>"  >
	   
      <div class="modal-body mb-0">
	   <div class="modal-header light-green darken-3 white-text">
        <h4 class="title">Courrier : <?php echo $data['ref_courrier']; ?></h4>
        
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
		  <!-- <td>
	<button type="button" onclick='window.location.href="index_user.php?choix=espace&code_compte=<?php echo $data['code_compte']; ?>&code_courrier=<?php echo $data['code_courrier']; ?> ";' type="button" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></button>
	 
		 
		 </td>
		 
		 -->
	           </tr>  
            
    <?php  }  ?>
                 
               
        </tbody>
        <tfoot class="green white-text">
             <tr>
       <th scope="col">No D'ORDRE</th>
      <th scope="col">DATE COURRIER</th>
      <th scope="col">DATE ARRIVEE</th>
      <th scope="col">REFERNCE</th>
	   <th scope="col">OBJET</th>
	   <th scope="col">EXPIDITEUR</th>
	   <th scope="col">TYPE DOCUMENT</th>
	   <th scope="col">SUIVI</th> 
		 <th scope="col">IMPUTATION</th>
		  <th scope="col">ANNOTATION</th>
		   <th scope="col">FICHIER</th>
		 <!--  <th scope="col">MODIFIER</th>  -->
	    
            </tr>
        </tfoot>
    </table>
      
    <?php 
     if(isset($_GET['action'])){
	     $action=$_GET['action'];
	       if($action=="supImg"){  
    require('connexion.php');
  
 try{
	   $nom_doc=$_GET['nom_doc'];
	    $code_doc=$_GET['code_doc'];
      $sql = "delete from document where code_doc='$code_doc' and type_courrier='av'"; 
               $reponse1 = $pdo->prepare("$sql");
                    $reponse1->execute();
					
					 $path = "include/fichier/$code_courrier/$nom_doc";
			
			 if(!unlink($path)){
			 echo 'NONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN';
				 
			 }else {
				 
				  echo 'yessssssssssssssss';
				 
	 }
		

			 $msg = "yessssssssssssssss";
	 echo'<script>window.open("index_user.php?choix=editecourrier&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
 }catch (PDOException $e){
     echo $e;
     
 }
		   }
       }
    ?>
    
    <br/>
    <br/>
    <br/>
	
	
	
	

</div>  