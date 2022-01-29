<header class="header">
    <nav class="nav container">
        <a href="<?= URL; ?>" class="logo">Weby</a>
        <div class="nav-mobile">
            <ul class="list">
                <li class="list-item">
                    <a href="<?= URL; ?>" class="list-link current">Home</a>
                </li>
                <li class="list-item">
                    <a href="<?= URL; ?>about" class="list-link">About</a>
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