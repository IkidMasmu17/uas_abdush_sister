<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Data</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Apply for job</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Student ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="student_id" placeholder="Insert Student ID">
                                </div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="majors" placeholder="Insert Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Majors</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="name" placeholder="Insert Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="gender" class="input--style-6" id="exampleFormControlSelect1">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="address" placeholder="Insert Address">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="index.php">
                                <button type="button" class="btn btn--radius-2 btn--blue-2"> back</button>
                            </a>
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" name="add" value="Add">add</button>

                            <!-- <input type="submit" name="add" value="Add"> -->
                            <input type="reset" class="btn btn-warning" name="reset" value="Reset">
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['add'])) {
                        include 'config.php';
                        $student_id = $_POST['student_id'];
                        $name = $_POST['name'];
                        $majors = $_POST['majors'];
                        $gender = $_POST['gender'];
                        $address = $_POST['address'];

                        $sql = "INSERT INTO college_student (student_id,name,majors,gender,address) VALUES ('$student_id','$name','$majors','$gender','$address')";
                        if ($conn->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
                            trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
                        } else { // Jika berhasil alihkan ke halaman tampil.php
                            echo "<script>alert('Add Success!')</script>";
                            echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
                        }
                    }

                    ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->