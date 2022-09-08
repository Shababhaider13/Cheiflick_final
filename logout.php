<?php  
session_start();
 
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/user-logout';



$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: Bearer ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($api_url, false, $context);

session_destroy();
header('location:index.php');
?>