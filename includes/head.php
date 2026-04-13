<!-- Basic Setup -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title><?php echo $title; ?></title>

<!-- SEO Meta Tags -->
<meta name="description" content="<?php echo $description; ?>">
<meta name="author" content="Sakshi Jha">
<meta name="robots" content="index, follow">

<!-- Canonical (SEO Clarity) -->
<link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

<!-- Open Graph (Social Sharing) -->
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/images/favicon.png">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

<!-- Theme + Icons -->
<meta name="theme-color" content="#EDE8D0">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.png">

<!-- Performance Optimization -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Fonts -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

<!-- CSS Libraries -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- Custom Common CSS -->
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">

<!-- Custom Page Specific CSS -->
<link rel="stylesheet" href="css/<?php echo $page; ?>.css">