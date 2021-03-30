<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>



	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="leave_summary.css">

</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fa fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item faculty">
				<b>Faculty_Name</b>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="Search..">
			<i class="fa fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fa fa-moon-o dark"></i>
				</a>
			</li>
			<li>
				<div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link">
      				<i class="fa fa-bell" aria-hidden="true"></i>
   				 </a>
   			<li>
   			<li>
   				<div>
				</div>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					
          <img src="https://randomuser.me/api/portraits/women/71.jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fa fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fa fa-sign-out"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-calendar"></i>
					</div>
					<span class='span'>
						Schedule
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-user"></i>
					</div>
					<span class='span'>My profile</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-bell"></i>
					</div>
					<span class='span'>Notifications</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link active">
					<div>
						<i class="fa fa-th-list"></i>
					</div>
					<span class='span'>Attendance</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-home"></i>
					</div>
					<span class='span'>Gatepass</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fa fa-question-circle"></i>
					</div>
					<span class='span'>Help</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- main content -->
	<?php
							$connection =mysqli_connect("localhost","root","","faculty_dashboard");
							$db = mysqli_select_db($connection,'faculty_dashboard');
	?>
	<div class="wrapper">
		<div class="row">
			<?php
							//Based on the login change the faculty id
							$query = "SELECT * FROM Attendance WHERE fac_id LIKE 'FAC0035'  and start_date >'2020-06-04' Order by start_date desc";
							$query_run = mysqli_query($connection,$query);
							//if possible maintain the course start date as a session variable
							$query1 = "SELECT type,DATEDIFF(end_date,start_date) AS dy FROM Attendance WHERE fac_id LIKE 'FAC0035' and start_date >'2020-06-04' and status like 'Accepted'";
							$query_run1 = mysqli_query($connection,$query1);
			?>
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Attendance
						</h3>
						<a href="leave_summary.php">
							<?php
						$start = new DateTime('2020-06-04');
							$end = new DateTime('now');
							// otherwise the  end date is excluded
							$end->modify('+1 day');

							$interval = $end->diff($start);

							// total days
							$days = $interval->days;

							// create an iterateable period of date (P1D equates to 1 day)
							$period = new DatePeriod($start, new DateInterval('P1D'), $end);

							// best stored as array, so you can add more than one
							$holidays = array('2012-09-07');

							foreach($period as $dt) {
							    $curr = $dt->format('D');

							    // substract if Saturday or Sunday
							    if ($curr == 'Sat' || $curr == 'Sun') {
							        $days--;
							    }

							    // (optional) for the updated question
							    elseif (in_array($dt->format('Y-m-d'), $holidays)) {
							        $days--;
							    }
							}
						?>
						<?php
								if($query_run1)
								{	$presentdays = $days;
									$ODleave =$ODleaveref = 20;
									$sickleave =$sickleaveref = 15;
									$casualleave =$casualleaveref = 20;
									$paidleave =$paidleaveref = 10;
									foreach($query_run1 as $row)
									{
										$presentdays = $presentdays - $row['dy'];
										if($row['type'] == 'On Duty'){
											$ODleave = $ODleave - $row['dy'];
										}
										if($row['type'] == 'Sick Leave'){
											$sickleave = $sickleave - $row['dy'];
										}
										if($row['type'] == 'Casual Leave'){
											$casualleave = $casualleave - $row['dy'];
										}
										if($row['type'] == 'Paid Leave'){
											$paidleave = $paidleave - $row['dy'];
										}
									}
								}
									
							?>
						<i>
							<?php echo $presentdays;?>/<?php echo $days;?>
						</i>
						
						
						
					</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Percentage of leave taken
						</h3>
						<i class="fa fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								On Duty 
								<span class="float-right"><?php
									if((($ODleaveref-$ODleave)/$ODleaveref)*100 > 80)
									{
										$alertod = 'bg-danger';
									}
									echo (($ODleaveref-$ODleave)/$ODleaveref)*100;
								?>
									%
								</span>
							</p>
							<div class="progress">
								<?php
								if((($ODleaveref-$ODleave)/$ODleaveref)*100 > 80){
									?>
										<div class="progress-bar  bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($ODleaveref-$ODleave)/$ODleaveref)*100; ?>%"></div>
									<?php }
								else{ ?>
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($ODleaveref-$ODleave)/$ODleaveref)*100; ?>%"></div>
							<?php } ?>
							</div>
						</div>
						<hr>
						<div class="progress-wrapper">
							<p>
								Sick Leave
								<span class="float-right"><?php
									echo (($sickleaveref-$sickleave)/$sickleaveref)*100;
								?>
									%</span>
							</p>
							<div class="progress">
								<?php
								if((($sickleaveref-$sickleave)/$sickleaveref)*100 > 80){
									?>
										<div class="progress-bar bt-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($sickleaveref-$sickleave)/$sickleaveref)*100; ?>%"></div>
									<?php }
								else{ ?>
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($sickleaveref-$sickleave)/$sickleaveref)*100; ?>%"></div>
								<?php } ?>
							</div>
						</div>
						<hr>
						<div class="progress-wrapper">
							<p>
								Casual Leave
								<span class="float-right"><?php
									echo (($casualleaveref-$casualleave)/$casualleaveref)*100;
								?>
									%</span>
							</p>
							<div class="progress">
								<?php
								if((($casualleaveref-$casualleave)/$casualleaveref)*100 > 80){
									?>
										<div class="progress-bar bt-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($casualleaveref-$casualleave)/$casualleaveref)*100; ?>%"></div>
									<?php }
								else{ ?>
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($casualleaveref-$casualleave)/$casualleaveref)*100; ?>%"></div>
							  <?php } ?>
							</div>
						</div>
						<hr>
						<div class="progress-wrapper">
							<p>
								Paid Leave
								<span class="float-right"><?php
									echo (($paidleaveref-$paidleave)/$paidleaveref)*100;
								?>
									%</span>
							</p>
							<div class="progress">
								<?php
								if((($paidleaveref-$paidleave)/$paidleaveref)*100 > 80){
									?>
										<div class="progress-bar bt-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($paidleaveref-$paidleave)/$paidleaveref)*100; ?>%"></div>
									<?php }
								else{ ?>
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($paidleaveref-$paidleave)/$paidleaveref)*100; ?>%"></div>
							  <?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
						
			
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card ">
					<div class="card-header">
						<h3>
							Leave Application Summary
						</h3>
						<a href="leave_summary.php">
						<i class="fa fa-ellipsis-h"></i>
					</a>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>Type of leave</th>
									<th>Start date</th>
									<th>End date</th>
									<th>Status</th>
								</tr>
							</thead>
							<?php
								if($query_run)
								{
									foreach($query_run as $row)
									{
								
									
							?>
							<tbody>
								<tr>
									<td><?php echo $row['type']; ?></td>
									<td><?php echo $row['start_date']; ?></td>
									<td><?php echo $row['end_date']; ?></td>
									<td> <?php echo $row['status']; ?></td>
								</tr>			
							</tbody>
							<?php
									}
								}
								
								else
								{
									echo "No Record Found";
								}

							?>
						</table>
					</div>
				</div>
				</div>
			<a href="leave.php" target="_blank" rel="noopener noreferrer" class="float">
				<i class="fa fa-ellipsis-h my-float"></i>
			</a>
			<div class="label-container">
			<div class="label-text">Apply for Leave</div>
				<i class="fa fa-play label-arrow"></i>
			</div>
		</div>
	</div>



	<!-- end main content -->

<script src='leave_summary.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</body>

</html>

