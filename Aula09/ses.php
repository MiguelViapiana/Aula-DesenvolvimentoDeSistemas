<?php

    session_start();

    $_SESSION['nome'] = "Miguel";

    echo session_id();

    // session_unset();
    // session_destroy();


?>