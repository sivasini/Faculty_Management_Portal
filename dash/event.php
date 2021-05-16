<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    header('location:login.php');
  }
  $username=$_SESSION['userid'];
  include('db.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add meeting</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="leave.css">

<link rel='stylesheet' type="text/css" href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css">

</head>
<body>
	<!-- navbar -->
	<div class="page-content">
        <!-- Apply Leave Form -->
        <div class=" container card pmd-card single-col-form">
            <form id="apply-leave" method="post" action="event_insert.php">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group  ">
                                <label for="leave-type" for="type">Meeting Name</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="control-label" for="start_date">Start Time</label>
                                <input type="text" class="form-control" name="stime" required>



                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="end_date">End Time</label>
                                  <input type="text"  class="form-control" name="etime" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group ">
                                <label for="Reason" >Description</label>
                                <textarea class="form-control" id="reason" name="reason" required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group ">
                                <label for="link" >Meeting Link</label>
                                <textarea class="form-control" id="link" name="link" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit"  class="btn btn-primary pmd-ripple-effect pmd-btn-raised" name="applyleave" value="Apply Leave">Add meeting</button>
                    <input type='button' value='CANCEL' onclick="window.location.href = 'htimetable.php'" class="btn btn-outline-secondary ">
                </div>
            </form>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>

    <script>
    $("input[name=stime]").clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  default: 'now',
  donetext: "Select",
  init: function() {
                            console.log("colorpicker initiated");
                        },
                        beforeShow: function() {
                            console.log("before show");
                        },
                        afterShow: function() {
                            console.log("after show");
                        },
                        beforeHide: function() {
                            console.log("before hide");
                        },
                        afterHide: function() {
                            console.log("after hide");
                        },
                        beforeHourSelect: function() {
                            console.log("before hour selected");
                        },
                        afterHourSelect: function() {
                            console.log("after hour selected");
                        },
                        beforeDone: function() {
                            console.log("before done");
                        },
                        afterDone: function() {
                            console.log("after done");
                        }
});

$("input[name=etime]").clockpicker({
placement: 'bottom',
align: 'left',
autoclose: true,
default: 'now',
donetext: "Select",
init: function() {
                        console.log("colorpicker initiated");
                    },
                    beforeShow: function() {
                        console.log("before show");
                    },
                    afterShow: function() {
                        console.log("after show");
                    },
                    beforeHide: function() {
                        console.log("before hide");
                    },
                    afterHide: function() {
                        console.log("after hide");
                    },
                    beforeHourSelect: function() {
                        console.log("before hour selected");
                    },
                    afterHourSelect: function() {
                        console.log("after hour selected");
                    },
                    beforeDone: function() {
                        console.log("before done");
                    },
                    afterDone: function() {
                        console.log("after done");
                    }
});

</script>

</body>

</html>
