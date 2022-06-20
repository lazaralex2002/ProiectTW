//leave up
var colors = ["#340","#123",
    "#000" , "#895" , "#359"];
let positionArray = [];
//done
function ballCircle(id, x , y)
{
    var body = document.getElementsByTagName('body').item(0).className='noOverflow';
    var navbarHeight = document.getElementById('navbar').clientHeight;
    var footerHeight = document.getElementById('footer').clientHeight;

    var windowHeight = window.innerHeight;
    var windowWidth = window.innerWidth;

    var containerHeight =  windowHeight - navbarHeight - footerHeight - 50;;
    var containerWidth = windowWidth;

    var canvasWidth = (containerWidth/100.0*70.0);
    var canvasHeight = containerHeight;

    var messageBoxWidth = (containerWidth/100.0*30.0);
    var messageBoxHeight = containerHeight + navbarHeight;





    var container = document.getElementById('container');
    container.style.height = containerHeight.toString() + 'px';
    container.style.width = containerWidth.toString() + 'px';
    container.style.bottom = 'auto';
    container.style.top = 'auto';
    container.style.top = navbarHeight.toString() + 'px';
    container.style.marginTop = 'auto';
    container.style.marginTop = navbarHeight.toString() + 'px';

    var canvas = document.getElementById('canvas');
    canvas.style.height = canvasHeight.toString() + 'px';
    canvas.style.width = canvasWidth.toString() + 'px';
    canvas.style.bottom = 'auto';
    canvas.style.top = 'auto';

    var messageBox = document.getElementById('messageBox');
    messageBox.style.height = messageBoxHeight.toString() + 'px';
    messageBox.style.width = messageBoxWidth.toString() + 'px';
    messageBox.style.bottom = 'auto';
    messageBox.style.top = 'auto';
    messageBox.style.right = 'auto';
    messageBox.style.marginLeft = canvasWidth.toString()+'px';
    messageBox.style.left = 'auto';
    messageBox.style.left = 'auto';

    var entityList = document.getElementById('entityList');
    var entityListWidth = messageBoxWidth ;
    var entityListHeight = messageBoxHeight / 100.0 * 33.3;
    entityList.style.width = entityListWidth.toString() + 'px';
    entityList.style.height = entityListHeight.toString() + 'px';
    entityList.style.bottom = 'auto';
    entityList.style.top = '10px' ;
    entityList.style.right = 'auto';
    entityList.style.marginLeft = 0+'px';
    entityList.style.left = 'auto';
    entityList.style.left = 'auto';
    entityList.className = 'entityList';


    canvasWidth = canvasWidth - 50; //offset for balls

    var ball = document.getElementById(id.toString());
    coordX = canvasWidth / 100.0 * x;
    coordY = canvasHeight / 100.0 * y + navbarHeight;

    ball.style.left = coordX + 'px';
    ball.style.top = coordY + 'px';
    positionArray[id] = [coordX + 25 , coordY + 25];
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
        function (data) {
            entities = JSON.parse(data);
            var array = Object.keys(entities).map(function (key) {
                return entities[key];
            });
            document.getElementById("canvas").innerHTML = "";
            var entityTable = document.getElementById('entityList');
            entityTable.innerHTML = "<table id=\"table\" class=\"bg-accent p-2 border-1 w-100 text-center\">\n" +
                "                    <tr>\n" +
                "                        <th>Id</th>\n" +
                "                        <th>User Name</th>\n" +
                "                        <th>Type</th>\n" +
                "                        <th>Colour</th>\n" +
                "                    </tr>"+
                "                    </table>";
            for (i = 0; i < array.length; i++)
            {
                document.getElementById("canvas").innerHTML += "<div id = \"" + i.toString() + "\" class =\"ball\"> ";
                ballCircle(i, entities[i]['x'], entities[i]['y']);
                


            }
            let j;
            for (i = 0; i < array.length; i++)
            {
                for( j = i + 1; j < array.length; ++j )
                {
                    if ( Math.abs(positionArray[i][0] - positionArray[j][0]) <= 50  && Math.abs(positionArray[i][1] - positionArray[j][1]) <= 50 )
                        console.log('collision');
                }
            }

        }
    );
    setTimeout(callAPI,200);
}

function codeAddress()
{
    let entities;
    callAPI();

}

window.onload = codeAddress;