<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/tribe-assets/css/tribe-style.css'?>">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
   
<!-- <script type="text/javascript" src="<?php //echo get_stylesheet_directory_uri() . '/tribe-assets/js/tribe-script.js'?>">
</script> -->
<body class="tribe-dash">
    <div class="tribe-wholepage">
        <a href="<?php echo get_site_url().'/dashboard'; ?>" class="logo-link">
            <figure class="main-logo">
                <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>aslogo.png" alt="assets/images">
            </figure>
        </a>
        <div class="header-container">
            <header id="header">

                <div class="top-text">
                    <h1>TRIBE DASHBOARD</h1>
                </div>
                <label class="search-bar">
                    <input type="text" name="post-search" id="post-search" placeholder="SEARCH FOR ITEMS AND INSPIRATION">
                    <i class="fa fa-search"></i>
                    <div id="post-livesearch">
                    </div>
                </label>
            </header>