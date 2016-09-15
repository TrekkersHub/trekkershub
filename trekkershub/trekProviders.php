<?php 

	require_once("db-connector.php");

	class TrekProviders {
		public $id;
		public $name;
		public $code;
		public $desc;
		public $contact;
		public $email;
	}

	function getAllTrekProviders(){

		$trekProvidersArray = [];
		$query = "Select * from t_trek_providers";

        $conn = getDBConnection();

		$result = $conn -> query($query);
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		$trekProviders = new TrekProviders();
    		$trekProviders->id = $row["id"];
    		$trekProviders->name = $row["trek_provider_name"];
    		$trekProviders->code = $row["trek_provider_code"];
    		$trekProviders->desc = $row["trek_provider_desc"];
    		$trekProviders->contact = $row["trek_provider_contact"];
    		$trekProviders->email = $row["trek_provider_email"];
    		$trekProvidersArray[] = $trekProviders;
        	#echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
    		}
		} else {
    		echo "0 results";
		}
		foreach ($trekProvidersArray as $key=>$value) {
			# code...

			echo $value->desc;
		}
		#echo var_dump($trekProvidersArray);
		$conn->close();

	}

/**
 * @param $providerId
 */
	function getTrekProviderById($providerId){
		$trekProvidersArray = [];
		$query = "Select * from t_trek_providers where id = ". $providerId;

        $conn = getDBConnection();

		$result = $conn -> query($query);

		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    		$trekProviders = new TrekProviders();
    		$trekProviders->id = $row["id"];
    		$trekProviders->name = $row["trek_provider_name"];
    		$trekProviders->code = $row["trek_provider_code"];
    		$trekProviders->desc = $row["trek_provider_desc"];
    		$trekProviders->contact = $row["trek_provider_contact"];
    		$trekProviders->email = $row["trek_provider_email"];
    		$trekProvidersArray[] = $trekProviders;
        	#echo "id: " . $row["id"]. " - Name: " . $row["trek_provider_code"]. " " . $row["trek_provider_desc"]. "<br>";
    		}
		} else {
    		echo "0 results";
		}
		foreach ($trekProvidersArray as $key=>$value) {
			# code...

			echo $value->name;
		}
		#echo var_dump($trekProvidersArray);
		$conn->close();
	}
	//getAllTrekProviders();
?>