<?php
    $page = "courses";
    $title = "Courses | Pentamedia Technologies | Training Institute";
    $description = "Pentamedia Technologies offers industry-focused courses in PHP, Python, Web Development, and other digital skills. Learn with hands-on training and boost your career in the IT industry.";
    $courses = [
        [
            "title" => "Digital Marketing",
            "img" => "images/courses/digital-marketing.jpg",
            "desc" => "Digital Marketing centers around the internet, which has become both a communication vehicle and a very powerful marketing medium."
        ],
        [
            "title" => "Graphic Design",
            "img" => "images/courses/graphic-design.jpg",
            "desc" => "Graphic Designers create visual concepts, using computer software or by hand, to communicate ideas that inspire, inform, and captivate consumers."
        ],
        [
            "title" => "AutoCAD",
            "img" => "images/courses/autocad.jpg",
            "desc" => "It is the most powerful & the most popular computer aided drafting Program. It can be used to Design & Draft projects with proper dimensions & scale."
        ],
        [
            "title" => "3D Studio Max",
            "img" => "images/courses/studio-max.jpg",
            "desc" => "It is the most powerful & the most popular. Architecture and Interior Modeling Rendering, Walk-through tools to give views your interior Special effects."
        ],
        [
            "title" => "REVIT",
            "img" => "images/courses/revit.jpg",
            "desc" => "Revit Architecture is a robust architectural design and documentation software application created by Autodesk for architects and building professionals."
        ],
        [
            "title" => "STAAD Pro",
            "img" => "images/courses/staad-pro.jpg",
            "desc" => "STAAD. Pro is a general purpose program for performing the analysis and design of a wide variety of types of structures."
        ],
        [
            "title" => "Primavera",
            "img" => "images/courses/primavera.jpg",
            "desc" => "Primavera is the most powerful, robust and easy to use solution for globally prioriting, planning, managing and executive projects, programs and portfolios."
        ],
        [
            "title" => "Creo Parametric",
            "img" => "images/courses/creo-parametric.jpg",
            "desc" => "Creo Parametric is a parametric, integrated 3D CAD/CAM/CAE solution."
        ],
        [
            "title" => "CATIA",
            "img" => "images/courses/catia.jpg",
            "desc" => "CATIA software is a complete multi-platform solution for computer-aided design, manufacturing, engineering, 3D and PLM."
        ],
        [
            "title" => "PPM",
            "img" => "images/courses/ppm.jpg",
            "desc" => "Projects and project management has become the foundation for success in the public and private sectors."
        ],
        [
            "title" => "Solid Works",
            "img" => "images/courses/solid-works.jpg",
            "desc" => "SOLIDWORKS is used to develop mechatronics systems from beginning to end."
        ],
        [
            "title" => "Project Management",
            "img" => "images/courses/project-management.jpg",
            "desc" => "The course helps nurture project managers to play pivotal role in the establishment of the scope of the project, and then oversee its progress until a successful delivery."
        ],
        [
            "title" => "Web Design & Development",
            "img" => "images/courses/web-development.jpg",
            "desc" => "In essence, web design refers to both the aesthetic portion of the website and it is usability. Web designers help transform your brand into a visual story."
        ],
        [
            "title" => "Programming With C & C++",
            "img" => "images/courses/c-cplus.jpg",
            "desc" => "C++ is a powerful general-purpose programming language. It can be used to develop operating systems, browsers, games, and so on."
        ],
        [
            "title" => "PHP",
            "img" => "images/courses/php.jpg",
            "desc" => "PHP is a popular general-purpose scripting language that is especially suited to web development."
        ],
        [
            "title" => ".NET",
            "img" => "images/courses/net.jpg",
            "desc" => ".Net is a free, cross-platform, open source developer platform for building many different types of applications."
        ],
        [
            "title" => "Mobile Application Development In JAVA",
            "img" => "images/courses/java.jpg",
            "desc" => "JAVA is considered as the official programming language for mobile app development. It is compatible with software such as Android Studio and Kotlin."
        ],
        [
            "title" => "Mobile Application Development In Android",
            "img" => "images/courses/android.jpg",
            "desc" => "Developing mobile applications for Android platform will give you access to a large and expanding market in a wide variety of devices."
        ],
        [
            "title" => "Python",
            "img" => "images/courses/python.jpg",
            "desc" => "Python is a programming language that lets you work quickly and integrate systems more effectively."
        ],
        [
            "title" => "Video Editing",
            "img" => "images/courses/video-editing.jpg",
            "desc" => "Video Editing is the process of manipulating video by rearranging different shots and scenes in order to create a whole new output."
        ],
    ];
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
                    <img src="images/courses/hero-banner.jpeg" alt="Courses Hero Banner">
                </div>
            </section>
            <!-- HERO SECTION END -->
            <!-- COURSES SECTION START -->
            <section id="courses">
                <div class="container">
                    <div class="row g-4">
                        <?php foreach($courses as $course){ ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="course-card">
                                <div class="course-img">
                                    <img src="<?php echo $course['img']; ?>" alt="<?php echo $course['title']; ?> Course">
                                </div>
                                <div class="course-content">
                                    <h3><?php echo $course['title']; ?></h3>
                                    <p><?php echo $course['desc']; ?></p>
                                    <a href="#" class="btn"><i class="fa-solid fa-book-open"></i>Start Learning</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- COURSES SECTION END -->
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>