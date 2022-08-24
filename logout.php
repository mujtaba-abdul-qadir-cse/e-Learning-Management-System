<?php
    //start session
    session_start();
    
    //reset session variables
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // go to landing page
    header("location: index.php");
    exit;
?>