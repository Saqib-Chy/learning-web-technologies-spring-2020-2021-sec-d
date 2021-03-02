<?php

if( isset( $_POST [ "submit" ] ) ){

$username =  $_POST [ "username" ] ;
$password =  $_POST [ "password" ] ;


$json_file = fopen("users.json" , "r"  ) ;
$json_data = fread( $json_file , filesize("users.json"));

$users_data = json_decode($json_data, true) ;

if (  $username != " " && $password != " "  ){
  if( $username == $users_data["username"] && $password == $users_data["password"] ){
    echo " success  " ;
  }else{
    echo "Password or Username didn't match" ;
  }




}
else{
  echo "Invalid" ;
}








fclose($json_file) ;
}




?>
