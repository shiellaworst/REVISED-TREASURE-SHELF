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
            <i class="fi fi-br-angle-left" Onclick="window.location.href='hp-user-profile.php'"></i>
            <div class="back">
                <h1><b>Contact Us</b></h1>
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

            </div>

            <div class="content">
                <p>
                    We're thrilled to hear from you! At our book recommendation mobile application, we value your
                    feedback and suggestions. If you have any questions, concerns, or just want to say hi, please don't
                    hesitate to get in touch with us.

                    <br><br>You can reach out to us via email at <a
                        href="mailto:tsbookrecommendations2023@gmail.com">Treasure Shelf</a> We
                    strive to respond to all inquiries within 24 hours.

                    <br><br>We also encourage you to connect with us on social media. Follow us on FACEBOOK, TWITTER,
                    INSTAGRAM, to stay up-to-date with the latest news, updates, and book recommendations.

                    If you encounter any issues with our app or have any suggestions for improvement, please let us
                    know. We're constantly working to make our app better, and your feedback plays a crucial role in
                    that process.

                    <br><br>Thank you for using our book recommendation mobile application. We look forward to hearing
                    from you soon!
                </p>
            </div>

            <div class="socmed">
                
                <div class="box" Onclick="window.location.href='https://instagram.com/treasure.shelf2023?igshid=YmMyMTA2M2Y='">
                    <div>
                        <div class="logo">
                            <i class="bi bi-instagram"></i>
                        </div>

                        <b>Email:</b>
                        <br>tsbookrecommendations2023@gmail.com
                        <br><b>Username:</b>
                        <br>treasure.shelf2023
                        <br><b>Name:</b>
                        <br>Treasure Shelf
                    </div>

                </div>

                <div class="box"  Onclick="window.location.href='https://www.facebook.com/treasure.shelf2023'"> 
                    <div>
                        <div class="logo">
                            <i class="bi bi-facebook"></i>
                        </div> 

                        <b>Email:</b>
                        <br>tsbookrecommendations2023@gmail.com
                        <br><b>Name:</b>
                        <br>Trshlf Bkrec (Treasure Shelf Book Recommendations)

                    </div>

                </div>

                <div class="box" Onclick="window.location.href='https://twitter.com/TreasureShelf/'">
                    <div>
                        <div class="logo">
                            <i class="bi bi-twitter"></i>
                        </div> 

                        <b>Email:</b>
                        <br>tsbookrecommendations2023@gmail.com
                        <br><b>Username:</b>
                        <br>treasureshelf

                    </div>

                </div>

            </div>

        </div>



    </div>

    <script>

        const chooseFile = document.getElementById("my_image");
        const imgPreview = document.getElementById("img-preview");
        chooseFile.addEventListener("change", function () {
            getImgData();
        });


        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    imgPreview.innerHTML = '<img src="' + this.result + '" />';
                });
            }
            else {

            }
        }

        const password = document.getElementById("password");
        const password1 = document.getElementById("password1");
        const colorSpan = document.getElementById("color-span");
        const colorSpan1 = document.getElementById("color-span1");
        const colorSpan2 = document.getElementById("color-span2");


        password.addEventListener('input', () => {
            const passBox = document.querySelector('.passBox');
            const passText = document.querySelector('.passText');
            const passPattern = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/;


            if (password.value.match(passPattern)) {
                passBox.classList.add('valid');
                passBox.classList.remove('invalid');
                passText.innerHTML = "Your Password is Valid";
                colorSpan1.style.color = "green";

            } else {
                passBox.classList.add('invalid');
                passBox.classList.remove('valid');
                passText.innerHTML = "Your password must be at least 8 characters as well as contain at least one uppercase, one lowercase, and one number.";
                colorSpan1.style.color = "red";

            }
        });

        password1.addEventListener('input', () => {
            const passText1 = document.querySelector('.passText1');


            if (password.value !== password1.value) {
                passText1.innerHTML = "Your password is not Match";
                colorSpan2.style.color = "red";
            } else if (password.value == password1.value) {
                passText1.innerHTML = "Your password is Match";
                colorSpan2.style.color = "green";
            } else {
                passText1.innerHTML = "";
            }

        });


        const togglePassword = document.querySelector("#togglePassword");
        const pass = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = pass.getAttribute("type") === "password" ? "text" : "password";
            pass.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        const togglePassword1 = document.querySelector("#togglePassword1");
        const pass1 = document.querySelector("#password1");

        togglePassword1.addEventListener("click", function () {
            // toggle the type attribute
            const type = pass1.getAttribute("type") === "password" ? "text" : "password";
            pass1.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });



    </script>


</body>

</html>