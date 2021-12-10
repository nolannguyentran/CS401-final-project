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
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem"><a href="create.php">Create</a></div>
        <div class="headItem">Edit</div>
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
    $document = file($dir.$filename.'.txt');
    $author = $document[0];
    $title = $document[1];
    $content = $document[2];
    $date = $document[3];
    echo "<div class=\"blogContainer\">";
        echo "<div class=\"blogPost\">";
        echo "<br>";
        
       
        echo "<h1>".$title."</h1> <br>";
        echo "<p>".$content."</p>";
        echo "<br>";
        echo "<br>";
        echo "<p>".$date."</p>";
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