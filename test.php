<?php
$dir = "./blogs/";
//$a = scandir($dir);
// for($i=2; $i <count($a); $i++){
//     $filename = $a[$i];
//     $myfile = fopen($filename, "r");
//     if (!$myfile) {
//         die("Unable to open $filename.");
//     }
//     $contents = fread($myfile, filesize($filename));
//     echo "<p> $contents</p>";
//     fclose($myfile);
//     //echo $a[$i];
//     //echo "<br>";
// }

$filename = "2021-11-24-18-25-54";
    $myfile = fopen('./blogs/'.$filename.'.txt',"r");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    else{
        //echo "can read file";
        $content=fread($myfile, filesize("./blogs/2021-11-24-18-25-54.txt"));
        echo $content;
        //echo filesize("./blogs/2021-11-24-18-25-54.txt");
        fclose($myfile);
    }
    
//echo count($a);


?>