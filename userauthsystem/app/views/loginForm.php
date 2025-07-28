<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="assets/img/pinklogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="/userauthsystem/public/assets/css/styles.css">
    <title>User Login</title>
</head>
<body>
  <form method="POST" action="?action=login">
    <label>Username: <input type="text" name="username" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>