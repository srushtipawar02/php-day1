<html>
    <body>
        <?php
        //session

        session_start();
        $_SESSION["username"] = "john";
        $_SESSION[ "role"] ="hacker";

        echo "session has been created ! <br>";