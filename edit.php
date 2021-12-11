<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
</head>

<body style="background-color:#161716">
    <div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="nameItem"><p>by Nolan Nguyen-Tran</p></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem"><a href="create.php">Create</a></div>
    </div>
    <!--<button type="button" onclick="helloJS()">Click Me!</button>-->
    <br>
    <br>
    <div class="writingContainer">
    <form method="post" action="editing.php">
    <?php
$name = $_GET["name"];

$dir = "./blogs/";
$filename = $name;
$myfile = fopen('./blogs/'.$filename.'.txt',"r");
if (!$myfile){
    die("Unable to open $filename.");
}
else{
    $numberOfLines=0;
    $document = file($dir.$filename.'.txt');
    while (!feof($myfile)){
        $line = fgets($myfile);
                $numberOfLines++;
            }
    $document = file($dir.$filename.'.txt');
    $title = $document[0];
    $author = $document[1];
    $date = $document[2];
    $name = $document[3];
    $content = $document[4];
        echo "<div class=\"createAuthor\">";
        echo "<p>";
        echo "<label for=\"author\" style=\"color:white; font-size:30px;\">Author</label>";
        echo "<br>";
        echo "<textarea id=\"author\" name=\"author\" rows=\"1\" cols=\"50\">".$author."</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<div class=\"createTitle\">";
        echo "<p>";
        echo "<label for=\"title\" style=\"color:white; font-size:30px;\">Title</label>";
        echo "<br>";
        echo "<textarea id=\"title\" name=\"title\" rows=\"1\" cols=\"50\">".$title."</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<div class=\"createContent\">";
        echo "<p>";
        echo "<label for=\"content\" style=\"color:white; font-size:30px;\">Content</label>";
        echo "<br>";
        echo "<textarea id=\"content\" name=\"blogEntry\" rows=\"30\" cols=\"200\">";
        for ($i = 4; $i<$numberOfLines+1; $i++){
            echo $document[$i];
        }
        echo "</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<input type=\"submit\" value=\"Edit Post\" class=\"button\">";
        echo "<textarea name=\"date\" rows=\"1\" cols=\"10\" hidden>".$date."</textarea>";
        echo "<textarea name=\"name\" rows=\"1\" cols=\"10\" hidden>".$name."</textarea>";

        
        fclose($myfile);
}

?>
    </form>
</div>
</body>
<script src="js/main.js"></script>
</html>