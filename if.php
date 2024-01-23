<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {
            $linkCTA = 'Codecademy';
            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {
            $linkCTA = 'W3Schools';
            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {
            $linkCTA = 'Mozilla';
            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        //use random number generator to create a grade
        $randomNumber = ceil(rand(1,100));

        //asign grade values

        //according to the grade, change an h1 message "congrats"..

        // if else statement
        if( $randomNumber < 60 ){
            echo '<p> oh no </p>';
        }elseif( $randomNumber < 70 ){
            echo '<p> pretty good </p>';
        }elseif( $randomNumber < 80 ){
            echo '<p> nice </p>';
        }elseif( $randomNumber < 80 ){
            echo '<p> good </p>';
        }elseif( $randomNumber < 90 ){
            echo '<p> great </p>';
        }elseif( $randomNumber < 100 ){
            echo '<p> fantastic </p>';
        }
        
        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        // notes: echo everything and assign a random value to empty values
        // notes: check if link URL exists before rendering echo statement else don't render anything using if else statements
        echo '<h2>'.$linkName.'</h2>';
        
        if( $linkURL === "" ){
            echo '<p>' . $linkCTA . '</p>';
        }else{
            echo '<a href="' . $linkURL .'">' . $linkCTA . '</a>';
        }
        echo '<p>' .$linkURL .'</p>';
        echo '<img src="' . $linkImage . '" width="200" />';
        echo '<p>' . $linkDescription . '</>';
        ?>

        

    </body>
</html>
