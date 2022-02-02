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
                            Here you can find more information about me!
                        </h1>
                        <p class="card-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                            odio repellat velit aspernatur nisi porro unde amet quae autem,
                            error, provident quidem minima perferendis sequi. Recusandae at
                            ipsam corporis dolores consectetur neque minus quisquam rem
                            officia totam, possimus quia expedita dignissimos veniam
                            officiis, odio veritatis eius? Deleniti nisi reiciendis
                            nesciunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <br />
                        <h2 class="title">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit
                        </h2>

                        <p class="card-description"> Deserunt beatae natus unde omnis dolorem tenetur vel vero dolor accusantium esse, dolores optio hic repellat architecto, perspiciatis eius nemo aliquid cupiditate necessitatibus quidem laboriosam quas vitae. Autem quidem sit commodi animi aut. Neque ut rerum rem voluptate dolore. Porro, sit id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatem velit molestias deleniti, sequi officia iure consequuntur similique cupiditate fuga voluptatum iste laboriosam blanditiis? Molestias numquam, quam architecto, possimus, rerum vitae commodi assumenda incidunt est consequatur doloribus. Saepe aliquam reiciendis fugiat beatae quam, dicta nisi ducimus quisquam, iure sit veniam repellat eaque.</p>
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
                    <div class="icon-title">
                        <div class="github-icon">
                            <img src="./assets/images/social-media/github-white-large.png" alt="Github Repository Link" />
                        </div>
                        <h2 class="title github-title">GitHub Repository</h2>
                    </div>
                    <a href="<?= URL; ?>" class="regular-link centered" target="_blank">Take me to GitHub!</a>
                    <br />
                    <hr />
                    <br />
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
            </div>
            <div class="d-grid">
                <div class="card">
                    <div class="card-body">
                        <div class="card-information">
                            <h2 class="title">
                                Recusandae at ipsam corporis dolores!
                            </h2>
                            <p class="card-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                                odio repellat velit aspernatur nisi porro unde amet quae autem,
                                error, provident quidem minima perferendis sequi. Recusandae at
                                ipsam corporis dolores consectetur neque minus quisquam rem
                                officia totam, possimus quia expedita dignissimos veniam
                                officiis, odio veritatis eius? Deleniti nisi reiciendis
                                nesciunt!</p>
                            <br />

                            <h3 class="title">
                                Lorem ipsum, dolor sit amet
                            </h3>

                            <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt beatae natus unde omnis dolorem tenetur vel vero dolor accusantium esse, dolores optio hic repellat architecto, perspiciatis eius nemo aliquid cupiditate necessitatibus quidem laboriosam quas vitae. Autem quidem sit commodi animi aut. Neque ut rerum rem voluptate dolore. Porro, sit id.</p>
                            <br />
                            <h3 class="title">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit
                            </h3>
                            <p class="card-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At fugit alias distinctio ex, iste maxime soluta, vitae quaerat, neque nam ducimus nulla quod ipsam? Doloribus necessitatibus nemo cupiditate modi quasi minus quae atque voluptatum optio sit, corrupti in quas quidem, laboriosam numquam laborum, maxime ratione iure. Vero debitis soluta itaque!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
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