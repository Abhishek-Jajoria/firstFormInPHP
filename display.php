<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
</head>
<body>
    <div class="main-div bg-secondary container-fluid" style="height:100vh";>
        <div class="row">
            
            <div class="col-xl-12">
                <h1 class='text-center text-light my-3 display-5'>List of candidates for web developer job</h1>
            </div>
            <div class="col-12 mt-3">
                <a href="index.php" class="btn btn-outline-light position-sticky sticky-top  top-0 start-100 translate-middle ">
                    <i class="fas fa-arrow-circle-left" aria-hidden='true' data-bs-toggle="tooltip" data-bs-placement="top" title="back"></i>
                </a>
            </div>
            
        </div>
        <div class="center-div">
            <div class='table-responsive'>
                <table class="table table-light table-hover border  table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Refer</th>
                            <th>Post</th>
                            <th colspan='2'>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'connection.php';

                        $selectquery = " select * from jobregistration ";

                        $query = mysqli_query($con,$selectquery);

                        $nums = mysqli_num_rows($query);



                        while($res = mysqli_fetch_array($query)){
                            ?>

                            <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['degree']; ?></td>
                            <td><?php echo $res['mobile']; ?></td>
                            <td><span class='bg-white px-2'><?php echo $res['email']; ?></span></td>
                            <td><?php echo $res['refer']; ?></td>
                            <td><?php echo $res['jobpost']; ?></td>
                            <td>
                                    <a href="update.php?id=<?php echo $res['id']; ?>" class='btn btn-outline-success'>
                                        <i class='fa fa-edit' aria-hidden='true' data-bs-toggle="tooltip" data-bs-placement="top" title="Update"></i>
                                    </a>
                            </td>
                            <td>
                                    <a href="delete.php?id=<?php echo $res['id']; ?>" class="btn btn-outline-danger">
                                        <i class='fa fa-trash' aria-hidden='true' data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
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
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
    </script>
</body>
</html>