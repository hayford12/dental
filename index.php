<?php
$conn = mysqli_connect('localhost', 'root', '','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert =  mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) 
    VALUES('$name', '$email', '$number', '$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<!-- header section starts -->

<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental <span>Care</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#sevices">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </div>
</header>
<!-- header section ends -->


<!-- home section starts -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Let us brighten your smile</h3>
                <p>A unique dental service delivering a full range of dental services to your home, care home or work place. </p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>

        </div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Dentists are the frontline of good oral health. 
                    They work with communities to prevent and treat dental/oral disease, 
                    correct dental irregularities and treat dental/facial injuries.</p>
                <a href="#contact" class="link-btn">make appointment</a>
            </div>

        </div>
    </div>
</section>

<!-- about section ends -->

<!-- services section starts -->

<section class="services" id="services">
    <h1 class="heading">our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Demential</h3>
            <p>We are experienced in providing services for Alzheimer's and Dementia patients. They are treated with kindness and patience.</p>
        </div>

        <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Dentures</h3>
            <p>We have decades of experience fabricating esthetic and functonal dentures for our patients.</p>
        </div>

        <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Teeth Cleanings</h3>
            <p>This is by far the most common reason people visit the dentist. Many dentists recommend a cleaning every six months, and some recommend once a year.</p>
        </div>

        <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Root Canal </h3>
            <p>This is one that most people dread, and for fair reasons. Root canals are usually preceded by some pretty awful tooth pain.</p>
        </div>

        <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Braces/Invisalign</h3>
            <p>Most practices are moving away from traditional braces and towards Invisalign, but they both serve the same purpose.</p>
        </div>

        <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Fillings</h3>
            <p>For most cavities, a filling is the recommended answer. 
                Acids in food and inside your body can easily break down tooth enamel if overexposed.</p>
        </div>
    </div>
</section>

<!-- services section ends -->

<!--process section starts -->

<section class="process">

    <h1 class="heading">work process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Dementia</h3>
            <p>They are treated with kindness and patience.</p>
        </div>

        <div class="box">
            <img src="images/process-2.png" alt="">
            <h3>Fillings</h3>
            <p>Cavities are all too common and all too easy to get</p>
        </div>

        <div class="box">
            <img src="images/process-3.png" alt="">
            <h3>Bonding</h3>
            <p>This is another way to repair damaged or chipped teeth.</p>
        </div>
    </div>
</section>

<!-- process section ends -->


<!-- reviews section starts -->
<section class="reviews" id="reviews">
    <h1 class="heading">satisfied clients</h1>

    <div class="box-container container">
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>The staff was very friendly and welcoming.
                They cleaned my teeth really well and were kind as well as professional.
                Will definitely continue to come regularly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>The staff was very friendly and welcoming.
                They cleaned my teeth really well and were kind as well as professional.
                Will definitely continue to come regularly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>The staff was very friendly and welcoming.
                They cleaned my teeth really well and were kind as well as professional.
                Will definitely continue to come regularly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
        </div>
        
    </div>
</section>
<!-- reviews section ends -->


<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">' .$message. '</p>';

                }
            }
        ?>
        <span>your name :</span>
        <input type="text" name="name" placeholder= "enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder= "enter your email" class="box" required>
        <span>your number :</span>
        <input type="number" name="number" placeholder= "enter your number" class="box" required>
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>

<!-- contact section ends -->


<!-- footer section starts -->
<section class="footer">

    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>0547237839</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>B531/6 Abossey Okai</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening Hours</h3>
            <p>07:00am to 08:00pm</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>truthmanor@gmail.com</p>
        </div>
    </div>

    <div class="credit"> &copy; copyright @<?php echo date('Y'); ?> by <span>Hayford Manor</span></p>
    
</section>

<!-- footer section ends -->

    

<!-- custom js file link -->
<script src="js/script.js"></script>






</body>
</html>