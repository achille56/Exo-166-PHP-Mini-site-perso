<?php
if (isset($_GET["success"]) && intval($_GET["success"]) === 1) { ?>
    <div class="success">Les données ont bien été envoyées, merci </div> <?php
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <section>
        <h1>Contact</h1>

        <div id="Contact">
            <form method="post" action="../public/save.php">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>

                <label for="id-firstName">Prénom</label>
                <input type="text" name="firstName" id="id-firstName" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="age">Votre age</label>
                <input type="number" name="age" id="age" min="18" max="90" required>

                <label for="id-password">mot de passe</label>
                <input type="password" name="password" id="id-password" minlength="5" maxlength="20" required>

                <label for="id-password-repeat">confirmer le mot de passe</label>
                <input type="password" name="password-repeat" id="id-password-repeat" minlength="5" maxlength="20" required>

                <label for="message">Votre message</label>
                <textarea name="message" id="message"></textarea>

                <input type="submit" id="submit" value="Envoyer">
            </form>
        </div>
    </section>

    <script type="text/javascript" src="../pages/JS/checkPassword.js"></script>
</body>
</html>

