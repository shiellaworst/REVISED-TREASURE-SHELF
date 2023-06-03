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
            <h1><b>Privacy</b></h1>
            </div>
            
        </div>

        <div class="cntn">
            
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />

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

                </div>

                <span><p>At Treasure Shelf: Book Recommendations, we take your privacy seriously. This Privacy Policy explains how we collect, use, and protect your personal information when you use our website. We only collect personal information that is necessary for us to provide our services to you, and we will never sell or share your information with third parties. We use various security measures to protect your information from unauthorized access and use. By using our website, you agree to the terms of this Privacy Policy.</p></span>


                
            
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