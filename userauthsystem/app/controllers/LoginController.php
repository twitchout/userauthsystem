<?php
require_once __DIR__ . '/../models/UserModel.php';

class LoginController {
  public function handleRequest($request) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($request['action']) && $request['action'] === 'login') {
        $this->loginUser($_POST);
      }
    }
    include __DIR__ . '/../views/loginForm.php';
  }

  private function loginUser($data) {
    session_start();

    $username = trim($data['username']);
    $password = $data['password'];

    $userModel = new UserModel();
    $user = $userModel->getUserByUsername($username);

    if ($user && password_verify($password, $user['password_hash'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      header("Location: dashboard.php");
      exit;
    } else {
      echo "Invalid credentials.";
    }
  }
}