<html>
    <body>
        <?php
        //classes and objects

        class car{
            public $brand; //property of the car
            //private
            //protected
            public function startengine(){          //method
                return "the engine is starting ...";
            
        }
        //create an object
        $car= new car();
        $car->brand ="mercedes";
        $car->color ="black";
        echo "car brand:" . $car->brand. "<br>";
        echo $car->startengine();

        
        }
        
    