<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Inscription-php</title>
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

    input {
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 14px;
        border-bottom: 2px solid #a363aa;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        display: flex;
        width: 200px;
        height: 50px;
        align-items: center;
        padding: 0px 30px;
        font-size: 16px;
        color: #fff;
        background: linear-gradient(270deg, #a363aa, #fa6d86);
        border: none;
        border-radius: 50px;
        cursor: pointer;
    }
</style>

<body>

    <div class="container">


        <form action="inscription.php" method="POST">
            <h1>Inscription</h1><br><br>
            <label for="nom">Votre Nom : </label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            <br>
            <label for="prenom">Votre prénom : </label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
            <br>
            <label for="pseudo">Votre pseudo : </label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo">
            <br>
            <label for="password">Votre Password : </label>
            <input type="password" id="pass" name="pass" placeholder="Votre password">
            <br>
            <label for="email">Votre Email : </label>
            <input type="email" id="email" name="email" placeholder="Votre email">
            <br><br>
            <input type="submit" value="M'inscrire" name="submit">

        </form>
    </div>
</body>

</html>