<?PHP include("../../connexion.php");

 
    $code_compte=$_GET['code_compte'];
	if(isset($_GET['typeupload']))
	  $typeupload=$_GET['typeupload'];
  
  
	  if($typeupload=="arrive"){ 
	  
	$numero_ordre_ar=$_GET['numero_ordre_ar'];
	  $code_courrier=$_GET['code_courrier'];
  if(!empty($_FILES['uploaded_file']))
  {
	  
	  
	  
	   mkdir($code_courrier);
	   $dossier=$code_courrier;
	   
	   $uploaded_file= basename($_FILES['uploaded_file']['name']);
	  
	 // $uploaded_file = "uploaded_file";
	   
    $path = "$dossier/";
    $path = $path . basename($_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
	  
	  
	    
		  $code_doc=$code_courrier."_".$uploaded_file.date("Y-m-d").date("H-i") ;
		  
	   $req=$pdo->prepare("insert into document (code_doc,code_courrier,nom_doc,type_courrier) values(?,?,?,?)");
          $params=array($code_doc,$code_courrier,$uploaded_file,'av');
          $req->execute($params);
		    $msg = 'Fichier ajouté avec succès ';
		 echo'<script>window.open("../../index_user.php?choix=editecourrier&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
  
		  
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
	  }
	  if($typeupload=="depart"){ 
	  
	  
	  
	 $numero_ordre_dp=$_GET['numero_ordre_dp'];
	  $code_c_depart=$_GET['code_c_depart'];
  if(!empty($_FILES['uploaded_file']))
  {
	  
	  
	  
	   mkdir($code_c_depart);
	   $dossier=$code_c_depart;
	   
	   $uploaded_file= basename($_FILES['uploaded_file']['name']);
	  
	 // $uploaded_file = "uploaded_file";
	   
    $path = "$dossier/";
    $path = $path . basename($_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
	  
	  
	    
		  $code_doc=$code_c_depart."_".$uploaded_file.date("Y-m-d").date("H-i") ;
		  
	   $req=$pdo->prepare("insert into document (code_doc,code_courrier,nom_doc,type_courrier) values(?,?,?,?)");
          $params=array($code_doc,$code_c_depart,$uploaded_file,'dp');
          $req->execute($params);
		    $msg = 'Fichier ajouté avec succès ';
		 echo'<script>window.open("../../index_user.php?choix=courrierd&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';
  
		  
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
	  
	  
	  
	  
	  
	  }
	  
?>