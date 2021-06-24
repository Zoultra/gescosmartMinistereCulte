<?php 

    	  $dir = 'include\fichier\e8e77d94-3011-494a-be0b-5fe3f99b7ddd';
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
?>