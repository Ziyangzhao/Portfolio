<?php // Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A", strtotime("+1 hours")); ?>

<body>
	<link rel="stylesheet" href="../CSS/date.css">
	<div id="date" class="container">
		<h5><?php echo $time ?></h5>
	</div>
</body>
