<?php include_once('assets/php/header.php'); ?>
<?php
session_start();
if(isset($_SESSION['id'])){
if(isset($_POST['edit'])){
	require('injectionstop.php');
	$inj=new injectionstop();
	$first_name = $inj->check($_POST['first_name']);
	$middle_name = $inj->check($_POST['middle_name']);
	$last_name = $inj->check($_POST['last_name']);
	$father_first_name = $inj->check($_POST['father_first_name']);
	$father_middle_name = $inj->check($_POST['father_middle_name']);
	$father_last_name = $inj->check($_POST['father_last_name']);
	$father_occupation = $inj->check($_POST['father_occupation']);
	$gender = $inj->check($_POST['gender']);
	$dob = $inj->check($_POST['dob']);
	$pob = $inj->check($_POST['pob']);
	$present_address = $inj->check($_POST['present_address']);
	$permenent_address = $inj->check($_POST['permenent_address']);
	$phone = $inj->check($_POST['phone']);
	$cell = $inj->check($_POST['cell']);
	$emergency = $inj->check($_POST['emergency']);
	$nic = $inj->check($_POST['nic']);
	$martial = $inj->check($_POST['martial']);
	$nationality = $inj->check($_POST['nationality']);
	$qualification = $inj->check($_POST['qualification']);
	$yop = $inj->check($_POST['yop']);
	$grade = $inj->check($_POST['grade']);
	$subject = $inj->check($_POST['subject']);
	$board = $inj->check($_POST['board']);
	$qualification_2 = $inj->check($_POST['qualification_2']);
	$yop_2 = $inj->check($_POST['yop_2']);
	$grade_2 = $inj->check($_POST['grade_2']);
	$subject_2 = $inj->check($_POST['subject_2']);
	$board_2 = $inj->check($_POST['board_2']);
	$course = $inj->check($_POST['course']);
	$duration = $inj->check($_POST['duration']);
	$subjects = $inj->check($_POST['subjects']);
	$institute = $inj->check($_POST['institute']);
	$course_2 = $inj->check($_POST['course_2']);
	$duration_2 = $inj->check($_POST['duration_2']);
	$subjects_2 = $inj->check($_POST['subjects_2']);
	$institute_2 = $inj->check($_POST['institute_2']);
	$employer = $inj->check($_POST['employer']);
	$designation = $inj->check($_POST['designation']);
	$period = $inj->check($_POST['period']);
	$pay = $inj->check($_POST['pay']);
	$reason = $inj->check($_POST['reason']);
	$employer_2 = $inj->check($_POST['employer_2']);
	$designation_2 = $inj->check($_POST['designation_2']);
	$period_2 = $inj->check($_POST['period_2']);
	$pay_2 = $inj->check($_POST['pay_2']);
	$reason_2 = $inj->check($_POST['reason_2']);
	$religion = $inj->check($_POST['religion']);
	$dependents = $inj->check($_POST['dependents']);
	
}
?>
<div class="container"> <!-- Page Content -->
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="employeeform_review.php" method="post">
				<div class="row">
				<!--Personal Info-->
					<div class="col-md-12 well" id="form1">
						<legend>Personal Information</legend>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-sm-3 control-label">Employee Name:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="first_name" id="first_name" value="<?php if(isset($_POST['edit']))echo $first_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="First Name" style="width:32%;display:inline;"/>
									<input type="text" class="form-control" name="middle_name" id="middle_name" value="<?php if(isset($_POST['edit']))echo $middle_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="Middle Name" style="width:32%;display:inline;"/>
									<input type="text" class="form-control" name="last_name" id="last_name" value="<?php if(isset($_POST['edit']))echo $last_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="Last Name" style="width:32%;display:inline;"/>
								</div>
							</div>
							<div class="form-group">	
								<div class="col-md-3"><label>Father name:</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="father_first_name" id="father_first_name" value="<?php if(isset($_POST['edit']))echo $father_first_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="First Name" style="width:32%;display:inline;"/>
									<input type="text" class="form-control" name="father_middle_name" id="father_middle_name" value="<?php if(isset($_POST['edit']))echo $father_middle_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="Middle Name" style="width:32%;display:inline;"/>
									<input type="text" class="form-control" name="father_last_name" id="father_last_name" value="<?php if(isset($_POST['edit']))echo $father_last_name;?>" pattern="[A-Za-z]+" title="Only Alphabets" placeholder="Last Name" style="width:32%;display:inline;"/>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3"><label>Gender:</label></div>
								<div class="col-md-9">
									<div class="row">
										<div class="col-md-3">
											<input type="radio" name="gender" value="Male" class="checkbox-control" checked /> Male
										</div>
										<div class="col-md-3">
											<input type="radio" name="gender" value="Female" class="checkbox-control" /> Female
										</div>
									</div>
									<br/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Date of birth:</label>
								<div class="col-md-9">
								<input type="date" class="form-control" name="dob" id="dob" value="<?php if(isset($_POST['edit']))echo $dob;?>" style="width:45%;" id="date"/>
								</div>
							</div>	
								<div class="col-md-2"><label>Place of birth:</label></div>
								<div class="col-md-10">
								<input type="text" class="form-control" name="pob" id="pob" value="<?php if(isset($_POST['edit']))echo $pob;?>" pattern="[A-Za-z]+"  title="Only Alphabets"/>
								<br/><br/>
								</div>
								<div class="col-md-2"><label>Present address:</label></div>
								<div class="col-md-10">
								<input type="text" class="form-control" name="present_address" id="present_address" value="<?php if(isset($_POST['edit']))echo $present_address;?>"/>
								<br/>
								</div>
								<div class="col-md-2"><label>Permenent address:</label></div>
								<div class="col-md-10">
								<input type="text" class="form-control" name="permenent_address" id="permenent_address" value="<?php if(isset($_POST['edit']))echo $permenent_address;?>"/>
								<br/>
								</div>

								
								<div class="col-md-2"><label>FATHER'S OCCUPATION</label></div>
								<div class="col-md-10">
								<input type="text" class="form-control" name="father_occupation" id="father_occupation" value="<?php if(isset($_POST['edit']))echo $father_occupation;?>" pattern="[A-Za-z]+"  title="Only Alphabets"/></div>
								
								
							<br/>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-2"><label>PHONE RES:</label></div>
								<div class="col-md-4">
									<input type="text" class="form-control" name="phone" id="phone" value="<?php if(isset($_POST['edit']))echo $phone;?>" pattern="^[0-9\+]{9,15}$"  placeholder="+92301234.. OR 0301234.." />
								</div>
								<div class="col-md-2"><label>PERSONAL CELL#</label></div>
								<div class="col-md-4">
									<input type="text" class="form-control" name="cell" id="cell" value="<?php if(isset($_POST['edit']))echo $cell;?>" pattern="^[0-9\+]{9,15}$"  placeholder="+92301234.. OR 0301234.."/>
									<br/>
								</div>
								<div class="col-md-2"><label>EMERGENCY CONTACT#</label></div>
								<div class="col-md-4">
									<input type="text" class="form-control" name="emergency" id="emergency" value="<?php if(isset($_POST['edit']))echo $cell;?>" pattern="^[0-9\+]{9,15}$"  placeholder="+92301234.. OR 0301234.."/>
									<br/>
								</div>
								<div class="col-md-6" style="height:55px;"></div>
								<div class="col-md-2"><label>NIC#</label></div>
								<div class="col-md-10">
									<input type="text" class="form-control" name="nic" id="nic" value="<?php if(isset($_POST['edit']))echo $nic;?>" pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" placeholder="12345-1234567-1" style="width:45%;"/>
									<br/>	
								</div>
								<div class="col-md-2"><label>MARTIAL STATUS:</label></div>
								<div class="col-md-10">
									<div class="row">
										<div class="col-md-3">
											<input type="radio" name="martial" value="Single" class="checkbox-control" checked /> SINGLE
										</div>
										<div class="col-md-3">
											<input type="radio" name="martial" value="Married" class="checkbox-control" /> MARRIED
										</div>
									</div>
									<br/><br/>
								</div>
								<div class="col-md-2"><label>NATIONALITY:</label></div>
								<div class="col-md-10">
									<input type="text" class="form-control" name="nationality" id="nationality" value="<?php if(isset($_POST['edit']))echo $nationality;?>" pattern="[A-Za-z]+" title="Only Alphabets"/>
								<br/>
								</div>
								<div class="col-md-2"><label>RELIGION:</label></div>
								<div class="col-md-10">
									<input type="text" class="form-control" name="religion" id="religion" value="<?php if(isset($_POST['edit']))echo $religion;?>" pattern="[A-Za-z]+"  title="Only Alphabets"/>
								<br/>
								</div>
								<div class="col-md-2"><label>NO. OF DEPENDENTS</label></div>
								<div class="col-md-10">
									<input type="number" class="form-control" name="dependents" id="dependents" value="<?php if(isset($_POST['edit']))echo $dependents;?>" pattern="\d+" placeholder="5" title="Only Digits" min=0 style="width:45%;"/>
								</div>
								<div class="col-md-12">
								<div class="text-right">
									<input type="button" class="btn btn-success" id="next1" value="Next" name="next1"/>
									</div>
								</div>	
							</div>
						</div>
					</div>
				<!--Personal Info End-->
				<!--Academic-->
					<div class="col-md-12 well" id="form2">
						<p class="lead" align="middle">ACADEMIC QUALIFICATIONS</p>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>QUALIFICATION #1</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="qualification" id="qualification" value="<?php if(isset($_POST['edit']))echo $qualification;?>" pattern="[A-Za-z]+"  title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>YEAR OF PASSING</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="yop" id="yop" value="<?php if(isset($_POST['edit']))echo $yop;?>" pattern="\d+"  title="Only Digits"/>
									<br/>
								</div>
								<div class="col-md-3"><label>GRADE DIVISION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="grade" id="grade" value="<?php if(isset($_POST['edit']))echo $grade;?>" pattern="[A-C][+-]?|D|[1-3]" placeholder="A+ A- A B C... 1 2 3"/>
									<br/>
								</div>
								<div class="col-md-3"><label>SUBJECTS</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subject" id="subject" value="<?php if(isset($_POST['edit']))echo $subject;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>BOARD UNIVERSITY</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="board" id="board" value="<?php if(isset($_POST['edit']))echo $board;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>QUALIFICATION #2</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="qualification_2" value="<?php if(isset($_POST['edit']))echo $qualification_2;?>" pattern="[A-Za-z]+" title="Only Alphabets" />
									<br/>
								</div>
								<div class="col-md-3"><label>YEAR OF PASSING</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="yop_2" value="<?php if(isset($_POST['edit']))echo $yop_2;?>" pattern="\d+" title="Only Digits"/>
									<br/>
								</div>
								<div class="col-md-3"><label>GRADE DIVISION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="grade_2" value="<?php if(isset($_POST['edit']))echo $grade_2;?>" pattern="[A-C][+-]?|D|[1-3]"  placeholder="A+ A- A B C... 1 2 3" />
									<br/>
								</div>
								<div class="col-md-3"><label>SUBJECTS</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subject_2" value="<?php if(isset($_POST['edit']))echo $subject_2;?>" pattern="[A-Za-z ]+"  title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>BOARD UNIVERSITY</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="board_2" value="<?php if(isset($_POST['edit']))echo $board_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets" />
								</div>
								<div class="col-md-12">
									<div class="text-right">
										<input type="button" class="btn btn-success" id="prev1" value="Previous" name="btn"/>
										<input type="button" class="btn btn-success" id="next2" value="Next" name="next2"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--Academic End-->
				<!--Cources-->	
					<div class="col-md-12 well" id="form3">
						<p class="lead" align="middle">OTHER STUDIES/SHORT-COURSES OR TRAINING</p>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>NAME OF COURSE #1</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="course" id="course" value="<?php if(isset($_POST['edit']))echo $course;?>" pattern="[A-Za-z ]+" title="Only Alphabets" />
									<br/>
								</div>
								<div class="col-md-3"><label><label>DURATION</label></label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="duration" id="duration" value="<?php if(isset($_POST['edit']))echo $duration;?>" pattern="[0-9a-zA-Z ]+"   title="Only Digits" />
									<br/>
								</div>
								<div class="col-md-3"><label>SUBJECTS</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subjects" id="subjects" value="<?php if(isset($_POST['edit']))echo $subjects;?>" pattern="[A-Za-z ]+"  title="Only Alphabets" />
									<br/>
								</div>
								<div class="col-md-3"><label>INSTITUTION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="institute" id="institute" value="<?php if(isset($_POST['edit']))echo $institute;?>" pattern="[A-Za-z ]+" title="Only Alphabets" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>NAME OF COURSE #2</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="course_2" value="<?php if(isset($_POST['edit']))echo $course_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>DURATION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="duration_2" value="<?php if(isset($_POST['edit']))echo $duration_2;?>" pattern="[a-zA-Z0-9 ]+"  title="Only Digits"/>
									<br/>
								</div>
								<div class="col-md-3"><label>SUBJECTS</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subjects_2" value="<?php if(isset($_POST['edit']))echo $subjects_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>INSTITUTION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="institute_2" value="<?php if(isset($_POST['edit']))echo $institute_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-12">
									<div class="text-right">
										<input type="button" class="btn btn-success" id="prev2" value="Previous" name="btn"/>
										<input type="button" class="btn btn-success" id="next3" value="Next" name="next2"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--Cources End-->
				<!--Employer-->	
					<div class="col-md-12 well" id="form4">
							<p class="lead" align="middle">EMPLOYMENT RECORD</p>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>EMPLOYER #1</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="employer" id="employer" value="<?php if(isset($_POST['edit']))echo $employer;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>DESIGNATION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="designation" id="designation" value="<?php if(isset($_POST['edit']))echo $designation;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>PERIOD</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="period" id="period" value="<?php if(isset($_POST['edit']))echo $period;?>" pattern="[0-9a-zA-Z ]+" title="Only Digits"  />
									<br/>
								</div>
								<div class="col-md-3"><label>LAST PAY</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="pay" id="pay" value="<?php if(isset($_POST['edit']))echo $pay;?>" pattern="\d+" title="Only Digits"  />
									<br/>
								</div>
								<div class="col-md-3"><label>REASON OF LEAVING</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="reason" id="reason" value="<?php if(isset($_POST['edit']))echo $reason;?>" pattern="[A-Za-z ]+"  title="Only Alphabets"  />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3"><label>EMPLOYER #2</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="employer_2" value="<?php if(isset($_POST['edit']))echo $employer_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-3"><label>DESIGNATION</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="designation_2" value="<?php if(isset($_POST['edit']))echo $designation_2;?>" pattern="[A-Za-z ]+" title="Only Alphabets" />
									<br/>
								</div>
								<div class="col-md-3"><label>PERIOD</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="period_2" value="<?php if(isset($_POST['edit']))echo $period_2;?>" pattern="[0-9a-zA-Z ]+"   title="Only Digits"/>
									<br/>
								</div>
								<div class="col-md-3"><label>LAST PAY</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="pay_2" value="<?php if(isset($_POST['edit']))echo $pay_2;?>" pattern="\d+"  title="Only Digits"/>
									<br/>
								</div>
								<div class="col-md-3"><label>REASON OF LEAVING</label></div>
								<div class="col-md-9">
									<input type="text" class="form-control" name="reason_2" value="<?php if(isset($_POST['edit']))echo $reason_2;?>" pattern="[A-Za-z ]+"  title="Only Alphabets"/>
									<br/>
								</div>
								<div class="col-md-12">
									<div class="text-right">
										<input type="button" class="btn btn-success" id="prev3" value="Previous" name="btn"/>
										<input class="btn btn-success" type="submit" value="Review" name="btn" id="btn"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--Employer End-->		
				</div>
				<!--LAST ROW-->
			</form>
		</div>
	</div>
</div> <!-- /.container -->
   

<script>
$(document).ready(function(){
    $("#form2").hide();
    $("#form3").hide();
    $("#form4").hide();
    $("#next1").click(function(){
        $("#form1").hide();
        $("#form2").show();
    });
    $("#next2").click(function(){
        $("#form2").hide();
        $("#form3").show();
    });
    $("#next3").click(function(){
        $("#form3").hide();
        $("#form4").show();
    });
    $("#prev1").click(function(){
        $("#form2").hide();
        $("#form1").show();
    });
    $("#prev2").click(function(){
        $("#form3").hide();
        $("#form2").show();
    });
    $("#prev3").click(function(){
        $("#form4").hide();
        $("#form3").show();
    });
    $("#btn").click(function(){
        $("#first_name").attr("required", "required");
        $("#middle_name").attr("required", "required");
        $("#last_name").attr("required", "required");
        $("#dob").attr("required", "required");
        $("#pob").attr("required", "required");
        $("#present_address").attr("required", "required");
        $("#permenent_address").attr("required", "required");
        $("#father_first_name").attr("required", "required");
        $("#father_middle_name").attr("required", "required");
        $("#father_last_name").attr("required", "required");
        $("#father_occupation").attr("required", "required");
        $("#phone").attr("required", "required");
        $("#cell").attr("required", "required");
        $("#emergency").attr("required", "required");
        $("#nic").attr("required", "required");
        $("#nationality").attr("required", "required");
        $("#religion").attr("required", "required");
        $("#dependents").attr("required", "required");
        $("#qualification").attr("required", "required");
        $("#yop").attr("required", "required");
        $("#grade").attr("required", "required");
        $("#subject").attr("required", "required");
        $("#board").attr("required", "required");
        $("#course").attr("required", "required");
        $("#duration").attr("required", "required");
        $("#subjects").attr("required", "required");
        $("#institute").attr("required", "required");
        $("#employer").attr("required", "required");
        $("#designation").attr("required", "required");
        $("#period").attr("required", "required");
        $("#pay").attr("required", "required");
        $("#reason").attr("required", "required");
    });
});
</script>
</body>

</html>
<?php
}else
	header("Location:login.php");
?>