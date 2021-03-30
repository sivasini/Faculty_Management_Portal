<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="leave_summary.css">
	<style type="text/css">
		.butn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}
	</style>
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
			<li class="nav-item">
				<a class="nav-link">
      				<i class="fa fa-bell" aria-hidden="true"></i>
   				 </a>
   			<li>
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
	<?php
							$query = "SELECT * FROM Attendance WHERE fac_id LIKE 'FAC0035'  and start_date >'2020-06-04' Order by start_date desc";
							$query_run = mysqli_query($connection,$query);

							$query1 = "SELECT type,DATEDIFF(end_date,start_date) AS dy FROM Attendance WHERE fac_id LIKE 'FAC0035' and start_date >'2020-06-04' and status like 'Accepted'";
							$query_run1 = mysqli_query($connection,$query1);
	?>
							<!-- $connection =mysqli_connect("localhost","root","","faculty_dashboard");
							$db = mysqli_select_db($connection,'faculty_dashboard');
							$query = "SELECT * FROM leave_details WHERE faculty_id LIKE '1' ORDER BY date DESC";
							$query_run = mysqli_query($connection,$query); -->
							
	<div class="wrapper avt-wrapper">
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card ">
					<div class="card-header">
						<h3>
							Leave Application Summary
						</h3>
					</div>
					<div class="card-header">
						<table>
							<thead>
								<tr>
									<th>Serial Number</th>
									<th>Type of leave</th>
									<th></th>
									<th></th>
									<th>Start date</th>
									<th>End date</th>
									<th></th>
									<th></th>
									<th></th>

									<th>Reason</th>

									
									<th></th>
									<th></th>
									<th>Status</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
						</table>
	<!-- <div class="row1" id="myItems">
    <div class="col-sm-12 mb-3">
        <div class=" row"> 
          <h3 class="mb-2 col-sm-2 text-muted">Serial Number</h3>
          <h3 class="card-title col-sm-2 ">Type of leave</h3>
          <h3 class=" mb-2 text-muted col-sm-2">No. of days</h3>
          <h3 class=" mb-2  text-muted col-sm-2">Status</h3>
		  <h3 class=" col-sm-4">Date</h3>
        </div>
      </div> -->

  <div class="row1">
  	
    <div class="col-12 mb-3">

      <input type="text" id="myFilter" class="wo form-control" onkeyup="myFunction()" placeholder="Search by type of Leave">
    </div>
  
  </div>
  

  <?php
  	$i=0;
	if($query_run)
    {
		foreach($query_run as $row)
			{
			$i=$i+1
   ?>
  <!-- <div class="row1" id="myItems">
    <div class="col-sm-12 mb-3">
      <div class="card">
        <div class="card-body row">
 
								<tr>
									<td class="mb-2 col-sm-2 text-muted"><?php echo $i;?></td>
									<td class="card-title col-sm-2"><?php echo $row['type']; ?></td>
									<td class=" mb-2 text-muted col-sm-2"><?php echo $row['start_date']; ?></td>
									<td class=" mb-2  text-muted col-sm-2"><?php echo $row['end_date']; ?></td>
									<td class=" col-sm-4"> <?php echo $row['status']; ?></td>
								</tr>					
							
        </div>
      </div> -->

  <div class="row1" id="myItems">
    <div class="col-sm-12 mb-3">
      <div class="card">
        <div class="card-body row1">
          <h5 class="card-subtitle col-2 mb-2 text-muted"><?php echo $i;?></h5>
          <h5 class="card-title col-2 "><a href="#"><?php echo $row['type']; ?></a></h5>
          <h5 class="card-subtitle col-1 mb-2 text-muted"><?php echo $row['start_date']; ?></h5>
          <h5 class="card-subtitle mb-2 col-1 text-muted"><?php echo $row['end_date']; ?></h5>
          <h5 class="card-text col-3"> <?php echo $row['reason']; ?></h5>
       	  <h5 class="card-text col-1"> <?php echo $row['status']; ?></h5>
       	  <?php
       	  if($row['status'] == 'Pending' || $row['status'] == 'Accepted'){
       	  ?>
       	  <h5><a href="delete_application.php?start_date=<?php echo $row['start_date']; ?>">Delete</a></h5>
       	  <?php
       		   }
       	  ?>
		  <!-- <button class="card-text col-1" onclick="<?php 
			
		  		$a = $row['start_date'];
		  		echo $a;
		  		$connection =mysqli_connect("localhost","root","","faculty_dashboard");
				$db = mysqli_select_db($connection,'faculty_dashboard');
				$query2= "DELETE FROM Attendance WHERE start_date = $a";
				$query_run = mysqli_query($connection,$query2);
				header("refresh: 1");

		  ?>">Cancel</button> -->
    </div>
      </div>

      <?php
	}
		}
	else
		{
		echo "No Record Found";
		}
  ?>
      </div>      
    </div>    
  </div>
</div>
</div>
					
				</div>
			</div>
			</div>

			
			
			<a href="leave.php" class="float">
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

	
</body>
</html>

