<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="assets/img/pinklogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="/userauthsystem/public/assets/css/styles.css">
    <title>User Registration</title>
</head>
<body>
  <form method="POST" action="?action=register">
    <label>Username: <input type="text" name="username" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <button type="submit">Register</button>
  </form>
</body>
</html>