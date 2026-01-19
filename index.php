<!DOCTYPE html>
<html>
<head>
  <title>Donation Tracker</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="bg-theme.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="header">
  UDHAVIDUVOM MANITHA ARAKATTALAI – Donation Tracker
</div>

<h2 class="main-title">Donation Tracker</h2>

<div class="grid">

  <div class="card">
    <h3>Add Donor</h3>
    <p>Register new donors into the system.</p>
    <a href="add_donor.php">Open</a>
  </div>

  <div class="card">
    <h3>Add Donation</h3>
    <p>Record donation details and causes.</p>
    <a href="add_donation.php">Open</a>
  </div>

  <div class="card">
    <h3>View Donations</h3>
    <p>See all donation records & totals.</p>
    <a href="view_donations.php">Open</a>
  </div>

</div>

<div class="stats-section">
  <div class="stat-card">
    <i class="fa-solid fa-hand-holding-heart"></i>
    <h3 class="count" data-target="1250">0</h3>
    <p>Donations Received</p>
  </div>

  <div class="stat-card">
    <i class="fa-solid fa-users"></i>
    <h3 class="count" data-target="320">0</h3>
    <p>Donors</p>
  </div>

  <div class="stat-card">
    <i class="fa-solid fa-indian-rupee-sign"></i>
    <h3 class="count" data-target="250000">0</h3>
    <p>Amount Collected</p>
  </div>
</div>

<!-- ABOUT -->
<div class="info-section">
  <h2>About Us</h2>
  <p>
    UDHAVIDUVOM MANITHA ARAKATTALAI is a non-profit organization dedicated to
    supporting underprivileged communities through transparent and accountable
    donation management.
  </p>
</div>

<div class="features">
  <div class="feature-card">
    <i class="fa-solid fa-graduation-cap"></i>
    <h3>Education Support</h3>
    <p>Helping children access quality education.</p>
  </div>

  <div class="feature-card">
    <i class="fa-solid fa-kit-medical"></i>
    <h3>Medical Aid</h3>
    <p>Emergency healthcare for families.</p>
  </div>

  <div class="feature-card">
    <i class="fa-solid fa-house"></i>
    <h3>Food & Shelter</h3>
    <p>Providing essentials for daily survival.</p>
  </div>
</div>

<!-- FEATURES -->
<div class="features">
  <div class="feature-card">
    <h3>Education Support</h3>
    <p>Helping children access quality education.</p>
  </div>
  <div class="feature-card">
    <h3>Medical Aid</h3>
    <p>Supporting families with urgent healthcare needs.</p>
  </div>
  <div class="feature-card">
    <h3>Food & Shelter</h3>
    <p>Providing essentials for daily survival.</p>
  </div>
</div>

<!-- TRUST -->
<div class="trust-section">
  <h2>Why Trust Us?</h2>
  <ul>
    <li>✔ Transparent donation tracking</li>
    <li>✔ Secure data management</li>
    <li>✔ Real-time donation records</li>
    <li>✔ Community-driven initiatives</li>
  </ul>
</div>

<!-- FOOTER -->
<footer class="footer">
  <p><strong>UDHAVIDUVOM MANITHA ARAKATTALAI</strong></p>

  <p>
    📍 E.B.Office, Kolathur, Opposite Periyar Nagar, Kamarajar Salai, Periyar Nagar West, Chennai-600082, Tamil Nadu <br>
Opens at 09:00 AM <br>
    📞 9944478886 <br>
    ✉️ udhaviduvom@gmail.com
  </p>

  <p>© 2026 Donation Tracker System</p>
</footer>
<script>
const counters = document.querySelectorAll('.count');
counters.forEach(counter => {
  const update = () => {
    const target = +counter.getAttribute('data-target');
    const current = +counter.innerText;
    const increment = target / 80;

    if (current < target) {
      counter.innerText = Math.ceil(current + increment);
      setTimeout(update, 20);
    } else {
      counter.innerText = target;
    }
  };
  update();
});
</script>

</body>
</html>
