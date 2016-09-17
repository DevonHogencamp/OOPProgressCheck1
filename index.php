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
            $toyotaSupra = new toyotaSupra;
            $nissanSkyline = new nissanSkyline;

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
