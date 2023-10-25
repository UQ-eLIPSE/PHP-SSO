<?php
    // Imports the auth_require function from uqsso/auth.php.
    // This function will redirect the user to the UQ login page if they are not logged in.
    // If they are logged in, it will return the user's payload.
    // The payload is a JSON object containing the user's username and groups.
        require_once "uqsso/auth.php";
        auth_require();
        echo "<pre>";
        print_r(auth_get_payload());
        echo "</pre>";
?>