<?php
    class JDMTuner{
        public $manufacture;
        public $model;
        public $engine;
        public $vin;
        public $owner = "Devon Hogencamp";
        private $codeName = "Super Godzilla";
        function createVin(){
            $this->vin = rand();
        }
    }

    class toyotaSupra extends JDMTuner{
        public $accelerationBase = 30;
        public $acceleration;
        public $gear = 2;
        public $speed = 50;
        function shift($gear){
            $this->accelerationBase = $accelerationBase;
            $this->gear = $gear;
            $this->acceleration = $accelerationBase / $gear;
        }
        function speedUp(){
            $this->speed = $speed + $acceleration;
        }
    }


    class nissanSkyline extends JDMTuner{
        public $handbrake = false;
        public $grip = rand();
        function drift(){
            if ($handbrake == true) {
                echo "Drift Succesfull";
            }
            else {
                echo "Set that handbrake";
            }
        }
        function setHandbrake(){
            $this->handbrake = true;
        }
    }
?>
