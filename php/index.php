<?php
$servername = "db";
$username = "myuser";
$password = "monpassword";
$dbname = "tutoseu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";

    // Effectuez des opérations avec la base de données ici

    $stmt = $conn->query("SELECT * FROM utilisateur");
    $users = $stmt->fetchAll();

    if (count($users) > 0) {
        echo "<table><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Âge</th></tr>";
        foreach ($users as $user) {
            echo "<tr><td>" . $user['id_utilisateur'] . "</td><td>" . $user['nom_utilisateur'] . "</td><td>" . $user['prenom_utilisateur'] . "</td><td>" . $user['age'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun utilisateur trouvé.";
    }
} catch (PDOException $e) {
    echo "La connexion a X échoué : " . $e->getMessage();
}
