<?php 
include("includes/header.php");
include("db.php"); 

// Form submit handling
$success = "";
if(isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if($conn->query($sql) === TRUE){
        $success = "Your message has been sent successfully!";
    } else {
        $success = "Error: " . $conn->error;
    }
}
?>

<div class="page-header">Contact Us</div>

<section style="padding: 30px; text-align:center;">
    <h2>We’d Love to Hear From You</h2>
    <p style="max-width:800px; margin:auto; font-size:18px;">
        Have a question about our gallery or exhibitions? Reach out to us!
    </p>
</section>

<section class="card-grid">

    <!-- Contact Form -->
    <div class="card" style="flex:1;">
        <h3>Send a Message</h3>
        <?php if($success != "") { echo '<p style="color:green;">'.$success.'</p>'; } ?>
        <form method="POST" action="">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Your Name" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Your Email" required><br><br>

            <label for="message">Message</label><br>
            <textarea id="message" name="message" placeholder="Write your message..." rows="5" required></textarea><br><br>

            <button type="submit" name="submit">Send</button>
        </form>
    </div>

    <!-- Contact Info -->
    <div class="card" style="flex:1;">
        <h3>Get in Touch</h3>
        <p><b>📍 Address:</b> Art Gallery, Gwalior, Madhya Pradesh, India</p>
        <p><b>📞 Phone:</b> +91 98765 43210</p>
        <p><b>✉️ Email:</b> info@artgallery.com</p>
        <p><b>⏰ Timings:</b> Mon - Sat | 10:00 AM - 6:00 PM</p>
    </div>  

</section>

<?php include("includes/footer.php"); ?>
