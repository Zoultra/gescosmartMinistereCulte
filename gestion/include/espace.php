<!DOCTYPE html>
 
 
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
			<button class="btn btn-primary btn-sm my-0 p" data-toggle="modal" data-target="#myModalajouterPersonnel">
			  MODIFIER COURRIER
            </button>
			
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=recherche&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
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


 
  
   <?php
  require'connexion.php'; 
	   $code_courrier=$_GET['code_courrier'];
	 
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
	  
	    
      <div class="modal-body mb-0">
	   <div class="modal-header light-green darken-3 white-text">
        <h4 class="title">Courrier : <?php echo $data_reponse1['ref_courrier']; ?></h4>
        
      </div><BR/>
	  
       <div class="md-form form-sm">
           <label for="form9" class="active"><strong> Fichier :</strong></label>
          
         
        </div><br/>
		 
		<form enctype="multipart/form-data" action="include/fichier/upload.php?code_compte=<?php echo $data_reponse1['code_compte']; ?>&code_courrier=<?php echo $data_reponse1['code_courrier'];?>&typeupload=arrive&numero_ordre_ar=<?php echo $data_reponse1['numero_ordre_ar'];?>" method="POST">
      <div class="md-form form-sm">
    <input class="form-control" type="file" name="uploaded_file"></input><br />
	</div>
	 <div class="text-center mt-1-half">
    <input class="btn btn-info mb-2 waves-effect waves-light"  type="submit" value="Envoyer"><i class="fas fa-send ml-1"></i></input>
	 </div>
  </form>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>		  	  
	  
	  
	  
	  
	  
	   
	

</div>  