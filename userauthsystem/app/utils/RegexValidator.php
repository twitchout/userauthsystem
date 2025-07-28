<?php
class RegexValidator {
  public static function validateUsername($username) {
    return preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username);
  }

  public static function validateEmail($email) {
      echo "Validating email: " . $email . "<br>";
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function validatePassword($password) {
    return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password);
  }
}