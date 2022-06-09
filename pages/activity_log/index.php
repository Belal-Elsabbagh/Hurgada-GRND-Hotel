<?php
include_once "../../global/php/db-functions.php";
include_once "view_loader.php";
maintain_session();
redirect_to_login();
//restrict_to_staff();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>HURGADA-GRND-HOTEL</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='../../global/css/bootstrap-5.0.2-dist/css/bootstrap.css'>
    <script src='../../global/css/bootstrap-5.0.2-dist/js/bootstrap.js'></script>
    <script src='../../global/js/font-awesome.js'></script>
    <link rel='stylesheet' href='../../global/css/style.css'/>
    <link rel='stylesheet' href='style.css'/>
    <!-- Main template CSS File -->
    <link rel='stylesheet' href='../../global/template/template-bootstrap.css'/>
    <!-- Main JS File -->
    <script src='../../global/template/template.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="../../global/js/ajax_functions.js"></script>
</head>

<body class='d-flex flex-column min-vh-100'>
<!-- Header -->
<nav class='navbar' id='header'>
    <div class='container-fluid'>
        <div class='navbar-header' onclick='showbar()'>
            <span class='navbar-brand'><em class='bx bx-menu-alt-left icon'></em></span>
        </div>
        <div class='row'>
            <ul class='nav items' id='items'>
                <?php echo load_header_bar(get_active_user_type(), true); ?>
            </ul>
        </div>
        <div class="">
            <span id='icon2' class='icon2' onclick='hidebar()'><em class='bx bx-x'></em></span>
        </div>
        <span class='book nav navbar-nav navbar-right nav-link-container text-center' id='book'><a
                    class='nav-link nlink' href='#'>Book now</a></span>
    </div>
</nav>
<!-- End Of Header -->

<!-- Body -->

<div class='container-fluid root'>
    <div class="row container-fluid">
        <div class='feature' id="receptionists-table">
            <?php
            try
            {
                echo construct_log_table();
            } catch (Exception $e)
            {
                echo "<p>" . $e->getMessage() . "</p>";
            }
            ?>
        </div>
    </div>
</div>
<!-- End Of Body -->

<!-- Footer -->
<footer class='text-center text-white mt-auto' style='background-color: var(--blue0-color);'>
    <!-- Grid container -->
    <div class='container p-4 pb-0'>
        <!-- Section: Social media -->
        <section class='mb-4'>
            <!-- Github -->
            <a class='btn btn-outline-light btn-floating m-1'
               href='https://github.com/Belal-Elsabbagh/Hurgada-GRND-Hotel' role='button'>
                <img src='../../resources/img/icons/GitHub-Mark-Light-64px.png' width='32' alt='Our GitHub'> GitHub
                Repository
            </a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class='text-center p-3' style='background-color: var(--blue0-color);'>
        &copy; 2022
        <span>MIU</span> All Rights Reserved
    </div>
    <!-- Copyright -->
</footer>
<!-- End Of Footer -->

<!-- Scroll Bar -->
<span class='c-scroller_thumb'></span>
</body>

</html>