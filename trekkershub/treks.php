<?php 

	require_once("./dbUtils/db-connector.php");
	class Treks {
		public $id;
		public $trekCode;
		public $trekName;
		public $desc;
		public $trekDifficulty;
		public $trekStartPrice;
		public $trekDuration;
        public $trekBestSeason;
        public  $trekPopularity;
        public  $trekType;
        public  $trekRegionDesc;
		
	}

/**
 * @param $regionName
 * @return array
 */
	function getTreksForRegion($regionName){
		$treksArray = [];
		$query = "SELECT t.*, td.*,ts.* from t_treks t, t_trek_details td, t_states ts where t.state_id in
		 (select id from t_states where state_name = '".$regionName ."') and t.id = td.trek_id and t.state_id=ts.id";

		 $conn = getDBConnection();

		 $result = $conn -> query($query);

		 if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		$trek = new Treks();
    		$trek->id = $row["id"];
    		$trek->trekCode = $row["trek_code"];
    		$trek->trekName = $row["trek_name"];
                $trek->trekType = $row["trek_type"];
    		$trek->desc = $row["trek_desc"];
    		$trek->trekDifficulty = $row["trek_difficulty"];
    		$trek->trekStartPrice = $row["trek_start_price"];
    		$trek->trekDuration = $row["trek_duration"];
                $trek->trekPopularity = $row["trek_popularity"];
                $trek->trekRegionDesc = $row["state_overview"];

    		$treksArray[] = $trek;
        	#echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
    		}
		} else {
    		echo "0 results";
		}

		#echo var_dump($treksArray);
		$conn->close();

		return $treksArray;
	}
?>