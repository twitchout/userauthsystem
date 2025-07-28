<?php
class UserModel {
  private $pdo;

  public function __construct() {
    $dsn = 'mysql:host=localhost;dbname=userauthsystem;charset=utf8mb4';
    $user = 'root';      // XAMPP default
    $pass = '';          // XAMPP default

    try {
      $this->pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
    }
  }

  public function createUser($username, $email, $passwordHash) {
    $stmt = $this->pdo->prepare(
      "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)"
    );
    $stmt->execute([$username, $email, $passwordHash]);
  }

  public function getUserByUsername($username) {
    $stmt = $this->pdo->prepare(
      "SELECT * FROM users WHERE username = ?"
    );
    $stmt->execute([$username]);
    return $stmt->fetch();
  }
}