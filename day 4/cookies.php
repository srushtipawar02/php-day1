<html>
    <body>
        <?php
        //cookies

        //set a coookies
        $cookieName = 'langPreference';
        $cookievalue ='French';
        $cookieExpire =time() + (180);

        setcookie($cookieName,$cookievalue,$cookieExpire, "/");
        echo "cookie has been set !";

        //accessing the cookie
        if(isset($_COOKIE[$cookieName])){
            echo "your language preference is :".$_COOKIE[$cookieName];

        }
        else{
            echo "<br> cookie is not set !";

        }

        // deleting cookie or block the cookie
        
        setcookie($cookieName,$cookievalue,time()- (30) , "/");
        echo "<br> cookie has been deleted !";
        ?>
        </html>
</body>


