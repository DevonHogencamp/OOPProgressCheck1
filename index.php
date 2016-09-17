<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OOP Progress Check 1</title>
    </head>
    <body>
        <?php
            // Link to the classes
            include 'class.php';
            
            // Create Instance of Toyota Supra and Nissan Skyline
            $toyotaSupra = new toyotaSupra("Devon Hogencamp");
            
            // Its hardto give brandon his next dream car but I guess its just a code car I can make another one
            $nissanSkyline = new nissanSkyline("Brandon Ching");
            
            // I made myself another nissan skyline
            $devonsNissanSkyline = new nissanSkyline("Devon Hogencamp");

            // Set the gear of Toyota Supra to first
            setGear(1);
            
            // Tells the Toyota Supra to speed up and get its speed in that gear
            getSpeedUp();

            // Pulls the handbrake of Nissan Skyline 
            setHandbrake(true);
            
            // Finds out if the Nissan Skyline is drifting
            getDrift();
        ?>
    </body>
</html>
