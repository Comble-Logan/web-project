<?php
include 'connBDD.php';

if (isset($_POST['ok'])) {
    $email = $_POST['email'];
    $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $email]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Vous avez déjà un compte";}
    else{
        $password = $_POST['password'];
        $email = $_POST['email'];
        $birth_date = $_POST['birth_date'];
        $surname = $_POST['surname'];
        $name = $_POST['name'];

    // Insert data into database
    $sql = "INSERT INTO users (password, email, birth_date, surname, name, isAdmin)
            VALUES (:password, :email, :birth_date, :surname, :name, :isAdmin)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        array(
            ":password" => $password,
            ":email" => $email,
            ":birth_date" => $birth_date,
            ":surname" => $surname,
            ":name" => $name,
            ":isAdmin" => 0,));
        header('Location: connexion.php');
    }
}
?>