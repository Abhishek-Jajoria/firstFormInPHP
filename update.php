<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
    <title>Crud Tutorial</title>
</head>
<body>
<div class='.container-fluid mx-3 my-3 bg-secondary p-3 register'>

<div class='row col-md-12'>
    <div class="col-md-11" >
            <h3 class='text-center text-light display-5'>Welcome</h1>
            <p class='text-center text-light'>Please fill all the details carefully. This form can change your life.</p>
        
     </div>
     <div class='col-md-1 position-relative my-5'>
        <div class="col-md-3 ">
                    <a style="width:90px;" class='btn btn-outline-light stretched-link position-absolute top-50 start-50 translate-middle ' href='display.php' style='border-radius:25px;'>Check form</a>
                </div>
        </div>
    <div class='col-md-12'>
        <figure class="text-center">
        <div class="badge bg-secondary text-wrap" style="width: 90%;">
            <blockquote class="blockquote">
                <h1 class="display-3 my-3 "><p>Apply for Web Developer Post</p></h1>
            </blockquote>
        </div>

    
        <form class="row g-2" action='' method='POST'>
            <div class="col-md-12 g-3 row">

            <?php

                include 'connection.php';

                $ids = $_GET['id'];

                $showquery = "select * from jobregistration where id={$ids}";

                $showdata = mysqli_query($con,$showquery);

                $arrdata = mysqli_fetch_array($showdata);

                if(isset($_POST['submit'])){

                    $idupdate = $_GET['id'];

                    $name = $_POST['user'];
                    $degree = $_POST['degree'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $refer = $_POST['refer'];
                    $jobprofile = $_POST['jobprofile'];

                    // $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile') ";

                    $query = " update jobregistration set id=$idupdate, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile'where id=$idupdate";

                    $res = mysqli_query($con, $query);

                    if($res){
                        ?>
                        <script>
                        alert('data Updated properly');
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                        alert('data not Updated');
                        </script>
                        <?php
                    }
                }

            ?>
                <div class="form-floating col-md-4 mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Name" name="user" value="<?php echo $arrdata['name']; ?>" required>
                    <label for="floatingName" class="form-label mx-2">Name</label>
                </div>
                <div class="form-floating col-md-4 mb-3">
                    <input type="text" class="form-control" id="floatingDegree" placeholder="Degree" name='degree' value="<?php echo $arrdata['degree']; ?>" required>
                    <label for="floatingDegree"  class="form-label mx-2">Degree</label>
                </div>
                <div class="form-floating col-md-4 mb-3">
                    <input type="number" class="form-control" id="floatingMobile" placeholder="Mobile Number" name='mobile' value="<?php echo $arrdata['mobile']; ?>" required>
                    <label for="floatingMobile" class="form-label mx-2">Mobile Number</label>
                </div>
                <div class="form-floating col-md-4 mb-3">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name='email' value="<?php echo $arrdata['email']; ?>" required>
                    <label for="floatingEmail" class="form-label mx-2">Email</label>
                </div>
                <div class="form-floating mb-3 col-md-4">
                    <input type="name" class="form-control" id="floatingRefer" placeholder="Any Reference" name='refer' value="<?php echo $arrdata['refer']; ?>" required>
                    <label for="floatingRefer" class="form-label mx-2">Any Reference</label>
                </div>
                <div class="form-floating col-md-4 mb-3">
                    <input type="text" class="form-control" id="floatingPost" placeholder="Post" name='jobprofile' value="<?php echo $arrdata['jobpost']; ?>" required>
                    <label for="floatingPost" class="form-label mx-2">Post</label>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-light px-5 mt-2" name='submit' value='Update'>Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
    
</body>
</html>

