<!DOCTYPE html>
<html>
<head>
	<title>Leave Form</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="leave.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
</head>
<body>
	<!-- navbar -->
	<div class="page-content">
        <!-- Apply Leave Form -->
        <div class=" container card pmd-card single-col-form">
            <form id="apply-leave" method="post" action="test_form.php">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label ">
                                <label for="leave-type" for="type">Leave Type</label>
                                <select name="leave-type" id="leave-type" class="form-control" title="Please select a Leave Type" required>
                                    <option></option>
                                    <option>Sick Leave</option>
                                    <option>On Duty</option>
                                    <option>Maternity Leave</option>
                                    <option>Paid leave</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label class="control-label" for="start_date">Start Date</label>
                                <input type="text" class="form-control" id="datepicker" name="start_date" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label class="control-label" for="end_date">End Date</label>
                                <input type="text" class="form-control" id="datepicker1" name = "end_date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="Reason" >Reason</label>
                                <textarea class="form-control" id="reason" name="reason"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary pmd-ripple-effect pmd-btn-raised" name="applyleave" value="Apply Leave">Apply Leave</button> 
                    <input type='button' value='CANCEL' onclick="self.close()" class="btn btn-outline-secondary pmd-ripple-effect">
                </div>
            </form>
            
        </div>
    </div>
</div>
<script type="text/javascript" src="leave.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
</body>

</html>

