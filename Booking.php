<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
$error="";
// Include the database configuration file
//include("db_config.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
$conn =mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "connection failed".mysqli_error($conn);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Hid=mysqli_real_escape_string($conn, $_POST['H-ID']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $price =mysqli_real_escape_string($conn, $_POST['price']);
    $Hdescription =mysqli_real_escape_string($conn, $_POST['descripton']);
    $sql ="INSERT INTO user VALUES(?,?,?,?,now())";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"ssss",$H-ID,$email,$price,$description);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    //$row=mysqli_fetch_row($result);
    if (!$result) {
        /*$row = mysqli_fetch_assoc($result);
        // Verify the entered password with the stored hashed password
        if (password_verify($password, $row['Password'])) {
            // Login successful, set up session
            
            $_SESSION['user_id'] = $row['UserID'];
            // Redirect to the dashboard or any other page
            header('Location: Dashboard.php');
            exit();
        } else {
            // Password verification failed
            $error = 'Invalid username or password';
        }*/
        $_SESSION['user_id'] = $H-ID;
        header('Location: login.php');
        exit();
    }
     else {
        // User not found
        $error = 'Registration failed';
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="welcome to the most extra ordinary hotel in Boston">
    <meta name="keyword" content="hotel, boston hotel,  new england hotel"> 
    <script src="https://kit.fontawesome.com/9948bdb48c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"media="screen and (max-width:768px)" href="css/mobile.css">

    <title>Hotel BT | welcome </title>
    <style>
        /* reset*/
*{
margin: 0;
padding: 0;
box-sizing: border-box;

}
/* utilities class */
.container{
    margin: auto;
    max-width: 1000px;
    overflow: auto; 
    padding: 0 20px;



}
.text-primary{
color:#22ee2d ;

}
.leads{
    font-size: 20px;
}
.btn{
    display: inline-block;
    background: #444;
    color: #fff; 
    font-size: 18px;
    padding: 13px 20px;
    border: none;
    cursor: pointer;
}
.btn:hover{
    background: rgb(34, 34, 34);
    color: greenyellow ;
}
.btn-light{
    background: gray;
}
.bg-dark{
    background: #333;
    color: #fff;

}
.bg-light{
    background: #f4f4f4f4;
    color: #333;
}
.bg-primary {  
    background:gray ;
    color:#fff   ;
}
.clr{
    clear: both;
}
.l-heading{
    font-size: 40px;
    line-height: 1.2;
}
/* padding */
.py-1{padding: 10px 0;}
.py-2{padding:210px 0;}
.py-3{padding: 30px 0;}
/*main styling*/
html,body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.7em;
    background-color:white;
}
a{
    text-decoration: none;
    color: #333;
}
 h1 ,h2 ,h3{
     padding-bottom:20px ;
 }
 p{
     margin: 20px;
 }
/* nav bar */
#navbar{
    background-color: #333;
    color: #fff;
    overflow: auto;
}
#navbar a {
    color: #fff;
}
#navbar h1{
    float: left;
    padding-top: 20px;
}
#navbar ul{
    list-style: none;
    float: right;
}
#navbar ul li{
    float: left;
}
#navbar ul li a{
    padding: 20px;
    display: block;
}
#navbar ul li a:hover,
#navbar ul li a.current {
    background-color: #444;
    color: #22ee2d;
    text-align: center;
}

/* show case */
#showcase{
    background: url(image/room.jpg)no-repeat center center/cover;
    height: 100%;
}
#showcase .showcase-content{
    color: #fff;
    padding-top: 170px; 
    text-align: center;
}
#showcase .showcase-content h1{
    font-size: 60px;
    line-height: 1.2em;
}
#showcase .showcase-content p{
    padding-bottom: 20px;
    line-height: 1.7em;
}
/* home -info */
#home-info{
    height: 450px;

}
#home-info .info-image{
    width:50%;
    float:left;
    background: url(/image/reception.jpg) no-repeat;
    min-height: 100%;
    background-size: cover;
}
#home-info .info-content{
    width: 50%;
    float: right;
    text-align: center;
    padding: 50 30px;
    overflow: hidden;
    background: rgb(46, 24, 24);
    color: #fff;
    min-height: 100%;
    
}
#home-info .info-content p{
    padding-bottom: 30px;
}
/* Features */
.box{
    float: left;
    width: 33.3%;
    padding: 50px;
    text-align: center;

}
.box i{
    margin-bottom: 1opx;
}
/* about page */
#about-info .info-right{
    line-height: 100%;
    float: right;
    width: 50%;
}
#about-info .info-right img{
display: block;
margin: auto;
width: 70%;
border-radius: 50%;
}
#about-info .info-left{
    float: left;
    width: 50%;

}
/* testimonials */
#testimonials{
    height: 100%;
    background: url(/image/meal.jpg) no-repeat  center center/cover;
    padding: 100px;
}
#testimonials .testimonial{
    padding: 20px;
    margin-bottom: 40px;
    border-radius: 5px;
    opacity: 0.9;
}
#testimonials .testimonial img{
    width: 100px;
    float: left;
    margin-right: 20px;
    border-radius: 50%;
}
#testimonials h2{
    color: white;
    text-align: center;
    padding-bottom: 40px;
}
/* contact form */
#contact-form .form-group {
    margin: bottom 20px;
}
#contact-form label{
    display: block;
    margin-bottom: 5px;
}
#contact-form input,
#contact-form textarea{
    width: 100%;
    padding: 10px;
    border: 1px #ccc solid;
}
#contact-form input:focus,
#contact-form textarea:focus{
    outline: none;
    border-color:yellowgreen;
}

/* footer */
#main-footer{
    text-align: center;
    background: #444;
    color: #fff;
    padding: 20px;
}
.create-account-container
{
    margin: auto;
    width:400px;
 background-color:white;
    font-family:Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 40px;

}
.main{
    padding-top: 50px;
}
.main1{
    background-color:lightgray;  
}
.space{
    width:90%;
    padding:8px;
    border-radius:  5px;
}
    </style>

</head>
<body>
    <header>
    <nav id="navbar">
        <div class="container">
     <h1 class="logo" > <a href="index.php"></a> HBT</h1>
     <ul>
         <li><a href="indexx.php">home</a></li>
         <li><a href="Contact.php">contact</a></li>
         <li><a class="current" href="booking.php">Booking</a></li>
         <li><a href="about.php">about us</a></li>
    </ul>
</div>
</nav>


<body>

    <main>
        <section id="search">
            <!-- Search bar -->
           
        </section>

        <section id="listings">
            <!-- Hotel listings -->
            <article>
                <img src="image/hotel1.jpeg" alt="hotel1"/>
                <h2>Radisson blu</h2>
                <p>Description of Hotel 
                Located in Kigali, a 3-minute walk from Kigali Convention Centre,
                 Radisson Blu Hotel & Convention Centre Kigali has accommodations 
                 \with an outdoor swimming pool, 
                 free private parking, a fitness center and a garden,Wi-Fi, Parking, Breakfast.</p>
                <p>Price: $100/night</p>
                <a href="Book-Now.php">book now</a>
            </article>

            <article>
                <img src="image/nyungwe.jpeg" alt="Hotel 2">
                <h2>one&only nyungwe hotel</h2>
                <p>Description of Hotel one and only nyungwe forest resort is located in nyungwe national park
                    with hike in a jungle,accommodations,dinner and lunch even breakfast
                     Wi-Fi, Gym, Pool.</p>
                <p>Price: $80/night</p>
                <a href="Book-Now.php">book now</a>
            </article>

            <article>
                <img src="image/musanze2.jpg" width="400px" height="200px" alt="Hotel 3">
                <h2>five star volcanoes hotel</h2>
                <p>Description of Hotel  Wi-Fi, Spa, Restaurant.</p>
                <p>Price: $50/night</p>
                <a href="Book-Now.php">book now</a>
            </article>

            <!-- Add more hotels similarly -->
        </section>
    </main>

    <section id="reviews">
        <!-- User reviews -->
        <h2>Reviews</h2>
        <ul>
            <li>Excellent stay! 5/5</li>
            <li>Helpful staff and great location. 4/5</li>
            <!-- Add more reviews -->
        </ul>
    </section>

    <section id="map">
        <!-- Map integration goes here -->
        <!-- You might use a library like Google Maps API -->
    </section>

    <section id="contact">
        <!-- Contact information -->
        <h2>Contact Us</h2>
        <p>Phone: xxx-xxx-xxxx</p>
        <p>Email: info@yourhotel.com</p>
    </section>

    <footer>
        <!-- Footer content, possibly links to terms, privacy policy, etc. -->
    </footer>

    <!-- Add your JavaScript scripts here if needed -->

</body>

</html>
