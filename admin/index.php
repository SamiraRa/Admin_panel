<?php
session_start();
include('includes/header.php');
include('config/dbcon.php');
?>

<div class="container-fluid px-4 mt-4">
                               
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                                <li class="breadcrumb-item">User List</li>
                            </ol>

                            <?= include('../message.php');?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                
                                    <div class="card-header">
                                        <h4>Registered User</h4>
                                    </div>
                                    <div class="card-body">
                                    <table id="datatablesSimple">
                                        <div class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM users";
                                                $query_run=mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run) > 0){
                                                    foreach($query_run as $row){
                                                ?>
                                                <tr>
                                                    <td><?= $row['fname'].' '.$row['lname']?></td>
                                                    <td><?= $row['email']?></td>
                                                    <td>
                                                        <?php
                                                         if($row['status'] == '0'){
                                                             ?>
                                                             <a href="#" target="_blank" class="link-info">Active</a>
                                                             <?php
                                                         }elseif($row['status'] == '1'){
                                                            ?>
                                                            <a href="#" target="#" class="link-danger"">Block</a>
                                                            <?php
                                                         }
                                                    ?>
                                                    </td>
                                                    <td><a href="edit-register.php" class="btn btn-success">Edit</a></td>
                                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                                   
                                                </tr>
                                                <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td colspan="5"> No Record Found</td>
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
                        </div>

<?php 
include('includes/footer.php'); 
include('includes/scripts.php'); ?>