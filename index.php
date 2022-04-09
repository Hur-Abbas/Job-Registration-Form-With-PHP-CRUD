<?php
include "db.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "links.php"; ?>
    <link rel="stylesheet" href="style.css">
    <title>Job Crud</title>
</head>

<body>
    <?php include "header.php"; ?>
    <div class="container form-cont mt-5">
        <h3 class="text-center mb-4 ">Apply For Web Developer Job</h3>
        <form action="" method="POST">
            <div class="row">
                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="form6Example3">Name</label>
                    <input type="text" name="Name" id="name" placeholder="Enter Your Name*" class="form-control" required />
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="Qualification">Qualification</label>
                    <input type="text" name="Qualification" placeholder="Enter Your Qualification*" id="Qualification" class="form-control" required />
                </div>
            </div>

            <div class="row">
                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="Mobile">Mobile Number</label>
                    <input type="text" name="Number" placeholder="Enter Your Number*" id="MobileNumber" class="form-control" required />
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="Email" id="email" placeholder="Enter Your Email*" class="form-control" required />
                </div>
            </div>

            <div class="row">
                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="Mobile">Reference</label>
                    <input type="text" name="Reference" id="reference" placeholder="Enter Your Reference" class="form-control" />
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4 col-6">
                    <label class="form-label" for="Post">Post</label>
                    <input type="text" name="Post" placeholder="Enter Your Post*" id="Post" value="Web Developer" class="form-control" required />
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" name="Submit" class="btn btn-primary btn-block mb-4 rounded-top">Submit</button>
<!--             <button name="view" class="btn btn-primary btn-block mb-4 rounded-top"><a class="viewa" href="display.php">View Submission</a></button> -->
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['Submit'])) { 
    if (!empty($_POST['Name']) && !empty($_POST['Qualification']) && !empty($_POST['Number']) && !empty($_POST['Email']) && !empty($_POST['Post'])) {
        $Name = $_POST['Name'];
        $Qualification = $_POST['Qualification'];
        $Number = $_POST['Number'];
        $Email = $_POST['Email'];
        $Reference = $_POST['Reference'];
        $Post = $_POST['Post'];

        $InsertQuery = "INSERT INTO `jobsregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`)
        VALUES ('$Name','$Qualification','$Number','$Email','$Reference','$Post')";

        $result = mysqli_query($con, $InsertQuery);

        if ($result) {
            echo '<div class="alert container alert-success alert-dismissible fade show" role="alert">
            <strong>Submission successful!</strong> All Data Submitted Successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else {
            echo '<div class="alert container alert-danger alert-dismissible fade show" role="alert">
            <strong>Submission Denied!</strong> Please Fill All The Fields Properly!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }else{
        echo '<div class="alert container alert-danger alert-dismissible fade show" role="alert">
        <strong>Submission Denied!</strong> Please Fill All The Fields Properly!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}

?>