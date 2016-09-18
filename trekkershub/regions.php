<?php
/**
 * Created by PhpStorm.
 * User: Vikram
 * Date: 17/09/2016
 * Time: 5:21 PM
 */

require_once("./dbUtils/db-connector.php");

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];

    switch($action) {
        case 'getRegionList' : echo getListOfRegions();break;

    }
}

class Regions{
    public $stateId;
    public $stateName;
    public $stateCode;
}

function getAllRegion(){
    $stateArray = [];
    $query = "SELECT * from  t_states";

    $conn = getDBConnection();

    $result = $conn -> query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $state = new Regions();
            $state->stateId = $row["id"];
            $state->stateName = $row["state_name"];
            $state->stateCode = $row["state_code"];


            $stateArray[] = $state;
            #echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    #echo var_dump($treksArray);
    $conn->close();

    return $stateArray;
}

/**
 * @return string
 */
function getListOfRegions(){

    $resultant = "<ol>";

    $query = "SELECT * from  t_states";

    $conn = getDBConnection();

    $result = $conn -> query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $resultant .= "<li>".$row["state_name"]."</li>";
        }
        $resultant .= "</ol>";
    } else {
        echo "0 results";
    }

    #echo var_dump($treksArray);
    $conn->close();

    return $resultant;
}
?>