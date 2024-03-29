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
    <h3>our lovely customers thank you for booking hotel with us <br>
    here are so extra services you can get from using this site</h3>
    <b>services:</b><select name="service" id="s">
    <option select >below is the list of some available services</option>
                    <option>sauna massage</option>
                    <option>flight ticket</option>
                    <option>hotel tour,park tour and other tour services</option>
                    <option>taxi to airport</option>
                    <option>gym</option>
                    </select>
                    <br>
                    <p>for futher help please fill out the form</p> 
                    <p><form action="" method="post"></p>
                    <br>
                <b>Email:</b><input type="text"name="email"placeholder="Enter your email"size="60"><br>
                <br>
                <br>
                <b>country of residence:</b><input type="text"name="country"placeholder="country you live in"size="60">
                <br>
                <b>check-to-go:<input type="date" placeholder="Check-in"><br>
            <b>check-to-comeback:<input type="date" placeholder="Check-out">
                    <br>
                    <br>
                             <b>Phone:</b><input type="text"name="tel"placeholder="07****"><br>
                             <button id="button" type="submit">Submit</button>
                </form