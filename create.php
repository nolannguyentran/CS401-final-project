<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
</head>

<body style="background-color:#161716" onload="myFunction()">
    <div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem active">Create</div>
        <div class="headItem">Edit</div>
    </div>
    <!--<button type="button" onclick="helloJS()">Click Me!</button>-->
    <br>
    <br>
    <div class="writingContainer">
    <form method="post" action="processing.php">
        <div class="createAuthor">
            <p>
                <label for="author" style="color:white">Author</label>
                <br>
                <textarea id="author" name="author" rows="1" cols="50" style="background-color:#161716; color:white"></textarea>
</p>
</div>
        <div class="createTitle">
    <p>
        <label for="title" style="color:white">Title</label>
        <br>
        <textarea id="title" name="title" rows="1" cols="50" style="background-color:#161716; color:white"></textarea>
    </p>
</div>
    <div class="createContent">
    <p>
        <label for="content" style="color:white">Content:</label>
        <br>
        <textarea id="content" name="blogEntry" rows="15" cols="200" style="background-color:#161716; color:white"></textarea>
    </p>
</div>
    <input type="submit" value="Submit">
    </form>
</div>
</body>
<script src="js/main.js"></script>
</html>