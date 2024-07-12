<?php 
session_start();
if (isset($_SESSION['e']) && isset($_SESSION['p'])) {
    header("refresh:0.2,url='index.php'");
}
require("header.php");
?>

    <div class="container">
        <div class="row" style="height: 100vh; display: flex; align-items: center; justify-content: center">
            <div class="col-lg-4 mx-auto">
                <div class="card p-3" style="border: none; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <img src="../assets/images/logo.png" class="img-fluid text-center" width="280px" alt="">
                    <div class="card-body">
                        <form method="post" class="form-group">
                            <input type="email" class="form-control mt-3" name="email" placeholder="Email">
                            <input type="password" class="form-control my-3" name="password" placeholder="Password ">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success" type="submit" name="btnlogin">Sign in</button>
                            </div>
                            <a href="">Forgot Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Login Php -->
    <?php
    if(isset($_POST['btnlogin'])) {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $useremail = mysqli_real_escape_string($conn, $_POST['email']);
            $userpass = mysqli_real_escape_string($conn, $_POST['password']);

            $query = "SELECT * FROM `users` WHERE Email = '$useremail' AND UserPass = '$userpass'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result) > 0) {
                    
                $_SESSION['id'] = $row['UserId'];
                $_SESSION['r'] = $row['UserRole'];
                $_SESSION['n'] = $row['FullName'];
                $_SESSION['e'] = $row['Email'];      
                $_SESSION['p'] = $row['UserPass'];

                echo "<script>alert('You are Logged in'); window.location='index.php';</script>";

            }else {
                echo "<script>alert('Invalid email or password');</script>";
            } 
            
        }
    }
    mysqli_close($conn);
    ?>
    
</body>
</html>