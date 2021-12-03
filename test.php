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
$counter = 1;
$dir = "./blogs/";
$a = scandir($dir, 1);
for($i=0; $i <(count($a)-2); $i++){
    $filename = $a[$i];
    $myfile = fopen($dir.$filename,"r");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    else{
       
        echo "<div class=\"blogContainer\">";
        echo "<div class=\"blogItem\" id=\"".$counter."\" onmouseover=\"makeVisible(event)\" onmouseout=\"makeInvisible(event)\">";
        echo "<br>";
        //while (!feof($myfile)){
          //  $line = fgets($myfile);
            //echo $line. "<br>";
        //}
        $document = file($dir.$filename);
        $title = $document[0];
        $content = $document[1];
        $date = $document[2];
        echo "<h1>".$title."</h1> <br>";
        echo "<p>".$content."</p>";
        echo "<br>";
        echo "<br>";
        echo $date;
        fclose($myfile);
        echo "<br>";
        echo "<input type=\"image\" id=\"e".$counter."\" hidden src=\"img/eyeball.png\" name=\"view\" style=\"width:3em; height:3em; padding:55px\">";
        echo "<input type=\"image\" id=\"p".$counter."\" hidden src=\"img/pencil.png\" name=\"edit\" style=\"width:2.5em; height:2.5em; padding:55px\">";
        echo "<input type=\"image\" id=\"t".$counter."\" hidden src=\"img/trash-can.png\" name=\"delete\" style=\"width:2.5em; height:2.5em; padding:55px\">";
        echo "</div>";
        echo "</div>";
        $counter++;
        
    }
}
?>
</body>
<script src="js/main.js"></script>
</html>