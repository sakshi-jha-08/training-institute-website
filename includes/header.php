<!-- HEADER SECTION START -->
<header>
    <div class="container">
        <div class="header-wrapper">
            <!-- Logo -->
            <div class="logo"><img src="images/header-logo.png" alt="Pentamedia Technologies Logo"></div>
            <!-- Tagline -->
            <div class="tagline">TRAINING THAT YOU CAN TRUST</div>
            <!-- Toggle Button (Mobile) -->
            <div class="menu-toggle"><button type="button"><i class="fa-solid fa-bars"></i></button></div>
            <!-- Navigation -->
            <nav id="navbar">
                <ul>
                    <li><a class="<?php if($page=='home') echo 'active'; ?>" href="index.php">HOME</a></li>
                    <li><a class="<?php if($page=='about') echo 'active'; ?>" href="about.php">ABOUT US</a></li>
                    <li><a class="<?php if($page=='courses') echo 'active'; ?>" href="courses.php">COURSES</a></li>
                    <li><a class="<?php if($page=='contact') echo 'active'; ?>" href="contact.php">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->