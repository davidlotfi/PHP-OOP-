<?php

$upload_errors = array(

        UPLOAD_ERR_OK 		            => "No errors.",
        UPLOAD_ERR_INI_SIZE       	  => "Larger than upload_max_filesize.",
        UPLOAD_ERR_FORM_SIZE 	        => "Larger than form MAX_FILE_SIZE.",
        UPLOAD_ERR_PARTIAL 		        => "Partial upload.",
        UPLOAD_ERR_NO_FILE 		        => "No file.",
        UPLOAD_ERR_NO_TMP_DIR         => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE         => "Can't write to disk.",
        UPLOAD_ERR_EXTENSION      	  => "File upload stopped by extension."

      );

      if(isset($_POST['submit'])){
           $tmp_file = $_FILES['image']['tmp_name'];
           $target_file = basename($_FILES['image']['name']);
           $upload_dir = "../images";
        if(move_uploaded_file($tmp_file,$upload_dir."/".$target_file)){
             $caption = $_POST['caption'];
             $size = $_FILES['image']['size'];
             $type = $_FILES['image']['type'];

          $req=$bdd->prepare('INSERT INTO photographs (filename,type,size,caption) VALUES (?,?,?,?)');

          $req->execute(array($target_file,$type,$size,$caption));

          $message = "sucessful";

        }else{

           $error=$_FILES['image']['error'];
           $message=$upload_errors[$error];
        }

      }

   ?>
