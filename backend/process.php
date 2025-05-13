<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $service = $_POST['service'];

  include("email-handler.php");

  // 🧠 Hidden message from the master
  // I became a hacker just by copying codes from github
  // CRISIS{5cr1p7_k1dd13_7h1nk5_h3_15_4_h4ck3r}

  // Imagine we store this somewhere real
  file_put_contents("orders.log", "$email requested $service\n", FILE_APPEND);
}
?>
