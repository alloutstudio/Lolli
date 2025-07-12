<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wholesale Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Wholesale Inquiry Form</h2>
  <form action="mailer.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Phone Number:</label>
    <input type="tel" name="phone" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Message:</label>
    <textarea name="message" required></textarea><br>

    <button type="submit">Submit</button>
  </form>

  <footer>
    <!--<a href="index.html" class="home-icon">🏠</a>-->
    <a href="index.html" class="home-icon">🏠</a>
  </footer>
</body>
</html>
