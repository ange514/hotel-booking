
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBW</title>
</head>
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     />
<style>
    body,html{
        background-color: grey;
        padding: 0;
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }
    header{
        background-color:#444;
        margin: auto;
        display: grid;
        height: auto;
        border-radius: 0px;
        width: 100%;
        height: 100px;
        cursor: pointer;
        color:white;
    }
    .heading1{
        padding-left: 10px;
        font-size: 20px;
        /margin: auto;/
        grid-column: 1;
    }
    .heading2{
        text-align: center;
        grid-column: 2;
        float: left;
    }
    .heading1 h1 a{
        padding-left: 150px;
        text-decoration: none;
        color: dodgerblue;
    }
    .heading2 h1 b{
        color:white;
    }
    main{
        display: grid;
        padding-top: 0;
    }
    .col1{
        grid-column: 1;
        height: auto;
        width: 200px;
        margin-left: 00px;
        padding: 50px;
        border-right: 2px solid white;
    }
    .down{
        margin-top: 400px;
        align-items: last baseline;
    }
    .home{
        padding:10px;
        margin-bottom:5px;
        width: 200px;
        background-color: dodgerblue;
        color: white;
        text-align: center;
        border-radius: 10px;
        font-style: bold;
        font-size: 20px;
        cursor: pointer;
    }
    .col2{
        padding: 10px;
        grid-column: 2;
        height: auto;
        margin-left:0;
    }
    hr{
        padding: 0;
        margin: 0;
    }
    .footercontent{
        margin: auto;
        width: 80%;
    }
    .footercontent ul{
        list-style: none;
        display: inline-block !important;
        text-align: center;
    }
    .footercontent ul li{
        display: inline;
        padding: 5px;
        margin: 2px;
        font-size: 15px;
        border-right: 2px white solid;
        border-radius: 1px;
        cursor: pointer;
    }
    .footercontent ul li a{
        text-decoration: none;
        text-align: center;
        font-size: 20px;
    }
    .fa-plus{
        font-size: 50px;
    }
    a{
        text-decoration:none;
    }
</style>
<body>
 <header>
    <div class="heading1">
    <h1><a href="">DASHBOARD</a></h1>
    </div>
   <div class="heading2"><h1><b>HOTEL BOOKING SITE</b></h1></div>
    <div class="heading3">
    </div>
</header> 
 <hr>  
 <main>
    <div class="col1">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <a href="booking.php"><div class="home">booking</div></a>
        <a href="hotels.php"><div class="home">hotels</div>
        <a href="otherservices.php"><div class="home"><i class="fa-solid fa-gift"></i>other services</div></a>
        <a href="http://"><div class="home">log out</div></a>
        <div class="down">
        </form>
        </div>
    </div>
    <div class="col2">
        <?php
        include 'connector.php';
    if($_SERVER['REQUEST_METHOD']=="POST")    
    {
            echo "<br><br><h1 align=\"center\">All User list:</h1>";
            $password = mysqli_real_escape_string($conn,$_POST['password']);  
            $query = "SELECT * FROM user";
            $stmt = mysqli_prepare($conn, $query);
        if ($stmt)
        {
            echo "<table border=\"1\" width=\"100\" height=\"100\">";
            echo "<tr>";
                echo "<th>firstname</th>";
                echo "<th>lastname</th>";
                echo "<th>age</th>";
                echo "<th>sex</th>";
                echo "<th>phonenumber</th>";
                echo "<th>email</th>";
                echo "<th>username</th>";
                echo "</tr>";
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while($row = mysqli_fetch_row($result))
            {
                echo "<tr>";
                echo "<td>",$row[0],"</td>";
                echo "<td>",$row[1],"</td>";
                echo "<td>",$row[2],"</td>";
                echo "<td>",$row[3],"</td>";
                echo "<td>",$row[4],"</td>";
                echo "<td>",$row[5],"</td>";
                echo "<td>",$row[7],"</td>";
                echo "</tr>";
            }
            echo "</table";
        }
    }
        ?>
    </div>
 </main>
 <hr>
 <footer>
    <div class="footercontent">
    
    </div>
  <p align="center">&copy;2024 HBW all right are reserved.</p>
 </footer>
</body>
</html>