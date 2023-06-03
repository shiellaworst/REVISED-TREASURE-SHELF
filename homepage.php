<?php
require_once "database.php";
$booksHot = getBooksData();
$books = getRecommendedBooks();
$upPress = getUpPress();
session_start(); // Start the session to access $_SESSION

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}
if (isset($_SESSION['user_id'])) { // Check if user_id is set in $_SESSION
    //  echo "User ID: " . $_SESSION['user_id']; // Output the user ID
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="css/homepage1.css" />
    <link rel="stylesheet" type="text/css" href="css/loading.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--==== Icon CSS ===== -->
    <link rel="shortcut icon" href="images/Web_Icon.png" type="image/png">


    <!-- tailwind -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Treasure Shelf</title>

</head>

<body>
    <div class="lol">
        <?php


        include('connection.php');

        // Get user data from database
        $user_id = $_SESSION['user_id']; // Get user ID from session
        $query = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $fname = $row['fname'];
            $naem = explode(' ', trim($fname))[0];
        } else {

            echo "Error: " . mysqli_error($conn);
        }

        ?>
        <div class="mobile">
            <form action="#" method="POST">
                <!-- <div class="header">
                    <div class="user">
                        <a href="homepage.php"><img src="images/lg1.png" id="logo" alt="" /></a>
                        <input type="text" id="search" placeholder="search" onClick="location.href='search.php'" />
                        <button id="search-btn">search</button>
                        <div onclick="openPopup()">
                            <img src="images/user.png" id="user" type="submit">|
                            <span>
                               
                            </span>
                        </div>

                    </div>
                </div> -->


                <header class="bg-orange-50 fixed-top overflow-hidden">
                    <div class="container mx-auto flex justify-between items-center">
                        <div class="flex gap-2 items-center">
                            <!-- Logo -->
                            <a Onclick="window.location.href='homepage.php?user_id=<?php echo $_SESSION['user_id']; ?>'" class="flex items-center">
                                <img src="images/lg1.png" id="logo" alt="" class="max-w-50 "/>
                                <div class="text-sm"> Treasure Shelf: Book Recommendations</div>
                            </a>
                            

                            <!-- Name -->

                        </div>
                        
                        <div class="flex gap-2 items-center ">
                            
                            
                            <h1 class=" text-black text-lg font-medium"> <?php echo $naem; ?></h1>
                            <div class="image">
                            <div onclick="openPopup()">
                            <?php echo "<img src='uploads/".$row['user_img']."' >";?>
                            </div>
                        
                    </div>
                        </div>
                        <!-- Icon -->

                    </div>
                </header>


            </form>


            <div class="container1">
                <div class="popup" id="popup">
                    <div class="user-menu">
                        <a Onclick="window.location.href='homepage.php?user_id=<?php echo $_SESSION['user_id']; ?>'"><i class="bi bi-house"></i>Home</a>
                        <a href="hp-user-profile.php" onclick="closePopup()"><i class="bi bi-person-gear"></i>Profile</a>
                        <a href="hp-mng-pass.php" onclick="closePopup()"><i class="bi bi-person-lock"></i>Manage Password</a>
                        <a href="hp-privacy.php" onclick="closePopup()"><i class="bi bi-shield-check"></i>Privacy</a>
                        <a href="hp-contact-us.php" onclick="closePopup()"><i class="bi bi-telephone-inbound"></i>Contact Us</a>
                        <a href="hp-about-us.php" onclick="closePopup()"><i class="bi bi-info-circle"></i>About Us</a><br>
                        <?php
                        echo "<a onClick =\"javascript:return confirm('Are you sure to sign out?');\" 
            href='logout.php'><i class='bi bi-box-arrow-in-left'></i>Log out </a>";
                        ?>
                    </div>
                    <button type="button" onclick="closePopup()">Back</button>
                </div>
            </div>

            <script src="js/script.js"> </script>

        </div>


</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".search-container input").keyup(function() {
            var searchText = $(this).val();
            if (searchText != "") {
                $.ajax({
                    url: "search.php",
                    method: "POST",
                    data: {
                        search: searchText
                    },
                    success: function(response) {
                        $(".search-results").html(response);
                    }
                });
            } else {
                $(".search-results").html("");
            }
        });
    });
</script>

</html>