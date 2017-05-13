<!DOCTYPE html>
<html>
<head>	
	<title>Printku Control Panel</title>
	<?php require 'connection.php'; ?>
	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

<div class ="container">	
	<div class="col-sm-8">
		<h1>Printku Customer Dashboard</h1>
	</div>
	<div class="col-sm-4">
		<h4>Hi, Kemal</h4>
		Saldo yang tersedia : <h2>Rp. 21.251</h2>
	</div>
	<ul class="nav nav-tabs">
			<li class="active">
        		<a href="#dashboard" data-toggle="tab">Dashboard</a>
			</li>
			<li>
				<a href="#billing" data-toggle="tab">Billing</a>
			</li>
			<li>
				<a href="#my-account" data-toggle="tab">My Account</a>
			</li>
	</ul>
	<br>

	<div class="tab-content ">
		<div class="tab-pane active" id="dashboard">
			<a href="add-project.php" class="btn btn-primary">New Print Project</a><br>
			<?php
				echo "<div class='centerize' style='margin-top:30px;'> <table>
					<tr>
						<th>Print ID</th> <th>Tanggal Print</th> <th>Nama File</th> <th>Pickup Location</th> <th>Status Print</th>
					</tr>";

					//code to populate the tables
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr> <td>" . $row["print_id"] . "</td> <td>" . $row["print_date"] . "</td> <td>" . $row["print_file"] . "</td> <td>" . $row["print_pickup"] . "</td><td>" . $row["print_status"] . "</td> </tr>";
					}

				echo "</table></div>";
			?>
		</div>
		<div class="tab-pane" id="billing">
			this section is supposed to be a billing page
		</div>
		<div class="tab-pane" id="my-account">
			this section is supposed to be a user's account settings
		</div>
	</div>
</div>


</body>

</html>