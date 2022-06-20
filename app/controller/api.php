<?php
$circleOffset =  0.5;
$movement = [0, -1, 1, -2, 2];


$owner = $_SESSION['uname'];

require_once 'dbConfig.php';
$sql = "SELECT id, uname, type FROM entities where owner = ". '\'' .$_SESSION['uname'] . '\'';
echo '{';
if ($stmt = $conn->query($sql))
{
    $i = 0 ;
    $rows = $stmt->rowCount();
    $children = array();
    for (  ; $i < $rows -1 ; $i++ )
    {
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $id = $row[0];
        $uname = $row[1];
        $type = $row[2];
        $xvalue = 100/$rows*$i;
        $yvalue = 100/$rows*$i;
        if ( isset($_SESSION['entities'][$i]["id"] ) && $_SESSION['entities'][$i]["id"] == $id && $_SESSION['entities'][$i]["name"] == $uname)
        {
            $xvalue = $_SESSION['entities'][$i]["x"] + $movement[rand(0,4)]*$circleOffset;
            if ( $xvalue < 0 ) $xvalue = 1;
            if ($xvalue > 99 ) $xvalue = 98;
            $yvalue = $_SESSION['entities'][$i]["y"] + $movement[rand(0,4)]*$circleOffset;
            if ($yvalue < 0 ) $yvalue = 1;
            if ($yvalue > 99 ) $yvalue = 98;
        }
        $child = array("id" => $id , "name" => $uname , "type" => $type , "x" => $xvalue , "y" => $yvalue);
        $children[$i] = $child;
    }
    if ($rows > 0 )
    {
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $id = $row[0];
        $uname = $row[1];
        $type = $row[2];
        $xvalue = 100/$rows*$i;
        $yvalue = 100/$rows*$i;
        if ( isset($_SESSION['entities'][$i]["id"] ) && $_SESSION['entities'][$i]["id"] == $id && $_SESSION['entities'][$i]["name"] == $uname)
        {
            $xvalue = $_SESSION['entities'][$i]["x"] + $movement[rand(0,4)]*$circleOffset;
            if ( $xvalue < 0 ) $xvalue = 1;
            if ($xvalue > 99 ) $xvalue = 98;
            $yvalue = $_SESSION['entities'][$i]["y"] + $movement[rand(0,4)]*$circleOffset;
            if ($yvalue < 0 ) $yvalue = 1;
            if ($yvalue > 99 ) $yvalue = 98;
        }
        $child = array("id" => $id , "name" => $uname , "type" => $type , "x" => $xvalue , "y" => $yvalue);
        $children[$i] = $child;
    }
    $_SESSION['entities'] = $children;
    $n = sizeof($children);

    for ( $i = 0 ; $i < $n - 1 ; $i++)
    {
        echo "\"$i\":{ \"id\": \"". $children[$i]['id'] . "\" , \"name\": \"". $children[$i]['name'] . "\" , \"type\" : \"". $children[$i]['type'] ."\" , \"x\": \"". $children[$i]['x'] ."\" , \"y\": \"". $children[$i]['y'] . "\"  },";
    }
    if ($i > 0 )
    {
        echo "\"$i\":{ \"id\": \"". $children[$i]['id'] . "\" , \"name\": \"". $children[$i]['name'] . "\" , \"type\" : \"". $children[$i]['type'] ."\" , \"x\": \"". $children[$i]['x'] ."\" , \"y\": \"". $children[$i]['y'] . "\"  }";
    }
}
echo '}';

exit();
?>