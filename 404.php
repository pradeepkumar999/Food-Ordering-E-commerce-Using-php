<?php 
    // Check if the HTTP_REFERER header is not set (referrer is not present).
    if (!isset($_SERVER['HTTP_REFERER'])) {
        // Redirect the user to a specific location (http://localhost/freshcery/index.php).
        header('location: http://localhost/freshcery/index.php');
        exit; // Terminate script execution after the redirection.
    }
?>

<?php require "includes/header.php"; // Include the header.php file. ?>
<?php require "config/config.php"; // Include the config.php file. ?>

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                404 page, we cannot find the page that you are looking for.
            </h1>
            <!--
            <p class="lead">
                You can check your orders now.
            </p>
            -->
            <a href="<?php echo APPURL; ?>" class="btn btn-primary text-uppercase">home</a>
        </div>
    </div>
</div>

<?php require "includes/footer.php"; // Include footer.php file. ?>
