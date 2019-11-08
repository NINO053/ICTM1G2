<?php




//deze function laat alle stockgroepen zien
function get_stockGroups()
{
    include ("database_connection.php");
    $sql = 'SELECT stockgroupname FROM stockgroups';
    global $database;
    $result = $database->query($sql);
    $stockGroups = array();
    while ($row = $result->fetch_assoc()) {
        $stockGroups[] = $row["stockgroupname"];
    }
    return $stockGroups;

}

//laat temperatuur in celcius en fahrenheit zien
function temperatuur()
{
    include ("database_connection.php");
//sql queery dit is op een specifiek product, het moet worden aangepast
    $sql = "select * from stockitems s join coldroomtemperatures_archive c on S.StockItemID = c.ColdRoomTemperatureID where s.IsChillerStock = 1 and s.StockItemID = 220";
    $link = mysqli_connect('localhost', 'root', '', 'wideworldimporters');
//result of queery
    $result = mysqli_query($link, $sql);

//result in celcius and fahrenheit
    while ($uitkomst = mysqli_fetch_array($result)) {
        {
            echo round($uitkomst["Temperature"]) . " Celcius";
            echo round($uitkomst["Temperature"] * 1.8 + 32) . " Fahrenheit \n";
        }
    }
}

?>