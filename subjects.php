<?php
include './assets/php/functions.php';
preventBack();
enableDelete_subjects();
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subjects | Faculty Evaluation</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
				<div class="page-container"><h1><i class="fas fa-book-open" id="view-info"> Subjects</i></h1>
					<hr>
					<div class="user-info">
						<div class="user-content">
							<div class="user-info-title">
									<p class="user-title"><i class="fas fa-user"></i> Information!</p>
									<hr>
							</div>
						</div>
						<div class="user-nfo-content">
							<table class="user-table">
								<tbody>
									<tr>
										<th>ID Info</th>
										<td data-label="ID Info"></td>
									</tr>
									<tr>
										<th>Subject Code Info</th>
										<td data-label="Subject Code Info"></td>
									</tr>
									<tr>
										<th>Subject Info</th>
										<td data-label="Subject Info"></td>
									</tr>
									<tr>
										<th>Units Info</th>
										<td data-label="Units Info"></td>
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
							<a class="add-main" id="add-button">Add Subject</a>
						</div>
						<div class="main-table-container">
							<table class="main-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Subject Code</th>
										<th>Subject</th>
										<th>Units</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tbody>
									<?php showSubjects() ?>
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

	<!--------popup add subject ------------>
	<form action=subjects.php method=post>
		<div class="popup-background" id="popup-background">
			<div class="popup-add">
				<div class="popup-add-top">
					<p class="popup-add-title"><i class="fas fa-plus"></i> ADD SUBJECT</p>
					<i class="fas fa-times ex" id="ex-add"></i>
				</div>
				<div class="popup-add-middle">
						<p class="label1">Subject Code</p>
						<input type="text" name="subject_code" placeholder="Subject Code" class="popup-tbx" required>
						<p class="label1">Subject Name</p>
						<input type="text" name="subject_name" placeholder="Subject Name" class="popup-tbx" required>
						<p class="label1">Units</p>
						<input type="number" name="units" placeholder="Units" class="popup-tbx" required>
					<?php addSubject() ?>
					<button type="submit" name="addsubject" class="addbtn"><i class="fas fa-plus"></i> Add Subject</button>
				</div>
			</div>
		</div>
	</form>

	<!--------popup edit subject ------------>
	<form action=subjects.php method=post>
		<div class="popup-background-edit" id="edit-popup-background">
			<div class="popup-add">
				<div class="popup-add-top">
					<p class="popup-add-title"><i class="fas fa-edit"></i> EDIT SUBJECT</p>
					<i class="fas fa-times ex" id="ex-edit"></i>
				</div>
				<div class="popup-add-middle">
					<input type="hidden" name="edit_id" id="edit_id">
						<p class="label1">Subject Code</p>
						<input type="text" name="edit_subject_code" id="edit_subject_code" placeholder="Subject Name" class="popup-tbx" required>
						
						<p class="label1">Subject Name</p>
						<input type="text" name="edit_subject_name" id="edit_subject_name" placeholder="Subject Name" class="popup-tbx" required>
						
						<p class="label1">Units</p>
						<input type="number" name="edit_units" id="edit_units" placeholder="Subject Name" class="popup-tbx" required>
					<?php editSubject() ?>
					<button type="submit" name="editsubject" class="editbtn"><i class="fas fa-edit"></i> Edit Subject</button>
				</div>
			</div>
		</div>
	</form>
	
	<script src="./assets/js/script.js"></script>
	<script src="./assets/js/deleteConfirmation.js"></script>
</body>
</html>