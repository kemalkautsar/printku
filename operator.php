<!DOCTYPE html>
<html>
<head>	
	<title>Printku Operator Control Panel</title>
	<?php require 'connection.php'; ?>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>
<div class ="container">
	<h1>Printku Operator's Dashboard</h1>
	<ul class="nav nav-tabs">
			<li class="active">
        		<a href="#dashboard" data-toggle="tab">Dashboard</a>
			</li>
			<li>
				<a href="#my-account" data-toggle="tab">My Account</a>
			</li>
	</ul>
	<br>

	<div class="tab-content ">
		<div class="tab-pane active" id="dashboard">
			<?php
				echo "<table>
					<tr>
						<th>Print ID</th> <th>Tanggal Print</th> <th>Nama File</th> <th>Pickup Location</th> <th>Status Print</th>
					</tr>";

					//code to populate the tables
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr> <td>" . $row["print_id"] . "</td> <td>" . $row["print_date"] . "</td> <td>" . $row["print_file"] . "</td> <td>" . $row["print_pickup"] . "</td><td>" . $row["print_status"] . "</td> </tr>";
					}

				echo "</table>";
			?>
		</div>
		<div class="tab-pane" id="my-account">
			this section is supposed to be a user's account settings
		</div>
	</div>
</div>


</body>

</html>