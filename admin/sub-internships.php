<!-- Config -->
<?php require("../includes/config.php"); 

session_start();

if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){

?>

<?php require("header.php") ?>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php require("sidebar.php") ?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" style="color: var(--dark); font-size: 32px;">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Admin / <span style="color: var(--primary);">Sub Internships</span></li>
                    </ol>
                    <div class="row my-5">
                        <div class="col-lg-4 text-center">
                            <img src="assets/img/-interneedesign.svg" class="img-fluid" width="350px" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="card" style="padding: 15px;">
                                <h3 style="font-size: 24px;" class="fw-bold">Add Sub-Internship</h3>
                                <form method="post" enctype="multipart/form-data" class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="dom">Domain</label>
                                            <input type="text" id="dom" class="form-control" name="domain">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="Image">Upload Logo</label>
                                            <input type="file" id="Image" class="form-control" name="logo">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="loc">Location</label>
                                            <input type="text" id="loc" class="form-control" name="location">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="dur">Duration</label>
                                            <input type="text" id="dur" class="form-control" name="duration">
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="job">Select Job type</label>
                                            <select name="job" id="job" class="form-control">
                                                <option value="Not Mentioned"></option>
                                                <option value="Remote">Full time</option>
                                                <option value="Remote">Part time</option>
                                                <option value="OnSite">Internship</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="work">Select Work type</label>
                                            <select name="work" id="work" class="form-control">
                                                <option value="Not Mentioned"></option>
                                                <option value="Remote">Remote</option>
                                                <option value="OnSite">OnSite</option>
                                            </select>
                                        </div>
                                        <?php

                                        $query = "CALL FetchInternships()";
                                        $result = mysqli_query($conn, $query);
                                            
                                        ?>
                                        <div class="col-lg-6 mt-3">
                                            <label for="categ">Select Category</label>
                                            <select name="category" id="categ" class="form-control">
                                                <option value="Not Mentioned"></option>
                                                <?php
                                                if($result) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="' . $row["Id"] . '">'. $row["Id"] ." ". $row["Category"] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <label for="link">ApplyLink</label>
                                            <input type="text" id="link" class="form-control" name="apply">
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn button mt-3 fw-bold" name="addSub">Add</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- add sub-internship php -->
                                <?php
                                if(isset($_POST["addSub"])) {
                                    try {
                                        $domain = $_POST["domain"];
                                        $logo = $_FILES["logo"]["name"];
                                        $temp_name = $_FILES["logo"]["tmp_name"];
                                        $folder = "../assets/internships/sub-logo/" . $logo;
                                        $location = $_POST["location"];
                                        $duration = $_POST["duration"];
                                        $job = $_POST["job"];
                                        $work = $_POST["work"];
                                        $category = $_POST["category"];
                                        $link = $_POST["apply"];

                                        $dbh = new PDO('mysql:host=localhost;dbname=internee.pk', 'root', '');
                                        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        $stmt = $dbh->prepare("INSERT INTO `sub_interns`(`DomainName`, `LogoImg`, `Location`, `Duration`, `JobType`, `WorkType`, `ApplyLink`, `CategId`) 
                                                            VALUES (:domain, :logo, :location, :duration, :job, :work, :link, :category)");
                                        $stmt->bindParam(':domain', $domain);
                                        $stmt->bindParam(':logo', $logo);
                                        $stmt->bindParam(':location', $location);
                                        $stmt->bindParam(':duration', $duration);
                                        $stmt->bindParam(':job', $job);
                                        $stmt->bindParam(':work', $work);
                                        $stmt->bindParam(':link', $link);
                                        $stmt->bindParam(':category', $category);

                                        $stmt->execute();

                                        if(move_uploaded_file($temp_name, $folder)) {
                                            echo '<script>alert("Successfully Added ✔");
                                            window.location.replace("sub-internships.php");
                                            </script>';
                                        } else {
                                            echo '<script>alert("Added Failed ❌");
                                            window.location.replace("sub-internships.php");
                                            </script>';
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error: " . $e->getMessage();
                                    }
                                }
                                ?>

                                <!-- // add sub-internship php -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Sub-Internships List
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Domain</th>
                                                <th>Logo</th>
                                                <th>Location</th>
                                                <th>Duration</th>
                                                <th>JobType</th>
                                                <th>WorkType</th>
                                                <th>ApplyLink</th>
                                                <th>Category Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            try {

                                                

                                                // Database connection parameters
                                                $servername = "localhost";
                                                $dbname = "internee.pk";
                                                $username = "root";
                                                $password = "";
                                            
                                                // Create connection
                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                
                                            
                                                $stmt = $conn->prepare("CALL fetch_Sub_Interns()");
                                                $stmt->execute();
                                            
                                                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                            
                                                foreach($rows as $row) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row["DomainName"] ?></td>
                                                        <td><img src="../assets/internships/sub-logo/<?php echo $row["LogoImg"] ?>" class="img-fluid" width="80px" alt="CoverImg"></td>
                                                        <td><?php echo $row["Location"] ?></td>
                                                        <td><?php echo $row["Duration"] ?> month</td>
                                                        <td><?php echo $row["JobType"] ?></td>
                                                        <td><?php echo $row["WorkType"] ?></td>
                                                        <td><a href="<?php echo $row["ApplyLink"] ?>" class="btn btn-sm bg-primary text-white">Apply On</a></td>
                                                        <td><?php echo $row["Category"] ?></td>
                                                        <td>
                                                            <a href="edit-sub-intern.php?id=<?php echo $row["subId"] ?>"><i class="fa-solid fa-square-pen"></i>Edit</a>
                                                            <a href="del-sub-intern.php?id=<?php echo $row["subId"] ?>" class="ms-4"><i class="fa-solid fa-trash">delete</i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            } catch(PDOException $e) {
                                                echo '<script>alert("fetch Failed: '.$e->getMessage().'")</script>';
                                            }
                                            
                                            
                                            ?>
                                            
                                            
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