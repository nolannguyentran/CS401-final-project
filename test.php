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
        <div class="headItem active">Home</div>
        <div class="headItem"><a href="create.php">Create</a></div>
        <div class="headItem"><a href="test.php">Edit</a></div>
    </div>
    <br>
    <br>
    <br>
    <!-- <div class="blogContainer">
        <div class="blogItem" onmouseover="makeVisible()" onmouseout="makeInvisible()">
        <h1>Blog 48</h1>
        <br>
        <h2>The Art of War</h2>
        <br>
        <br>
        <p>January 11, 2021</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="image" id="e1" hidden src="img/eyeball.png" name="view" style="width:3em; height:3em; padding:55px">
        <input type="image" id="p1" hidden src="img/pencil.png" name="edit" style="width:2.5em; height:2.5em; padding:55px">
        <input type="image" id="t1" hidden src="img/trash-can.png" name="delete" style="width:2.5em; height:2.5em; padding:55px">
    </div> -->







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
        echo "<div class=\"blogContainer\">";
        echo "<div class=\"blogItem\">";
        echo "<br>";
        while (!feof($myfile)){
            $line = fgets($myfile);
            echo $line. "<br>";
        }
        fclose($myfile);
        echo "<br>";
        echo "</div>";
        echo "</div>";
        
    }
}
?>
</body>