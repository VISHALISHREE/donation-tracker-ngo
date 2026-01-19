<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>View Donations</title>
  <link rel="stylesheet" href="bg-theme.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page-center">

  <div class="form-card wide-card">
    <h2 class="form-title">All Donations</h2>

    <?php
    $sql = "SELECT donations.donation_id, donors.name, donations.amount, donations.cause, donations.date 
            FROM donations 
            INNER JOIN donors ON donations.donor_id = donors.donor_id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo "<table class='donation-table'>
                <tr>
                  <th>ID</th>
                  <th>Donor Name</th>
                  <th>Amount (₹)</th>
                  <th>Cause</th>
                  <th>Date</th>
                </tr>";

        $total = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['donation_id']}</td>
                    <td>{$row['name']}</td>
                    <td>₹{$row['amount']}</td>
                    <td>{$row['cause']}</td>
                    <td>{$row['date']}</td>
                  </tr>";
            $total += $row['amount'];
        }

        echo "</table>
              <h3 class='total-amount'>Total Collected: ₹$total</h3>";

    } else {
        echo "<p class='no-data'>No donations found!</p>";
    }
    ?>
  </div>

  <a href="index.php" class="btn-gradient home-btn">Back to Home</a>

</div>

</body>
</html>
