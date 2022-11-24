<?php
include './assets/php/functions.php';
preventBack();
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

	<!-------- navbar top ---------->

	<header>
		<div class="container-nav">
			<div class="left">
				<i class='fas fa-bars toggleHeader'></i>
			</div>
			<div class="right">
				<a class="usernamee" ><img src="images/p.jpg" alt="" class="profile" id="popup-btn" onclick="LogOutFunction()"></a>
				<a class="username1" id="popup-btn" onclick="LogOutFunction()">User Name</a>
			</div>
		</div>
	</header>	

	<!-------- sidebar ---------->

		<div class="sidebar-nav close">
			<nav>
				<div class="sidebar">
					<div class="sidebar-logo">
						<a href="#"><img src="images/p.jpg" alt="" class="logo"></a>
					</div>
					
					<div class="sidebar-name">
						<span class="sidebar-name1">System Plus </span>
						<span class="sidebar-name1">College Caloocan</span>
					</div>
				</div>
				
				
				<i class='fas fa-bars toggle'></i>
			</nav>
			<div class="menu-bar">
				<div class="menu">
						<nav>
							<p><a href="#" class="username"><img src="images/p.jpg" alt="" class="profile-side"><span>First Name</span></a></p>
							<ul>
								<li><a href="dashboard.php"><i class="fas fa-desktop i"></i><span>Dashboard</span></a></li>
								<li><a href="courses.php"><i class="fas fa-book i"></i><span>Courses</span></a></li>
								<li><a href="subjects.php"><i class="fas fa-book-open i"></i><span>Subjects</span></a></li>
								<li><a href="sections.php"><i class="fas fa-table i"></i><span>Sections</span></a></li>
								<li><a href="students.php"><i class="fas fa-user i"></i><span>Students</span></a></li>
								<li><a href="faculty.php"><i class="fas fa-chalkboard-teacher i"></i><span>Faculty</span></a></li>
								<li><a href="accounts.php"><i class="fas fa-users i"></i><span>Accounts</span></a></li>
								<li><a href="evaluations.php"><i class="fas fa-calendar-check i"></i><span>Evaluations</span></a></li>
								<li><a href="about.php"><i class="fas fa-info-circle i"></i><span>About</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
		</div>
	
	<!-------- main content ---------->

	<div class= "main-container">
		<main>
			<div class="container-main">
				<div class="page-container"><h1><i class="fas fa-table"> Students Profile</i></h1>
					<hr>
					<div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> Student Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
                                        <td rowspan="4" scope="row" style="text-align: center; padding-left: 5px;"><img src="images/p.jpg" class="student-picture"></td>
										<th>Name</th>
										<td data-label="First Name">John Derick ramos Terrenal</td>
									</tr>
									<tr>
										<th>Last Name</th>
										<td data-label="Last Name">john Derick ramos Terrenal</td>
									</tr>
									<tr>
										<th>Gender</th>
										<td data-label="Gender">MMMALE</td>
									</tr>
									<tr>
										<th>Student No.</th>
										<td data-label="Student No.">20201125646</td>
									</tr>
								<tbody>
							</table>
						</div>
					</div>

                    <div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> Accademic Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
										<th>Status</th>
										<td data-label="Status">Tite</td>
									</tr>
									<tr>
										<th>Year Level</th>
										<td data-label="Year Level">Tite</td>
									</tr>
									<tr>
										<th>Course</th>
										<td data-label="Course">Tite</td>
									</tr>
									<tr>
										<th>Section</th>
										<td data-label="Section">Tite</td>
									</tr>
								<tbody>
							</table>
						</div>
					</div>

                    <div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> Contact Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
										<th>Email</th>
										<td data-label="Email">Tite</td>
									</tr>
									<tr>
										<th>Contact No.</th>
										<td data-label="Contact No.">Tite</td>
									</tr>
									<tr>
										<th>Address</th>
										<td data-label="Address">Tite</td>
									</tr>
								<tbody>
							</table>
						</div>
					</div>

                    <div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> Contact Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
										<th>Email</th>
										<td data-label="Email">Tite</td>
									</tr>
									<tr>
										<th>Contact No.</th>
										<td data-label="Contact No.">Tite</td>
									</tr>
									<tr>
										<th>Address</th>
										<td data-label="Address">Tite</td>
									</tr>
								<tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>

	<!-------- footer ---------->

		<footer>
			<div class="container-footer">
				<p class="footer-text"><span>Copyright © 2022 System Plus College Caloocan</span> All rights reserved.</p>
				<p class="footer-text2"><span>Version</span> 1.0</p>
			</div>
		</footer>
	</div>
	
	<!--================= popups ===================-->

	<!-------- popup logout ---------->
	
	<div class="popup-logout pop" id="popup">
		<div class="popup-logout-first">
			<img src="images/p.jpg" alt="" class="popup-profile">
			<p class="popup-name">Last, First, MI</p>
			<p class="popup-student-number">146583967</p>
		</div>
		<div class="popup-logout-middle">
			<a href="#" class="popup-middle1">qwe</a>
			<a href="#" class="popup-middle2">qwe</a>
			<a href="#" class="popup-middle3">qwe</a>
		</div>
		<div class="popup-logout-last">
			<a href="#" class="popup-profile-button">Profile</a>
			<a href="#" class="popup-profile-logout">Sign out</a>
		</div>
		
	</div>
	<script src="./assets/js/script.js"></script>
</body>
</html>