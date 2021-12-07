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
    fwrite($myfile, $author . PHP_EOL . $title . PHP_EOL . $content . PHP_EOL . $date . PHP_EOL . $name . PHP_EOL);
    fclose($myfile);
}

//echo "<p>$title</p> <br> <p>$content</p>";

?>
