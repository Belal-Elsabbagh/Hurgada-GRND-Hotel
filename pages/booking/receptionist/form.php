<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../global/css/style.css">
    <link rel="stylesheet" href="../style.css">

    <?php
    include "../../../global/php/db-functions.php";
    include "../form_loader.php";
    ?>

    <title>Booking</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main JS File -->
    <script src="../../../global/template/template.js"></script>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="../../../global/template/normalize.css"/>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../../../global/template/template.css"/>
    <script>
        const params = new URLSearchParams(window.location.search);
        if (params.has("err")) alert(params.get('err'));
    </script>
</head>

<body>
<!-- Header -->
<div class="header" id="header">
    <div class="container">
        <div class="links">
                <span id="icon" class="icon" onclick="showbar()">
                    <em class='bx bx-menu-alt-left'></em>
                </span>
            <div class="items" id="items">
                    <span class="container">
                        <span>Home</span>
                    </span>
                <span class="container">
                        <span>Rooms</span>
                    </span>
                <span class="container">
                        <span>Dining</span>
                    </span>
                <span class="container">
                        <span>Experience</span>
                    </span>
                <span class="container">
                        <span>Location</span>
                    </span>
                <span class="container">
                        <span>About</span>
                    </span>
            </div>
            <span id='icon2' class="icon2" onclick="hidebar()">
                    <em class='bx bx-x'></em>
                </span>
            <em class='book' id="book">Book now</em>
            <ul id="bar">
                <li><a href="http://localhost/Hurgada-GRND-Hotel/pages/profile"><i class='bx bxs-user'></i> Profile</a>
                </li>
                <li><a href="http://localhost/Hurgada-GRND-Hotel/pages/reservation"><i class='bx bxs-bed'></i> My
                        Reservations</a></li>
                <li><a href="http://localhost/Hurgada-GRND-Hotel/pages/rate-us"><i class='bx bxs-star'></i> Rate us</a>
                </li>
                <li><a href="http://localhost/Hurgada-GRND-Hotel/pages/contact-us"><i class='bx bxl-gmail'></i> Contact
                        us</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Of Header -->

<!-- Body -->
<div class="features">
    <div class="container">
        <div class="feat">
            <form action="../book.php" method="post">
                <div class="email">
                    <label for="email">Client E-mail</label>
                    <input type="text" id="email" name="email" required/>
                </div>
                <div class="dates">
                    <label for="checkin">Check in date</label>
                    <input type="date" id="checkin" name="checkin" required/>
                    <label for="checkout">Check out date</label>
                    <input type="date" id="checkout" name="checkout" required/>
                </div>
                <div class="num-of-occupants">
                    <label for="adults">Number of adults</label>
                    <input type="number" id="adults" name="adults" min="1" max="4" value="1" required/>
                    <label for="children">Number of children</label>
                    <input type="number" id="children" name="children" min="0" max="8" value="0" required/>
                </div>
                <div class="options">
                    <div class="room_type">
                        <?php load_room_types(); ?>
                    </div>
                    <div class="view">
                        <?php load_room_views(); ?>
                    </div>
                    <div class="outdoors">
                        <input class="options" id="outdoors_balcony" name="outdoors" type="radio" value="0">
                        <label for="outdoors_balcony">Balcony</label>
                        <input class="options" id="outdoors_patio" name="outdoors" type="radio" value="1">
                        <label for="outdoors_patio">Patio</label>
                    </div>
                </div>
                <input type="submit" class="submit" id="submit" name="submit">
            </form>
            <button id="clear_filters" onclick="clear_filters()">Clear all options</button>
        </div>
    </div>
</div>
<!-- End Of Body -->


<!-- Footer -->
<div class="footer">
    &copy; 2022
    <span>MIU</span>
    All Rights Reserved
</div>
<!-- End Of Footer -->

<!-- Scroll Bar -->
<span class="c-scroller_thumb"></span>
</body>

</html>