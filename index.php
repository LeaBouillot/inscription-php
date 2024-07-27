<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>User-Login-PHP</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    .container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h1 {
        font-weight: 600;
        color: #a363aa;
        font-size: 40px;

    }

    .holder {
        display: flex;
        flex-direction: column;
    }

    .hero {
        left: 30%;
    }

    .holder input[type="text"] {
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid #a363aa;
    }

    .holder input[type="submit"] {
        display: flex;
        width: 200px;
        align-items: center;
        padding: 15px 30px;
        font-size: 16px;
        color: #fff;
        background: linear-gradient(270deg, #ff994f, #fa6d86);
        border: none;
        border-radius: 50px;
    }
</style>

<body>
    <?php
    if (isset($_POST['submit'])) {
        echo "Nous somme heureux de vous retouver";
    } else {
        echo "Veuillez entrer votre nom";
    }
    ?>
    <div class="container">

        <div class="holder">
            <h1 class="hero"><?php echo "The user's name is " . $_POST['name'] . " 💖"; ?>
            </h1>
            <form action="index.php" method="POST">
                <div class="wrapper">
                    <br>
                    <input type="text" placeholder="Enter Username" name="name">
                </div>
                <br>
                <br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>
            </form>

        </div>
    </div>


</body>

</html>