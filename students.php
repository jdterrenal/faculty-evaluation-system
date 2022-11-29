<?php
include './assets/php/functions.php';
preventBack();
enableDelete_students();
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students | Faculty Evaluation</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
	<!------ navigation and side bar ------->
	<?php include './assets/php/navigation.php' ?>
	
	<!-------- main content ---------->
	<div class= "main-container">
		<main>
			<div class="container-main">
				<div class="page-container"><h1><i class="fas fa-table"> Students</i></h1>
					<hr>
					<div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> User Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
										<th data-label="Name">Name</th>
										<td data-label="Name">Tite</td>
									</tr>
									<tr>
										<th data-label="usertyp">User Type</th>
										<td data-label="User Type">Tite</td>
									</tr>
									<tr>
										<th data-label="Course">Course</th>
										<td data-label="Course">Tite</td>
									</tr>
									<tr>
										<th data-label="Student ID">Student ID</th>
										<td data-label="Student ID">Tite</td>
									</tr>
								<tbody>
							</table>
						</div>
					</div>
					
					<div class="main-content">
						<div class="main-search-add">
							<div class="main-search-add-top">
								<p class="main-search-add-title"><i class="fas fa-search"></i> Search and add here!</p>
								<hr>
							</div>
						</div>
						<div class="main-search1">
							<a><i class="fas fa-search"></i></a>
							<input type="text" placeholder="Search" class="main-search">
						</div>
						<div class="main-add">
							<a class="add-main" id="addstudent" onclick="AddFunction()">Add Student</a>
						</div>
						<div class="student-table-container">
							<table class="student-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>GENDER</th>
                                        <th>YEAR LEVEL</th>
                                        <th>CONTACT NUMBER</th>
                                        <th>ADDRESS</th>
                                        <th>STATUS</th>
                                        <th>PHOTO</th>
                                        <th>COURSE ID</th>
										<th>SECTION ID</th>
                                        <th colspan="3">OPERATION</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php showStudents() ?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-------- footer ---------->
		<?php include './assets/php/footer.php' ?>
	</div>
	
	<!--================= popups ===================-->
	<!-------- popup logout ---------->
	<?php include './assets/php/popupLogout.php' ?>

	<!--------popup add student ------------>
	<form action=add_course.php method=post>
		<div class="popup-backgroundsubject" id="popup-background">
			<div class="popup-addstudent">
				<div class="popup-add-top">
					<p class="popup-add-title"><i class="fas fa-plus"></i> ADD STUDENT</p>
					<i class="fas fa-times ex" id="ex-add"></i>
				</div>
				<div class="popup-student-middle">
					<div class="boxx">
						<p class="student-P">Student Picture</p>
						<div class="studentcon">
						<img src="./images/uploads/<?php echo $_SESSION['photo'] ?>" alt="" class="profile-side-pop">
						</div>
						<div class="studentcon">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Upload Image" name="submit">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Student Name</p>
						<div class="studentcon">
							<input type="text" id="firstname" name="firstname" placeholder="First name" >
							<input type="text" id="lastname" name="lastname" placeholder="Last name">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Course</p>
						<div class="studentcon">
							<input type="text" id="course" name="course" placeholder="Course">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Section</p>
						<div class="studentcon">
							<input type="text" id="section" name="section" placeholder="Section">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Adress</p>
						<div class="studentcon">
							<input type="text" id="address" name="address" placeholder="Address">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Contact Number</p>
						<div class="studentcon">
							<input type="number" id="contact_no" name="contact_no" placeholder="Contact Number">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Gender</p>
						<div class="studentcon1">
							<input type="radio" id="male" name="gender" value="Male"><label for="male">Male</label>
							<input type="radio" id="female" name="gender" value="Female"><label for="female">Female</label>
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Email</p>
						<div class="studentcon">
							<input type="text" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">year Level</p>
						<div class="studentcon">
							<select name="yearlevel" required>
								<option value = "1">1st Year</option>
								<option value = "2">2nd Year</option>
								<option value = "3">3rd Year</option>
								<option value = "4">4th Year</option>
								<option value = "5">5th Year</option>
							</select>
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Status</p>
						<div class="studentcon">
							<select name="status" required>
								<option value = "Enrolled">Enrolled</option>
								<option value = "Not Enrolled">Not Enrolled</option>
							</select>
						</div>
					</div>
					<div class="studentcon">
					<a class="addbtn"><i class="fas fa-plus"></i> Add Student</a>
				</div>
				</div>
			</div>
		</div>
	</form>

	<!--------popup edit student ------------>
	<form action=add_course.php method=post>
		<div class="popup-background-edit" id="edit-popup-background">
			<div class="popup-addstudent">
				<div class="popup-add-top">
					<p class="popup-add-title"><i class="fas fa-edit"></i> EDIT STUDENT</p>
					<i class="fas fa-times ex" id="ex-edit"></i>
				</div>
				<div class="popup-student-middle">
					<div class="boxx">
						<p class="student-P">Student Picture</p>
						<div class="studentcon">
						<img src="./images/uploads/<?php echo $_SESSION['photo'] ?>" alt="" class="profile-side-pop">
						</div>
						<div class="studentcon">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Upload Image" name="submit">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Student Name</p>
						<div class="studentcon">
							<input type="text" id="firstname" name="firstname" placeholder="First name" >
							<input type="text" id="lastname" name="lastname" placeholder="Last name">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Course</p>
						<div class="studentcon">
							<input type="text" id="course" name="course" placeholder="Course">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Section</p>
						<div class="studentcon">
							<input type="text" id="section" name="section" placeholder="Section">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Adress</p>
						<div class="studentcon">
							<input type="text" id="address" name="address" placeholder="Address">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Contact Number</p>
						<div class="studentcon">
							<input type="number" id="contact_no" name="contact_no" placeholder="Contact Number">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Gender</p>
						<div class="studentcon1">
							<input type="radio" id="male" name="gender" value="Male"><label for="male">Male</label>
							<input type="radio" id="female" name="gender" value="Female"><label for="female">Female</label>
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Email</p>
						<div class="studentcon">
							<input type="text" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">year Level</p>
						<div class="studentcon">
							<select name="yearlevel" required>
								<option value = "1">1st Year</option>
								<option value = "2">2nd Year</option>
								<option value = "3">3rd Year</option>
								<option value = "4">4th Year</option>
								<option value = "5">5th Year</option>
							</select>
						</div>
					</div>
					<div class="boxx">
						<p class="student-P">Status</p>
						<div class="studentcon">
							<select name="status" required>
								<option value = "Enrolled">Enrolled</option>
								<option value = "Not Enrolled">Not Enrolled</option>
							</select>
						</div>
					</div>
					<div class="studentcon">
					<a class="addbtn"><i class="fas fa-edit"></i> Edit Student</a>
				</div>
				</div>
			</div>
		</div>
	</form>
	
	
	<script src="./assets/js/script.js"></script>
	<script src="./assets/js/deleteConfirmation.js"></script>
</body>
</html>