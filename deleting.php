<?php
$filename = $_GET["name"];
echo $filename;

$myfile = fopen('./blogs/'.$filename.'.txt',"r");
if (!$myfile){
    die("$filename does not exist!");
}
else{
    unlink('./blogs/'.$filename.'.txt');
    echo("your file has been successfully deleted!");
}



?>
