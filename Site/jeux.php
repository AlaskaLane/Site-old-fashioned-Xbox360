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
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page de jeux Xbox 360</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo-container">
        <img src="xbox.png" alt="Logo Xbox 360">
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
        <div class="games-container">
            <h1>Jeux Xbox 360</h1>
            <form action="jeux1.php" method="GET">
                <input type="text" name="genre" placeholder="Rechercher par genre">
                <input type="submit" value="Rechercher">
            </form>
            <div class="games-grid">
                <div class="game">
                    <img src="Halo.png" alt="Halo 3">
                    <h2>Halo 3</h2>
                    <p>Un jeu de tir à la première personne en vue à la troisième personne développé par Bungie Studios. Le joueur incarne le personnage de Master Chief, un soldat de l'humanité, dans sa lutte contre les Covenants, une alliance extraterrestre.</p>
                    <div class="game-tags">
                        <span class="tag">FPS</span>
                        <span class="tag">Action</span>
                        <span class="tag">Science-fiction</span>
                    </div>
                </div>
                <div class="game">
                    <img src="GOW.png" alt="Gears of War">
                    <h2>Gears of War</h2>
                    <p>Un jeu de tir à la troisième personne développé par Epic Games. Le joueur incarne Marcus Fenix, un soldat de l'humanité, dans sa lutte contre les Locusts, une race de créatures extraterrestres surgies des entrailles de la Terre.</p>
                    <div class="game-tags">
                        <span class="tag">TPS</span>
                        <span class="tag">Action</span>
                        <span class="tag">Science-fiction</span>
                    </div>
                </div>
                <div class="game">
                    <img src="fable.png" alt="Fable 2">
                    <h2>Fable 2</h2>
                    <p>Un RPG où vos choix ont un impact sur votre personnage et sur le monde qui l'entoure.</p>
                    <div class="game-tags">
                        <span class="tag">RPG</span>
                        <span class="tag">Choix</span>
                        <span class="tag">Solo</span>
                    </div>
                </div>
                <div class="game">
                    <img src="GTAV.png" alt="Grand Theft Auto V">
                    <h2>Grand Theft Auto V</h2>
                    <p>Un jeu d'action-aventure en monde ouvert, avec une grande liberté de mouvement et de nombreux mini-jeux.</p>
                    <div class="game-tags">
                        <span class="tag">Action</span>
                        <span class="tag">Open-World</span>
                        <span class="tag">Solo</span>
                    </div>
                </div>
                <div class="game">
                    <img src="skyrim.jpg" alt="The Elder Scrolls V: Skyrim">
                    <h2>The Elder Scrolls V: Skyrim</h2>
                    <p>Jeu de rôle développé par Bethesda Game Studios et édité par Bethesda Softworks. C'est le cinquième opus de la série The Elder Scrolls et a été publié en 2011.</p>
                    <div class="game-tags">
                        <span class="tag">RPG</span>
                        <span class="tag">Fantastique</span>
                    </div>
                </div>
                <div class="game">
                    <img src="forza.jpg" alt="Forza Motorsport 4">
                    <h2>Forza Motorsport 4</h2>
                    <p>Jeu de course développé par Turn 10 Studios et édité par Microsoft Studios. C'est le quatrième opus de la série Forza Motorsport et a été publié en 2011.</p>
                    <div class="game-tags">
                        <span class="tag">Course</span>
                        <span class="tag">Simulation</span>
                    </div>
                </div>
                <div class="game">
                    <img src="kinect.jpg" alt="Kinect Sports: Season Two">
                    <h2>Kinect Sports: Season Two</h2>
                    <p>Jeu de sport développé par Rare et édité par Microsoft Studios. C'est le deuxième opus de la série Kinect Sports et a été publié en 2011.</p>
                    <div class="game-tags">
                        <span class="tag">Sport</span>
                        <span class="tag">Mouvement</span>
                    </div>
                </div>
                <div class="game">
                    <img src="minecraft.jpg" alt="Minecraft">
                    <h2>Minecraft</h2>
                    <p>Jeu de construction et de survie développé et édité par Mojang Studios. C'est un jeu vidéo très populaire qui a été publié en 2011 et qui est disponible sur de nombreuses plateformes.</p>
                    <div class="game-tags">
                        <span class="tag">Construction</span>
                        <span class="tag">Survie</span>
                        <span class="tag">Aventure</span>
                    </div>
                </div>
                <div class="game">
                    <img src="borderlands2.jpg" alt="Borderlands 2">
                    <h2>Borderlands 2</h2>
                    <p>Jeu de tir en vue à la première personne développé par Gearbox Software et édité par 2K Games. C'est le deuxième opus de la série Borderlands et a été publié en 2012.</p>
                    <div class="game-tags">
                        <span class="tag">FPS</span>
                        <span class="tag">Science-fiction</span>
                        <span class="tag">RPG</span>
                    </div>
                </div>
                <div class="game">
                    <div class="game-image">
                        <img src="farcry.jpg" alt="Jeu Far Cry">
                    </div>
                    <div class="game-title">
                        <h3>Far Cry</h3>
                    </div>
                    <div class="game-description">
                        <p>Far Cry est un jeu d'action-aventure en monde ouvert, développé par Ubisoft Montréal et édité par Ubisoft.</p>
                    </div>
                    <div class="game-tags">
                        <span class="tag">Action</span>
                        <span class="tag">Aventure</span>
                        <span class="tag">FPS</span>
                        <span class="tag">Open-World</span>
                    </div>
                </div>
                <div class="game">
                    <div class="game-image">
                        <img src="godofwar.jpg" alt="Jeu God of War">
                    </div>
                    <div class="game-title">
                        <h3>God of War</h3>
                    </div>
                    <div class="game-description">
                        <p>God of War est un jeu d'action-aventure développé par SIE Santa Monica Studio et édité par Sony Interactive Entertainment.</p>
                    </div>
                    <div class="game-tags">
                        <span class="tag">Action</span>
                        <span class="tag">Aventure</span>
                        <span class="tag">Hack & Slash</span>
                    </div>
                </div>
                <div class="game">
                    <img src="red-dead-redemption.jpg" alt="Red Dead Redemption">
                    <h2>Red Dead Redemption</h2>
                    <p>Red Dead Redemption est un jeu d'action-aventure en monde ouvert développé par Rockstar San Diego et publié par Rockstar Games. Le jeu se déroule dans un univers western fictif et met en scène le personnage principal John Marston, un ancien criminel qui est contraint de traquer ses anciens complices pour le compte de l'agence de détectives de Pinkerton. Le jeu a été salué pour son ambiance, sa narrativité et ses mécaniques de gameplay.</p>
                    <div class="game-tags">
                        <span class="tag">Action</span>
                        <span class="tag">Aventure</span>
                        <span class="tag">Open-World</span>
                        <span class="tag">Western</span>
                    </div>
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