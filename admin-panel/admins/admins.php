<?php
// Include the header and configuration files
require "../layouts/header.php";
require "../../config/config.php";

// Check if the 'adminname' session variable is not set
if (!isset($_SESSION['adminname'])) {
    // Redirect to the login page
    echo "<script> window.location.href='" . ADMINURL . "/admins/login-admins.php'; </script>";
}

// Query the database to retrieve all admin records
$admins = $conn->query("SELECT * FROM admins");
$admins->execute();

// Fetch all admin records as objects
$allAdmins = $admins->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Admins</h5>
                <!-- Link to create new admins -->
                <a href="<?php echo ADMINURL; ?>/admins/create-admins.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">adminname</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allAdmins as $admin) : ?>
                            <tr>
                                <th scope="row"><?php echo $admin->id; ?></th>
                                <td><?php echo $admin->adminname; ?></td>
                                <td><?php echo $admin->email; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
require "../layouts/footer.php";
?>
