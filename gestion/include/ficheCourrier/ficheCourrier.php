

<?php 
 
 	 try{
		$dns='mysql:host=localhost:3308;dbname=db_suivi_courrier'; 
		$pdo=new PDO($dns,'root','');	
		
	}catch(PDOException $e){
		 
				printf("echec de la connexion :", $e->getMessage());
				exit();
	}
	
	$code_courrier = $_GET['code_courrier'];
	
     $sql = "select * from courrier where code_courrier='$code_courrier'"; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data=$reponse->fetch();
			 $numero_ordre_ar = $data['numero_ordre_ar'];
			 $ref_courrier = $data['ref_courrier'];
			 $obj_courrier = $data['obj_courrier'];
			 $expediteur = $data['expediteur'];
			 $date_courrier = $data['date_courrier'];
			 
	 $sql = "select * from courrier_compte where code_courrier='$code_courrier'"; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data=$reponse->fetch();
			 $date_arriver = $data['date_entre'];
				
				?>	





<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style.css" media="all" />
	 
	<div class="clearfix">
	
	
	 <h4  id="project" >MINISTERE DE L'ELEVAGE ET DE LA PECHE<br/>
	 <p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  </p>
	   DIRECTION DES FINANCES ET DU MATERIEL<br/>
	 <p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  </p>
	   <center>  BUREAU DU COURRIER </center>
	 </h4>
	  <h4  id="company" class="clearfix" > <center>REPUBLIQUE DU MALI  </center><br/>
	 <p> <center>- - - - - - - - - - - - - - - - - - - </center></p>
	   UN PEUPLE - UN BUT - UNE FOI
	   </h4>
	  
	 
	</div>
	
   
  </head>
  <body onload="window.print()">
    
	 <table>
   <thead>   

       <header class="clearfix">
      
          <h1> FICHE DE CIRCULATION "COURRIER ARRIVEE" </h1>
	  
       </header>       
	
	</thead> 

  <tr>
    <th colspan="2">
	 <p  id="project" >
	 
	   Numero d'ordre : <?php echo $numero_ordre_ar; ?>  <br/><br/>
	 
	   Reference      :  <?php echo $ref_courrier; ?> <br/><br/>
	 
	   Expediteur     : <?php echo $expediteur; ?>
	 </p>
	
	 <p  id="company" class="clearfix" > 
	   Date d'arrivee du courrier : &nbsp;  <?php echo $date_arriver; ?>   <br/><br/>
	 
	                                     <br/>
	 
	   Date du courrier : &nbsp; <?php echo $date_courrier; ?>
	 </p>
	 
	</th>
    
  </tr>

  <tr>
    <th style="height:70px" colspan="2"> Objet : <?php echo $obj_courrier; ?></th>
    
  </tr>

  
</table><br/><br/><br/>

    
	  
   <!-- 2EME TABLEAU  -->	  
   
   
 <table>
   

  <tr>
      <th> IMPUTATIONS </th>
      <th colspan="2"> ANNOTATIONS </th>
  </tr> 
	 
  <tr>
   <td  style="font-family:Tahoma;font-size:15px;" >
   
  <?php       
  
			 $divisionFinance = 'DIVISION_FINANCE';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$divisionFinance%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data=$reponse->fetch();
                       
					?>
	 	<?php if(!empty($data['imputation'])) {?>
      Division Finance  <input style="width:15px;height:15px;" type="checkbox" checked  id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data['imputation'])) {?>
       Division Finance  <input style="width:15px;height:15px;" type="checkbox"   id="form8"  class="form-control">
	    <?php }?>
                                                       <br/>
  <?php       
			 $DIVISION_APPRO_MARCHE_PUBLIC = 'DIVISION_APPRO_MARCHE_PUBLIC';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$DIVISION_APPRO_MARCHE_PUBLIC%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data1=$reponse->fetch();
                       
					?>
		<?php if(!empty($data1['imputation'])) {?>
       Diffusion Appro marche Public  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data1['imputation'])) {?>
      Diffusion Appro marche Public  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		
		      <br/>
  <?php       
			 $DIVISION_COMPTA_MATIERE = 'DIVISION_COMPTA_MATIERE';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$DIVISION_COMPTA_MATIERE%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data2=$reponse->fetch();
                       
					?>
		<?php if(!empty($data2['imputation'])) {?>
       Division Compta Matière  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data2['imputation'])) {?>
       Division Compta Matière  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		   <br/>
  <?php       
			 $DFM = 'DFM';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$DFM%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data3=$reponse->fetch();
                       
					?>
		<?php if(!empty($data3['imputation'])) {?>
       DFM  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data3['imputation'])) {?>
       DFM  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
	 <br/>
  <?php       
			 $DFMADJOINT = 'DFM / ADJOINT';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$DFMADJOINT%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data4=$reponse->fetch();
                       
					?>
		<?php if(!empty($data4['imputation'])) {?>
       DFM / ADJOINT  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data4['imputation'])) {?>
       DFM / ADJOINT  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		<br/>
  <?php       
			 $SPDFM = 'SP / DFM';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$SPDFM%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data5=$reponse->fetch();
                       
					?>
		<?php if(!empty($data5['imputation'])) {?>
       SP / DFM  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data5['imputation'])) {?>
       SP / DFM  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		<br/>
  <?php       
			 $AUTRES = 'AUTRES';
            $sql = "select * from courrier where code_courrier='$code_courrier' and imputation like '%$AUTRES%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data6=$reponse->fetch();
                       
					?>
		<?php if(!empty($data6['imputation'])) {?>
       Autres  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data6['imputation'])) {?>
       Autres  <input style="width:15px;height:15px;"  type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		 </td> 
           
	  
	  <td>
	  
	                                          <!--    DEBBBBBBUUT ANNOTATIONS --> 
	 
  <?php       
  
			 $POURATTRIBUT = 'POUR ATTRIBUT';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURATTRIBUT%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data7=$reponse->fetch();
                       
					?>
	 	<?php if(!empty($data7['annotation'])) {?>
      Pour Attribut  <input style="width:15px;height:15px;" type="checkbox" checked  id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data7['annotation'])) {?>
      Pour Attribut  <input style="width:15px;height:15px;" type="checkbox"   id="form8"  class="form-control">
	    <?php }?>
                                                       <br/>
  <?php       
			 $POURSUIVI = 'POUR SUIVI';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURSUIVI%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data8=$reponse->fetch();
                       
					?>
		<?php if(!empty($data8['annotation'])) {?>
       Pour Suivi  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data8['annotation'])) {?>
      Pour Suivi  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		
		      <br/>
  <?php       
			 $POUREXPLOITATION = 'POUR EXPLOITATION';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POUREXPLOITATION%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data9=$reponse->fetch();
                       
					?>
		<?php if(!empty($data9['annotation'])) {?>
       Pour Exploitation  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data9['annotation'])) {?>
        Pour Exploitation <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		   <br/>
 <?php       
			 $POURETUDEETAVIS = 'POUR ETUDE ET AVIS';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURETUDEETAVIS%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data11=$reponse->fetch();
                       
					?>
		<?php if(!empty($data11['annotation'])) {?>
       Pour Etude et Avis  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data11['annotation'])) {?>
       Pour Etude et Avis  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
	 <br/>
  <?php       
			 $POURELEMENTDEREPONSE = 'POUR ELEMENT DE REPONSE';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURELEMENTDEREPONSE%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data11=$reponse->fetch();
                       
					?>
		<?php if(!empty($data11['annotation'])) {?>
       Pour Element de Réponse  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data11['annotation'])) {?>
       Pour Element de Réponse  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		<br/>
  <?php       
			 $POURSYNTHESE = 'POUR SYNTHESE';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURSYNTHESE%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data12=$reponse->fetch();
                       
					?>
		<?php if(!empty($data12['annotation'])) {?>
       Pour Synthèse  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data12['annotation'])) {?>
       Pour Synthèse  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		 
		
	  
	         <!--   FIN ANNOTATIONS -->
	  
	  </td>
    <td>
	
  <?php       
			 $POURINFORMATION = 'POUR INFORMATION';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$POURINFORMATION%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data13=$reponse->fetch();
                       
					?>
		<?php if(!empty($data13['annotation'])) {?>
       Pour Information  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data13['annotation'])) {?>
       Pour Information  <input style="width:15px;height:15px;"  type="checkbox" id="form8"  class="form-control">
	    <?php }?>

 
  <?php       
  
			 $PNOUSPRESENTER = 'P / NOUS PRESENTER';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$PNOUSPRESENTER%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data14=$reponse->fetch();
                       
					?>
	 	<?php if(!empty($data14['annotation'])) {?>
      P / Nous Presenter  <input style="width:15px;height:15px;" type="checkbox" checked  id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data14['annotation'])) {?>
       P / Nous Presenter  <input style="width:15px;height:15px;" type="checkbox"   id="form8"  class="form-control">
	    <?php }?>
                                                       <br/>
  <?php       
			 $PDISPOSITIONAPRENDRE = 'P / DISPOSITION A PRENDRE';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$PDISPOSITIONAPRENDRE%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data14=$reponse->fetch();
                       
					?>
		<?php if(!empty($data15['annotation'])) {?>
       P / Disposition A Prendre  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data15['annotation'])) {?>
      P / Disposition A Prendre  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		
		      <br/>
  <?php       
			 $ACLASSER = 'A CLASSER';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$ACLASSER%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data16=$reponse->fetch();
                       
					?>
		<?php if(!empty($data16['annotation'])) {?>
       A Classer  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data16['annotation'])) {?>
       A Classer  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		   <br/>
  <?php       
			 $PTRANSMISSION = 'P / TRANSMISSION';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$PTRANSMISSION%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data17=$reponse->fetch();
                       
					?>
		<?php if(!empty($data17['annotation'])) {?>
       P / Transmission  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data17['annotation'])) {?>
       P / Transmission  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
	 <br/>
  <?php       
			 $MENPARLER = "M'EN PARLER";
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$MENPARLER%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data18=$reponse->fetch();
                       
					?>
		<?php if(!empty($data18['annotation'])) {?>
       M'EN PARLER  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data18['annotation'])) {?>
       M'EN PARLER  <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		<br/>
  <?php       
			 $PLARGEDIFFUSION = 'P / LARGE DIFFUSION';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$PLARGEDIFFUSION%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data19=$reponse->fetch();
                       
					?>
		<?php if(!empty($data19['annotation'])) {?>
       P / Large Diffusion  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data19['annotation'])) {?>
        P / Large Diffusion <input style="width:15px;height:15px;" type="checkbox" id="form8"  class="form-control">
	    <?php }?>
		
		<br/>
  <?php       
			 $PNOTIFICATION = 'P / NOTIFICATION';
            $sql = "select * from courrier where code_courrier='$code_courrier' and annotation like '%$PNOTIFICATION%' "; 
               $reponse = $pdo->prepare("$sql");
                    $reponse->execute();
                     $data20=$reponse->fetch();
                       
					?>
		<?php if(!empty($data20['annotation'])) {?>
       P / Notification  <input style="width:15px;height:15px;" type="checkbox" checked id="form8"  class="form-control">
	    <?php }?>
		
		<?php if(empty($data20['annotation'])) {?>
       P / Notification  <input style="width:15px;height:15px;"  type="checkbox" id="form8"  class="form-control">
	    <?php }?>
	
	
	</td>
  </tr>
  
  <tr>
      <td colspan="5"> Commentaire du Directeur Adjoint : <br/> </td> 
  </tr>
  
   <tr>
      <td colspan="5"> Commentaire du Directeur : <br/> </td> 
  </tr>
    
</table>	   
    
    <footer>
       <?php 

   if (setlocale(LC_TIME, 'fr_FR') == '') {
        setlocale(LC_TIME, 'FRA');  //correction problème pour windows
        $format_jour = '%#d';
    } else {
        $format_jour = '%e';
    }
	 $date =  date('Y-m-d');
	 
echo strftime("%A $format_jour %B %Y", strtotime($date));

	   ?>
    </footer>
  </body>
</html>