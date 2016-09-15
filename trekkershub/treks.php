<?php 

	require_once("db-connector.php");
	class Treks {
		public $id;
		public $trekCode;
		public $trekName;
		public $desc;
		public $trekDifficulty;
		public $trekStartPrice;
		public $trekDuration;
		
	}

	function getTreksForRegion($regionName){
		$treksArray = [];
		$query = "SELECT t.*, td.* from t_treks t, t_trek_details td where t.state_id in
		 (select id from t_states where state_name = '".$regionName ."') and t.id = td.trek_id";

		 $conn = getDBConnection();

		 $result = $conn -> query($query);

		 if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		$trek = new Treks();
    		$trek->id = $row["id"];
    		$trek->trekCode = $row["trek_code"];
    		$trek->trekName = $row["trek_name"];
    		$trek->desc = $row["trek_desc"];
    		$trek->trekDifficulty = $row["trek_difficulty"];
    		$trek->trekStartPrice = $row["trek_start_price"];
    		$trek->trekDuration = $row["trek_duration"];
    		$treksArray[] = $trek;
        	#echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
    		}
		} else {
    		echo "0 results";
		}
		foreach ($treksArray as $key=>$value) {
			# code...

			echo $value->name;
		}
		echo var_dump($treksArray);
		$conn->close();
		return $treksArray;
	}
?>