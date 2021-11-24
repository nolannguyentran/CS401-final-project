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
        <div class="headItem"><a href="edit.php">Edit</a></div>
    </div>
    <!--<button type="button" onclick="helloJS()">Click Me!</button>-->
    <br>
    <br>
    <br>
    <div class="blogContainer">
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
        </div>
        <div class="blogItem">
        <h1>Blog 47</h1>
        <br>
        <h2>My Journey as a CS Student</h2>
        <br>
        <br>
        <p>November 23, 2020</p>
        </div>
        <div class="blogItem">
        <h1>Blog 46</h1>
        <br>
        <h2>My Political Views</h2>
        <br>
        <br>
        <p>October 11, 2020</p>
        </div>
    </div>
    <br>
    <br>
    <div class="blogContainer">
        <div class="blogItem">4</div>
    </div>







<!--
    <table class="table">
        <caption>Blogs</caption>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
    </table>
-->
</body>
<script src="js/main.js"></script>
</html>