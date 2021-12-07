<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
</head>

<body onload="myFunction()">
    <div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem active">Create</div>
        <div class="headItem"><a href="edit.php">Edit</a></div>
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
    $document = file($dir.$filename.'.txt');
        $author = $document[0];
        $title = $document[1];
        $content = $document[2];
        $date = $document[3];
        echo "<div class=\"createAuthor\">";
        echo "<p>";
        echo "<label for=\"author\">Author</label>";
        echo "<br>";
        echo "<textarea id=\"author\" name=\"author\" rows=\"1\" cols=\"50\">".$author."</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<div class=\"createTitle\">";
        echo "<p>";
        echo "<label for=\"title\">Title</label>";
        echo "<br>";
        echo "<textarea id=\"title\" name=\"title\" rows=\"1\" cols=\"200\">".$title."</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<div class=\"createContent\">";
        echo "<p>";
        echo "<label for=\"content\">Content:</label>";
        echo "<br>";
        echo "<textarea id=\"content\" name=\"blogEntry\" rows=\"15\" cols=\"200\">".$content."</textarea>";
        echo "</p>";
        echo "</div>";
        echo "<input type=\"submit\" value=\"Edit\">";
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