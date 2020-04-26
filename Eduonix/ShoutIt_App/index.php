<?php include "database.php"; ?>
<?php
    //create select Query
    $query = "SELECT * FROM shouts";
    $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shout It!!!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="container">
        <header>
            <h1>SHOUT IT Shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout">
                        <span><?php echo $row['time']?> - </span>:
                        <span><?php echo $row['user']?>: </span>
                        <span><?php echo $row['message']?> </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div id="input">
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter your name!">
                <input type="text" name="message" placeholder="Enter your message!">
                <br />
                <input class="shout-btn" type="submit" name="submit" value="Shout it Out">
            </form>
        </div>
    </div>
</body>
</html>
