<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add New Student</h4>
                            </div>
                            <div class="content">
                                <form name="update" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputText">ADM NO</label>
                                                <input type="text" name="adm" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>GENEDER</label>
                                                <input type="text" name="gender" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>AGE</label>
                                                <input type="text" name="age" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>CLASS</label>
                                                <input type="text" name="class" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="ADD">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>

                </div>
            </div>
        </div>
<?php
    if (isset($_POST['submit'])) {
        $conn=mysqli_connect("localhost","root","","student")or die(mysqli_error($conn));
        $name=$_POST['name'];
        $adm=$_POST['adm'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $class=$_POST['class'];

       echo $name;
       echo $adm;
       echo $gender;
       echo $age;
       echo $class;

        $insert=mysqli_query($conn,"INSERT INTO registration(name,adm,gender,age,class) VALUES ('".$name."','".$adm."','".$gender."','".$age."','".$class."')") or die(mysqli_error($conn));

        if ($insert) {
            ?>
            <script>
                window.alert('success');
                window.location.href='table_data.php';
            </script>
            <?php
        } else {
            ?>
            <script>
                window.alert('failed');
                window.location.href='registration.php';
            </script>
            <?php
        }
        
        
    }
?>        
<?php include('footer.php')?>            