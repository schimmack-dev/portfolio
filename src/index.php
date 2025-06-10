<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Mein Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Willkommen auf meiner Portfolio-Seite!</h1>
    </header>
    <nav>
        <a href="index.php">Startseite</a>
        <a href="about.php">Über mich</a>
        <a href="contact.php">Kontakt</a>
        <a href="admin.php">Admin</a>
    </nav>
    <main>
        <img
            src="images/programmierer.png"
            alt="Programmierer Illustration"
            style="width:100%;max-width:600px;display:block;margin:2rem auto 2rem auto;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.12);">
        <div id="tageszitat" style="text-align:center;font-style:italic;color:#4299e1;margin:1.5rem 0;">
            Lade Tageszitat ...
        </div>
        <p style="text-align:center;font-style:italic;color:#666;">Mein Weg als Programmierer beginnt!</p>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Schimmack-Dev
    </footer>
    <script src="script.js"></script>
</body>

</html>