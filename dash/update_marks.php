<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
  $username=$_SESSION['userid'];
  $Course_ID = $_GET['Course_ID'];
  include('db.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Marks</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="leave.css">

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

</head>
<body>
	<!-- navbar -->
	<div class="page-content">
        <!-- Apply Leave Form -->
        <div class=" container card pmd-card single-col-form" style="margin-left:250px;">
            <form id="apply-leave" method="post" action="update_marks2.php?Course_ID=<?php echo $Course_ID ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="leave-type" for="type">Student ID</label>
                                <select name="studentid" id="studentid" class="form-control" title="Select Student ID" style="width:90%;max-height:70px;" onfocus='this.size=10;' onblur='this.size=1;'
        onchange='this.size=1; this.blur();' required>
                                    <option></option>
                                  <?php
                                  $s="Select * from $Course_ID";
                                  $res=mysqli_query($con,$s);
                                  $check=mysqli_num_rows($res);

                                   while($row=mysqli_fetch_assoc($res)):?>
                                    <option><?php echo $row['Stud_ID']?></option>
                                    <?php endwhile;?>
                                </select>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group">
                                <label for="leave-type" for="type">Assessment Type</label>
                                <select name="type" id="type" class="form-control" title="Assessment Type" style="width:90%;max-height:70px;" onfocus='this.size=10;' onblur='this.size=1;'
        onchange='this.size=1; this.blur();' required>
        <option></option>
        <option>Assignment#1</option>
        <option>Assignment#2</option>
        <option>Assignment#3</option>
        <option>Quiz#1</option>
        <option>Quiz#2</option>
        <option>Quiz#3</option>
        <option>Periodicals#1</option>
        <option>Periodicals#2</option>



                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label" for="start_date">Mark</label>
                                <input type="number" min="0" max="50" class="form-control" id="mark" name="mark" autocomplete="Off" >
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit"  class="btn btn-primary pmd-ripple-effect pmd-btn-raised" name="applyleave" value="Apply Leave">Update</button>
                    <input type='button' value='CANCEL' onclick="window.location.href='course_marklist.php?Course_ID=<?php echo $Course_ID?>'" class="btn btn-outline-secondary">
                </div>
            </form>

        </div>
    </div>
</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script></script>

</body>

</html>
