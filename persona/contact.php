<?php
#initial declarations

$title = 'Eduard Zorici - Web Development Made Simple';
$description = 'Web development portfolio - Eduard Zorici - Full-stack Web Developer';
$page_type = 'article';
$link = 'about';

include('inc/config.php');
include('inc/page-start.php');
?>

<body>
    <!-- Floating-background-image -->
    <div class="floating-background-image">
        <img src="./assets/images/dash-orange-mid-res.jpg" alt="Dash" />
    </div>
    <!-- Header -->
    <?php include('inc/menu.php'); ?>
    <!-- Welcome-message -->
    <section class="welcome-message">
        <div class="container header-gap">
            <div class="card">
                <header class="card-header">
                    <small>Ioan Eduard Zorici &bull; 26 years old &bull; Web Developer &bull; Cluj-Napoca, Romania</small>
                </header>
                <div class="card-body">
                    <div class="card-information">
                        <h1 class="title main-title">
                            Get in touch with me!
                        </h1>

                        <?php include 'inc/quick-form.php'; ?>

                        <br />
                        <div class="wide-social-container">
                            <div class="icon-container">
                                <a href="<?= URL; ?>" class="social-link" target="_blank"><img class="social-link-img" src="./assets/images/social-media/facebook-color-large.png" alt="Social Media Link" />
                                    <p class="social-link-description">/eddy.zorici</p>
                                </a>
                                <a href="<?= URL; ?>" class="social-link" target="_blank"><img class="social-link-img" src="./assets/images/social-media/insta.png" alt="Social Media Link" />
                                    <p class="social-link-description">/eduard.zorici</p>
                                </a>
                                <a href="<?= URL; ?>" class="social-link" target="_blank"><img class="social-link-img" src="./assets/images/social-media/linkedin-color-large.png" alt="Social Media Link" />
                                    <p class="social-link-description">/eduardzz</p>
                                </a>
                                <a href="<?= URL; ?>" class="social-link" target="_blank"><img class="social-link-img" src="./assets/images/social-media/yt.png" alt="Social Media Link" />
                                    <p class="social-link-description">Eduard Zorici</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'inc/footer.php';
    include 'inc/page-end.php'; ?>