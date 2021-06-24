  


   

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
			  NOUVEAU COURRIER
            </button> 
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=editecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			 MODIFIER COURRIER  
            </button>
			 <button class="btn btn-danger btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=deletecourrier&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			  SUPPRIMER COURRIER 
            </button>
			 
			 <button class="btn btn-secondary btn-sm my-0 p"  onclick='window.location.href="index_user.php?choix=courriera&code_compte=<?php if(isset($_GET['code_compte'])){  echo $code_compte; }?>";'>
			  LISTE DE TOUS LES COURRIERS  
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
 
  
  
  
  <div style="padding-top:0px" class="row col-md-12 col-md-offset-0">  


 
  
   <?php
  require'connexion.php'; 
	   $code_c_depart=$_GET['code_c_depart'];
	 
    $sql =  "select * from courrier_depart where code_c_depart='$code_c_depart' ;";
	
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
        <h4 class="title">Courrier : <?php echo $data_reponse1['ref_c_depart']; ?></h4>
        
      </div><BR/>
	  
       <div class="md-form form-sm">
           <label for="form9" class="active"><strong> Fichier :</strong></label>
          
         
        </div><br/>
		 
		<form enctype="multipart/form-data" action="include/fichier/upload.php?code_compte=<?php echo $data_reponse1['code_compte'];?>&numero_ordre_dp=<?php echo $data_reponse1['numero_ordre_dp'];?>&code_c_depart=<?php echo $data_reponse1['code_c_depart'];?>&typeupload=depart" method="POST">
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