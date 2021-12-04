<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
    
</head>

<body>
<div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem">Home</div>
        <div class="headItem"><a href="create.php">Create</a></div>
        <div class="headItem"><a href="test.php">Edit</a></div>
    </div>
    <br>
    <br>
    <br>


<?php
$name = $_GET["name"];

$dir = "./blogs/";
$filename = $name;
$myfile = fopen('./blogs/'.$filename.'.txt',"r");
if (!$myfile){
    die("Unable to open $filename.");
}
else{
    echo "<div class=\"blogContainer\">";
        echo "<div class=\"blogItem\">";
        echo "<br>";
        while (!feof($myfile)){
            $line = fgets($myfile);
            echo $line. "<br>";
        }
        //$document = file($dir.$filename);
        //$title = $document[0];
        //$content = $document[1];
        //$date = $document[2];
        //echo "<h1>".$title."</h1> <br>";
        //echo "<p>".$content."</p>";
        //echo "<br>";
        //echo "<br>";
        //echo "<p id=\"date".$counter."\">".$date."</p>";
        fclose($myfile);
        echo "<br>";
        echo "</div>";
        echo "</div>";
}

//echo "<p>$title</p> <br> <p>$content</p>";

?>
</body>
<script src="js/main.js"></script>
</html>