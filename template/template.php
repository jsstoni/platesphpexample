<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PlatesPHP</title>
</head>
<body>
	<div style="background: greenyellow;">
		<?php echo $this->section('menu'); ?>
	</div>
	<div style="background: blueviolet;">
		<?php echo $this->section('content'); ?>
	</div>
</body>
</html>