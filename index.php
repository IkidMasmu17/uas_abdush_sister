<!doctype html>
<html lang="en">

<head>
	<title>M Abdush Shidqi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">UAS-SISTEM TERDISTRIBUSI</h2>
					<h2 class="heading-section">ABDUSH SHIDQI</h2>
					<a type="button" class="btn btn-outline-primary" href="add.php">Add</a>
					<!-- <a href="add.php">Add</a> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
							<thead>
								<tr>
									<th>Student ID</th>
									<th>Name</th>
									<th>Majors</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include 'config.php';
								$a = mysqli_query($conn, "SELECT * FROM college_student");
								foreach ($a as $b) {
								?>
									<tr>
										<td><?= $b['student_id']; ?></td>
										<td><?= $b['name']; ?></td>
										<td><?= $b['majors']; ?></td>
										<td><?= $b['gender']; ?></td>
										<td><?= $b['address']; ?></td>
										<td>
											<a href="update.php?student_id=<?= $b['student_id']; ?>"><b><i>Edit</i></b></a> |
											<a href="index.php?student_id=<?= $b['student_id']; ?>" onclick="return confirm('Are you sure?')"><b><i>Delete</i></b></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>

						<?php
						//include 'koneksi.php';
						if (isset($_GET['student_id'])) {
							$student_id = $_GET['student_id'];
							$sql = "DELETE FROM college_student WHERE student_id='$student_id'";
							if ($conn->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
								trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
							} else { // Jika berhasil alihkan ke halaman tampil.php
								echo "<script>alert('Delete Success!')</script>";
								echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
							}
						}

						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>