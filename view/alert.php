<?php
   if(isset($success_msg)){
    foreach($success_msg as $success_msg){
        echo '<script>swa1("'.$success_msg.'","","success");</script>';
    }
   }
   if(isset($warning_msg)){
    foreach($warning_msg as $warning_msg){
        echo '<script>swa1("'.$warning_msg.'","","success");</script>';
    }
   }
   if(isset($info_msg)){
    foreach($info_msg as $info_msg){
        echo '<script>swa1("'.$info_msg.'","","success");</script>';
    }
   }
   if(isset($error_msg)){
    foreach($error_msg as $error_msg){
        echo '<script>swa1("'.$error_msg.'","","success");</script>';
    }
   }
?>