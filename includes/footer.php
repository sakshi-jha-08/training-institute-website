<!-- FOOTER SECTION START -->
<footer>
    <!-- FOOTER BANNER START -->
    <section id="footer-banner">
        <div class="container-fluid p-0">
            <img src="images/footer.jpg" alt="Footer Banner">
            <div class="footer-tagline">
                <h4>YOUR FUTURE STARTS HERE</h4>
                <a href="contact.php" class="btn">
                    <i class="fa-solid fa-comment"></i>Enquire Now
                </a>
            </div>
        </div>
    </section>
    <!-- FOOTER BANNER END -->
    <!-- FOOTER MAIN START -->
    <section id="footer-main">
        <div class="container">
            <div class="row g-3 text-center">
                <div class="col-12 col-md-4">
                    <h5>Pentamedia Technologies</h5>
                    <p>Complete Training Solution</p>
                </div>
                <div class="col-12 col-md-4">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php" class="<?php if($page=='home') echo 'active'; ?>">Home</a></li>
                        <li><a href="about.php" class="<?php if($page=='about') echo 'active'; ?>">About Us</a></li>
                        <li><a href="courses.php" class="<?php if($page=='courses') echo 'active'; ?>">Courses</a></li>
                        <li><a href="contact.php" class="<?php if($page=='contact') echo 'active'; ?>">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h5>Contact Us</h5>
                    <p><i class="fa-solid fa-location-dot"></i>Kota, Rajasthan - 324006, India</p>
                    <p><i class="fa-solid fa-phone"></i>+916378376904</p>
                    <p><i class="fa-solid fa-envelope"></i>08.jhasakshi@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER MAIN END -->
    <!-- FOOTER BOTTOM START -->
    <section id="footer-bottom">
        <div class="container text-center">
            <p>© 2026 Designed by Sakshi Jha | Web Developer</p>
        </div>
    </section>
    <!-- FOOTER BOTTOM END -->
</footer>
<!-- FOOTER SECTION END -->

<!-- Bootstrap JS (Bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Common JS -->
<script src="js/main.js" defer></script>

<!-- Custom Page Specific JS (only if exists) -->
<?php if(isset($page) && file_exists("js/$page.js")): ?>
<script src="js/<?php echo $page; ?>.js" defer></script>
<?php endif; ?>