//========================
//Transform a response
//======================== 
$responseBody = $event['response']['content'];

foreach ($responseBody['resource'] as $n => $record) {
	$record["name"] = [
	    "first" => $record["first_name"],
	    "last" =>  $record["last_name"]
	];
	unset($record["first_name"]);
	unset($record["last_name"]);
//    unset($record["hire_date"]);
	$responseBody['resource'][$n] = $record;
}

$event['response']['content'] = $responseBody;
