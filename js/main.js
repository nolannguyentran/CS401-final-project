
function makeVisible(event)
{
 //alert(event.currentTarget.id);
 let x = event.currentTarget.id;

 document.getElementById("e"+x).hidden=false;
 document.getElementById("p"+x).hidden=false;
 document.getElementById("t"+x).hidden=false;
}

function makeInvisible(event)
{
    let x = event.currentTarget.id;
    document.getElementById("e"+x).hidden=true;
    document.getElementById("p"+x).hidden=true;
    document.getElementById("t"+x).hidden=true;

}

function viewPost(event)
{
    let x = event.parentNode.id;
    let name = document.getElementById("name"+x).innerHTML;
    window.location.href = "view.php?name="+name;
}

function editPost(event)
{
    let x = event.parentNode.id;
    let name = document.getElementById("name"+x).innerHTML;
    window.location.href = "edit.php?name="+name;
}

function deletePost(event)
{
    let x = event.parentNode.id;
    let name = document.getElementById("name"+x).innerHTML;
    window.location.href = "deleting.php?name="+name;
}