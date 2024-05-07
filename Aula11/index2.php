<?php

    echo password_hash("senha124", PASSWORD_DEFAULT);
    //senha123 : $2y$10$z58TCaWBFeE2wUIPBIeVC.NCcbwxEgJ6436wexiSQ.ETjwv9p6SlG
    //senha124 : $2y$10$.TUdDLaSbK5ilSEbQ6W6QuUexfdFhqD2V4gqvNVw0k1MX/ttJaWxu


    $hash= '$2y$10$.TUdDLaSbK5ilSEbQ6W6QuUexfdFhqD2V4gqvNVw0k1MX/ttJaWxu';

    if(password_verify("senha124", $hash)){
        echo "<br>Passowrd valid";
    }else{
        echo "<br>Passorw invalid";
    }

?>