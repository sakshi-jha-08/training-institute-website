<?php
    $page = "contact";
    $title = "Contact Us | Pentamedia Technologies | Training Institute";
    $description = "Contact Pentamedia Technologies for admissions, course details, and career guidance in IT and digital skills.";
    require 'config/connection.php';
    $courses_query = mysqli_query($conn, "SELECT * FROM courses");
?>
<!DOCTYPE html>
<html lang="en">
    <head><?php include 'includes/head.php'; ?></head>
    <body>
        <?php include 'includes/header.php'; ?>
        <main>
            <!-- HERO SECTION START -->
            <section id="hero">
                <div class="container-fluid p-0">
                    <img src="images/contact/hero-banner.jpg" alt="Contact Hero Banner">
                    <div class="hero-content">
                        <h1>Get in Touch</h1>
                    </div>
                </div>
            </section>
            <!-- HERO SECTION END -->
             <!-- POP-UP SECTION START -->
            <?php if(isset($_GET['status'])): ?>
                <div class="popup-message <?php echo $_GET['status']; ?>">
                    <?php
                        if($_GET['status'] == 'success'){
                            echo "Your enquiry has been submitted successfully!";
                        } else {
                            echo "Something went wrong. Please try again!";
                        }
                    ?>
                </div>
            <?php endif; ?>
            <!-- POP-UP SECTION END -->
            <!-- CONTACT-US SECTION START -->
            <section id="contact-us">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-12 col-md-5 order-2 order-md-1">
                            <h2>Reach Us</h2>
                            <div class="contact-info">
                                <div class="info-item">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div>
                                        <h3>Our Location</h3>
                                        <p>Kota, Rajasthan - 324006, India</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <i class="fa-solid fa-phone"></i>
                                    <div>
                                        <h3>Phone Number</h3>
                                        <p>+916378376904</p>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <i class="fa-solid fa-envelope"></i>
                                    <div>
                                        <h3>Email Address</h3>
                                        <p>08.jhasakshi@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 order-1 order-md-2">
                            <h2>Enquire Now</h2>
                            <div class="contact-form">
                                <form method="POST" action="backend/insert-contact.php" class="form-grid">
                                    <div class="form-group">
                                        <label for="name">Your Name <span>*</span></label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email <span>*</span></label>
                                        <input type="email" id="email" name="email" autocomplete="email" placeholder="Enter your email" required aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Your Contact <span>*</span></label>
                                        <input type="tel" inputmode="numeric" id="contact" name="contact" placeholder="Enter your number" pattern="[0-9]{10}" maxlength="10" required aria-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="course">Select Course <span>*</span></label>
                                        <select id="course" name="course" required aria-required="true">
                                            <option value="">Select a course</option>
                                            <?php while($row = mysqli_fetch_assoc($courses_query)) { ?>
                                                <option value="<?php echo $row['course_name']; ?>">
                                                    <?php echo $row['course_name']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group full-width">
                                        <label for="message">Your Query</label>
                                        <textarea id="message" name="message" placeholder="Ask anything about courses"></textarea>
                                    </div>
                                    <div class="full-width">
                                        <button type="submit">
                                            <i class="fa-solid fa-paper-plane"></i>Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CONTACT-US SECTION END -->
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>