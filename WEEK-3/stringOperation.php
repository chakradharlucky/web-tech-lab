<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Operations in php</title>
</head>
<body>
    <?php
        $mystr = "php is a server side scripting language";
        echo "String: ".$mystr;
        echo "<br>Length of the string: ".strlen($mystr);
        echo "<br>Number of words in the String: ".str_word_count($mystr);
        echo "<br><b>Reverse</b> of the string: ".strrev($mystr);
        echo "<br><b>Position</b> of the Sub-string in the string: ".strpos($mystr,"server");
    ?>    
</body>
</html>
