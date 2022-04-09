<?php
include "db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "links.php"; ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">ID</th>
                                <th class="column2">Name</th>
                                <th class="column3">Degree</th>
                                <th class="column4">Mobile</th>
                                <th class="column5">Email</th>
                                <th class="column6">Referance</th>
                                <th class="column7">Post</th>
                                <th class="column8" colspan="2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectQuery = "SELECT * FROM jobsregistration";

                            $runQuery = mysqli_query($con, $selectQuery);

                            $nums = mysqli_num_rows($runQuery);


                            while ($result = mysqli_fetch_array($runQuery)) {
                            ?>
                                <tr>
                                    <td class="column1"><?php echo $result['id']; ?></td>
                                    <td class="column2"><?php echo $result['name']; ?></td>
                                    <td class="column3"><?php echo $result['degree']; ?></td>
                                    <td class="column4"><?php echo $result['mobile']; ?></td>
                                    <td class="column5"><?php echo $result['email']; ?></td>
                                    <td class="column6"><?php echo $result['refer']; ?></td>
                                    <td class="column7"><?php echo $result['jobpost']; ?></td>
                                    <td class="column8">
                                        <a href="update.php?id=<?php echo $result['id']; ?>" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="column9">
                                        <a href="delete.php?id=<?php echo $result['id']; ?>" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>