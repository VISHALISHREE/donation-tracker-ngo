<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bg-theme.css">
  <title>Add Donor</title>
  <link rel="stylesheet" href="style.css">
  <style>
html, body {
  margin: 0 !important;
  padding: 0 !important;
  min-height: 100% !important;
  background: linear-gradient(
    180deg,
    #ffd1dc 0%,
    #ffb6c1 35%,
    #ff9aa2 65%,
    #ff758f 100%
  ) !important;
}

/* FORCE all main wrappers transparent */
.container,
.wrapper,
.content,
.main,
.page-center {
  background: transparent !important;
}
</style>
</head>
<body>
  <div class="page-center">
  <div class="form-card">

    <h2 class="form-title">Add Donor</h2>

    <form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <input type="submit" name="submit" value="Add Donor">
  </form>
      </form>

  </div>
</div>

  <?php
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      $sql = "INSERT INTO donors (name, email, phone) VALUES ('$name', '$email', '$phone')";
      if (mysqli_query($conn, $sql)) {
          echo "<div class='success-message'>✅ Donor added successfully!</div>";
      } else {
          echo "<p>❌ Error: " . mysqli_error($conn) . "</p>";
      }
  }
  ?>
  
 <a href="index.php" class="btn-gradient home-btn">Back to Home</a>

</body>
</html>
