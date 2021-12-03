
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

