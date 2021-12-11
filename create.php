<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello World</title>
</head>

<body style="background-color:#161716" onload="myFunction()">
    <div class="headContainer">
        <div class="titleItem">IRL Blog...</div>
        <div class="nameItem"><p>by Nolan Nguyen-Tran</p></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"></div>
        <div class="headItem"><a href="index.php">Home</a></div>
        <div class="headItem active">Create</div>
    </div>
    <!--<button type="button" onclick="helloJS()">Click Me!</button>-->
    <br>
    <br>
    <div class="writingContainer">
    <form method="post" action="processing.php">
        <div class="createAuthor">
            <p>
                <label for="author" style="color:white; font-size:30px;">Author</label>
                <br>
                <textarea id="author" name="author" rows="1" cols="50"></textarea>
</p>
</div>
        <div class="createTitle">
    <p>
        <label for="title" style="color:white; font-size:30px">Title</label>
        <br>
        <textarea id="title" name="title" rows="1" cols="50"></textarea>
    </p>
</div>
    <div class="createContent">
    <p>
        <label for="content" style="color:white; font-size:30px">Content</label>
        <br>
        <textarea id="content" name="blogEntry" rows="30" cols="200"></textarea>
    </p>
</div>
    <input type="submit" value="Submit Post" class="button">
    </form>
</div>
</body>
<script src="js/main.js"></script>
</html>