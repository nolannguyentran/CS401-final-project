<?php
$title = $_POST["title"];
$content = $_POST["blogEntry"];
$filename = $_POST["name"];

//echo $title;
//echo "<br>";
//echo $content;
//echo "<br>";
//echo $filename;


$myfile = fopen('./blogs/'.$filename.'.txt',"w");
if (!$myfile){
    die("Unable to open $filename.");
}
else{
    fwrite($myfile, $title.$content.$filename);
    fclose($myfile);
}

//echo "<p>$title</p> <br> <p>$content</p>";

?>
