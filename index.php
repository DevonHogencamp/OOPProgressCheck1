<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OOP Progress Check 1</title>
    </head>
    <body>
        <?php
            /*
            Using the same project you worked on in the previous progress check, incorporate a static property and method.

            This can be integrated or it can be new (i.e. comment out the previous code so that this property/method will work.

            Incorporate at least one abstract class, with at least three inherited child classes, and at least two methods.

            Create two separate files with a .php extension and include the autoloading function in your index file.

            Ensure that these two separate classes are functioning within the index file that you will call them to.

            Demonstrate your understanding of the Final keyword by altering the parent external class file and indicating its function with a comment.

            Using one of your previous classes, iterate over the attributes of that class.
            */

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
