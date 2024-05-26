<?php
session_start();
$host = 'localhost';
$db = 'contact_mayel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = 'INSERT INTO contact (prenom, nom, email, message) VALUES ( :prenom, :nom, :email, :message)';
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute(['prenom' => $prenom, 'nom' => $nom, 'email' => $email, 'message' => $message]);
    $_SESSION['success'] = "Your message has been sent successfully!";
} catch (Exception $e) {
    $_SESSION['error'] = "There was an error sending your message: " . $e->getMessage();
}

header('Location: contact.php');
exit;
