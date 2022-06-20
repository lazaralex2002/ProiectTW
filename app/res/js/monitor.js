//leave up
var colors = ["#cb3c3c","#1c80e7",
    "#9dff24" , "#4fb095" , "#a13fe3"];
let positionArray = [];
var messages = document.getElementById('messages');
//done
function ballCircle(id, x , y, type, name)
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
    messageBox.style.height = messageBoxHeight .toString() + 'px';
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


    var messagesWidth = messageBoxWidth ;
    var messagesHeight = messageBoxHeight / 100.0 * 33.3;
    messages.style.width = (entityListWidth - 30).toString() + 'px';
    messages.style.height = (messageBoxHeight / 100.0* 43.0).toString() + 'px';
    messages.style.marginTop = '1rem';
    messages.style.bottom = 'auto';
    messages.style.top = '10px' ;
    messages.style.right = 'auto';
    messages.style.marginLeft = 0+'px';
    messages.style.left = 'auto';
    messages.style.left = 'auto';
    messages.style.overflowY = 'scroll';
    messages.className = 'bg-accent p-2 border-1 w-100 text-center';

    canvasWidth = canvasWidth - 50; //offset for balls

    var ball = document.getElementById(id.toString());
    coordX = canvasWidth / 100.0 * x;
    coordY = canvasHeight / 100.0 * y + navbarHeight;

    ball.style.left = coordX + 'px';
    ball.style.top = coordY + 'px';
    positionArray[id] = [coordX + 25 , coordY + 25, type, name];
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
            var tbody = document.getElementById('tableBody');
            tbody.innerHTML="<tr>\n" +
                "                    <th>Id</th>\n" +
                "                    <th>User Name</th>\n" +
                "                    <th>Type</th>\n" +
                "                    <th>Colour</th>\n" +
                "                    </tr>";
            for (i = 0; i < array.length; i++)
            {
                document.getElementById("canvas").innerHTML += "<div id = \"" + i.toString() + "\" class =\"ball\"> ";
                ballCircle(i, entities[i]['x'], entities[i]['y'], entities[i]['type'] , entities[i]['name']);
                tbody.innerHTML+= "<tr>" +
        "                                    <td>" +i.toString() +"</td>" +
        "                                    <td contenteditable=\"false\">"+ entities[i]['name']+"</td>" +
        "                                    <td contenteditable=\"false\">"+ entities[i]['type']+"</td>" +
        "                                    <td><div style=\"margin:auto ;width: 2rem; height:2rem; background-color:" +
                                                         colors[i]+" \"></div> </td>" +
        "                                </tr>"
            }
            let j;
            for (i = 0; i < array.length; i++)
            {
                for( j = i + 1; j < array.length; ++j )
                {
                    if ( positionArray[i][2] != positionArray[j][2] && Math.abs(positionArray[i][0] - positionArray[j][0]) <= 50  && Math.abs(positionArray[i][1] - positionArray[j][1]) <= 50 )
                        messages.innerHTML += "<p>Collision between "+positionArray[i][2].toString()+" " +
                            positionArray[i][3].toString() + " and "+ positionArray[j][2].toString()+" " +
                            positionArray[j][3].toString() +"</p>"
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