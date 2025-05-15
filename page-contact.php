<?php include 'header.php'; ?>
<section class="section" id="contact">
  <h2>Contact Me</h2>
  <form action="send.php" method="post">
    <label>Name: <input type="text" name="name" required></label>
    <label>Email: <input type="email" name="email" required></label>
    <label>Message: <textarea name="message" required></textarea></label>
    <button type="submit">Send</button>
  </form>
  <p>Or reach me at:</p>
  <ul>
    <li>Email: benidict@example.com</li>
    <li>Phone: 0912-345-6789</li>
    <li>GitHub: <a href=\"https://github.com/yourusername\">yourusername</a></li>
  </ul>
</section>
<?php include 'footer.php'; ?>
