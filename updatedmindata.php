<?php
require_once dirname(__FILE__) . '/cloudwatch.chart.php';

try {
	if( isset($chart_parameters[$_GET['chart']]) === true && empty($chart_parameters[$_GET['chart']]) === false) {
		$chart = $chart_parameters[$_GET['chart']];
		$data = getCloudWatchData($chart['namespace'], $chart['metric'], '-1 minute', 'now', 60, $chart['result'], $chart['unit'], $chart['dimensions'], $chart['multiplier']);
		$result = array();
		if(!empty($data[0])) {
			$result['Status'] = 200;
			$result['Timestamp'] = $data[0]['Timestamp'];
			$result[$chart['result']] = $data[0][$chart['result']];
			print json_encode($result);
		}
	} else {
		$result['Status'] = -998;
		print json_encode($result);
	}
} catch ( exception $e) {
	$result['Status'] = -999;
	print json_encode($result);
}
?>
