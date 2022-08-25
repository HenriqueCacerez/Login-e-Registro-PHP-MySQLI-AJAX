<?php
    session_start();

    if(isset($_SESSION)):
        session_destroy();
    endif;

    header("location: login");
