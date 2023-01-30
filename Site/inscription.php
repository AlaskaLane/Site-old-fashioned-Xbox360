<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- Partie message d'erreur dans le fichier auth.php, on affiche seulement le message d'erreur en résultant ici-->
<?php
if(isset($_SESSION['errorMessage'])):?>
    <div class="error-message">
        <?php echo $_SESSION['errorMessage'];?>
    </div>
    <?php unset($_SESSION['errorMessage']);
endif;
?>
<div class="login-container">
    <form action="sub.php" method="post">
        <label for="login">Login :<br></label>
        <input type="text" id="login" name="login">
        <br>
        <label for="password">Mot de passe :<br></label>
        <input type="password" id="password" name="password">
        <br>
        <label for="confirm_password">Confirmer le mot de passe :<br></label>
        <input type="password" id="confirm_password" name="confirm_password">
        <br>
        <input type="submit" value="S'inscrire">
    </form>
</div>
</body>
</html>
