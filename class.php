<?php
    // Created parent class JDMTuner
    class JDMTuner{
        // Set up all of the attributes
        public $manufacture;
        public $model;
        public $engine;
        public $owner;
        
        // Set up private attributes so that noboby knew the code name or vin #
        private $codeName = "Super Godzilla";
        public $vin;
        
        // Used constructor to have person enter their name
        function __construct($name){
            $this->owner = $name;
        }
        
        // Sets the cars vin # to random
        function setVin(){
            $this->vin = rand();
        }
    }

    // Made class toyotaSupra that has the parnet of JDMTuner
    class toyotaSupra extends JDMTuner{
        // Set up public attributes about the car
        public $accelerationBase = 30;
        public $acceleration;
        public $gear = 2;
        public $speed = 50;
        
        // Overided the manufacture and model that was inherited from parent class
        function __construct(){
            $this->manufacture = "Nissan";
            $this->model = "Skyline";
        }
        
        // create setGear function that changes gear of car to whatever user wants
        function setGear($gear){
            // Brings in the accerleration base
            $this->accelerationBase = $accelerationBase;
            
            // Brings in current gear
            $this->gear = $gear;
            
            // Changes accelerations base on what gear you are in(the lower the gear the more acceleration)
            $this->acceleration = $accelerationBase / $gear;
        }
        
        // create getSpeed funcion that calculates speed and returns speed
        function getSpeedUp(){
            // Calculates speed
            $this->speed = $speed + $acceleration;
            
            // returns speed
            return $speed;
        }
    }

    // Created class nissanSkyline that has the parent of JDDTuner
    class nissanSkyline extends JDMTuner{
        // Set the cars public attributes
        public $handbrake = false;
        public $grip = rand();
        
        // Overides the manufacture and model from inheritance of parent JDMTuner
        function __construct(){
            $this->manufacture = "Nissan";
            $this->model = "Skyline";
        }
        
        // Return wether the car is drifting or not
        function getDrift(){
            // If the handbrake is engaged then the car is drifting
            if ($handbrake == true) {
                return "Drift Succesfull";
            }
            
            // If the handbrake is not engaged then the car is not drifting
            else {
                return "Set that handbrake";
            }
        }
        
        // sets the handbrake to what the user specifies
        function setHandbrake($change){
            $this->handbrake = $change;
        }
    }
?>
