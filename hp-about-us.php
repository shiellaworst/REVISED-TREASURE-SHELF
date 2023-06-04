<?php

// Start session
session_start();

// if (!isset($_SESSION['user_id'])) {
//     // User is not logged in, redirect to the login page
//     header('Location: index.php');
//     exit();
//   }
  
// // Database configuration

// include('connection.php');

// // Get user data from database
// $user_id = $_SESSION['user_id']; // Get user ID from session
// $query = "SELECT * FROM `users` WHERE id = '$user_id'";
// $result = mysqli_query($conn, $query);

// if ($result) {
//   $row = mysqli_fetch_assoc($result);
//   $lname = $row['lname'];
//   $fname = $row['fname'];
//   $mi = $row['mi'];
//   $email = $row['email'];
//   $mi = $row['mi'];
//   $password = $row['password'];
//   $user_img = $row['user_img'];
// } else {
  
//   echo "Error: " . mysqli_error($conn);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!--======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="css/User-profile1.css"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
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
    <div class ="user-profile">
        <div class="header">
            <i class="fi fi-br-angle-left" Onclick="window.location.href='hp-user-profile.php'"></i>
            <div class="back">
            <h1><b>About Us</b></h1>
            </div>
            
        </div>

        <div class="cntn">
            
                <!-- <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />

                <div class="name" style="justify-content:center;">
                    <div>
                        <?php echo "<img src='uploads/".$row['user_img']."' >";?>
                    </div>
                    <div>
                        <h1> <?php echo $lname;?>, <?php echo $fname;?> <?php echo $mi;?>.</h1>
                        <h6> <?php echo $email; ?> </h6>
                    </div>
                    <div>
                        <i class="bi bi-pencil-square" Onclick="window.location.href='hp-edit-profile.php'"></i>
                    </div>

                </div> -->

                <span><p>Welcome to Treasure Shelf: Book Recommendations ! We are a team of passionate readers and tech enthusiasts who have come together to create a platform that connects book lovers with their next great read.

Our mission is to make the process of discovering new books fun, easy, and personalized. We understand that every reader has their own unique tastes and preferences, and our app is designed to cater to those individual needs.

With a vast collection of books spanning across different genres and categories, we strive to provide our users with a curated selection of titles that will pique their interest and keep them engaged. Our app features a sophisticated recommendation engine that uses machine learning algorithms to suggest books based on your reading history and preferences.

At our core, we believe that reading is a transformative experience that can broaden our horizons, challenge our assumptions, and inspire us to be better. We want to create a community of book lovers who can share their thoughts, opinions, and recommendations with each other.

We are committed to creating a seamless and user-friendly experience for our users. Whether you're looking for your next page-turner or want to explore a new genre, we've got you covered. Join us on this exciting journey and let's discover the world of books together!
</p></span>

        <div class="container">
            <h1 class="front"><b>Front-End Developer</b></h1>
            <img src="images/pic carl.jpg" style="width: 30px , height: 40px" class="center" >
            <h3 class="front">Sy,Carl Emmanuel A.</h3>
            <p class="front">sy.carl.bscs2019@gmail.com</p>
            <p class="front">09301250774</p>
        </div>
        <div class="container">
            <h1 class="front"><b>Front-End Developer</b></h1>
            <img src="images/pic joy.jpg" style="width: 50px , height: 50px" class="center" >
            <h3 class="front">Lacopanto, Mary Joy</h3>
            <p class="front">lacopanto.mary joy.bscs2019@gmail.com</p>
            <p class="front">09072728529</p>
        </div>
        <div class="container">
            <h1 class="front"><b>Front-End Developer</b></h1>
            <img src="images/pic riego.jpg" style="width: 50px , height: 50px" class="center" >
            <h3 class="front">Riego, Jennylyn B.</h3>
            <p class="front">riego.jennylyn.bscs2019@gmail.com</p>
            <p class="front">09771406794</p>
        </div>
        <div class="container">
            <h1 class="front"><b>Back-End Developer</b></h1>
            <img src="images/pic sajol.jpeg" style="width: 50px , height: 50px" class="center" >
            <h3 class="front">Sajol, Shiella May M.</h3>
            <p class="front">sajol.shiellamay.bscs2019@gmail.com</p>
            <p class="front">09093660451</p>
        </div>
        <div class="container">
            <h1 class="front"><b>Back-End Developer</b></h1>
            <img src="images/pic romar.png" style="width: 50px , height: 50px" class="center" >
            <h3 class="front">Montero, Romar S.</h3>
            <p class="front">montero.romar.bscs2019@gmail.com</p>
            <p class="front">09153740498</p>
        </div>
        <div class="container">
            <h1 class="front"><b>Quality Assurance</b></h1>
            <img src="images/pic naval.jpg" style="width: 50px , height: 50px" class="center" >
            <h3 class="front">Naval, Mary Eugenia D.C</h3>
            <p class="front">naval.maryeugenia.bscs2019@gmail.com</p>
            <p class="front">09652103059</p>
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
        else{

        }
        }
    
    const password = document.getElementById("password");
        const password1 = document.getElementById("password1");
        const colorSpan = document.getElementById("color-span");
        const colorSpan1 = document.getElementById("color-span1");
        const colorSpan2 = document.getElementById("color-span2");


        password.addEventListener('input',()=>{
			const passBox = document.querySelector('.passBox');
			const passText = document.querySelector('.passText');
			const passPattern = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/;
            

			if(password.value.match(passPattern)){
				passBox.classList.add('valid');
				passBox.classList.remove('invalid');
				passText.innerHTML = "Your Password is Valid";
                colorSpan1.style.color = "green";
                 
			}else{
				passBox.classList.add('invalid');
				passBox.classList.remove('valid');
				passText.innerHTML = "Your password must be at least 8 characters as well as contain at least one uppercase, one lowercase, and one number."; 
                colorSpan1.style.color = "red";

			}
		});
        
        password1.addEventListener('input',()=>{
            const passText1 = document.querySelector('.passText1');
            

            if (password.value !== password1.value) {
                passText1.innerHTML = "Your password is not Match"; 
                colorSpan2.style.color = "red";
            } else if (password.value == password1.value){
                passText1.innerHTML = "Your password is Match"; 
                colorSpan2.style.color = "green";
            }else{
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