<?php
require '../lib/header.php';
?>		

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class = "container-fluid col-lg-8">
		<form class = "form-horizontal tasi-form" method="post" action = "input_survey.php">
		<div class = "card">
			<div class = "card-body">
				<div class = "card-header">
					<h3>Google sheet bootleg</h3>
				</div>
					<div class ="form-group">
						<h4>Participant Personal Information</h4>
						<hr>
					</div>

					<div class = "card">
						<div class = "card-body">
							<div class = "row">
							<div class = "form-group col-lg-6">
								<label>Survey Date Conducted: </label>
								<input type="date" name="CTD_DATE" class = "form-control">
							</div>
							<div class = "form-group col-lg-6">
								<label>Barangay: </label>
								<input type="text" name="PT_BGY" class = "form-control">
							</div>	
							</div>

						<div class = "row">
						<div class = "form-group col-lg-6">
							<label>Municipality/City: </label>
							<input type="text" name="CTD_MC" class = "form-control">
						</div>
						<div class = "form-group col-lg-6">
							<label>Remarks: </label>
							<input type = "text" name = "PT_REM" class = "form-control">
						</div>
						</div>
						<div class = "form-group">
							<label>Sitio/Purok: </label>
							<input type="text" name="C=PT_SP" class="form-control col-lg-6">
						</div>
						</div>
					</div>
				

					<div class = "col-lg-12">
					</div>
					<div class = "card">
					<div class = "card-body">
						<div class = "row">
						<div class = "form-group col-lg-6">
							<label>Fullname:</label>
							<input type="text" name="PT_FN" class = "form-control">
						</div>
						<div class = "form-group col-m-4">
						</div>
						<div class = "form-group col-lg-4">
							<label>Gender: </label><br/>
						     <label class =  "radio-inline"><input type="radio" name="radio" value="Male"> Male </label>
						     <label class ="radio-inline"><input type="radio" name="radio" value="Female"> Female </label>
						</div>	
					</div>

					<div class = "row">
					<div class = "form-group col-lg-4">
						<label>Age:</label>
						<input type="text" name="PT_AGE" class = "form-control">
					</div>
					<div class = "form-group col-lg-4">
						<label>Date of Birth: </label>
						<input type="date" name="PT_BDAY" class = "form-control">
					</div>
					<div class = "form-group col-lg-4">
							<label>Highest Education Attained:</label>
						<select name = "HEA_DESC" required class = "form-control">
							<option selected = "select" disabled="true" hidden="">--SELECT--</option>
							<option select = "Post Graduate Studies" name="Graduate Studies">Post Graduate Studies</option>
							<option select = "College Graduate" name="College Graduate">College Graduate</option>
							<option select = "College Level" name="College Level">College Level</option>
							<option select = "Vocational Level" name="Vocational Level">Vocational Level</option>
							<option select = "Vocational Graduate" name="Vocational Graduate">Vocational Graduate</option>
							<option select = "High School Graduate" name="High School Graduate">High School Graduate</option>
							<option select = "High School Level" name="High School Level">High School Level</option>
							<option select = "Elementary Graduate" name="Elementary Graduate">Elementary Graduate</option>
							<option select = "Elementary Level" name="Elementary Level">Elementary Level</option>
							<option select = "Preschool" name="Preschool">Preschool</option>	
						</select>
					</div>
					</div>
				</div>
			</div>
		</div>
					<div class = "form-group">
						<label>Please fill out the following for each household member:</label>
						<div class = "form-group col-lg-4">
						<button class = "btn btn-primary" type = "button" data-toggle="modal" data-target="#myModal">
						<i class = "fas fa-plus">
						</i>
						Family Member
						</button>
						
							<div class = "modal fade" id="myModal" role="dialog">
								<div class = "modal-dialog">

									<div class = "modal-content">
										<div class = "modal-header">
											<button type ="button" class = "close" data-dismiss = "modal"></button>
											<h4 class = "modal-header">Family Member Information</h4>
											</div>
										<div class = "modal-body overflow-y:scroll;">
											<div class = "form-group">
											<label>Fullname:</label>
											<input type="text" name = "FM_FN" class="form-control">
											</div>

											<div class = "form-group">
												<label>Age:</label>
												<input type="text" name="FM_AGE" class="form-control col-lg-2">
											</div>

											<div class = "form-group">
												<label>Gender: </label>
												<select name = "FM_GDR" required class="form-control col-lg-6">
												<option selected="select" disabled="true" hidden="true">--SELECT--</option>
												<option select = "Male" name = "Male">Male</option>
												<option select = "Female" name = "Female">Female</option>
												</select>
											</div>

											<div class = "form-group">
												<label>Highest Education Attained</label>
												<select name = "FM_HEA" class="form-control col-lg-6">
												<option selected = "select" disabled="true" hidden="true">--SELECT--</option>
												<option select = "Post Graduate Studies" name="Graduate Studies">Post Graduate Studies</option>
												<option select = "College Graduate" name="College Graduate">College Graduate</option>
												<option select = "College Level" name="College Level">College Level</option>
												<option select = "Vocational Level" name="Vocational Level">Vocational Level</option>
												<option select = "Vocational Graduate" name="Vocational Graduate">Vocational Graduate</option>
												<option select = "High School Graduate" name="High School Graduate">High School Graduate</option>
												<option select = "High School Level" name="High School Level">High School Level</option>
												<option select = "Elementary Graduate" name="Elementary Graduate">Elementary Graduate</option>
												<option select = "Elementary Level" name="Elementary Level">Elementary Level</option>
												<option select = "Preschool" name="Preschool">Preschool</option>	
												</select>
											</div>

											<div class = "form-group">
												<label>Occupation: </label>
												<select name = "OCC_DESC" class="form-control col-lg-6">
													<option selected = "select" disabled="true" hidden="true">--SELECT--</option>
													<option select = "Part-Time" name = "Part-Time">Part-Time</option>
													<option select = "Contractual" name = "Contractual">Contractual</option>
													<option select = "Full-Time" name = "Full-Time">Full-Time</option>
													<option select = "None" name = "None">None</option>
												</select>
											</div>

											<div class = "form-group">
												<label>Monthly Income</label>
												<input type="text" name="FM_MI" class="form-control col-lg-6">
											</div>

											<div class = "form-group">
												<label>Any Special Needs</label>
												<input type="" name="FM_SN" class="form-control col-lg-6">
											</div>
										</div>

										<div class = "modal-footer">
											<button type = "button" class = "btn btn-trash" data-dismiss="close">Close</button>
										</div>
									</div>	
								</div>
							</div> 

						</div>
						<table class = "table table-condensed">
							<thead>
								<tr>
									<th>Name</th>
									<th>Age</th>
									<th>Sex</th>
									<th>Higest Education Attained</th>
									<th>Occupation</th>
									<th>Monthly Income</th>
									<th>Any Special Need</th>
								</tr>
							</thead>
							<tbody>
								<td>Boy Dela Cruz</td>
								<td>25</td>
								<td>Male</td>
								<td>College Graduate</td>
								<td>Professional Gardener</td>
								<td>10,000</td>
								<td>None</td>

								
							</tbody>
						</table>
					</div>

				
			</div>
		</div>
		</form>
	</div>	
</body>
</html>