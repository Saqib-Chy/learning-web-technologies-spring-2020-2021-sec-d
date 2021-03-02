<?php

if( isset( $_POST [ "submit" ] ) ){


    $username =  $_POST [ "username" ] ;
    $password =  $_POST [ "password" ] ;
    $confirmpass =  $_POST [ "conpass" ] ;


if( $username == " "  || $password == " " || $confirmpass == " " ){
    echo "Fill up all the fields " ;
}
elseif( $password != $confirmpass   ){
    echo "passwords do not match";
}
else{

 $user_info = [
        "username" =>  $username  ,
        "password"  =>  $password
      ] ;

$user_info_json = json_encode ( $user_info ) ;

$json_file = fopen("users.json" , "w"  ) ;
fwrite($json_file , $user_info_json );
fclose($json_file);

header('location: login.html');

}


}




?>
