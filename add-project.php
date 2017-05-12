<!DOCTYPE html>
<html>
<head>
	<?php require 'connection.php'; ?>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

<div class ="container">
	<ul class="nav nav-tabs" style="pointer-events:none;">
			<li class="active">
        		<a href="#add-file" data-toggle="tab">Add File</a>
			</li>
			<li>
				<a href="#print-options" data-toggle="tab">Print Options</a>
			</li>
			<li>
				<a href="#pick-ups" data-toggle="tab">Pick Ups</a>
			</li>
	</ul>
	<br>

	<div class="tab-content ">
		<div class="tab-pane active" id="add-file">
			<a href="add-project.php">New Print Project</a>
			<form method="post" action="index.php">  
			  	Tanggal Print: <input type="text" name="tanggal_print"><br>
				Nama File: <input type="text" name="nama_file"><br>
				Pickup Location: <input type="text" name="pickup_location"><br>
				<input type="submit" value="Submit"> 
			</form>
		</div>
		<div class="tab-pane" id="print-options">
			this section is supposed to be a billing page
		</div>
		<div class="tab-pane" id="pick-ups">
			this section is supposed to be a user's account settings
		</div>
	</div>
</div>


</body>

</html>