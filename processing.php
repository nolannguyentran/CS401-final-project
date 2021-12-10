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
    //fwrite($myfile, $author . PHP_EOL . $title . PHP_EOL . $content . PHP_EOL . $date . PHP_EOL . $name . PHP_EOL);
    fwrite($myfile, $title . PHP_EOL . $author . PHP_EOL . $date . PHP_EOL . $name . PHP_EOL . $content . PHP_EOL);
    fclose($myfile);
}

//echo "<p>$title</p> <br> <p>$content</p>";

?>

</body>
<script src="js/main.js"></script>
</html>