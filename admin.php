<!DOCTYPE html>
<html lang="en">
<head>
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body,html{
        padding: o;
        margin: o;
        background-color: lightgrey;
    }
    .heading{
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-size: 30px;
        color:rgba(0, 0, 0, 0.718);
    }
    main{
        display: grid;
        width: 100%;
        margin-right: 100px;
        
    }
    hr{
        padding: 0;
        margin: 0;
    }
    .col1{
        padding-top: 0px;
        grid-column: 1;
        width: 30%;
        border-right: 1px white solid;
        padding-left: 100px; ;
    }
    .col2{
        padding: 10px;
        grid-column: 2;
        width: 75%;
    }
    .bottom{
        border-radius: 5px;
        font-size: 20px;
        margin: 10px;
        background-color: azure;
        width: 200px;
        padding: 10px;
    }
    .bottom a{
        text-align: center;
        text-decoration: none;
        color: black;
    }
    .down{
        margin-top: 500px;
    }
    a{
        text-decoration:none;
    }
</style>
<body>
    <header>
       <div class="heading">Admin Dashboard</div> 
    </header>
    <hr>
    <main>
        <div class="col1">
        <a href="all users.php"><div class="bottom">Users</div></a>
        <a href="all book-now.php"> <div class="bottom">Booked hotels</div></a>
        <a href="#"><div class="bottom ">logout</div></a>
        </div>
        <div class="col2">
<?php

        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $server="localhost";
        $user="root";
        $pass="";
        $db="site";
        $error="";
        $conn=mysqli_connect($server,$user,$pass,$db);
        //echo "<div class=\"post\"><i class=\"fa-solid fa-plus\"></i></div>";
            echo "<br><br><h1 align=\"center\">Users list:</h1>";
            echo "<p><a href=\"add a user.php\"><div class=\"home right\"><i class=\"fa-solid fa-plus\"></i> Add a User</div></a></p>";
           /* $email =mysqli_real_escape_string($conn,$_POST['username']);  
            $password = mysqli_real_escape_string($conn,$_POST['password']);  */
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
                echo "<th>phone number</th>";
                echo "<th>email</th>";
                echo "<th>pin</th>";
                echo "<th>username</th>";
                echo "<th>time</th>";
                echo "</tr>";
           // mysqli_stmt_bind_param($stmt, "");
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
                echo "<td>",$row[6],"</td>";
                echo "<td>",$row[7],"</td>";
                echo "<td>",$row[8],"</td>";
                 echo "<td>";
                echo ($row[8]==1)?"Approved":"not approved";
                echo "</td>";
                 echo "<td>"."<a href=\"approve.php?userid=$row[0]\"><div class=\"home1\">APPROVE</div></a>"."</td>";
                 echo "<td>"."<a href=\"useredit.php?userid=$row[0]\"><div class=\"home1\">EDIT</div></a>"."</td>";
                 echo "<td>"."<a href=\"deactivate.php?userid=$row[0]\"><div class=\"home1\">DEACTIVATE</div></a>"."</td>";
                 echo "</tr>";
             }
             echo "</table";
         }
         ?>
          
          
        </div>
         <hr>
    </main>
    <footer>
        <p align="center">&copy2024 all right are reserved.</p>
    </footer>
</body>
</html>