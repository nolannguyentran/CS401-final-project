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
<p>Your blog has been successfully created!</p>





<?php
$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["blogEntry"];
$date = date("Y-m-d");
$name = date("Y-m-d-H-i-s");

$filename = $name;
$myfile = fopen('./blogs/'.$filename.'.txt',"w");
if (!$myfile){
    die("Unable to open $filename.");
}
else{
    fwrite($myfile, $title . PHP_EOL . $author . PHP_EOL . $date . PHP_EOL . $name . PHP_EOL . $content . PHP_EOL);
    echo "<div class=\"messageContainer\">";
    echo "<h1>".$title." blog post has been successfully created!</h1>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p>Press Home to return to back to home to see the changes!</p>";
    echo "</div>";
    fclose($myfile);
}

//echo "<p>$title</p> <br> <p>$content</p>";

?>

</body>
<script src="js/main.js"></script>
</html>