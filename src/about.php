<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Über mich – Mein Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        header h1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            text-align: center;
        }

        .header-img {
            width: 90px;
            height: 90px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.12);
            object-fit: cover;
        }

        @media (max-width: 600px) {
            header h1 {
                flex-direction: column;
                gap: 1rem;
            }

            .header-img {
                width: 64px;
                height: 64px;
            }
        }

        main section {
            margin-bottom: 2.5rem;
        }

        main ul {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        main h2,
        main h3 {
            margin-bottom: 0.7rem;
        }

        main p {
            margin-bottom: 0.7rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>
            Über mich
            <img src="images/programmierer.png" alt="Programmierer" class="header-img">
        </h1>
    </header>
    <nav>
        <a href="index.php">Startseite</a>
        <a href="about.php" class="active">Über mich</a>
        <a href="contact.php">Kontakt</a>
    </nav>
    <main>
        <section>
            <h2>Hallo, ich bin Enrico!</h2>
            <p>
                Willkommen auf meiner Portfolio-Seite! Ich bin ein leidenschaftlicher Programmier-Anfänger und liebe es, neue Technologien zu entdecken. Mein Ziel ist es, Schritt für Schritt moderne Webentwicklung zu lernen und eigene Projekte umzusetzen.
            </p>
        </section>
        <section>
            <h3>Was mich motiviert</h3>
            <p>
                Mich begeistert die Möglichkeit, mit Code kreative und nützliche Lösungen zu schaffen. Besonders spannend finde ich es, wenn aus einer Idee durch Programmieren ein sichtbares Ergebnis wird. Ich lerne aktuell PHP, HTML, CSS, JavaScript und MySQL – und freue mich über jeden kleinen Fortschritt.
            </p>
        </section>
        <section>
            <h3>Meine bisherigen Projekte</h3>
            <ul>
                <li>
                    <strong>ToDo-App:</strong> Eine kleine Aufgabenverwaltung, bei der ich das Zusammenspiel von PHP und MySQL ausprobiert habe.
                </li>
                <li>
                    <strong>Rezept-Sammlung:</strong> Eine Webseite, auf der ich meine Lieblingsrezepte speichern und durchsuchen kann – mit Suchfunktion und Kategorien.
                </li>
                <li>
                    <strong>Mini-Blog:</strong> Mein erster Versuch, einen eigenen Blog mit Kommentarfunktion zu programmieren.
                </li>
                <li>
                    <strong>Portfolio-Seite:</strong> Diese Seite hier – mein persönliches Lernprojekt, das ich ständig erweitere und verbessere.
                </li>
            </ul>
        </section>
        <section>
            <h3>Was ich als Nächstes lernen möchte</h3>
            <p>
                Ich möchte meine Kenntnisse in JavaScript vertiefen, moderne Frameworks wie React kennenlernen und meine Seiten noch interaktiver gestalten. Außerdem interessiert mich, wie man Webseiten sicher und performant macht.
            </p>
        </section>
        <section>
            <h3>Kontakt & Feedback</h3>
            <p>
                Ich freue mich über Feedback, Tipps und Austausch mit anderen, die Spaß am Programmieren haben! Nutze gerne das <a href="contact.php">Kontaktformular</a> oder schreibe mir direkt.
            </p>
        </section>
        <p style="margin-top:2rem;">
            <a href="index.php" style="color: var(--accent); text-decoration: underline;">&larr; Zurück zur Startseite</a>
        </p>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Enrico
    </footer>
    <script src="script.js"></script>
</body>

</html>