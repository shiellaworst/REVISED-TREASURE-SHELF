<?php

// Start session
session_start();

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

// Database configuration

include('connection.php');

// Get user data from database
$user_id = $_SESSION['user_id']; // Get user ID from session
$query = "SELECT * FROM `users` WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $lname = $row['lname'];
    $fname = $row['fname'];
    $mi = $row['mi'];
    $email = $row['email'];
    $mi = $row['mi'];
    $password = $row['password'];
    $user_img = $row['user_img'];
} else {

    echo "Error: " . mysqli_error($conn);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="css/user-profile1.css" />
    <link rel="stylesheet" type="text/css" href="css/loading.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>


    <!--==== Icon CSS ===== -->
    <link rel="shortcut icon" href="images/Web_Icon.png" type="image/png">
    <title>TS | User-Profile</title>

    <style>
        .image-upload>input {
            display: none;
        }
    </style>

</head>

<body>
    <?php
    include "loading.php";
    ?>
    <div class="user-profile">
        <div class="header">
            <i class="fi fi-br-angle-left"
                Onclick="window.location.href='homepage.php?user_id=<?php echo $_SESSION['user_id']; ?>'"></i>
            <div class="back">
                <h1><b>USER PROFILE</b></h1>
            </div>

        </div>

        <div class="cntn">

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />

            <div class="name" style="justify-content:center;">
                <div>
                    <?php echo "<img src='uploads/" . $row['user_img'] . "' >"; ?>
                </div>
                <div>
                    <h1>
                        <?php echo $lname; ?>,
                        <?php echo $fname; ?>
                        <?php echo $mi; ?>.
                    </h1>
                    <h6>
                        <?php echo $email; ?>
                    </h6>
                </div>
                <div>
                    <i class="bi bi-pencil-square" Onclick="window.location.href='hp-edit-profile.php'"></i>
                </div>

            </div>

            <div class="banner" style="justify-content:center;">
                <div>
                    <div class="slideshow-container" style="cursor: pointer;" Onclick="window.location.href='homepage.php?user_id=<?php echo $_SESSION['user_id']; ?>'">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="images/slide1.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="images/slide2.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="images/slide3.png" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>

                    </div>
                    <br>

                    <div style="text-align:center; margin-top:-75px">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>

                
                <div class="menu">
                    <li><button class="btn" Onclick="window.location.href='hp-mng-pass.php'"><i
                                class="bi bi-person-lock"></i> Manage Password</button></li>
                    <li><button class="btn" Onclick="window.location.href='hp-privacy.php'"><i
                                class="bi bi-shield-check"></i>Privacy</button></li>
                    <li><button class="btn" Onclick="window.location.href='hp-contact-us.php'"><i
                                class="bi bi-telephone-inbound"></i> Contact Us</button></li>
                    <li><button class="btn" Onclick="window.location.href='hp-about-us.php'"><i
                                class="bi bi-info-circle"></i> About Us</button></li> <br>
                    <?php
                    echo "<a onClick =\"javascript:return confirm('Are you sure to sign out?');\" 
            href='logout.php'> <li><button class='btn'><i class='bi bi-box-arrow-left'></i> Logout</button></li>";
                    ?>

                </div>
            </div>

        </div>



    </div>

    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

    </script>


</body>

</html>