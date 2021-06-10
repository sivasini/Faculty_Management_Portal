<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
  $_SESSION['userid']=$_SESSION['userid'];
  $_SESSION['passw']=$_SESSION['passw'];
  include('db.php');
  $Course_ID = $_GET['Course_ID']
?>

<!DOCTYPE html>
<html>
<head>
	<title>Marklist</title>



	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="courses.css">

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
        <a href="htimetable.php" class="sidebar-nav-link">
          <div>
            <i class="fa fa-calendar"></i>
          </div>
          <span class='span'>
            Schedule
          </span>
        </a>
      </li>
      <li class="sidebar-nav-item">
        <a href="hprofile.php" class="sidebar-nav-link">
          <div>
            <i class="fa fa-user"></i>
          </div>
          <span class='span'>My profile</span>
        </a>
      </li>
      <li  class="sidebar-nav-item">
        <a href="hcourses_main.php" class="sidebar-nav-link active">
          <div>
            <i class="fa fa-cubes"></i>
          </div>
          <span class='span'>My Courses</span>
        </a>
      </li>
      <li  class="sidebar-nav-item">
        <a href="head_faculty.php" class="sidebar-nav-link">
          <div>
            <i class="fa fa-th-list"></i>
          </div>
          <span class='span'>Manage pass</span>
        </a>
      </li>
      <li  class="sidebar-nav-item">
        <a href="gatepass_hfac.php" class="sidebar-nav-link">
          <div>
            <i class="fa fa-home"></i>
          </div>
          <span class='span'>Gatepass</span>
        </a>
      </li>
      <li  class="sidebar-nav-item">
        <a href="hhelp.php" class="sidebar-nav-link">
          <div>
            <i class="fa fa-question-circle"></i>
          </div>
          <span class='span'>Help</span>
        </a>
      </li>
    </ul>
	</div>
	<?php
		$query = "SELECT * FROM courses where Fac_ID LIKE '$username'";
		$query_run = mysqli_query($con,$query);
	?>
	<!-- main content -->

	<div class="wrapper">
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card1 ">
					<div class="card-hea">
						<nav>
							<ul class="my-nav">
							<?php
								if($query_run)
								{
									foreach($query_run as $row)
									{


							?>
							<div class="dd" id="drop-down">
							  <span><?php echo $row['Course_ID'];?></span>
							  <label>
							    <input type="checkbox">
							    <ul>
							        <li><a href="hcourses_resources.php?Course_ID=<?php echo $row['Course_ID']?>">Resources</a></li>
		    						<li><a href="hcourses_exp.php?Course_ID=<?php echo $row['Course_ID']?>">Assignments</a></li>
		    						<li><a href="hcourse_marklist.php?Course_ID=<?php echo $row['Course_ID']?>">MarkList</a></li>
		    						<!-- <li role="separator" class="divider"></li> -->
							    </ul>
							  </label>
							</div>
							<?php
									}
								}

								else
								{
									echo "No Record Found";
								}

							?>
						</ul>
						</nav>
			</div>
		</div>
		</div>


			<div class="col-12 col-m-12 col-sm-12">
				<div class="card1 ">
					<div class="card-header">
						<h1><?php echo $Course_ID ?></h1>

            <?php
                                           $s="Select * from $Course_ID";
                                           $res=mysqli_query($con,$s);
                                           $check=mysqli_num_rows($res);
                             //faculty.Fac_ID, faculty.Name,faculty.email_id,faculty.qualification,faculty.position,faculty.interest,faculty.address,faculty.dept,login.mobile
                             ?>
            <div class="card-content">
  						<table class='marks'>
                  <thead>
                    <tr>
                      <th width=2% style='font-weight:bold;'>Student ID</th>
                      <th width=3%>Assignment#1</th>
                      <th width=3%>Assignment#2</th>
                      <th width=3%>Assignment#3</th>
                      <th width=3%>Quiz#1</th>
                      <th width=3%>Quiz#2</th>
                      <th width=3%>Quiz#3</th>
                      <th width=3%>Periodicals#1</th>
                      <th width=3%>Periodicals#2</th>
                      <th width=3%>Internals</th>
                    </tr>
                  </thead>
                  <tbody>

                   <?php while($row=mysqli_fetch_assoc($res)):?>

                       <tr>

                         <td style="font-weight:bold;"><?php echo $row['Stud_ID']; ?></td>
                         <td><?php $a1=$row['Assignment1'];echo $row['Assignment1']; ?>/10</td>
                         <td><?php $a2=$row['Assignment2'];echo $row['Assignment2']; ?>/10</td>
                         <td><?php $a3=$row['Assignment3'];echo $row['Assignment3']; ?>/10</td>
                         <td><?php $q1=$row['quiz1'];echo $row['quiz1']; ?>/10</td>
                         <td><?php $q2=$row['quiz2'];echo $row['quiz2']; ?>/10</td>
                         <td><?php $q3=$row['quiz3'];echo $row['quiz3']; ?>/50</td>
                         <td><?php $p1=$row['p1'];echo $row['p1']; ?>/50</td>
                         <td><?php $p2=$row['p2'];echo $row['p2']; ?>/70</td>
                         <?php
                         $internals=($a1+$a2+$a3+$q1+$q2+$q3+$p1+$p2)*0.4375;
                         $c1='#6BB996';
                         $c2='#F97F77';
                         $c3='#DFE26C';
                         $color='';
                         if($internals>60){
                           $color=$c1;
                         }
                         elseif($internals<=60 && $internals>=30){
                           $color=$c3;
                         }
                         else{
                           $color=$c2;
                         }
                         ?>
                         <td style="font-weight:bold;background-color:<?php echo $color ?>"><?php echo $internals; ?></td>
                         <tr>
                    <?php endwhile;?>
                    </tbody>
                  </table>

                  <a href="update_marks.php?Course_ID=<?php echo $Course_ID ?>" rel="noopener noreferrer" class='float'>
                    <i class='fa fa-edit my-float'></i>
                  </a>
                  <div class="label-container">
              			<div class="label-text">Update Marks</div>
              				<i class="fa fa-play label-arrow"></i>
              			</div>
              		</div>



  					</div>
					</div>
				</div>
			</div>
		</div>
</div>










	<!-- end main content -->

<script src='leave_summary.js'></script>
<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
