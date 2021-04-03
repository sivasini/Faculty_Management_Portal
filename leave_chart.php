 <?php session_start();
  if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
  $_SESSION['userid']=$_SESSION['userid'];
  $_SESSION['passw']=$_SESSION['passw'];
  $username=$_SESSION['userid'];
  include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
				<b><?php  
				$username=$_SESSION['userid'];
				
				$sql = "select * from faculty, login where (login.Fac_ID='$username' || login.mobile='$username') && login.Fac_ID=faculty.Fac_ID ";
				$result=mysqli_query($con,$sql);
		        $row=mysqli_fetch_assoc($result);
				
				echo $row['Name'];				?></b>
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
			<li class="nav-item">
				<a class="nav-link">
      				<i class="fa fa-bell" aria-hidden="true"></i>
   				 </a>
   			<li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					
          <img src="<?php echo $row['image_path'] ?>" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li class="dropdown-menu-item">
							<a href="settings.php" class="dropdown-menu-link">
								<div>
									<i class="fa fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="logout.php" class="dropdown-menu-link">
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
				<a href="profile.php" class="sidebar-nav-link active">
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
				<a href="index.php" class="sidebar-nav-link">
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
  	
	<div class="wrapper">
		<div class="row">
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
							//Based on the login change the faculty id
							$query = "SELECT * FROM attendance WHERE Fac_ID LIKE '$username'  and start_date >'2020-06-04' Order by start_date desc";
							$query_run = mysqli_query($con,$query);
							//if possible maintain the course start date as a session variable
							$query1 = "SELECT type,DATEDIFF(end_date,start_date) AS dy FROM attendance WHERE Fac_ID LIKE '$username' and start_date >'2020-06-04' and status like 'Accepted'";
							$query_run1 = mysqli_query($con,$query1);

			
									if($query_run1)
								{	
									$presentdays = $days;
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
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Percentage of leave taken
						</h3>
						
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
	</div>
</div>
			</div>
		</div>
	</div>

<div class="fixed-action-btn">
	  <a href="index.php" class="btn-floating btn-large blue">
	    <i class="large material-icons">→</i>
	  </a>
</div>
<script src='leave_summary.js'></script>

	
</body>
</html>