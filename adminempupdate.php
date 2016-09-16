<?php 
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Employee Documents</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/shop-item.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
		.checkbox-control{
		    width: 15px;
		    height: 15px;
    		display: initial;
		    padding: 6px 12px;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #555;
		    background-color: #fff;
		    background-image: none;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		   }
		#date{
			background: url(c.png) #fff no-repeat;
			padding-left:30px;
		}
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CYBER NET EMPLOYEMENT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FORMS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="signup.php">Signup form</a></li>
                            <li class=""><a href="login.php">Login Form</a></li>
                            <li class=""><a href="newmeeting.html">Meeting Room Creating</a></li>
                            <!--li class=""><a href="listroom.php">Inserted Meeting Room</a></li-->
                            <li class=""><a href="newbooking.php">Book Meeting Room</a></li>
                            <li class=""><a href="adminbookings.php">Admin View Bookings</a></li>
                            <li class=""><a href="downloadform.php">List Filled Form</a></li>
                            <!--li class=""><a href="listbookings.php">Bookings</a></li-->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PDF FORMS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="hr/form1.html">FORM 1</a></li>
                            <li class=""><a href="hr/form2.html">FORM 2</a></li>
                            <li class=""><a href="hr/form3.html">FORM 3</a></li>
                            <li class=""><a href="hr/form4.html">FORM 4</a></li>
                            <li class=""><a href="hr/form5.html">FORM 5</a></li>
                            <li class=""><a href="hr/form6.html">FORM 6</a></li>
                            <li class=""><a href="hr/form8.html">FORM 8</a></li>
                            <li class=""><a href="hr/form9.html">FORM 9</a></li>
                            <li class=""><a href="hr/form10.html">FORM 10</a></li>
                            <li class=""><a href="hr/form11.html">FORM 11-(2 pages)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        	<div class="col-md-12">
				<p class="lead" align="middle">EMPLOYEE INFORMATION</p>
				<form action="insertofficeuse.php?id=<?php echo $id;?>" method="post">
                    <div class="row">
                    <!--Info-->
                    	<div class="col-md-12 well" id="form1">
						<legend>Employee Post Information</legend>
                    		<div class="col-md-6">
							<div class="form-group">
							<label class="col-sm-3 control-label">Location:</label>
                       			<div class="col-md-9">
	                       			<select name="location" class="form-control" style="width:45%;" required>
	                       				<option value=""></option>
	                       				<option value="Karachi">Karachi</option>
	                       				<option value="Lahore">Lahore</option>
	                       				<option value="Multan">Multan</option>
	                       			</select><br/>
                    			</div>
                    		</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Department:</label>
                    			<div class="col-md-9">
									<select name="dept" class="form-control" style="width:45%;" required>
	                       				<option value=""></option>
	                       				<option value="Software">Software</option>
	                       				<option value="Logistics">Logistics</option>
	                       				<option value="Marketing">Marketing</option>
	                       				<option value="Quality Assurance">Quality Assurance</option>
	                       				<option value="Database Administrator">Database Administrator</option>
	                       			</select><br/>
                       			</div>
                       		</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Applied For:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="applied" pattern="[A-Za-z ]+" placeholder="Software Developer" title="Only Alphabets" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Reports To:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="reports" pattern="[A-Za-z ]+" title="Only Alphabets" placeholder="Javed Iqbal" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Referred By:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="referred" pattern="[A-Za-z ]+" title="Only Alphabets" placeholder="Junaid Ansari" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label"><u>Salary</u></label>
								<div class="col-sm-8"><br/><br/></div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Proposed Before:</label>
                    				<div class="col-md-9">
									<input type="number" class="form-control" name="salary_before"  pattern="\d+" min=0 style="width:45%;" data-toggle="tooltip" title="Recommended Salary" required/><br/>
                       				</div>
                       		</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Proposed After:</label>
                       				<div class="col-md-9">
									<input type="number" class="form-control" name="salary_after"  pattern="\d+" min=0 style="width:45%;" data-toggle="tooltip" title="Recommended Salary After Probabtion" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Confirmed:</label>
                       				<div class="col-md-9">
									<input type="number" class="form-control" name="salary_confirmed"  pattern="\d+" min=0 style="width:45%;" data-toggle="tooltip" title="Confirmed Salary" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">In Words:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="salary_words" pattern="[A-Za-z ]+" title="Salary in Words" data-toggle="tooltip" required/><hr/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Bank:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="bank" pattern="[A-Za-z ]+" title="Only Alphabets" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Account#</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="account" pattern="[\d-]+" title="Only Alphabets" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Benefits:</label>
                       				<div class="col-md-9">
									<input type="text" class="form-control" name="benefits" pattern="[A-Za-z ]+" title="Other Recommended Benefits" data-toggle="tooltip" required/><br/></div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<label class="col-sm-3 control-label">Probationary Period:</label>
                       				<div class="col-md-9">
									<input type="number" class="form-control" name="prob_period"  pattern="\d+"  style="width:25%;display:inline;" required/> Months<br/><br/></div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Expected Joining Date:</label>
									<div class="col-md-9">
										<input type="date" class="form-control" name="join_date"  id="date" style="width:45%" required/><br/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Interviewer Name:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="interv_name" pattern="[A-Za-z ]+" title="Only Alphabets" placeholder="Mark Zuckerberg" required/>
									<br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Interviewer Designation:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="interv_desig" pattern="[A-Za-z ]+" title="Only Alphabets" placeholder="CEO" required/>
									<br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Incharge Name:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="incharge_name" pattern="[A-Za-z ]+" title="Only Alphabets" placeholder="Shabeer" required/>
									<br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Incharge Designation:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="incharge_desig" pattern="[A-Za-z ]+" title="Only Alphabets" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Company:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="company" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="Lakson Business Solution" required/>
									<br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee Designation:</label>
									<div class="col-md-9">
									<input type="text" class="form-control" name="employee_desig" pattern="[A-Za-z ]+" title="Only Alphabets" required/>
									<br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Notice Period:</label>
									<div class="col-md-9">
									<input type="number" class="form-control" name="notice_period" pattern="\d+" min=0 style="width:45%;" title="Numbers only" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Telex#</label>
									<div class="col-md-9">
									<input type="number" class="form-control" name="telex"  pattern="\d+" min=0 style="width:45%;" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Fax#</label>
									<div class="col-md-9">
									<input type="number" class="form-control" name="fax"  pattern="\d+" min=0 style="width:45%;" required/><br/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Remarks:</label>
									<div class="col-md-9">
									<textarea name="remarks" style="resize:none;" class="form-control" title="Remarks of Payroll Department" data-toggle="tooltip" required></textarea><br/>
									</div>
							</div>
							<div class="form-group">
									<div class="col-md-12">
									<div class="text-right">
										<input type="submit" class="btn btn-success" id="submit" value="Submit" name="btn_submit"/>
										</div>
									</div>	
                        	</div>
                        	</div>
                        	</div>
                    <!--Info End-->
					</div>
					<!--LAST ROW-->
				</form>
			</div>
		</div>
	</div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
?>