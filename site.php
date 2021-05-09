<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            $characterName = "Johnny";
            $characterAge = 54;
            echo "<h1>Basic php site</h1>";
            echo "<hr>";
            echo "<p>This is my php site</p>";
            echo "<p>Here is a line with a name $characterName and an age $characterAge</p>";
            echo strtolower($characterName);
            echo "<br>";
            echo strlen($characterName);
            echo "<br>";
            echo $characterName[0];
            echo "<br>";
            $phrase = "Some words";
            echo str_replace("words", "stuff", $phrase);
        ?>
    </body>
</html>