<?php

    $uri = $authority.'/gps/';

    $result=curl_get($uri, $token);



    //echo "$latitude $longitude $vitesse";
    echo "$result";

  


?>