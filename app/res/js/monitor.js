//leave up
var colors = ["#340","#123",
    "#000" , "#895" , "#359"];

//done

var navbarHeight = document.getElementById('navbar').clientHeight;
console.log(navbarHeight);
var footerHeight = document.getElementById('footer').clientHeight;

var windowHeight = window.innerHeight;
console.log(windowHeight);
console.log(footerHeight);

var canvasWidth = window.innerWidth;
var canvasHeight = windowHeight - navbarHeight - footerHeight - 50;
console.log(canvasHeight);

var canvas = document.getElementById('canvas');
canvas.style.height = canvasHeight.toString() + 'px';
canvas.style.width = canvasWidth.toString() + 'px';
canvas.style.bottom = 'auto';
canvas.style.top = 'auto';
canvas.style.top = navbarHeight.toString() + 'px';



function ballCircle(id, x , y)
{
    var ball = document.getElementById(id.toString());
    coordX = canvasWidth / 100.0 * x;
    coordY = canvasHeight / 100.0 * y + navbarHeight;

    ball.style.left = coordX + 'px';
    ball.style.top = coordY + 'px';
    ball.style.backgroundColor = colors[id];
    ball.style.borderColor = colors[id];

}


function doAPIcall(type, url, callback)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status == 200) {
            var data = xmlhttp.responseText;
            if (callback) callback(data);
        }
    };
    xmlhttp.open(type, url, true);
    xmlhttp.send();
}


function callAPI()
{
    doAPIcall(
        "GET",
        "localhost/api",
        function (data)
        {
            entities = JSON.parse(data);
            var array = Object.keys(entities).map(function(key) { return entities[key]; });
            console.log(array.length);
            document.getElementById("canvas").innerHTML ="";
            for (i = 0 ; i < array.length ; i++)
            {
                console.log(i);
                document.getElementById("canvas").innerHTML += "<div id = \"" + i.toString() + "\" class =\"ball\"> ";
                ballCircle(i, entities[i]['x'], entities[i]['y']);
            }
        }
    );
    setTimeout(callAPI,66);
}

function codeAddress()
{
    let entities;
    callAPI();

}

window.onload = codeAddress;