<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
    
</head>

<body style="background-color:#161716">
<div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem"><a href="create.php">Create</a></div>
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
    $numberOfLines=0;
    $document = file($dir.$filename.'.txt');
    while (!feof($myfile)){
        $line = fgets($myfile);
                $numberOfLines++;
            }
    $title = $document[0];
    $author = $document[1];
    $date = $document[2];
    $name = $document[3];
    $content = $document[4];
    echo "<div class=\"blogContainer\">";
        echo "<div class=\"blogPost\">";
        echo "<br>";
        echo "<div class=\"blogPostTitle\">";
        echo "<h1>".$title."</h1> <br>";
        echo "</div>";
        echo "<p>";
        for ($i = 4; $i<$numberOfLines+1; $i++){
            echo $document[$i];
            echo "<br>";
        }
        echo "</p>";
        echo "<br>";
        echo "<br>";
        echo "<p style=\"text-align: right; padding-right: 5%\">Blog by ".$author."</p>";
        echo "<p style=\"text-align: right; padding-right: 5%\">".$date."</p>";
        fclose($myfile);
        echo "<br>";
        echo "</div>";
        echo "</div>";
}

?>
</body>
<script src="js/main.js"></script>
</html>