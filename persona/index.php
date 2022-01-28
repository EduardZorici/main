<?php
#initial declarations

$title = 'Eduard Zorici - Web Development Made Simple';
$description = 'Web development portfolio - Eduard Zorici - Full-stack Web Developer';
$page_type = 'homepage';

include('inc/config.php');
include('inc/page-start.php');
?>

<body>
    <!-- Floating-background-image -->
    <div class="floating-background-image">
        <img src="./assets/images/dash-orange-mid-res.jpg" alt="Dash" />
    </div>
    <!-- Header -->
    <header class="header">
        <nav class="nav container">
            <a href="<?= URL; ?>" class="logo">Weby</a>
            <div class="nav-mobile">
                <ul class="list">
                    <li class="list-item">
                        <a href="<?= URL; ?>" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="<?= URL; ?>" class="list-link">About</a>
                    </li>
                    <li class="list-item dropdown">
                        <button class="list-link dropdown-btn place-items-center">
                            My work <i class="ri-arrow-drop-right-line"></i>
                        </button>
                        <ul class="list dropdown-menu">
                            <li class="list-item">
                                <a href="<?= URL; ?>" class="list-link">GitHub</a>
                            </li>
                            <li class="list-item">
                                <a href="<?= URL; ?>" class="list-link">Projects</a>
                            </li>
                            <li class="list-item">
                                <a href="<?= URL; ?>" class="list-link">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="<?= URL; ?>" class="list-link">Contact me!</a>
                    </li>
                </ul>
                <button class="icon-btn menu-toggle-btn menu-toggle-close place-items-center">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="align-right">
                <button class="icon-btn menu-toggle-btn menu-toggle-open place-items-center">
                    <i class="ri-function-line"></i>
                </button>
                <div class="icon-separator-toggler"></div>
                <button class="icon-btn theme-toggle-btn place-items-center">
                    <i class="ri-sun-line theme-light-icon"></i>
                    <i class="ri-moon-line theme-dark-icon"></i>
                </button>
                <div class="icon-separator"></div>
                <button class="icon-btn user-account-icon place-items-center">
                    <i class="ri-user-3-line"></i>
                </button>
            </div>
        </nav>
    </header>
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
                    <div>
                        <h2 class="title">Take a look on my GitHub</h2>
                    </div>
                    <button class="list-link">Show me!</button>
                </div>
                <div class="card border-orange">
                    <div>
                        <h2 class="title">Find me on social media</h2>
                    </div>
                    <button class="list-link">Social Media</button>
                </div>
                <div class="card border-pink">
                    <div>
                        <h2 class="title">
                            What are you waiting for? Get in touch with me!
                        </h2>
                        <?php include 'inc/quick-form.php'; ?>
                    </div>
                    <button class="list-link">
                        Send by PED<span class="star">*</span>!
                    </button>
                    <small><span class="star">*</span>PED - Acronym for Pigeon Express
                        Delivery</small>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container container">
            <span class="copyright-information">&copy; Eduard Zorici 2022. All rights reserved.</span>
            <ul class="list">
                <li class="list-item">
                    <a href="<?= URL; ?>" class="list-link">About</a>
                </li>
                <li class="list-item">
                    <a href="<?= URL; ?>" class="list-link">Contact</a>
                </li>
                <li class="list-item">
                    <a href="<?= URL; ?>" class="list-link">Terms and conditions</a>
                </li>
                <li class="list-item">
                    <a href="<?= URL; ?>" class="list-link">Privacy Policy</a>
                </li>
            </ul>
        </div>
    </footer>
    <?php include 'inc/page-end.php'; ?>