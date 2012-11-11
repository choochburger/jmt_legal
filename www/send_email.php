<?php 
  if ($_POST) {    
    $name  = $_POST['name'];    
    $email = $_POST['email'];    
    $text  = $_POST['text'];       

    //send email    
    //mail("RECIPIENT ADDRESS", "SUBJECT", $text, "From:" . $email); 
    echo 'Got it';
  } 
?>
