<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<?php
 $conn=mysqli_connect("localhost","root","","student") or die(mysqli_error($conn));

 $id=$_GET['id'];

 $select_query=mysqli_query($conn,"SELECT * FROM registration WHERE id=$id") or die(mysqli_error($conn));
 foreach ($select_query as $record) {
    $id=$record['id'];
    $name=$record['name'];
    $adm=$record['adm'];
    $gender=$record['gender'];
    $age=$record['age'];
    $class=$record['class'];

  
 }
?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student Profile</h4>
                            </div>
                            <div class="content">
                                <form name="update" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" name="id" class="form-control" disabled value="<?php echo $id;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required value="<?php echo $name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputText">ADM NO</label>
                                                <input type="text" name="adm" class="form-control" required value="<?php echo $adm;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>GENDER</label>
                                                <input type="text" name="gender" class="form-control" required value="<?php echo $gender;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>AGE</label>
                                                <input type="text" name="age" class="form-control" required value="<?php echo $age;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>CLASS</label>
                                                <input type="text" name="class" class="form-control" required value="<?php echo $class;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit" value="Update">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title"><?php echo $name;?><br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php
    if (isset($_POST['submit'])) {

        $id=$_GET['id'];
        $name=$_POST['name'];
        $adm=$_POST['adm'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $class=$_POST['class'];

        $update_query=mysqli_query($conn,"UPDATE registration SET name='$name',adm='$adm',gender='$gender',age='$age',class='$class' WHERE id='$id'") or die(mysqli_error($conn));

        if ($update_query) {

            ?>
                <script>
                    window.alert('success');
                    window.location.href="table_data.php";
                </script>

            <?php
           // echo "<script>window.alert('Update success')</script>";
           // header("refresh:0;url=table_data.php");
        } else {
            echo "<script>window.alert('Failed')</script>";
            header("refresh:0;url=table_data.php");
        }
        
    }
?>        
<?php include('footer.php')?>            