<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/img/pinklogo.ico" type="image/x-icon">
  <title>Dashboard – About Me</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
      <nav>
        <a href="logout.php" class="logout-btn">Logout</a>
      </nav>
    </header>

    <main>
      <section class="about-section">
        <h2>About Me</h2>
        <p>
          Hi, I'm Jeremy Kirkpatrick — programmer, and operations leader based in Sioux Falls.  <br>
          I thrive on blending technical precision with creative design, from secure PHP systems and regex validation to cotton candy-themed interfaces and Raspberry Pi gaming. <br>
          Whether I’m debugging network tools or exploring predictive maintenance datasets, I believe in a future where human insight and machine brilliance move in harmony — an intertwined dance of intuition and innovation.
        </p>
      </section>
    </main>
  </div>
</body>
</html>