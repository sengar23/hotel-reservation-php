<?php
	require_once('../auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
					<a class="alight" href="javascript: void(0)">Visit website</a>
					|
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="user.php">
							<img alt="Users" src="img/m-users.png">
							<span>Users</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					<li>
						<a href="aboutus.php">
							<img alt="Articles" src="img/m-articles.png">
							<span>About Us</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					<li>
						<a class="active" href="message.php">
							<img alt="Newsletter" src="img/m-newsletter.png">
							<span>Comments</span>
						</a>
					</li>
					<li>
						<a href="rooms.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Rooms</span>
						</a>
					</li>
					<li>
						<a href="roominventory.php">
							<img alt="Custom" src="img/m-custom.png">
							<span>Room Inventory</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					Addres:<br>
					<form action="updateaddress.php" method="post">
					<?php
						include('connect.php');
						$result = mysqli_query("SELECT * FROM address");
						while($row = mysqli_fetch_array($result))
							{
								$addrss=$row['address'];
							}
						?>
					<textarea name="address" style="width:80%;">
						 <?php echo $addrss ?>
					</textarea>
					<br><input type="submit" value="Update"></form>
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7" width="15%"> Name </th>
								<th width="15%"> Email </th>
								<th width="25%"> Subject </th>
								<th width="45%"> Content </th>
							</tr>
						</thead>
						<tbody>
						<?php
						include('connect.php');
						$result = mysqli_query("SELECT * FROM message");
						while($row = mysqli_fetch_array($result))
							{
								echo '<tr class="record">';
								echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
								echo '<td><div align="left">'.$row['email'].'</div></td>';
								echo '<td><div align="left">'.$row['subject'].'</div></td>';
								echo '<td><div align="left">'.$row['message'].'</div></td>';
								echo '</tr>';
							}
						?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					2011-12 �
					<a class="afooter-link" href="">TurboAdmin 1.1</a>
					by
					<a class="afooter-link" href="">Begie</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	
</body>
</html>