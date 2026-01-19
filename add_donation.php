<?php
include 'db_connect.php';

$success = false;
$error = '';

if (isset($_POST['submit'])) {
    $donor_id = $_POST['donor_id'];
    $amount   = $_POST['amount'];
    $cause    = $_POST['cause'];
    $date     = $_POST['date'];

    $sql = "INSERT INTO donations (donor_id, amount, cause, date)
            VALUES ('$donor_id', '$amount', '$cause', '$date')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $success = true;
    } else {
        $error = mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Donation</title>
  <link rel="stylesheet" href="bg-theme.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page-center">

  <div class="form-card">
    <h2 class="form-title">Add Donation</h2>

    <form method="POST">
      <label>Donor ID:</label>
      <input type="number" name="donor_id" required>

      <label>Amount (₹):</label>
      <input type="number" step="0.01" name="amount" required>

      <label>Cause:</label>
      <input type="text" name="cause">

      <label>Date:</label>
      <input type="date" name="date" required>

      <input type="submit" name="submit" value="Add Donation">
    </form>
  </div>

  <?php if ($success): ?>
    <div class="success-message">Donation added successfully!</div>
  <?php endif; ?>

  <?php if ($error): ?>
    <div class="error-message">❌ Error: <?= $error ?></div>
  <?php endif; ?>

  <a href="index.php" class="btn-gradient home-btn">Back to Home</a>

</div>

</body>
</html>
