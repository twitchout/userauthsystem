<?php
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../utils/RegexValidator.php';

class UserController {
  public function handleRequest($request) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($request['action']) && $request['action'] === 'register') {
        $this->registerUser($_POST);
      }
    }
    include __DIR__ . '/../views/registrationForm.php';
  }

private function registerUser($data) {
  $username = trim($data['username']);
  $email = trim(filter_var($data['email'], FILTER_SANITIZE_EMAIL));
  $password = $data['password'];

  echo "Sanitized email: [" . $email . "]<br>";
  if (!RegexValidator::validateUsername($username) || 
      !RegexValidator::validateEmail($email) || 
      !RegexValidator::validatePassword($password)) {
    echo "Invalid input.";
    return;
  }

 //hash password, store user
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $userModel = new UserModel();
  $userModel->createUser($username, $email, $hashedPassword);

  echo "Registration successful.";
}
}