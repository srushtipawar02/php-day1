<html>
    <body>
        <?php

        //inheritence
         class dog extend animal{   //parent class
            public function makesound(){
                return "some generic sound";
                return "bark <br>";
            }
            
         }
         $dog = new dog();
         $echo $dog->makesound();
         
         ?>
         </body>
         </html>