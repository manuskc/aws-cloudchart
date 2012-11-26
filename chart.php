<?php
date_default_timezone_set('Asia/Calcutta'); //Set to your timezone
require_once dirname(__FILE__) . '/cloudwatch.chart.php';
?>
<html lang="en">
<head>
<title>Stats</title>
<!--you can replace the below stylesheet with your own style sheet -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--need to include the following javascripts for graphing tool flot-->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="jquery/excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="jquery/jquery.js"></script>
<script language="javascript" type="text/javascript" src="jquery/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="jquery/jquery.flot.time.js"></script>
</head>
<body>
<h2> AWS CloudWatch Charts</h2>

<!--the div where chart has to be plotted should have an id="divname_div", use divname on cloudwatch.chart.php-->
<h3>REQUEST COUNT:</h3>
<div class='chart' id='d1_div'></div>
<hr/>
<h3>ELB LATENCY:</h3>
<div class='chart' id='d2_div'></div>

<!--call this function in body division at end, this starts rendering chart after the page is loaded until here -->
<?php print_cloudwatch_charts(); ?>
</body>
</html>
