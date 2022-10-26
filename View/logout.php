<?php

    session_destroy();

    if ( headers_sent() ) {

        echo "<script> window.location.href='login.php'</script>";

    } else {

        header("Location: index.php");
        
    }