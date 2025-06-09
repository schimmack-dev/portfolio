<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kontakt – Mein Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .kontakt-formular {
            max-width: 500px;
            margin: 2rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        .kontakt-formular label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .kontakt-formular input,
        .kontakt-formular textarea {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1.2rem;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
        }

        .kontakt-formular button {
            background: #4299e1;
            color: #fff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .kontakt-formular button:hover {
            background: #2a4365;
        }

        .kontakt-erfolg {
            color: #38a169;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Kontakt</h1>
    </header>
    <nav>
        <a href="index.php">Startseite</a>
        <a href="about.php">Über mich</a>
        <a href="contact.php" class="active">Kontakt</a>
    </nav>
    <main>
        <?php
        // Einfache Erfolgsmeldung nach dem Absenden (ohne echte Mailfunktion)
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo '<div class="kontakt-erfolg">Vielen Dank für deine Nachricht!</div>';
        }
        ?>
        <form class="kontakt-formular" method="post" action="contact.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email" required>

            <label for="nachricht">Nachricht</label>
            <textarea id="nachricht" name="nachricht" rows="5" required></textarea>

            <button type="submit">Absenden</button>
        </form>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Enrico
    </footer>
    <script src="script.js"></script>
</body>

</html>