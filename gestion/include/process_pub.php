  

<?PHP include("../connexion.php");
 $code_courrier=$_GET['code_courrier'];
     $code_compte=$_GET['code_compte'];
  if(!empty($_FILES['uploaded_file']))
  {
	  
	   mkdir('uploads');
	   $dossier='uploads';
	   
	   $uploaded_file= basename( $_FILES['uploaded_file']['name']);
	  
	 // $uploaded_file = "uploaded_file";
	   
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
	  
	  
	    $code_doc= '0000k01';
		$code_courrier = '000001';
	   $req=$pdo->prepare("insert into document (code_doc,code_courrier,nom_doc) values(?,?,?)");
          $params=array($code_doc,$code_courrier,$uploaded_file);
          $req->execute($params);
		  
		  
		  
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
   echo'<script>window.open("../index_user.php?choix=courriera&code_compte='.$code_compte.'&msg='.$msg.'", "_self")</script>';

?>