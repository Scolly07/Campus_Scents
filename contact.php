<?php
$pageTitle = "Contact Campus Scents";
$errors = [];
$success = false;
$name = $email = $subject = $message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");
    if ($name === "") $errors[] = "Please enter your name.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please enter a valid email address.";
    if ($subject === "") $errors[] = "Please choose a subject.";
    if (strlen($message) < 10) $errors[] = "Please write a message of at least 10 characters.";
    if (!$errors) {
        // Demonstration form: validated on the server, but does not send email without mail-server configuration.
        $success = true;
        $name = $email = $subject = $message = "";
    }
}
include __DIR__ . "/includes/header.php";
?>
<main>
  <section class="page-hero"><p class="eyebrow">WE'RE HERE TO HELP</p><h1>Let's talk fragrance.</h1><p>Ask about current stock, prices, recommendations or how to place an order.</p></section>
  <section class="section contact-layout">
    <div class="contact-details"><p class="eyebrow">GET IN TOUCH</p><h2>Send us a message</h2><p>We are building a student-friendly fragrance experience. Use the form and tell us what you are looking for.</p>
      <div class="contact-item"><span class="contact-icon">⌖</span><div><strong>Location</strong><p>Vanderbijlpark, Gauteng, South Africa</p></div></div>
      <div class="contact-item"><span class="contact-icon">@</span><div><strong>Email</strong><p>campus.scents@example.com <small>(demo address — replace before submission)</small></p></div></div>
      <div class="contact-item"><span class="contact-icon">☎</span><div><strong>Phone / WhatsApp</strong><p>Replace with your own contact number before publishing.</p></div></div>
      <div class="social-row"><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram ↗</a><a href="https://www.tiktok.com/" target="_blank" rel="noopener">TikTok ↗</a><a href="https://www.whatsapp.com/" target="_blank" rel="noopener">WhatsApp ↗</a></div>
    </div>
    <div class="form-card">
      <?php if ($success): ?><div class="notice success" role="status"><strong>Thank you!</strong><p>Your form passed validation. This student project currently demonstrates form processing; email delivery is not configured.</p></div><?php endif; ?>
      <?php if ($errors): ?><div class="notice error" role="alert"><strong>Please check the following:</strong><ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></li><?php endforeach; ?></ul></div><?php endif; ?>
      <form method="post" action="contact.php" novalidate>
        <div class="field"><label for="name">Your name</label><input id="name" name="name" type="text" value="<?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>" required maxlength="80" placeholder="e.g. Thandi Mokoena"></div>
        <div class="field"><label for="email">Email address</label><input id="email" name="email" type="email" value="<?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?>" required maxlength="120" placeholder="you@example.com"></div>
        <div class="field"><label for="subject">What can we help with?</label><select id="subject" name="subject" required><option value="">Choose a topic</option><option value="Stock and prices" <?= $subject === "Stock and prices" ? "selected" : "" ?>>Stock and prices</option><option value="Scent recommendation" <?= $subject === "Scent recommendation" ? "selected" : "" ?>>Scent recommendation</option><option value="Order enquiry" <?= $subject === "Order enquiry" ? "selected" : "" ?>>Order enquiry</option><option value="Other" <?= $subject === "Other" ? "selected" : "" ?>>Other</option></select></div>
        <div class="field"><label for="message">Your message</label><textarea id="message" name="message" rows="5" required minlength="10" maxlength="1500" placeholder="Tell us what you're looking for..."><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></textarea><small>At least 10 characters.</small></div>
        <button class="button button-primary button-full" type="submit">Submit enquiry</button>
      </form>
    </div>
  </section>
</main>
<?php include __DIR__ . "/includes/footer.php"; ?>