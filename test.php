<?php
   $data = "Hello World";
  
   ob_start();
   include("template.php");
   $html = ob_get_clean();
   
   echo $html;
?>