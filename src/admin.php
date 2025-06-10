<?php

// admin.php (am Anfang der Datei einfügen)
$adminUser = 'admin';
$adminPass = 'geheim';

if (
    !isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $adminUser || $_SERVER['PHP_AUTH_PW'] !== $adminPass
) {
    header('WWW-Authenticate: Basic realm="Adminbereich"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Zugang verweigert';
    exit;
}

// admin.php
$host = 'db';
$db = 'portfolio';
$user = 'user';
$pass = 'userpass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Kontakt löschen, wenn ID übergeben wird
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        $stmt = $pdo->prepare("DELETE FROM kontaktanfragen WHERE id = ?");
        $stmt->execute([$_GET['delete']]);
        header("Location: admin.php");
        exit;
    } catch (Exception $e) {
        echo '<div class="kontakt-fehler">Fehler beim Löschen: ' . htmlspecialchars($e->getMessage()) . '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Alle Kontakte – Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table.kontakt-tabelle {
            margin: 2rem auto;
            max-width: 900px;
            width: 100%;
            border-collapse: collapse;
        }

        table.kontakt-tabelle th,
        table.kontakt-tabelle td {
            padding: 0.7rem;
            border: 1px solid #cbd5e1;
            text-align: left;
        }

        table.kontakt-tabelle th {
            background: #f1f5f9;
        }

        h1 {
            text-align: center;
        }

        .kontakt-fehler {
            color: #e53e3e;
            text-align: center;
            margin: 1rem 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Alle erfassten Kontakte</h1>
    </header>
    <nav>
        <a href="index.php">Startseite</a>
        <a href="about.php">Über mich</a>
        <a href="contact.php">Kontakt</a>
        <a href="admin.php" class="active">Admin</a>
    </nav>
    <main>
        <?php
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            $stmt = $pdo->query("SELECT id, name, email, nachricht, erstellt_am FROM kontaktanfragen ORDER BY erstellt_am DESC");
            $kontakte = $stmt->fetchAll();
            if ($kontakte):
        ?>
                <table class="kontakt-tabelle">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Nachricht</th>
                        <th>Datum</th>
                        <th>Löschen</th>
                    </tr>
                    <?php foreach ($kontakte as $kontakt): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($kontakt['id']); ?></td>
                            <td><?php echo htmlspecialchars($kontakt['name']); ?></td>
                            <td><?php echo htmlspecialchars($kontakt['email']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($kontakt['nachricht'])); ?></td>
                            <td><?php echo $kontakt['erstellt_am']; ?></td>
                            <td>
                                <a href="admin.php?delete=<?php echo $kontakt['id']; ?>" onclick="return confirm('Diesen Kontakt wirklich löschen?');">🗑️</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
        <?php
            else:
                echo '<div style="text-align:center;margin:2rem;">Noch keine Kontakte erfasst.</div>';
            endif;
        } catch (Exception $e) {
            echo '<div class="kontakt-fehler">Fehler beim Laden der Kontakte: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }
        ?>
        <div style="text-align:center;margin-top:2rem;">
            <a href="contact.php">Zurück zum Kontaktformular</a>
        </div>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Schimmack-Dev
    </footer>
</body>

</html>