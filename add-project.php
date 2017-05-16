<!DOCTYPE html>
<html>
<head>	
	<title>Add New Print Project</title>
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
			<form method="post" action="conn_input.php">  
			  	<table>
			  		<tr>
			  			<td>Tanggal Print :</td><td><input type="date" name="print_date"></td>
					</tr>
					<tr>
						<td>Nama File :</td><td><input type="text" name="print_file"></td>
					</tr>
					<tr>
						<td>Pickup Location :</td><td><input type="text" name="print_pickup"></td>
					</tr>
					<tr>
						<td></td><td><input class="btn btn-success" type="submit" value="Submit"></td>
					</tr>
			  	</table>
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