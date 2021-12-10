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
$dir = "./blogs/";
$filename = $_GET["name"];
//echo $filename;

$myfile = fopen('./blogs/'.$filename.'.txt',"r");
if (!$myfile){
    die("$filename does not exist!");
}
else{
    $document = file($dir.$filename.'.txt');
            $title = $document[0];
    unlink('./blogs/'.$filename.'.txt');
    echo "<div class=\"messageContainer\">";
    echo "<h1>".$title." blog post has been successfully deleted!</h1>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p>Press Home to return to back to home to see the changes!</p>";
    echo "</div>";
}



?>
</body>
<script src="js/main.js"></script>
</html>
