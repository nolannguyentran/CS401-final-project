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
        <div class="headItem active">Home</div>
        <div class="headItem"><a href="create.php">Create</a></div>
        <div class="headItem">Edit</div>
    </div>
    <br>
    <br>
    <br>
    

<?php
$testCounter = 1;
$counter = 1;
$dir = "./blogs/";
$a = scandir($dir, 1);
echo "<div class=\"blogContainer\">";
for($i=0; $i <(count($a)-2); $i++){
    $filename = $a[$i];
    $myfile = fopen($dir.$filename,"r");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    else{
       
        if ($testCounter==5) {
            echo "</div>";
            echo "<div class=\"blogContainer\">";
        $testCounter = 1;
        }
        
        
        
            echo "<div class=\"blogItem\" id=\"".$counter."\" onmouseover=\"makeVisible(event)\" onmouseout=\"makeInvisible(event)\">";
            echo "<br>";
            //while (!feof($myfile)){
              //  $line = fgets($myfile);
                //echo $line. "<br>";
            //}
            $document = file($dir.$filename);
            $author = $document[0];
            $title = $document[1];
            $content = $document[2];
            $date = $document[3];
            $name = $document[4];
            echo "<h1>".$title."</h1> <br>";
            echo "<h2> by ".$author."</h2> <br>";
            //echo "<p>".$content."</p>";
            echo "<br>";
            echo "<br>";
            echo "<p>".$date."</p>";
            echo "<br>";
            echo "<p id=\"name".$counter."\" hidden>".$name."</p>";
            fclose($myfile);
            echo "<br>";
            echo "<input type=\"image\" id=\"e".$counter."\" hidden onclick=\"viewPost(this)\" src=\"img/eyeball.png\" name=\"view\" style=\"width:3em; height:3em; padding:55px\">";
            echo "<input type=\"image\" id=\"p".$counter."\" hidden onclick=\"editPost(this)\" src=\"img/pencil.png\" name=\"edit\" style=\"width:2.5em; height:2.5em; padding:55px\">";
            echo "<input type=\"image\" id=\"t".$counter."\" hidden onclick=\"deletePost(this)\" src=\"img/trash-can.png\" name=\"delete\" style=\"width:2.5em; height:2.5em; padding:55px\">";
            echo "</div>";
            
            $counter++;
            $testCounter++;
        
        
        
        
    }
}
echo "</div>";
?>
</body>
<script src="js/main.js"></script>
</html>

<!--https://stackoverflow.com/questions/42213858/how-can-i-get-parent-id-by-onclick-on-a-child-in-js-->
