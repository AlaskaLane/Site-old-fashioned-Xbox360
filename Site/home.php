<?php session_start();
if($_SESSION['login']){
    $date= $_SESSION['date'];
    $hour= $_SESSION['hour'];
    $login= $_SESSION['login'];
}
else{
     $_SESSION['errorMessage']= sprintf("Vous devez être connecté pour acceder à cette page, réésayez");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page d'accueil Xbox 360</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo-container">
        <img src="xbox.png" alt="Logo Xbox 360">
        <div class="success-message">
            <div class="logo-container">
                <img src="xbox.png" alt="Logo Xbox 360">
            </div>
            <div class="subtext">
                <h1>Succès déverrouillé !</h1>
                <p>Vous avez réussi à vous connecter le <?php echo $date;?> à <?php echo $hour;?> </p>
            </div>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="jeux.php">Jeux</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="forum.php">Communauté</a></li>
            <li><a href="#">Support</a></li>
        </ul>
    <a href="logout.php" class="deco">
        Se déconnecter
    </a>
    </nav>
    <div class="welcome-message">Bienvenue <?php echo $login; ?></div>
</header>
<main>
    <div class="featured-game">
        <img src="blackops.jpg" alt="Jeu en vedette : Call of Duty: Black Ops">
        <h2>Call of Duty: Black Ops</h2>
        <p>Call of Duty: Black Ops est un jeu de tir à la première personne développé par Treyarch et édité par Activision. Il est sorti en 2010 sur Xbox 360 et d'autres plates-formes. Black Ops met en scène des soldats de l'unité spéciale de l'armée américaine, les Black Ops, au cours de différentes missions au Vietnam, en Afghanistan et à Cuba...</p>
        <a href="#" class="button">En savoir plus</a>
    </div>
    <div class="news-section">
        <h2>Actualités</h2>
        <div class="news-item">
            <img src="maj.jpg" alt="Actualité 1 : sortie de la mise à jour de la Xbox 360">
            <h3>Nouvelle mise à jour de la Xbox 360 disponible</h3>
            <p>Microsoft vient de publier une mise à jour importante pour la Xbox 360, apportant de nombreuses améliorations de performance et de stabilité ainsi que de nouvelles fonctionnalités. Parmi les nouveautés, on retrouve la possibilité de lire des vidéos en streaming en 1080p, un nouveau lecteur de CD et de DVD, et une interface utilisateur revue et améliorée. Cette mise à jour est gratuite et est recommandée à tous les utilisateurs de la console.</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
        <div class="news-item">
            <img src="xbox-360-rip.jpg" alt="Actualité 2 : annonce de la fin de la production de la Xbox 360">
            <h3>Fin de production de la Xbox 360</h3>
            <p>Microsoft a annoncé la fin de la production de la Xbox 360, après plus de dix ans de succès sur le marché des consoles de jeux. La société a déclaré qu'elle allait continuer à soutenir la console et à proposer du contenu pour les joueurs, mais qu'il n'y aurait plus de nouvelles unités fabriquées à l'avenir. La Xbox 360 restera cependant une plate-forme populaire pour les jeux en ligne et les titres rétrocompatibles avec la Xbox Series X/S.</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
        <div class="news-item">
            <img src="maj.jpg" alt="Actualité 3">
            <h3>Titre de l'actualité 3</h3>
            <p>Description de l'actualité 3</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
    </div>
    <div class="community-section">
        <h2>Communauté</h2>
        <div class="community-item">
            <img src="event.png" alt="Événement de la communauté 1">
            <h3>Titre de l'événement de la communauté 1</h3>
            <p>Description de l'événement de la communauté 1</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
        <div class="community-item">
            <img src="event.png" alt="Événement de la communauté 2">
            <h3>Titre de l'événement de la communauté 2</h3>
            <p>Description de l'événement de la communauté 2</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
        <div class="community-item">
            <img src="event.png" alt="Événement de la communauté 3">
            <h3>Titre de l'événement de la communauté 3</h3>
            <p>Description de l'événement de la communauté 3</p>
            <a href="#" class="button">En savoir plus</a>
        </div>
    </div>
</main>
<footer>
    <div class="footer-links">
        <a href="#">Conditions d'utilisation</a>
        <a href="#">Confidentialité et cookies</a>
        <a href="#">Mentions légales</a>
    </div>
    <div class="copyright">
        &copy; 2021 Xbox 360
    </div>
</footer>
</body>
</html>

