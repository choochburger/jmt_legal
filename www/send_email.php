<?php 
  if ($_POST) {
    $name  = filter_var( strip_tags($_POST['name'], FILTER_SANITIZE_STRING) );
    $email = filter_var( strip_tags($_POST['email'], FILTER_SANITIZE_EMAIL) );
    $text  = filter_var( strip_tags($_POST['text'], FILTER_SANITIZE_STRING) );

    $response = array();

    if (!$email || !$text ) {
      $response['status']  = 'error';
      $response['message'] = 'Please enter your email and a message.';

      die(json_encode($response));
    }

    mail("info@jmt-legal.com", "JMT Legal contact form submission", $text, "From:" . $email); 

    $response['status'] = 'success';
    echo json_encode($response);
  } 
?>
