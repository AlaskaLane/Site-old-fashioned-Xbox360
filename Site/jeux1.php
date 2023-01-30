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
$genre = $_GET['genre'];
$query = "SELECT tag.genre, jeu.nom, jeu.image, jeu.description FROM jeu
            JOIN jeu_tag 
            ON jeu.id=jeu_tag.jeu_id 
            JOIN tag
            ON tag.id= jeu_tag.tag_id
            WHERE tag.genre like :genre";
$stmt = $mysqlClient->prepare($query );
$stmt->execute(['genre' => "%$genre%"]);
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
            <li><a href="home.php">Accueil</a></li>
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
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='game'>";
            echo "<img src='" . $row['image'] . "' alt='" . $row['nom'] . "'>";
            echo "<h2>" . $row['nom'] . "</h2>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<div class='game-tags'>";
            $query = "SELECT tag.genre FROM tag
                    JOIN jeu_tag
                    ON tag.id = jeu_tag.tag_id
                    JOIN jeu
                    ON jeu.id = jeu_tag.jeu_id
                    WHERE jeu.id = :id";
            echo "</div>";
            echo "</div>";
        }
        ?>
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



