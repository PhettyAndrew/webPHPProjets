 <?php
//include ('process_login.php');
$conn=mysqli_connect("localhost","root","","student") or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"SELECT * FROM registration") or die(mysqli_error($conn));
?>

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Adm</th>
                                    	<th>Gender</th>
                                    	<th>Age</th>
                                        <th>Class</th>
                                    </thead>
                                    <tbody>
                                        <?php /*foreach($db_records as $record)*/
                                            while($record=mysqli_fetch_assoc($db_records)){?>
                                                <tr>
                                                    <td><?php echo $record['id'];?></td>
                                                    <td><?php echo $record['name'];?></td>
                                                    <td><?php echo $record['adm'];?></td>
                                                    <td><?php echo $record['gender'];?></td>
                                                    <td><?php echo $record['age'];?></td>
                                                    <td><?php echo $record['class'];?></td>
                                                    <td>
                                                        <a href="view_student.php?id=<?php echo $record['id'];?>" class="btn btn-primary">View</a>
                                                        <a href="update_student.php?id=<?php echo $record['id'];?>" class="btn btn-info">Update</a>
                                                        <a href="delete_student.php?id=<?php echo $record['id'];?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                        <?php }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>