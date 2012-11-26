aws-cloudchart
==============

AWS Cloudchart - A simple charting tools for all your cloud watch metrics on aws

This is a simple tool to plot cloudwatch metric graphs on a web page.

How to use?
1 Create your custom layout to plot charts, with your custom css. ( Start with chart.php template )
2 Update your aws secret and key in AWS-sdk/config.inc.php
3 To add a required cloudwatch metric, add an entry to $chart_parameters array in cloudwatch.chart.php

You can have any number of divs to show charts - The id of each div must end with "_div"
A single div can show multiple metrics

Currently all charts update automatically after specified interval for each chart metric


This project uses:
aws-sdk-for-php https://github.com/amazonwebservices/aws-sdk-for-php
flot https://github.com/flot/flot

Let me know your thought and feed back when you use this.

manu.skc@gmail.com




