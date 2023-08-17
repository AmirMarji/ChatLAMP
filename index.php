<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatroom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div class="logo">
            <h1>A Simple Chatroom</h1>
        </div>
        <nav>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="messeges">

            <ul class="messegelist">
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
                <li class="messege"><span>Username</span> This is a messege</li>
            </ul>

        </div>
        <div class="textbox">
            <form action="index.php" method="post">
                <input type="text" name="message" class="messagebox" placeholder="Send a message">
                <input type="submit" name="submit" class="submit" value="Send">
            </form>
        </div>


    </div>

    <footer>
        <p>&#169;: Amir Marji 2023</p>
    </footer>
</body>

</html>