<?php 
session_start();

try{
    $db_name = "mysql:dbname=personal_db;host=localhost";
    $user_name= 'root';
    $password = '';

    $conn= new PDO($db_name, $user_name, $password);

}catch(PDOException $e){
    echo 'Connection faild!'. $e->getMessage();
}


if(isset($_POST['send'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $insert_contact = $conn->prepare("INSERT INTO `contact_form` (name, email, number, message)
    VALUES(?, ?, ?, ?)");
    $insert_contact->execute(array($name, $email, $number, $message));
    $message = 'Send message successfully!';
    $_SESSION['message'] = $message;
    header('Location: index.php'); 
    exit;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Design</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>


<?php 
    if(isset($_SESSION['message'])){
            echo '<div class="message">
            <span>'.$_SESSION['message'].'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        unset($_SESSION['message']);
    }
?>

<!-- header section -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">portofolio</a>

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#portfolio">portofolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
    </div>
</header>

<!-- home section -->
<section class="home" id="home">
   <div class="image" data-aos="fade-right">
    <img src="./assets/images/user-img.jpg" alt="">
   </div> 

   <div class="content">
    <h3 data-aos="fade-up">hi, i am sana shaikh</h3>
    <span data-aos="fade-up">web designer & developer</span>
    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vitae eius, in maxime iure nesciunt!</p>
    <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>
</section>

<!-- about section -->
<section class="about" id="about">
    <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>

    <div class="biography">
        <p data-aos="fade-up">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus doloribus fugiat, totam tempore suscipit atque facilis pariatur ratione quam quidem.</p>

        <div class="bio">
            <h3 data-aos="zoom-in"><span>name :</span> sana shaikh</h3>
            <h3 data-aos="zoom-in"><span>email :</span> sanashaikh@gmail.com</h3>
            <h3 data-aos="zoom-in"><span>address :</span> mumbai, india</h3>
            <h3 data-aos="zoom-in"><span>phone :</span> +123-456-7890</h3>
            <h3 data-aos="zoom-in"><span>age :</span> 22 years</h3>
            <h3 data-aos="zoom-in"><span>experience :</span> 2+ years </h3>
        </div>

        <a href="#" class="btn" data-aos="fade-up">download CV</a>
    </div>

    <div class="skills" data-aos="fade-up">
        <h1 class="heading"><span>skills</span></h1>

        <div class="progress">
            <div class="bar" data-aos="fade-left"><h3><span>HTML</span> <span>95%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>CSS</span> <span>80%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span> <span>65%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>PHP</span> <span>80%</span></h3></div>
        </div>

        <div class="edu-exp">
            <h1 class="heading" data-aos="fade-up"><span>education & experience</span></h1>

            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>( 2019 - 2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2020 - 2021)</span>
                        <h3>web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2021 - 2022)</span>
                        <h3>graphic designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>
                </div>

                
                <div class="box-container">
                    <h3 class="title" data-aos="fade-left">experience</h3>
                    <div class="box" data-aos="fade-left">
                        <span>( 2019 - 2020)</span>
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>( 2020 - 2021)</span>
                        <h3>back-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>( 2021 - 2022)</span>
                        <h3>full-stack developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab et, reiciendis quod facilis quam quidem.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- services section -->
<section class="services" id="services">
    <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>
        
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident excepturi incidunt inventore facere vitae nesciunt!</p>
        </div>
    </div>
</section>

<!-- portfolio section -->
 <section class="portfolio" id="portfolio">
    <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-1.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-2.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-3.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-4.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-5.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="./assets/images/img-6.jpg" alt="">
            <h3>web development</h3>
            <span>( 2020 - 2022)</span>
        </div>
    </div>
 </section>

<!-- contact section  -->
<section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
        <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
        <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea data-aos="fade-up" name="message" class="box" required 
        placeholder="enter your message" cols="30" rows="10"></textarea>
        <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+123-456-7890</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>sanashikh@gmail.com</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>mumbai, india - 400104</p>
        </div>
    </div>
</section>

<div class="credit">
 © <?php echo date('Y'); ?> by <span>mr.web designer</span>
</div>
    


<!-- aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- custom js -->
<script src="./assets/js/app.js"></script>
</body>
</html>