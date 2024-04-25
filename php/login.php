<?php
// Configuration
$servername = 'localhost';
$username = 'root';
$password = 'root';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur : '. $e->getMessage();
}

if (isset($_POST['login'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Check if user ID and password match a record in the users table
    $sql = "SELECT * FROM users WHERE username = :user_id AND password = :password";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // User is authenticated
        session_start();
        $_SESSION['user_id'] = $user_id;
        header('Location: dashboard.php');
    } else {
        // User is not authenticated
        echo "Invalid user ID or password";
    }
}
?>