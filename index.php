<?php
    $page = "home";
    $title = "Pentamedia Technologies | Training Institute";
    $description = "Pentamedia Technologies offers professional computer and digital courses including PHP, Python, Web Development, and more. Learn from experts and build a successful career in the IT industry.";
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
                    <img src="images/home/hero-banner.jpg" alt="Home Hero Banner">
                    <div class="hero-content">
                        <h1>Pentamedia Technologies</h1>
                        <p>Complete Training Solution</p>
                        <a href="contact.php" class="btn">
                            <i class="fa-solid fa-comment"></i></i>Enquire Now
                        </a>
                    </div>
                </div>
            </section>
            <!-- HERO SECTION END -->
            <!-- COURSES SECTION START -->
            <section id="courses">
                <div class="container">
                    <h2>COURSES</h2>
                    <div class="row g-3">
                        <div class="col-12 col-md">
                            <figure class="cards">
                                <img src="images/home/digital-marketing.jpg" alt="Digital Marketing Course">
                                <figcaption>
                                    <h3>Digital Marketing</h3>
                                    <p>Digital Marketing centers around the internet, which has become both a communication vehicle and a very powerful marketing medium.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md">
                            <figure class="cards">
                                <img src="images/home/graphic-design.jpg" alt="Graphic Design Course">
                                <figcaption>
                                    <h3>Graphic Design</h3>
                                    <p>Graphic Designers create visual concepts, using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-md">
                            <figure class="cards">
                                <img src="images/home/studio-max.jpg" alt="3D Studio Max Course">
                                <figcaption>
                                    <h3>3D Studio Max</h3>
                                    <p>It is the most powerful & the most popular. Architecture and Interior Modeling Rendering, Walk-through tools to give views your interior Special effects.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="courses.php" class="btn">
                            <i class="fa-solid fa-book"></i>Explore Courses
                        </a>
                    </div>
                </div>
            </section>
            <!-- COURSES SECTION END -->
            <!-- COUNTERS SECTION START -->
            <section id="counters">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md">
                            <h3><span class="counter" data-count="5000">0</span>+</h3>
                            <div class="divider"></div>
                            <p>Happy Students</p>
                        </div>
                        <div class="col-12 col-md">
                            <h3><span class="counter" data-count="20">0</span>+</h3>
                            <div class="divider"></div>
                            <p>Courses</p>
                        </div>
                        <div class="col-12 col-md">
                            <h3><span class="counter" data-count="21">0</span>+</h3>
                            <div class="divider"></div>
                            <p>Years Experience</p>
                        </div>
                        <div class="col-12 col-md">
                            <h3><span class="counter" data-count="5000">0</span>+</h3>
                            <div class="divider"></div>
                            <p>Certificates</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- COUNTERS SECTION END -->
            <!-- ABOUT SECTION START -->
            <section id="about">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-12 col-md">
                            <img src="images/home/about-section.jpg" alt="About Pentamedia Technologies">
                        </div>
                        <div class="col-12 col-md">
                            <div class="about-content">
                                <h2>ABOUT US</h2>
                                <p>Pentamedia Technologies has very strong links with the industry and continues to receive generous support from various organizations that proves to be of immense value in arranging Inter views to the students.</p>
                            </div>
                            <div class="about-toggle">
                                <div class="toggle-item">
                                    <button class="toggle-btn">Our History<i class="fa-solid fa-chevron-down"></i></button>
                                    <div class="toggle-body">
                                        <p>We are in the IT Trainings since 1999 with an experience of 21+ years. We taught almost 50,000+ students in this time period.We have best faculty with an experience of almost 10+ years.</p>
                                    </div>
                                </div>
                                <div class="toggle-item">
                                    <button class="toggle-btn">Our Vision<i class="fa-solid fa-chevron-down"></i></button>
                                    <div class="toggle-body">
                                        <p>To develop a Long Lasting IT/CS Professional cadre Training Hub with Varied spectrum of Technological & Skill Development Program with Excellent Network Globally.</p>
                                    </div>
                                </div>
                                <div class="toggle-item">
                                    <button class="toggle-btn">Our Mission<i class="fa-solid fa-chevron-down"></i></button>
                                    <div class="toggle-body">
                                        <p>To be leading Organization in training Professional and computer aided Skills in various aspects of designing & create Internationally Acclaimed & Quality Proficient Budding IT/CS Talents.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ABOUT SECTION END -->
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>