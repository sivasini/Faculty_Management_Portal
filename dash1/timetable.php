<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
  $_SESSION['userid']=$_SESSION['userid'];
  $_SESSION['passw']=$_SESSION['passw'];
  include('db.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>


	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="timetable.css">
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
				<a href="timetable.php" class="sidebar-nav-link active">
					<div>
						<i class="fa fa-calendar"></i>
					</div>
					<span class='span'>
						Schedule
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="profile.php" class="sidebar-nav-link">
					<div>
						<i class="fa fa-user"></i>
					</div>
					<span class='span'>My profile</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="courses_main.php" class="sidebar-nav-link">
					<div>
						<i class="fa fa-cubes"></i>
					</div>
					<span class='span'>My Courses</span>
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
				<a href="gatepass_fac.php" class="sidebar-nav-link">
					<div>
						<i class="fa fa-home"></i>
					</div>
					<span class='span'>Gatepass</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="help.php" class="sidebar-nav-link">
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

    <div class="col-5 col-m-12 col-sm-12" >
      <div class="card">
        <div class="card-header">
          <h1>
            Academic Calendar
          </h1>
        </div>

    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23B39DDB&amp;ctz=Asia%2FKolkata&amp;src=b3E0Y25qYXVvcWJnM2NlN3Q5Z3QxZXBlMzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23E4C441&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=1&amp;showTz=0&amp;showCalendars=0"
    style="margin-left:1vw;" width="700" height="580" frameborder="0" scrolling="no"></iframe>
  </div>
</div>

			<div class="col-7 col-m-12 col-sm-12" id='timetable'>
				<div class="card">
					<div class="card-header">
						<h1>
							Timetable
						</h1>
          <!--  <i><a href="#" class="fancy-button bg-gradient1"><span>Edit Profile</span></a></i>-->
 </div>

 <?php
	                              $s="Select * from timetable,login where (login.Fac_ID='$username' || login.mobile='$username') && login.Fac_ID=timetable.Fac_ID ORDER BY day_no ASC ";
		                            $res=mysqli_query($con,$s);
		                            $check=mysqli_num_rows($res);
									//faculty.Fac_ID, faculty.Name,faculty.email_id,faculty.qualification,faculty.position,faculty.interest,faculty.address,faculty.dept,login.mobile
									?>

					<div class="card-content">
						<table>
              <?php
              date_default_timezone_set('Asia/Kolkata');
              $time=(int)date("H");
              $date = date("Y-m-d");
              $day = date("l", strtotime($date));

              if($time>=17){
                $sql="update timetable set meet_name='',starttime='',endtime='',reason='',meet_link='' where day='$day';";
                if(mysqli_query($con, $sql)){
                  echo '';
                }

              }
              ?>
                <thead>
                  <tr>
                    <th width=1% style='font-weight:bold;'>Day</th>
                    <th width=3%>9 - 10 AM</th>
                    <th width=3%>10 - 11 AM</th>
                    <th width=8%>11 AM - 12 PM</th>
                    <th width=8%>12 - 1 PM</th>
                    <th width=3%>1 - 2 PM</th>
                    <th width=3%>2 - 3 PM</th>
                    <th width=5%>Meeting</th>
                  </tr>
                </thead>
                <tbody class='timetable'>
                 <?php while($row=mysqli_fetch_assoc($res)):?>

                     <tr>
                       <td style="font-weight:bold;background-color:#689A85;color:#fff"><?php echo $row['day']; ?></td>

                       <td><a href="<?php echo $row['p1_meet_link']?>"><?php echo $row['p1room']; ?><br><?php echo $row['p1_cid']; ?><br><?php echo $row['p1_cname']; ?></a></td>
                       <td><a href="<?php echo $row['p2_meet_link']?>"><?php echo $row['p2room']; ?><br><?php echo $row['p2_cid']; ?><br><?php echo $row['p2_cname']; ?></a></td>
                       <td><a href="<?php echo $row['p3_meet_link']?>"><?php echo $row['p3room']; ?><br><?php echo $row['p3_cid']; ?><br><?php echo $row['p3_cname']; ?></a></td>
                       <td style="font-weight:bold;">Lunch</td>
                       <td><a href="<?php echo $row['p4_meet_link']?>"><?php echo $row['p4room']; ?><br><?php echo $row['p4_cid']; ?><br><?php echo $row['p4_cname']; ?></a></td>
                       <td><a href="<?php echo $row['p5_meet_link']?>"><?php echo $row['p5room']; ?><br><?php echo $row['p5_cid']; ?><br><?php echo $row['p5_cname']; ?></a></td>
                       <td style="background:rgb(255,255,255,0.6);"><a href="<?php echo $row['meet_link']?>"><?php echo $row['meet_name']; ?><br><?php echo $row['starttime']; ?>-<?php echo $row['endtime'];?><br><?php echo $row['reason'];?></a></td>
                       <tr>


                  <?php endwhile;?>
                  </tbody>
                </table>



					</div>

			</div>
		</div>


	</div>

</div>

<script src='profile.js'></script>


</body>
</html>
