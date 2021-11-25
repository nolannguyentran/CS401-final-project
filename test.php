<?php
$dir = "./blogs/";
$a = scandir($dir);
for($i=2; $i <count($a); $i++){
    $filename = $a[$i];
    $myfile = fopen($dir.$filename,"r");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    else{
        while (!feof($myfile)){
            $line = fgets($myfile);
        //$content=fread($myfile, filesize("./blogs/2021-11-24-18-25-54.txt"));
        echo $line. "<br>";
        
        }
        fclose($myfile);
        
    }
}








// $filename = "2021-11-24-18-25-54.txt";
//     $myfile = fopen($dir.$filename,"r");
//     if (!$myfile) {
//         die("Unable to open $filename.");
//     }
//     else{
//         while (!feof($myfile)){
//             $line = fgets($myfile);
//         //$content=fread($myfile, filesize("./blogs/2021-11-24-18-25-54.txt"));
//         echo $line. "<br>";
        
//         }
//         fclose($myfile);
        
//     }
    
//echo count($a);


?>