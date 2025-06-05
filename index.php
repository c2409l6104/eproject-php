<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="main-container">
        <!-- <header>
            <div class="logo">
                <img src="img/IMG_9184.PNG" width="70px" alt="">
                <h2>GalaSilk</h2>
            </div>
            <div class="social-media">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Shop</a>
                <a href="#">Feedbacks</a>
            </div>
        </header> -->
        <video class="bg-video" autoplay muted loop playsinline>
            <source src="img/y2meta.net_1080p-fpv-drone-flight-through-beautiful-iceland-canyon.mp4"
                type="video/mp4">
        </video>

        <div class="login-section">
             
            <form action="#" class="login-form active">
               <input type="checkbox" class="input-check" id="login-check">
                <label for="input-check" class="toggle" >
                    <span class="text off"> Off </span>
                    <span class="text on">On</span>
                </label>
                <div class="login-light">

                </div>
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" class="Username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="text" class="Password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember-forgot">
                    <div class="rememberme">
                        <label for="remember-me">Remember me</label>
                        <input type="checkbox" id="remember-me">
                    </div>
                    

                    <a href="#">Forgot password?</a>
                </div>
                <div class="input-box">
                    <button type="submit" class="login-btn">Login</button>
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="#">Register</a></p>
                </div>


            </form>
            <form action="" class="register-form">
                <input type="checkbox" class="input-check" id="register-check">
                <label for="input-check" class="toggle" >
                    <span class="text off"> Off </span>
                    <span class="text on">On</span>
                </label>
                <div class="login-light">

                </div>
                <h2>Register</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" class="UsernameRegister" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="text" class="PasswordRegister" required>
                    <label for="">Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="text" class="PasswordRegister" required>
                    <label for="">Confirm Password</label>
                </div>

                <div class="input-box">
                    <button type="submit" class="login-btn">Register</button>
                </div>
                <div class="login-link">
                    <p>Already have an account? <a href="#">Login</a></p>
                </div>
            </form>
        </div>
    </div>
<script src="login.js"></script>

</body>

</html>
