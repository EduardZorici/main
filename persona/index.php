<?php
#initial declarations

$title = 'Eduard Zorici - Web Development Made Simple';
$description = 'Web development portfolio - Eduard Zorici - Full-stack Web Developer';
$page_type = 'homepage';
$link = '';

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
        <div class="container">
            <div class="independent-header-container">
                <div class="round-image profile-image"><img src="./assets/images/profile-picture.jpg" alt="Profile picture" /></div>
                <h2 class="independent-title">Eduard Zorici</h2>
            </div>
            <div class="card">
                <header class="card-header">
                    <small>You are here because you may want to know more about me,
                        then</small>
                    <h2 class="title">Greetings!</h2>
                </header>
                <div class="card-body d-grid">
                    <div class="card-image">
                        <img src="./assets/images/web-dev.svg" alt="Server Image" />
                    </div>
                    <div class="card-information">
                        <h1 class="title main-title">
                            Web development, Design and Search Engine Optimization at your
                            service!
                        </h1>
                        <p class="card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                            odio repellat velit aspernatur nisi porro unde amet quae autem,
                            error, provident quidem minima perferendis sequi. Recusandae at
                            ipsam corporis dolores consectetur neque minus quisquam rem
                            officia totam, possimus quia expedita dignissimos veniam
                            officiis, odio veritatis eius? Deleniti nisi reiciendis
                            nesciunt!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Management-area -->
    <section class="management-area">
        <div class="management-area-container container d-grid">
            <div class="card">
                <header class="card-header">
                    <h2 class="title">Sections you might be interested in:</h2>
                    <small>Satisfy your curiosity here.</small>
                </header>
                <div class="card-body">
                    <a href="<?= URL; ?>" class="card-body-link">
                        <i class="ri-award-fill"></i> My Skills
                    </a>
                    <a href="<?= URL; ?>" class="card-body-link">
                        <i class="ri-book-open-line"></i> My Story
                    </a>
                    <a href="<?= URL; ?>" class="card-body-link">
                        <i class="ri-dashboard-line"></i> My Projects
                    </a>
                    <a href="<?= URL; ?>" class="card-body-link">
                        <i class="ri-user-search-line"></i> My Resume
                    </a>
                </div>
            </div>
            <div class="card-group d-grid">
                <div class="card border-green">
                    <div>
                        <h2 class="title">Recent work I've done</h2>
                        <p class="card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Reprehenderit magni, rem, recusandae ad aperiam quod reiciendis.
                        </p>
                    </div>
                    <button class="list-link">Take me to the Gallery!</button>
                </div>
                <div class="card border-yellow">
                    <div class="icon-title">
                        <div class="github-icon">
                            <img src="./assets/images/social-media/github-white-large.png" alt="Github Repository Link" />
                        </div>
                        <h2 class="title github-title">GitHub Repository</h2>
                    </div>
                    <a href="<?= URL; ?>" class="regular-link centered" target="_blank">Take me to GitHub!</a>
                </div>
                <div class="card border-orange">
                    <h2 class="title social-title full-width">
                        Find me on social media
                    </h2>
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
                <div class="card border-pink">
                    <div>
                        <h2 class="title">
                            What are you waiting for? Get in touch with me!
                        </h2>
                        <?php include 'inc/quick-form.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'inc/footer.php';
    include 'inc/page-end.php'; ?>