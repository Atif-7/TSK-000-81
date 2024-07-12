<!-- Config -->
<?php require("../includes/config.php"); 

session_start();

if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){

 require("header.php") ?>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php require("sidebar.php") ?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" style="color: var(--dark); font-size: 32px;">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Admin / <span style="color: var(--primary);">Contact Messages</span></li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Messages List
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Messages</th>
                                                <th>Recieve Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $query = "CALL messages()";
                                            $result = mysqli_query($conn, $query);
                                            
                                            if($result)
                                            {
                                                while($row = mysqli_fetch_assoc($result))
                                                {?>

                                            <tr>
                                                <td><?php echo $row["email"] ?></td>
                                                <td><?php echo $row["phone"] ?></td>
                                                <td><textarea name="" id="" cols="30" rows="1"><?php echo $row["message"] ?></textarea></td>
                                                <td><?php echo $row["date"] ?></td>
                                                <td>
                                                    <a href="del-msg.php?email=<?php echo $row["email"] ?>" class="ms-4"><i class="fa-solid fa-trash">delete</i></a>
                                                </td>  
                                            </tr>
                                                    
                                            <?php }
                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

</body>
</html>

<?php 
}
else{
    header("refresh:0.2,url='../login.php'");
}
?>