<?php 

    // this functions !!?? 
    function strip_zeros_from_date($marked_string=""){

         $no_zeros= str_replace("*0","",$marked_string);
         $cleaned_string= str_replace("*","",$no_zeros);
          return $cleaned_string;

    }
    function redirect_to($location = null){
        if ($location != null) {
            header("Location:{$location}");
            exit;
        }
    }
    function output_message($message=""){
        if (!empty($message)) {
            return "<p class=\"message\">{$message}</p>";
        }else{
            return "";
        }
    }

?>