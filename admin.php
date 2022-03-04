<?php
session_start();
require('includes/header.php');
 ?>
 
 <div class="py-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-4">
             <?php include('message.php'); ?>
                 <div class="card">
                     <div class="card-header">
                         <h4>Login</h4>
                     </div>
                     <div class="card-body">
                         <form action="admin/index.php" method="POST">
                             <div class="form-group mb-2">
                                 <label >Email ID</label>
                                 <input type="email" required name="email" placeholder="Enter Email Address" class="form-control">
                             </div>
                             <div class="form-group mb-2">
                                 <label >Password</label>
                                 <input type="Password" required name="password" placeholder="Enter Password" class="form-control">
                             </div>
                             <div class="form-group mb-2">
                                 <button type="submit" name="login_btn" class="btn btn-primary text-center mx-auto d-block">Login</button>
     
                             </div>
                         </form>
                         <center>

                             <a href="register.php">Register an Account</a>
                         </center>
                             
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php 
require('includes/footer.php'); 
?>