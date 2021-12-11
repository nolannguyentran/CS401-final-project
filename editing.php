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
$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["blogEntry"];
$date = $_POST["date"];
$name = $_POST["name"];

$filename = rtrim($name);


$myfile = fopen('./blogs/'.$filename.'.txt',"w");
if (!$myfile){
    die("Unable to open $filename.");
}
else{
    fwrite($myfile, $title.$author.$date.$name.$content);
    echo "<div class=\"messageContainer\">";
    echo "<h1>".$title." blog post has been successfully edited!</h1>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p>Press Home to return to back to home to see the changes!</p>";
    echo "</div>";
    fclose($myfile);
    fclose($myfile);
}


?>

</body>
<script src="js/main.js"></script>
</html>